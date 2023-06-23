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
        Schema::create('customer', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('website');
            $table->string('reference');
            $table->string('npwp');
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('currency');
            $table->string('postal_code');
            $table->boolean('status')->default(1);
            $table->string('photo')->nullable();
            $table->string('phone_number');
            $table->foreignId('company_id')->references('id')->on('company')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
