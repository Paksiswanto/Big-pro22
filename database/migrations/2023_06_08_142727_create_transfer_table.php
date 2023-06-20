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
        Schema::create('transfer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('from_account')->references('id')->on('account')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreignId('to_account')->references('id')->on('account')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreignId('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');;
            $table->foreignId('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date');
            $table->bigInteger('ammount');
            $table->string('description');
            $table->string('payment_method');
            $table->string('reference')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfer');
    }
};
