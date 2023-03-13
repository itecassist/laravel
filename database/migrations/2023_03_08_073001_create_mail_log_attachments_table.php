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
        Schema::create('mail_log_attachments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mail_log_id')->constrained('mail_logs', 'id');
            $table->string('extension');
            $table->string('file_name');
            $table->unsignedInteger('file_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mail_log_attachments');
    }
};
