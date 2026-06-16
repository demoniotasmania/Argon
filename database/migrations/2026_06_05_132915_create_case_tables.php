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
        Schema::create('case_table', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title_case",150)->unique()->index();
            $table->string("file_number",100)->nullable();
            $table->string("apeture_case",150);
            $table->string("state_case",150);
            $table->enum("priority",["si","no"]);
            $table->string("descripicion",150);
            $table->date ("date_cierre")->nullable();
            $table->timestamps();
            $table->foreignId("id_typecase")->constrained("type_case")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("customer_id")->constrained("customer")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("lawyer_id")->constrained("abogado")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("evidence_id")->constrained("evidencia")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("state_case_id")->constrained("state_case")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("audience_id")->constrained("audincia")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("judged_id")->constrained("juzgado")
            ->onUpdate("cascade")->onDelete("cascade");
            $table->foreignId("id_informe")->constrained("informe")
            ->onUpdate("cascade")->onDelete("cascade");


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_tabl');
    }
};
