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
        Schema::create('products', function (Blueprint $table) {
         $table->id();
            $table->string('productName');                   // Product name
            $table->string('category');               // Category name
            $table->decimal('price', 10, 2);          // Price
            $table->string('image');      // Product image path
            $table->string('colors');      // Selected color
            $table->string('sizes');       // Selected size
            $table->text('productDescription')->nullable();  // Description
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
