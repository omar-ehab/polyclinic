<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('clinic_schedule_id');
            $table->foreignUlid('patient_id');
            $table->foreignUlid('created_by');
            $table->timestamp('start_time');
            $table->timestamp('expected_end_time');
            $table->timestamp('end_time')->nullable();
            $table->unsignedInteger('total_price')->nullable();
            $table->unsignedTinyInteger('discount')->nullable();
            $table->boolean('is_cancelled')->default(false);
            $table->text('cancellation_reason')->nullable();
            $table->string('type', 20)->default('examination');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('clinic_schedule_id')->references('id')->on('clinic_schedules')->onDelete('restrict');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
