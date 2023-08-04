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
        Schema::table('feed_backs', function (Blueprint $table) {
             // Add the 'email' column
            $table->string('email');
            //More columns to add
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feed_backs', function (Blueprint $table) {
            $table->dropColumn('email');
             // Drop the 'email' column if needed
    
        });
    }
};