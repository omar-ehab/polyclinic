<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clinics', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->string('name', 25)->unique();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clinics');
    }
};
