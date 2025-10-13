<?php

use App\Models\Enum\TypeProduct;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table): void {
            $table->id();

            $table->string('title', 200)->nullable(false);
            $table->text('description')->nullable();
            $table->double('price')->default(0);
            $table->string('file_path')->nullable(false);
            $table->string('image_path')->nullable();
            $table->enum('product_type', TypeProduct::values())->default(TypeProduct::BOOK);

            $table->foreignId('entreprise_id')
                ->constrained('entreprises')
                ->onDelete('cascade');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
