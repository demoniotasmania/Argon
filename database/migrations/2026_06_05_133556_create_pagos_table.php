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
        Schema::create('pago', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->date ("payment_date")->nullable();
            $table->date ("payment_method")->nullable();
            $table->string("amount",150);
            $table->string("description",100)->nullable();
            $table->string("reference",150);
            $table->string("status",150);
            $table->timestamps();
            $table->foreignId("id_case")->constrained("case")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("customer_id")->constrained("customer")
            ->onUpdate("cascade")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
