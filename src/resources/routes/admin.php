<?php

/*
|--------------------------------------------------------------------------
| Vanilo's Admin Routes
|
| Routes in this file will be added in a group attributes of which
| are to be defined in the box/module config file in the config
| key of routes.namespace, routes.prefix with smart defaults
|--------------------------------------------------------------------------
*/

Route::resource('taxonomy', 'TaxonomyController');
Route::resource('product', 'ProductController');
Route::resource('order', 'OrderController');
Route::resource('media', 'MediaController')->only(['destroy', 'store']);

Route::get('/taxonomy/{taxonomy}/taxon/create', 'TaxonController@create')->name('taxon.create');
Route::post('/taxonomy/{taxonomy}/taxon', 'TaxonController@store')->name('taxon.store');
Route::get('/taxonomy/{taxonomy}/taxon/{taxon}/edit', 'TaxonController@edit')->name('taxon.edit');
Route::put('/taxonomy/{taxonomy}/taxon/{taxon}', 'TaxonController@update')->name('taxon.update');
Route::delete('/taxonomy/{taxonomy}/taxon/{taxon}', 'TaxonController@destroy')->name('taxon.destroy');
