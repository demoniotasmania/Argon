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
        Schema::create('date', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->date ("Appointment date")->nullable();
            $table->date ("Appointment time")->nullable();
            $table->string("Description",150);
            $table->string("Status",100)->nullable();
            $table->string("Observations",150);
            $table->string("Location",150);
            $table->timestamps();
            $table->foreignId("customer_id")->constrained("customer")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("lawyer_id")->constrained("abogado")
            ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('date');
    }
};
