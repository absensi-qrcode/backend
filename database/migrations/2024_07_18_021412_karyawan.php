<?php

use GuzzleHttp\Promise\Create;
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
        Schema::create('karyawan', function (Blueprint $table) {
			$table->id();
			$table->foreignId('divisi_id')->nullable();
			$table->foreignId('jenis_gaji_id');
			$table->foreignId('user_id');
			$table->string('nik', 16)->unique();
			$table->enum('kelamin', ['l', 'p']);
			$table->date('tanggal_lahir');
			$table->string('alamat')->nullable();
			$table->string('nomor_telepon', 20)->unique()->nullable();
			$table->string('nomor_darurat', 20)->unique()->nullable();
			
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('karyawan');
    }
};
