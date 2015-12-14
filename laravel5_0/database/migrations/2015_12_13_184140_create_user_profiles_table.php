<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table)
		{
			$table->increments('id');

			$table->mediumText('bio')->nullable();
			$table->string('twitter')->nullable();
			$table->string('website')->nullable();
			$table->date('birthdate')->nullable();

			$table->integer('user_id')->unsigned(); //Concatenar

			$table->foreign('user_id') //Relacion foreign key a tabla users
			      ->references('id')
			      ->on('users')
			      ->onDelete('cascade'); //cascade hace que se borre al elimiar el usuario

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
		Schema::drop('user_profiles');
	}

}
