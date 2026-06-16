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
        Schema::create('corte', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",600);
            $table->string("address",600);
            $table->string("phone",9);
            $table->string("email",600);
            $table->string("city",600);
            $table->string("state",600);
            $table->enum("court_type", ["pepe","paul","pipi"]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corte');
    }
};
