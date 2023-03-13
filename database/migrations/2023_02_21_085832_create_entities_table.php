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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->char('gcs', 1);
            $table->foreignId('company_id')->constrained('companies', 'id');
            $table->string('account_number');
            $table->string('trading_name');
            $table->string('registered_name')->nullable();
            $table->string('registration_number')->nullable();
            $table->string('vat_reference')->nullable();
            $table->text('postal_address')->nullable();
            $table->text('physical_address')->nullable();
            $table->string('category')->nullable();
            $table->string('contact_person');
            $table->string('telephone');
            $table->string('fax')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->boolean('cash_sale_account')->default(true);
            $table->unsignedTinyInteger('payment_terms')->default(1);
            $table->boolean('price_excl')->default(false);
            $table->boolean('is_open_item')->default(true);
            $table->unsignedTinyInteger('default_tax')->default(1);
            $table->string('documents_contact')->nullable();
            $table->string('documents_email')->nullable();
            $table->string('statement_message')->nullable();
            $table->string('statement_contact')->nullable();
            $table->string('statement_email')->nullable();
            $table->unsignedTinyInteger('price_list')->default(1);
            $table->unsignedBigInteger('sales_person_id');
            $table->double('discount_percentage')->default(0);
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entities');
    }
};
