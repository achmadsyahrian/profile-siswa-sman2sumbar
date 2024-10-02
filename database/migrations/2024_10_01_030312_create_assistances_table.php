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
        Schema::create('assistances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->string('kps_holder')->nullable(); // Penerima KPS
            $table->string('kps_number')->nullable();
            $table->string('kip_holder')->nullable(); // Penerima KIP
            $table->string('kip_number')->nullable();
            $table->string('kip_name')->nullable();
            $table->string('kks_number')->nullable();
            $table->string('registration_number')->nullable(); // No Registrasi Akta Lahir
            $table->string('eligible_pip')->nullable(); // Layak PIP
            $table->text('pip_reason')->nullable(); // Alasan Layak PIP
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assistances');
    }
};
