<?php

namespace Database\Factories;

use App\Models\JamKerja;
use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kehadiran>
 */
class KehadiranFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		$jamSelsai = fake()->time();
		return [
			'karyawan_id'   => fake()->numberBetween(1, Karyawan::count()),
			'jam_kerja_id'  => fake()->numberBetween(1, JamKerja::count()),
			'jam_mulai'     => fake()->time('H:i:s', $jamSelsai),
			'jam_selsai'    => fake()->time(),
		];
	}
}
