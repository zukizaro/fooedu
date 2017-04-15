<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */ 

/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web'],'namespace' => 'Foostart\Import\Controllers\Admin'], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////

        /**
         * list
         */
        Route::get('admin/import', [
            'as' => 'admin_import',
            'uses' => 'ImportAdminController@index'
        ]);


        /**
         * edit-add
         */
        Route::get('admin/import/edit', [
            'as' => 'admin_import.edit',
            'uses' => 'ImportAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/import/edit', [
            'as' => 'admin_import.post',
            'uses' => 'ImportAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/import/delete', [
            'as' => 'admin_import.delete',
            'uses' => 'ImportAdminController@delete'
        ]);



        
    });
});
