<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::dropIfExists('permission');
        Schema::create('permission', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('description',255);
            $table->string('permission',255);
            $table->boolean('protected')->default(0);
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
        Schema::drop('permission');
	}

}
