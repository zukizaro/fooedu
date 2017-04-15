<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('email',32);
            $table->string('password',55);
            $table->text('permissions')->nullable();
            $table->boolean('activated')->default(0);
            $table->boolean('banned')->default(0);
            $table->string('activation_code',55)->nullable();
            $table->timestamp('activated_at')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->string('persist_code',255)->nullable();
            $table->string('reset_password_code',55)->nullable();
            $table->boolean('protected')->default(0);
            $table->timestamps();
            // setup index
            $table->unique('email');
            $table->index('activation_code');
            $table->index('reset_password_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }

}
