<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gaji extends Model
{
    use HasFactory;

	protected $table = 'gaji';

	protected $fillable = [];

	public function karyawan(): BelongsTo {
		return $this->belongsTo(Karyawan::class);
	}
}
