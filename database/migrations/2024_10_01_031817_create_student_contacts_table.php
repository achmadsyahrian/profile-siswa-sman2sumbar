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
        Schema::create('student_contacts', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Foreign key untuk tabel students
            $table->text('address')->nullable(); // Alamat
            $table->string('rt', 10)->nullable(); // RT
            $table->string('rw', 10)->nullable(); // RW
            $table->string('dusun')->nullable(); // Dusun
            $table->string('kelurahan')->nullable(); // Kelurahan
            $table->string('kecamatan')->nullable(); // Kecamatan
            $table->string('postal_code', 10)->nullable(); // Kode Pos
            $table->string('living_type')->nullable(); // Jenis Tinggal
            $table->string('transportation')->nullable(); // Alat Transportasi
            $table->string('phone', 15)->nullable(); // Telepon
            $table->string('mobile', 15)->nullable(); // HP
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_contacts');
    }
};
