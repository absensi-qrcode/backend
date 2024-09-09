<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Izin>
 */
class IzinFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'karyawan_id'	=> fake()->numberBetween(1, Karyawan::count()),
			'jenis'			=> fake()->randomElement(['cuti', 'sakit', 'absen']),
			'tanggal'		=> fake()->date(),
			'text'			=> fake()->sentences(),
			'persetujuaan'	=> fake()->boolean(),
		];
	}
}
