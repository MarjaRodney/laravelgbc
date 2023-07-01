<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('retrieves', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname'); // Add the Firstname column
            $table->string('Lastname');
            $table->string('Section');
            $table->string('timeIn');
            $table->string('timeOut');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retrieveStudent');
    }
};