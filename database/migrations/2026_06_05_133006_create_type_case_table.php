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
        Schema::create('type_case', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",150)->unique()->index();
            $table->string("descripicion",100)->nullable();
            $table->string("state",150);
            $table->string("code",150);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_case');
    }
};
