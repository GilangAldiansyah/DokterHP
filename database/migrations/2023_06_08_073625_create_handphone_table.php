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
        Schema::create('handphone', function (Blueprint $table) {
            $table->id();
            $table->char('merk');
            $table->char('tipe');
            $table->char('kerusakan');
            $table->char('nama_pelanggan');
            $table->char('status_perbaikan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('handphone');
    }
};
