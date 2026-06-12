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
        Schema::create('bitacora', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("action_performed",600);
            $table->string("date",600);
            $table->string("time",600);
            $table->string("access_ip",600);
            $table->string("description",600);
            $table->string("module",600);
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
        Schema::dropIfExists('bitacora');
    }
};
