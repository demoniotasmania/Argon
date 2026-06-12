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
        Schema::create('bill', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("name_facture",150);
            $table->enum("type_facture",["si","no"]);
            $table->date("issue_date");
            $table->string("invoice_number",150);
            $table->string("subtotal",150);
            $table->string("tax",150);
            $table->string("total",150);
            $table->string("status",150);
            $table->timestamps();
            $table->foreignId("pay_id")->constrained("pago")
            ->onUpdate("cascade")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};
