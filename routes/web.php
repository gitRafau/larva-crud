<?php


//Pages Routing

Route::get('/', [
    'uses' => 'PagesController@index',
    'as' => '/'
]);

Route::get('aboutme', [
   'uses' => 'PagesController@aboutme',
    'as' => 'aboutme'
]);

Route::get('contact', [
    'uses' => 'PagesController@contact',
    'as' => 'contact'
]);


//Crud Routing

        Route::get('crud', [
            'uses' => 'CrudController@index',
            'as' => 'crud'
        ]);

        Route::get('crud/create', 'CrudController@create');

        Route::get('crud/create', [
            'uses' => 'CrudController@create',
            'as' => 'crud.create'
        ]);


        Route::post('crud/store', [

            'uses' => 'CrudController@store',
            'as' => 'crud.store'
        ]);


        Route::get('crud/edit/{crud}', [
            'uses' => 'CrudController@edit',
            'as' => 'crud.edit'
        ]);

        Route::put('crud/{crud}', [
            'uses' => 'CrudController@update',
            'as' => 'crud.update'
        ]);


        Route::delete('crud/{crud}', [
            'uses' => 'CrudController@destroy',
            'as' => 'crud.delete'
        ]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
