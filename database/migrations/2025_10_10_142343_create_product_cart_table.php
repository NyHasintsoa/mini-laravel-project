<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_cart', function (Blueprint $table): void {
            $table->id();

            $table->double('price')->nullable(false)->default(0);

            $table->foreignId('product_id')
                ->constrained('products')
                ->onDelete('cascade');

            $table->foreignId('cart_id')
                ->constrained('carts')
                ->onDelete('cascade');

            $table->unique(['product_id', 'cart_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_cart');
    }
};
