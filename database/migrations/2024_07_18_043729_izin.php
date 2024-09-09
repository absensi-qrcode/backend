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
        Schema::create('izin', function (Blueprint $table) {
			$table->id();
			$table->foreignId('karyawan_id');
			$table->enum('jenis', ['cuti', 'sakit', 'absen']);
			$table->date('tanggal');
			$table->text('text');
			$table->binary('persetujuaan');

			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('izin');
    }
};
