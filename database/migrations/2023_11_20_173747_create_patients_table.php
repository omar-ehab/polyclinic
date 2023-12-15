<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('full_name', 255);
            $table->date('birth_date');
            $table->string('gender', 6);
            $table->string('job', 125)->nullable();
            $table->foreignUlid('region_id')->index();
            $table->foreignUlid('created_by')->index();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('region_id')->references('id')->on('regions')->onDelete('restrict');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
