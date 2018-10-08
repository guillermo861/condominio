<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsToStatesGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications_to_states_grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_publication')->nullable(false);
            $table->integer('id_state')->nullable(false);
            $table->integer('id_grade')->nullable(false);
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
        Schema::dropIfExists('publicatoins_to_states_grades');
    }
}
