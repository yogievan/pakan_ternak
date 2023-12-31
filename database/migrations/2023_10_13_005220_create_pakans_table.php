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
        Schema::create('pakans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pakan');
            $table->integer('harga');
            $table->integer('berat_kg');
            $table->foreignId('jenis_id');
            $table->timestamps();

            $table->foreign('jenis_id')->references('id')->on('jenis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pakans');
    }
};
