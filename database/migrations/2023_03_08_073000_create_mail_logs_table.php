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
        Schema::create('mail_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->constrained('companies', 'id');
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->string('from_email');
            $table->string('to_email');
            $table->string('subject');
            $table->text('email_body');
            $table->dateTime('send_date')->nullable();
            $table->dateTime('received_date')->nullable();
            $table->boolean('failed')->default(false);
            $table->string('error_message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_logs');
    }
};
