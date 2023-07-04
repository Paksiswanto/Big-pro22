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
        Schema::create('_items_to_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('InvoiceId')->references('id')->on('invoice')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('ItemId')->references('id')->on('item')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('quantity');
            $table->decimal('price',8,2);
            $table->decimal('amount',8,2);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_items_to_invoices');
    }
};
