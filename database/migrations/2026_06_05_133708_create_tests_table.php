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
        Schema::create('test', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",150);
            $table->string("Description",150);
            $table->string("status",150);
            $table->string("comments",150);
            $table->date ("submission_date")->nullable();
            $table->enum("test_type",["si","no"]);
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
        Schema::dropIfExists('test');
    }
};
