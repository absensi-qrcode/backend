<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KaryawanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
			'id' 	  	  	=> $this->id,
			'divisiId' 	  	=> $this->divisi_id,
			'divisiNama' 	=> optional($this->divisi)->nama,
			'jenisGajiNama' => $this->jenisGaji->nama,
			'nama' 	  		=> $this->users->name,
			'email' 	  	=> $this->users->email,
			'userId' 	  	=> $this->user_id,
			'nik' 		  	=> $this->nik,
			'kelamin' 	  	=> $this->kelamin,
			'tanggalLahir' 	=> $this->tanggal_lahir,
			'alamat' 	  	=> $this->alamat,
			'nomorTelp' 	=> $this->nomor_telepon,
			'nomorDarurat'	=> $this->nomor_darurat,
		];
    }
}
