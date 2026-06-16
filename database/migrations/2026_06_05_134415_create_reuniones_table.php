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
        Schema::create('reunion', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->date("meeting_date");
            $table->date("meeting_time");
            $table->string("place",200);
            $table->string("reason",200);
            $table->string("agreements",200000);
            $table->string("observation",2000000);
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
        Schema::dropIfExists('reunion');
    }
};
