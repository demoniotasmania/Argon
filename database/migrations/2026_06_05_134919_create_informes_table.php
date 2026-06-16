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
        Schema::create('informe', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("observaciones", 500);
            $table->string("name_report",500);
            $table->string("user_generator",500);
            $table->enum("report_type",["a","b","c"]);
            $table->enum("format",["d","x","z"]);
            $table->date("generation_date");
            $table->timestamps();
            $table->foreignId("users_id")->constrained("urser")
            ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informe');
    }
};
