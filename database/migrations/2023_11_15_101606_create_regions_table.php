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
        Schema::create('regions', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('governorate_id')->index();
            $table->string('name_en', 50);
            $table->string('name_ar', 50);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('governorate_id')->references('id')->on('governorates')->cascadeOnDelete();
            $table->unique(['governorate_id', 'name_en']);
            $table->unique(['governorate_id', 'name_ar']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regions');
    }
};
