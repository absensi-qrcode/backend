<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class JamKerja extends Model
{
    use HasFactory;


	protected $table = 'jam_kerja';

	protected $fillable = [];
	
	public function kehadiran(): HasMany {
		return $this->hasMany(Kehadiran::class);
	}
}
