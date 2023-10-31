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
        Schema::create('registries', function (Blueprint $table) {
            $table->id();
            $table->enum('type',[
                'entry',
                'out'
            ]);
            $table->integer('initial_quantity');
            $table->integer('alteration');
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            //$table->foreignId('employee_id')->constrained('employees')->cascadeOnDelete()->nullable();
            $table->unsignedBigInteger('employee_id')->nullable();
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registries');
    }
};
