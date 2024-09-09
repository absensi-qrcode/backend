<?php

namespace Database\Factories;

use App\Models\Karyawan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gaji>
 */
class GajiFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'karyawan_id' 	=> fake()->unique()->numberBetween(1, Karyawan::count()),
			'nilai' 	 	=> fake()->numberBetween('##########', '###########'),
			'tanggal_car' 	=> fake()->date(), 
		];
	}
}
