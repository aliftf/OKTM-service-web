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
            $table->string('komentar');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE forms ADD image_1 LONGBLOB");
        DB::statement("ALTER TABLE forms ADD image_2 LONGBLOB");
        DB::statement("ALTER TABLE forms ADD image_3 LONGBLOB");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
