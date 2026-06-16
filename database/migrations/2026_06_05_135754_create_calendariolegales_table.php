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
        Schema::create('calendariolegal', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->date("date_event");
            $table->date("hour_event");
            $table->string("title_event",60);
            $table->string("descripion",60);
            $table->string("location",60);
            $table->string("state",60);
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
        Schema::dropIfExists('calendariolegal');
    }
};
