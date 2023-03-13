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
        Schema::create('document_trackers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('document_id')->constrained('documents', 'id');
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->foreignId('mail_log_attachment_id')->nullable();
            $table->enum('action', ['uploaded', 'downloaded', 'viewed', 'deleted']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_trackers');
    }
};
