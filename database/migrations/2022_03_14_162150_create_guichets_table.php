<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuichetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guichets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numGuichet');
            $table->string('nomGuichetier');
            $table->string('pwdGuichetier');
            $table->string('typeGuichet');
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
        Schema::dropIfExists('guichets');
    }
}
