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
        Schema::create('resulucionjudicial', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("resolution_number",150);
            $table->date("resolution_date");
            $table->string("description",150);
            $table->string("result",150);
            $table->string("observation",150);
            $table->string("state",150);
            $table->timestamps();
            $table->foreignId("id_case")->constrained("case")
            ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resulucionjudicial');
    }
};
