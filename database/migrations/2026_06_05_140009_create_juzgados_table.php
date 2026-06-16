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
        Schema::create('juzgado', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",600);
            $table->string("drection",600);
            $table->string("phone",9);
            $table->string("email",600);
            $table->string("city",600);
            $table->string("departament",600);
            $table->timestamps();
            $table->foreignId("id_court")->constrained("corte")
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juzgado');
    }
};
