<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Divisi;
use App\Models\JenisGaji;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Karyawan>
 */
class KaryawanFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'divisi_id' 	=> fake()->randomElement([null, fake()->numberBetween(1, Divisi::count())]),
			'jenis_gaji_id' => fake()->numberBetween(1, JenisGaji::count()),
			'user_id' 		=> fake()->unique()->numberBetween(1, User::count()),
			'nik' 			=> fake()->unique()->nik(),
			'kelamin' 		=> fake()->randomElement(['l', 'p']),
			'tanggal_lahir' => fake()->date(),
			'alamat' 		=> fake()->randomElement([null, fake()->address()]),
			'nomor_telepon' => fake()->randomElement([null, fake()->unique()->phoneNumber()]),
			'nomor_darurat' => fake()->randomElement([null, fake()->unique()->phoneNumber()]),
		];
	}
}
