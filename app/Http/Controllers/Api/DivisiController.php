<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Divisi;
use App\Http\Resources\DivisiResource;
use App\Http\Resources\DivisiCollection;
use App\Http\Requests\UpdateDivisiRequest;
use App\Http\Requests\StoreDivisiRequest;
use App\Http\Controllers\Controller;
use App\Filters\DivisiFilter;

class DivisiController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request)
	{
		$filter 	 = new DivisiFilter();
		$filterItems = $filter->transform($request);
		$query 		 = Divisi::query();

		$completeQuery = $this->completeWhere($query, $filterItems);

		return new DivisiCollection($completeQuery->get());
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreDivisiRequest $request)
	{	
		try {
			$data = new DivisiResource(Divisi::create($request->all()));
			return response()->json([
				'data' 		=> $data,
				'message' 	=> 'Divisi berhasil di tambah',
				'status'	=> 'Success'
			], 201);
		} catch (\Exception $e) {
			\Log::error('Error membuat Divisi: ' . $e->getMessage());

			return response()->json([
				'message'	=> 'Gagal membuat divisi',
				'status'	=> 'Fail'
			], 500);
		}
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Divisi $divisi)
	{
		return new DivisiResource($divisi);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateDivisiRequest $request, Divisi $divisi)
	{
		try {
			$divisi->update($request->all());
			$data = new DivisiResource($divisi);

			return response()->json([
				'data' 		=> $data,
				'message'	=> 'Berhasil mengupdate divisi'
			], 200);

		} catch (\Exception $e) {
			\Log::error('Error updating Divisi: ' . $e->getMessage());

			return response()->json([
				'message' => 'Terjadi kesalahan saat mengupdate divisi.'
			], 500);
		}
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Divisi $divisi)
	{
		try {
			$divisi->delete();

			return response()->json([
				'message' => 'Berhasil menghapus divisi.'
			], 200);

		} catch (\Exception $e) {
			\Log::error('Error deleting Divisi: ' . $e->getMessage());

			return response()->json([
				'message' => 'Terjadi kesalahan saat menghapus divisi.'
			], 500);
		}
	}
}
