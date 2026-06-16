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
        Schema::create('audincia', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->date("hearing_date");
            $table->enum("audience_type", ["tporo","coco","pikachu","perro","gato"] );
            $table->date("hearing time");
            $table->string("place",600);
            $table->string("observations",600);
            $table->string("result",600);
            $table->string("state",600);
            $table->timestamps();
            $table->foreignId("judge_id")->constrained("juzgado")
            ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audincia');
    }
};
