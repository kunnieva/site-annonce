<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre');
            $table->text('description');
            $table->string('photo');
            $table->string('localisation');
            $table->string('codepostal');
            $table->decimal('prix', 10, 2);
             // https://laravel.com/docs/5.0/schema#foreign-keys
            // ON AJOUTE UNE COLONNE DE CLE ETRANGERE 
            // POUR LA RELATION ONE TO MANY	
            // AVEC LA TABLE SQL users
            $table->bigInteger('user_id')->unsigned();
            // $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('annonces');
    }
}
