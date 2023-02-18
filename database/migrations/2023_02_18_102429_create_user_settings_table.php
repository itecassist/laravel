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
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users', 'id');
            $table->boolean('dark_mode')->default(false);
            $table->boolean('header_fixed')->default(false);
            $table->boolean('header_no_border')->default(false);
            $table->boolean('sidebar_collapsed')->default(false);
            $table->boolean('sidebar_fixed')->default(false);
            $table->boolean('sidebar_mini')->default(true);
            $table->boolean('sidebar_mini_md')->default(false);
            $table->boolean('sidebar_mini_xs')->default(false);
            $table->boolean('sidebar_nav_flat')->default(false);
            $table->boolean('sidebar_nav_legacy')->default(true);
            $table->boolean('sidebar_nav_compact')->default(false);
            $table->boolean('sidebar_nav_child_indent')->default(true);
            $table->boolean('sidebar_nav_child_hide')->default(false);
            $table->boolean('sidebar_disable_hover')->default(false);
            $table->boolean('footer_fixed')->default(false);
            $table->boolean('small_text_body')->default(true);
            $table->boolean('small_text_navbar')->default(false);
            $table->string('navbar_variants')->default('bg-white');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_settings');
    }
};
