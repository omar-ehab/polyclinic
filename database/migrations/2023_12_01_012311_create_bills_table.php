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
        Schema::create('bills', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('patient_id')->index();
            $table->foreignUlid('appointment_id')->index();
            $table->unsignedBigInteger('amount');
            $table->timestamp('paid_at')->nullable();
            $table->string('notes')->nullable();
            $table->date('due_date')->nullable();
            $table->foreignUlid('created_by')->index();
            $table->timestamps();
            $table->softDeletes();


            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('restrict');
            $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
