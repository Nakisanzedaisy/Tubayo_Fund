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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            //$table->string('goal_name');
            $table->decimal('goal_amount', 10, 2);
            //$table->date('target_date');
            $table->integer('current_progress')->nullable();
            $table->enum('completion_status', ['COMPLETE', 'INCOMPLETE'])->default('INCOMPLETE')->nullable();
            // Add other relevant goal details here
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
