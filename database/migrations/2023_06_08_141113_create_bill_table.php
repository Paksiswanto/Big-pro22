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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->foreignId('supplier_id')->nullable()->constrained('supplier')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained('category')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('discount')->nullable();
            $table->string('notes')->nullable();
            $table->string('attachment')->nullable();
            $table->string('footer')->nullable();
            $table->integer('totalPay')->nullable();
            $table->decimal('totalTax', 8, 2)->nullable();
            $table->decimal('totalDiscount', 8, 2)->nullable();
            $table->integer('order_quantity');
            $table->decimal('totalAmount', 8, 2)->nullable();
            $table->foreignId('company_id')->constrained('company')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('bill_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
