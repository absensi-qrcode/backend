<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Karyawan extends Model
{
    use HasFactory;

	protected $table = 'karyawan';

	protected $fillable = [
		'divisi_id',
		'jenis_gaji_id',
		'user_id',
		'nik',
		'tanggal_lahir',
		'alamat',
		'nomor_telepon',
		'nomor_darurat'
	];

	public function divisi(): BelongsTo 
	{
		return $this->belongsTo(Divisi::class);
	}

	public function jenisGaji(): BelongsTo 
	{
		return $this->belongsTo(JenisGaji::class);
	}

	public function users(): BelongsTo {
		return $this->belongsTo(User::class, 'user_id');
	}

	public function izin(): HasMany {
		return $this->hasMany(Izin::class);
	}

	public function gaji(): HasMany {
		return $this->hasMany(Gaji::class);
	}

}
