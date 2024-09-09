<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Kehadiran extends Model
{
    use HasFactory;

	protected $table = 'kehadiran';

	protected $fillable = [];
	
	public function jamKerja(): BelongsTo {
		return $this->belongsTo(JamKerja::class);
	}

	public function karyawan(): BelongsTo {
		return $this->belongsTo(Karyawan::class);
	}
}
