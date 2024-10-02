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
        Schema::create('school_information', function (Blueprint $table) {
            $table->id(); 
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Menyimpan ID siswa
            $table->string('current_class')->nullable(); // Rombel saat ini
            $table->string('national_exam_number')->nullable(); // No Peserta Ujian Nasional
            $table->string('skhun_number')->nullable(); // Nomor SKHUN
            $table->string('diploma_number')->nullable(); // No Seri Ijazah
            $table->string('previous_school')->nullable(); // Sekolah Asal
            $table->timestamps(); // Menyimpan waktu dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_information');
    }
};
