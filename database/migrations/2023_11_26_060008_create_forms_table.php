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
            $table->string('ktm');
            $table->string('ksm');
            $table->string('surat_kehilangan');
            $table->string('bukti_pembayaran');
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
