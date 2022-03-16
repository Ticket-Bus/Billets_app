<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->id();
            $table->string('numBillet');
            $table->dateTime('dateHeureDepart');
            $table->boolean('etat');
             $table->foreignId('clients_id')->constrained()->cascadeOnDelete();
            $table->foreignId('places_id')->constrained()->cascadeOnDelete();
            $table->foreignId('guichets_id')->constrained()->cascadeOnDelete();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billets');
    }
}
