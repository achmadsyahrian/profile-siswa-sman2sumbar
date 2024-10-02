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
        Schema::create('family_members', function (Blueprint $table) {
            $table->id(); // ID unik untuk anggota keluarga
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Menghubungkan dengan tabel students
            
            // Kolom untuk Ayah
            $table->string('father_name')->nullable(); // Nama Ayah
            $table->string('father_birth_year')->nullable(); // Tahun Lahir Ayah
            $table->string('father_education_level')->nullable(); // Jenjang Pendidikan Ayah
            $table->string('father_occupation')->nullable(); // Pekerjaan Ayah
            $table->string('father_income')->nullable(); // Penghasilan Ayah
            $table->string('father_nik', 20)->nullable(); // NIK Ayah
            
            // Kolom untuk Ibu
            $table->string('mother_name')->nullable(); // Nama Ibu
            $table->string('mother_birth_year')->nullable(); // Tahun Lahir Ibu
            $table->string('mother_education_level')->nullable(); // Jenjang Pendidikan Ibu
            $table->string('mother_occupation')->nullable(); // Pekerjaan Ibu
            $table->string('mother_income')->nullable(); // Penghasilan Ibu
            $table->string('mother_nik', 20)->nullable(); // NIK Ibu
            
            $table->timestamps(); // Menyimpan waktu dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('family_members');
    }
};
