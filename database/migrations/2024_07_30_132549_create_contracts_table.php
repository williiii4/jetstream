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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->float('price', 8, 2);
            $table->float('interest', 3, 2);
            $table->unsignedBigInteger('user_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->boolean('active')->default(true);
            $table->string('name');
            $table->string('description');
            $table->string('payment_reference');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
