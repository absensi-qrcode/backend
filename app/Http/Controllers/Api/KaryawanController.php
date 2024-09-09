<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Karyawan;
use App\Http\Resources\KaryawanResource;
use App\Http\Resources\KaryawanCollection;
use App\Http\Requests\UpdateKaryawanRequest;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Controllers\Controller;
use App\Filters\KaryawanFilter;

class KaryawanController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index(Request $request)
	{
		$filter 		= new KaryawanFilter();
		$filterItems 	= $filter->transform($request);
		$query 		 	= Karyawan::query();

		$completeQuery = $this->completeWhere($query, $filterItems);

		return new KaryawanCollection($completeQuery->cursorPaginate(5)->withQueryString());
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(StoreKaryawanRequest $request)
	{
		try {
			$data = new KaryawanResource(Karyawan::create($request->all()));
			return response()->json([
				'data' 		=> $data,
				'message' 	=> 'Karyawan berhasil di tambah',
				'status'	=> 'Success'
			], 201);
		} catch (\Exception $e) {
			\Log::error('Error membuat Karyawan: ' . $e->getMessage());

			return response()->json([
				'message'	=> 'Gagal membuat karyawan',
				'status'	=> 'Fail'
			], 500);
		}
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Karyawan $karyawan)
	{
		return new KaryawanResource($karyawan);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(UpdateKaryawanRequest $request, Karyawan $karyawan)
	{
		try {
			$karyawan->update($request->all());
			$data = new KaryawanResource($karyawan);

			return response()->json([
				'data' 		=>  $data,
				'message'	=> 'Berhasil mengupdate karyawan'
			], 200);

		} catch (\Exception $e) {
			\Log::error('Error updating Karyawan: ' . $e->getMessage());

			return response()->json([
				'message' => 'Terjadi kesalahan saat mengupdate karyawan.'
			], 500);
		}
	}
	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Karyawan $karyawan)
	{
		try {
			$karyawan->delete();

			return response()->json([
				'message' => 'Berhasil menghapus karyawan.'
			], 200);

		} catch (\Exception $e) {
			\Log::error('Error deleting Karyawan: ' . $e->getMessage());

			return response()->json([
				'message' => 'Terjadi kesalahan saat menghapus karyawan.'
			], 500);
		}
	}
}
