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
        Schema::create('state_case', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name",150)->unique()->index();
            $table->string("state",150)->nullable();
            $table->string("description",150);
            $table->date ("creation_date")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('state_case');
    }
};
