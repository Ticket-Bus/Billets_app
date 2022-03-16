<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoyagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voyages', function (Blueprint $table) {
            $table->id();
            $table->string('destination');
            $table->string('pointDepart');
            $table->dateTime('dateArrive');
            $table->dateTime('dateDepart');
            $table->unsignedBigInteger('nbrePlace');
            $table->double('prix');
            $table->string('immatriculation');
             $table->foreignId('admins_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('voyages');
    }
}
