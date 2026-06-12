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
        Schema::create('archivodigital', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",500);
            $table->string("extncion",500);
            $table->string("description",500);
            $table->string("size",500);
            $table->string("file_path",500);
            $table->enum("file_type", ["red","blue","purple","grey","green",]);
            $table->date("upload_date");
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
        Schema::dropIfExists('archivodigital');
    }
};
