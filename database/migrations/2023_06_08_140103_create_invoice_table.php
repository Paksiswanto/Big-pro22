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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('status')->default('draft');
            $table->string('subtitle');
            $table->string('logo', 255);
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('customer_id')->constrained('customer')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('discount')->nullable();
            $table->string('invoice_number')->nullable();
            $table->integer('order_quantity')->nullable();
            $table->foreignId('category_id')->constrained('category')->onUpdate('cascade')->onDelete('cascade');
            $table->string('notes')->nullable();
            $table->string('attachment')->nullable();
            $table->string('footer')->nullable();
            $table->integer('totalPay')->nullable();
            $table->decimal('totalTax', 8, 2)->nullable();
            $table->decimal('totalDiscount', 8, 2)->nullable();
            $table->decimal('totalAmount', 8, 2)->nullable();
            $table->foreignId('company_id')->constrained('company')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice');
    }
};
