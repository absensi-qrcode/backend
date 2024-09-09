<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JenisGaji extends Model
{
    use HasFactory;

	protected $table = 'jenis_gaji';

	protected $fillable = [];

	public function karyawan(): HasMany {
		return $this->hasMany(Karyawan::class);
	}
}
