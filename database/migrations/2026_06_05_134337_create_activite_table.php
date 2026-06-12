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
        Schema::create('activite', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name_activite",150)->unique()->index();
            $table->string("description",2000)->nullable();
            $table->string("observation",1000)->nullable();
            $table->string("state",10000)->nullable();
            $table->date("date_activity");
            $table->date("start_time");
            $table->date("final_time");
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
        Schema::dropIfExists('activite');
    }
};
