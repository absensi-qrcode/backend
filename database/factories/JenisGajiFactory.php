<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\jenisGaji>
 */
class JenisGajiFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'nama' 			=> fake()->unique()->countryCode(),
			'gaji_pokok'	=> fake()->numerify('######'),
			'potongan'		=> fake()->numerify('###'),
		];
	}
}
