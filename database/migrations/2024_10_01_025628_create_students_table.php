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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key untuk tabel users
            $table->string('name'); // Nama
            $table->string('nipd', 20)->nullable(); // NIPD
            $table->string('nisn', 20)->nullable(); // NISN
            $table->enum('gender', ['L', 'P']); // Jenis Kelamin
            $table->string('place_of_birth')->nullable(); // Tempat Lahir
            $table->date('date_of_birth')->nullable(); // Tanggal Lahir
            $table->string('nik', 20)->nullable(); // NIK
            $table->string('religion', 50)->nullable(); // Agama
            $table->timestamps(); // Menyimpan waktu dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
