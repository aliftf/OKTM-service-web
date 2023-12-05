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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();

            $table->foreignId('nim')->constrained('mahasiswas','nim')->onDelete('cascade');

            $table->string('tipe');
            $table->string('status');
            $table->string('ktm')->nullable();
            $table->string('ksm')->nullable();
            $table->string('surat_kehilangan')->nullable();
            $table->string('bukti_pembayaran')->nullable();
            $table->string('komentar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
