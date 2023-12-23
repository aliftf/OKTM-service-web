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
            
            $table->string('komen_surat_kehilangan')->nullable();
            $table->string('komen_ktm')->nullable();
            $table->string('komen_ksm')->nullable();
            $table->string('komen_bukti_pembayaran')->nullable();
            
            $table->boolean('status_ksm')->default(false);
            $table->boolean('status_bukti_pembayaran')->default(false);
            $table->boolean('status_ktm')->default(false);
            $table->boolean('status_surat_kehilangan')->default(false);
            $table->timestamps();
        });
        //Image_1 untuk KSM
        DB::statement("ALTER TABLE forms ADD ksm LONGBLOB");
        //Image_2 untuk Bukti pembayaran
        DB::statement("ALTER TABLE forms ADD bukti_pembayaran LONGBLOB");
        //Image_3 untuk Bukti kehilangan atau KTM
        DB::statement("ALTER TABLE forms ADD ktm LONGBLOB");
        //Image_4 untuk Bukti kehilangan atau KTM
        DB::statement("ALTER TABLE forms ADD surat_kehilangan LONGBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
