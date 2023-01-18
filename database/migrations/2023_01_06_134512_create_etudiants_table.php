<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('sexe')->nullable();
            $table->string('contact')->nullable();
            $table->string('contactP')->nullable();
            $table->string('matricule')->nullable();
            $table->foreignId('classe_id')->nullable();
            $table->foreignId('filiere_id')->nullable();
            $table->date('DN')->nullable();
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
        Schema::dropIfExists('etudiants');
    }
}
