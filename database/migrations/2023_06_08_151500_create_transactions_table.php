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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->references('id')->on('invoice')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bill_id')->references('id')->on('bill')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('income_id')->references('id')->on('income')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('expenditure_id')->references('id')->on('expenditure')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
