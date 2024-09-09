<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kehadiran', function (Blueprint $table) {
			$table->id();
			$table->foreignId('karyawan_id');
			$table->foreignId('jam_kerja_id');
			$table->time('jam_mulai');
			$table->time('jam_selesai');
			
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('kehadiran');
    }
};
