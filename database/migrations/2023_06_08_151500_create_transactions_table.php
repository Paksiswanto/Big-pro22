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
            $table->foreignId('invoice_id')->nullable()->references('id')->on('invoice')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('bill_id')->nullable()->references('id')->on('bill')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('income_id')->nullable()->references('id')->on('income')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('expenditure_id')->nullable()->references('id')->on('expenditure')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('company_id')->nullable()->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('transfer_id')->nullable()->references('id')->on('transfer')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('account_id')->nullable()->references('id')->on('account')->onUpdate('cascade')->onDelete('cascade');
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
