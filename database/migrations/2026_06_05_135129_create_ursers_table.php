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
        Schema::create('urser', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name", 500);
            $table->string("pasword",500);
            $table->string("mail",500);
            $table->string("state",500);
            $table->DATE("creation_date");
            $table->timestamps();
            $table->foreignId("role_id")->constrained("role")
            ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urser');
    }
};
