<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('jenis_gaji', function (Blueprint $table) {
			$table->id();
			$table->string('nama', 255)->unique();
			$table->decimal('gaji_pokok', 12, 0);
			$table->decimal('potongan', 12, 0);
			
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::drop('jenis_gaji');
	}
};
