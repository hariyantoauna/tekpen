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
        Schema::create('biodatas', function (Blueprint $table) {
            // $table->id();
            $table->unsignedInteger('user_id');
            $table->timestamps();
            $table->string('nama_lengkap')->nullable();
            $table->unsignedInteger('jender_id')->nullable();
            $table->string('tmp_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->unsignedInteger('pendidikan_id')->nullable();
            $table->unsignedInteger('pekerjaan_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
