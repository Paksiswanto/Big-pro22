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
        Schema::create('expenditure', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('payment_method');
            $table->integer('amount');
            $table->string('description')->nullable();
            $table->string('expenditure_number');
            $table->string('reference')->nullable();
            $table->string('attachment')->nullable();
            $table->foreignId('account_id')->references('id')->on('account')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('category')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expenditure');
    }
};
