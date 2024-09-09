<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\Divisi;
use App\Models\JenisGaji;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateKaryawanRequest extends FormRequest
{
	/**
	 * Determine if the user is authorized to make this request.
	 */
	public function authorize(): bool
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	 */
	public function rules(): array
	{
		$method = $this->method();
		if ($method === 'PUT') {
			return [
				'divisi_id' 	=> ['integer', 'between:1,' . Divisi::count()],
				'jenis_gaji_id' => ['required', 'integer', 'between:1,' . JenisGaji::count()],
				'user_id' 		=> ['required', 'integer', 'between:1,' . User::count()],
				'nik' 			=> ['digits:16', 'unique:karyawan,nik'],
				'kelamin' 		=> [Rule::in('l', 'p')],
				'tanggal_lahir' => ['date', 'nullable'],
				'alamat' 		=> ['string', 'nullable'],
				'nomor_telepon' => ['max_digits:20'],
				'nomor_darurat' => ['max_digits:20'],
			];
		}
		else {
			return [
				'divisi_id' 	=> ['sometimes', 'integer', 'between:1,' . Divisi::count()],
				'jenis_gaji_id' 	=> ['sometimes', 'required', 'integer', 'between:1,' . JenisGaji::count()],
				'user_id' 		=> ['sometimes', 'required', 'integer', 'between:1,' . User::count()],
				'nik' 			=> ['sometimes', 'digits:16', 'unique:karyawan,nik'],
				'kelamin' 		=> [Rule::in('l', 'p')],
				'tanggal_lahir' => ['sometimes', 'date', 'nullable'],
				'alamat' 		=> ['sometimes', 'string', 'nullable'],
				'nomor_telepon' => ['sometimes', 'max_digits:20'],
				'nomor_darurat' => ['sometimes', 'max_digits:20'],
			];
		}
	}

	protected function prepareForValidation()
	{
		$data = [];

        if ($this->has('divisiId')) {
            $data['divisi_id'] = $this->divisiId;
        }

        if ($this->has('jenisGajiId')) {
            $data['jenis_gaji_id'] = $this->jenisGajiId;
        }

        if ($this->has('tanggalLahir')) {
            $data['tanggal_lahir'] = $this->tanggalLahir;
        }

        if ($this->has('userId')) {
            $data['user_id'] = $this->userId;
        }

        $this->merge($data);
	}
}
