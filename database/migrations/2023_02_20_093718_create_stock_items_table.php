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
        Schema::create('stock_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies', 'id');
            $table->foreignId('stock_category_id')->constrained()->cascadeOnDelete();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('item_code', 50);
            $table->foreignId('stock_unit_id')->constrained();
            $table->date('expire_date')->nullable();
            $table->double('on_hand');
            $table->double('min_order_quantity');
            $table->string('tags');
            $table->string('short_description');
            $table->text('description');
            $table->unsignedInteger('weight_gram');
            $table->unsignedInteger('length_cm');
            $table->unsignedInteger('height_cm');
            $table->unsignedInteger('width_cm');
            $table->double('unit_price');
            $table->double('unit_price_for');
            $table->double('markup_percentage')->nullable();
            $table->string('main_image')->nullable();
            $table->boolean('is_active');
            $table->boolean('is_feature');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_items');
    }
};
