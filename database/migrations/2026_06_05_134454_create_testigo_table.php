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
        Schema::create('testigo', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->sttring("name",500);
            $table->string("Surname",500);
            $table->string("ID number",500);
            $table->string("Telephone number",9);
            $table->string("Address",500);
            $table->string("Email address",500);
            $table->string("Declaration",500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testigo');
    }
};
