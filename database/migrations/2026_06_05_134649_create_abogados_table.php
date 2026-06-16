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
        Schema::create('abogado', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",60);
            $table->string("last_name",60);
            $table->string("email",60);
            $table->string("phone",9);
            $table->enum("especiality",["1","2","3","4"]);
            $table->date("date_activity");
            $table->timestamps();
            $table->foreignId("id_informe")->constrained("informe")
            ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abogado');
    }
};
