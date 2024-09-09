<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JamKerja>
 */
class JamKerjaFactory extends Factory
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
			'nama' 		 	=> fake()->unique()->md5(),
			'jam_mulai'   	=> fake()->time('H:i:s', $jamSelsai),
			'jam_selsai'  	=> fake()->time(),
		];
	}
}
