<?php

namespace Database\Seeders;

use App\Models\Divisi;
use App\Models\JenisGaji;
use App\Models\Karyawan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(50)->create();
		Divisi::factory(5)->create();
		JenisGaji::factory(5)->create();
		Karyawan::factory(50)->create();
    }
}
