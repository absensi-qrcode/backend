<?php

namespace App\Http\Requests;

use App\Models\User;
use App\Models\Divisi;
use App\Models\JenisGaji;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreKaryawanRequest extends FormRequest
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
        return [
			'divisiId' 		=> ['integer', 'between:1,'. Divisi::count()],
            'jenisGajiId'	=> ['required', 'integer', 'between:1,'. JenisGaji::count()],
            'userId'		=> ['required', 'integer', 'between:1,'. User::count()],
            'nik'			=> ['digits:16', 'unique:karyawan,nik'],
            'kelamin'		=> [Rule::in('l', 'p')],
            'tanggaLahir'	=> ['date', 'nullable'],
            'alamat'		=> ['string', 'nullable'],
            'nomorTelepon'	=> ['max_digits:20'],
            'nomorDarurat'	=> ['max_digits:20'],
        ];
    }
	
    protected function prepareForValidation() {
		$this->merge([
            'divisi_id' 	=> $this->divisiId,
            'jenis_gaji_id' => $this->jenisGajiId,
            'tanggal_lahir'	=> $this->tanggalLahir,
            'user_id'		=> $this->userId,
        ]);
    }
}
