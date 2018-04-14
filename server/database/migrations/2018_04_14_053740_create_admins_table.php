<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('project_id')->unsigned();
          $table->foreign('project_id')->references('id')->on('projects');
          $table->timestamps();
        });

        Schema::create('tasks', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('project_id')->unsigned();
          $table->foreign('project_id')->references('id')->on('projects');
          $table->integer('user_id')->unsigned();
          $table->foreign('user_id')->references('id')->on('users');
          $table->integer('category_id')->unsigned();
          $table->integer('status_id')->unsigned();
          $table->string('ideal_start_time');
          $table->string('ideal_end_time');
          $table->string('real_start_time')->nullable();
          $table->string('real_end_time')->nullable();
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
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('users');
        Schema::dropIfExists('projects');
    }
}
