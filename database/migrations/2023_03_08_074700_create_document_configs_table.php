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
        Schema::create('document_configs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies', 'id');
            $table->string('name');
            $table->boolean('required_immediate')->default(false);
            $table->boolean('required_original')->default(false);
            $table->boolean('required_document')->default(false);
            $table->boolean('use_as_download')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_configs');
    }
};
