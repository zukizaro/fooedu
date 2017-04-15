<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSamplesTable extends Migration {

    private $_table = NULL;
    private $fileds = NULL;

    public function __construct() {
        $this->_table = 'samples';
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        /**
         * Existing table
         */
        if (!Schema::hasTable($this->_table)) {
            Schema::create($this->_table, function (Blueprint $table) {
                $table->increments('sample_id');
                $table->string('sample_name');
            });
        }

        /**
         * Existing fields
         */
        //sample_id
        if (!Schema::hasColumn($this->_table, 'sample_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->increments('sample_id');
            });
        }
        //sample_name
        if (!Schema::hasColumn($this->_table, 'sample_name')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('sample_name', 255);
            });
        }
        //category_id
        if (!Schema::hasColumn($this->_table, 'category_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('category_id');
            });
        }

        //sample_image
        if (!Schema::hasColumn($this->_table, 'sample_image')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->string('sample_image', 255);
            });
        }
        //status_id
        if (!Schema::hasColumn($this->_table, 'status_id')) {
            Schema::table($this->_table, function (Blueprint $table) {
                $table->integer('status_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('samples');
    }

}
