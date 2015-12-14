<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropActiveColumnFromUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::table('users', function (Blueprint $table){
			$table->dropColumn('active'); //Borrar columna active de users
		});*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		/*Schema::table('users', function (Blueprint $table){
			$table->boolean('active')->default(true);
		});*/
	}

}
