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
        //
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_time');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade');
            $table->string('tipe');
            $table->string('status');
            $table->blob('image_1');
            $table->blob('image_2');
            $table->blob('image_3');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
