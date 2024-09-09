<?php

namespace App\Filters;

class KaryawanFilter extends Filter
{
	protected $allowParameter = [
		'divisi' 		=> ['eq'],
		'jenisGaji' 	=> ['eq'],
		'kelamin' 		=> ['eq'],
		'tanggalLahir' 	=> ['lt', 'gt', 'eq'],
		'nama' 			=> ['like'],
	];

	protected $columnMap = [
		'divisi' 		=> 'divisi_id',
		'jenisGaji' 	=> 'jenis_gaji_id',
		'tanggalLahir' 	=> 'tanggal_lahir',
		'nama' 			=> 'users.name'
	];

}