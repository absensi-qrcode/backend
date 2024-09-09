<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perusahaan>
 */
class PerusahaanFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'nama' 	 			=> fake()->company(),
			'alamat' 			=> fake()->address(),
			'nomor_telepon' 	=> fake()->phoneNumber(),
			'email' 			=> fake()->companyEmail(),
		];
	}
}
