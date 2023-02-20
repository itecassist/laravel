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
        Schema::create('stock_options', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stock_item_id')->constrained('stock_items', 'id');
            $table->foreignId('stock_unit_id')->constrained('stock_units', 'id');
            $table->double('deductable');
            $table->double('retail_price');
            $table->double('special_price')->nullable();
            $table->unsignedInteger('weight_gram');
            $table->unsignedInteger('length_cm');
            $table->unsignedInteger('height_cm');
            $table->unsignedInteger('width_cm');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_options');
    }
};
