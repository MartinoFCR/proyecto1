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
        Schema::create('transfers', function (Blueprint $table) {
            $table->id('transfer_id');
            $table->date('fecha_transfer');
            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('store_id')->on('stores');
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on('products');
            $table->string('cantidad');
            $table->unsignedBigInteger('destination_id');
            $table->foreign('destination_id')->references('store_id')->on('stores');
            $table->string('estado');
            $table->string('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
