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
        Schema::create('evidencia', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",150)->unique()->index();
            $table->enum("type_evidence",["mas","menos"]);
            $table->string("descrpicion",150);
            $table->string("obseravtion",150);
            $table->string("state",150);
            $table->date ("presentation_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidencia');
    }
};
