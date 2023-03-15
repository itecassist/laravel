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
        Schema::create('mail_configs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies', 'id');
            $table->string('host');
            $table->unsignedInteger('port');
            $table->enum('encryption', ['false', 'ssl', 'tls', 'notls', 'starttls']);
            $table->boolean('validate_cert')->default(true);
            $table->string('username');
            $table->string('password');
            $table->enum('authentication', ['null', 'oauth']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_configs');
    }
};
