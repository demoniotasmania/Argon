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
        Schema::create('terminolegal', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->date("start_date");
            $table->date("expiration_date");
            $table->string("state",600);
            $table->string("obsrvation",600);
            $table->string("descrition",600);
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
        Schema::dropIfExists('terminolegal');
    }
};
