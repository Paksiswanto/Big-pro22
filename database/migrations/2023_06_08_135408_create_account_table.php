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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rekening_number')->unique();
            $table->string('currency');
            $table->decimal('balance', 10, 2);
            $table->string('name_bank');
            $table->string('bank_telephone');
            $table->string('bank_address');
            $table->foreignId('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('account');
    }
};
