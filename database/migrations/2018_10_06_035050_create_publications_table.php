<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',250)->nullable(false);
            $table->integer('id_subject')->nullable(false)->references('id')->on('subjects')->onDelete('cascade');
            $table->integer('id_scool_year')->nullable(false)->references('id')->on('scool_years')->onDelete('cascade');
            $table->integer('id_language')->nullable(false)->references('id')->on('languages')->onDelete('cascade');
            $table->integer('id_format')->nullable(false)->references('id')->on('formats')->onDelete('cascade');
            $table->integer('id_status')->nullable(false)->references('id')->on('status')->onDelete('cascade');
            $table->string('issn',15);
            $table->string('isbn',15);
            $table->string('sku',20)->nullable(false);
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
        Schema::dropIfExists('publications');
    }
}
