<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->integer('note1');
            $table->integer('note2');
            $table->integer('note3');
            $table->integer('note4');
            $table->integer('note5');
            $table->integer('note6');
            $table->integer('examen');
            $table->integer('note7')->nullable();
            $table->integer('note8')->nullable();
            $table->integer('note9')->nullable();
            $table->integer('note10')->nullable();
            $table->integer('note11')->nullable();
            $table->integer('note12')->nullable();
            $table->integer('note13')->nullable();
            $table->foreignId('etudiant_id');
            $table->foreignId('classe_id');
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
        Schema::dropIfExists('notes');
    }
}
