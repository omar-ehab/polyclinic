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
        Schema::create('doctors', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('user_id')->index();
            $table->unsignedSmallInteger('examination_session_period')->nullable();
            $table->unsignedSmallInteger('follow_up_session_period')->nullable();
            $table->unsignedSmallInteger('work_session_period')->nullable();
            $table->boolean('notification_before_clinic_schedule')->default(true);
            $table->boolean('notification_before_every_appointment')->default(true);
            $table->boolean('email_notification')->default(false);
            $table->boolean('push_notification')->default(false);
            $table->string('speciality', 125);
            $table->string('supervisory_level', 125);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
