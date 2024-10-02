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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id(); // ID unik untuk wali
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Menghubungkan dengan tabel students
            $table->string('name')->nullable(); // Nama Wali
            $table->year('birth_year')->nullable(); // Tahun Lahir Wali
            $table->string('education_level')->nullable(); // Jenjang Pendidikan Wali
            $table->string('occupation')->nullable(); // Pekerjaan Wali
            $table->string('income')->nullable(); // Penghasilan Wali
            $table->string('nik')->nullable(); // NIK Wali
            $table->timestamps(); // Menyimpan waktu dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
