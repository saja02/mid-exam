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
        Schema::create('compeness', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->String('Item Name');
            $table->String('Amount');
            $table->String('Expense Date');
            $table->String('Category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compeness');
    }
};
