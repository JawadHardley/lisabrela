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
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('entity');
            $table->string('sector');
            $table->string('category');
            $table->string('type');
            $table->string('nationality');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('region');
            $table->string('district');
            $table->string('citizen_doc');
            $table->string('memo_doc');
            $table->string('tin_doc');
            $table->integer('taxed')->nullable();
            $table->integer('paid')->nullable();
            $table->string('dater')->nullable();
            $table->string('expire')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application');
    }
};
