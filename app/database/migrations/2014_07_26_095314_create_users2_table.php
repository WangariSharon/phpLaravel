<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table)
		{
		    $table->increments('id');
		    $table->string('name');
		    $table->string('username');
		    $table->string('gender')->default('Female')->nullable();
		    $table->string('country')->default('Kenya')->nullable();
		    $table->string('photo');
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
			Schema::dropIfExists('users');
		}

}
