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
        Schema::create('historialcaso', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->date("change_date");
            $table->string("change_description",600);
            $table->string("comments",600);
            $table->string("responsible_user",600);
            $table->string("previous_status",600);
            $table->string("new_status",600);
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
        Schema::dropIfExists('historialcaso');
    }
};
