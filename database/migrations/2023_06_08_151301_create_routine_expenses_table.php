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
        Schema::create('routine_expenses', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('entry_amount');
            $table->string('description');
            $table->string('payment_method');
            $table->foreignId('account_id')->references('id')->on('account')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('category')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('supplier_id')->references('id')->on('supplier')->onUpdate('cascade')->onDelete('cascade');
            $table->string('repeat1');
            $table->string('repeat2')->nullable();
            $table->string('repeat3')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('number')->nullable();
            $table->string('reference');
            $table->string('attacment')->nullable();
            $table->foreignId('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('routine_expenses');
    }
};
