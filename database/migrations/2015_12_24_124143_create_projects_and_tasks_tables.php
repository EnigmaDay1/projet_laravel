<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsAndTasksTables extends Migration
{
    /**
     * Run the migrations.
     * >>> Cr�e les 2 tables (et leurs colones) en 1 seule migration
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index(); //lien entre la table projects et users
            $table->string('name')->default('');
            $table->string('slug')->default(''); //url
            $table->text('description')->default('');
            $table->timestamps();
        });

        Schema::create('tasks', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned()->default(0); //lien entre la table tasks et projects
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->string('name')->default('');
            $table->string('slug')->default('');
            $table->boolean('completed')->default(false);
            $table->text('date')->default('');
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
        Schema::drop('tasks');
        Schema::drop('projects');
    }
}
