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
        Schema::create('order_pizza', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->contraint('orders')->onDelete('cascade');
            $table->foreignId('pizza_size_id')->contraint('pizza_size')->onDelete('cascade');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_pizza');
    }
};
