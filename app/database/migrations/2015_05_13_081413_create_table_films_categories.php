<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFilmsCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		if(!Schema::hasTable('films_categories')){
			Schema::create('films_categories',function(Blueprint $table){
				$table->increments('id');
				$table->integer('film_id');
				$table->integer('category_id');
				$table->timestamps();
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		if(Schema::hasTable('films_categories')){
			Schema::drop('films_categories');
		}
	}

}
