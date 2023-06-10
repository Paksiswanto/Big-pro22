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
        Schema::create('recurring_bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('supplier_id')->references('id')->on('supplier')->onUpdate('cascade')->onDelete('cascade');
            $table->string('automatic_date');
            $table->string('automatic_number');
            $table->string('due_date');
            $table->foreignId('item_id')->references('id')->on('item')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('discount')->nullable();
            $table->string('attachment');
            $table->integer('total_pay');
            $table->string('notes')->nullable();
            $table->date('repeat');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('send');
            $table->foreignId('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recurring_bills');
    }
};
