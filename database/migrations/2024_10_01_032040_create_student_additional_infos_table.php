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
        Schema::create('student_additional_info', function (Blueprint $table) {
            $table->id(); // Auto-increment ID
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade'); // Foreign key untuk tabel students
            $table->string('special_needs')->nullable(); // Kebutuhan Khusus
            $table->integer('child_number')->nullable(); // Anak ke-berapa
            $table->decimal('latitude', 9, 6)->nullable(); // Lintang
            $table->decimal('longitude', 9, 6)->nullable(); // Bujur
            $table->string('kk_number', 20)->nullable(); // No KK
            $table->decimal('weight', 5, 2)->nullable(); // Berat Badan
            $table->decimal('height', 5, 2)->nullable(); // Tinggi Badan
            $table->decimal('head_circumference', 5, 2)->nullable(); // Lingkar Kepala
            $table->integer('sibling_count')->nullable(); // Jumlah Saudara Kandung
            $table->decimal('distance_to_school', 5, 2)->nullable(); // Jarak Rumah ke Sekolah (KM)
            $table->timestamps(); // Menyimpan waktu dibuat dan diperbarui
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_additional_infos');
    }
};
