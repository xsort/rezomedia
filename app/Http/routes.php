<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
 *
 * FRONTEND
 *
 */
Route::group(['middleware' => ['web']], function () {
	
	Route::get('logout', 'Auth\AuthController@logout');
	
    Route::get('/', [
        'as'    => 'index',
        'uses'  => 'HomeController@index'
    ]);

    Route::get('news/{slug}', [
        'as'    => 'get-news',
        'uses'  => 'NewsController@getNews'
    ]);
    
    Route::get('news', 'NewsController@getNewsList');

    Route::get('card', 'ProductsController@getCard');

    Route::get('contacts', [
        'as'    => 'get-contacts',
        'uses'  => 'CommonController@getContact'
    ]);

    Route::post('search',           ['uses'=>'CommonController@getSearch', 'as'=>'search']);
    
    Route::get('admin',             'Admin\AdminController@index');

    Route::get('get-json-products', ['uses'=>'ProductsController@getFilterJson', 'as'=>'get-json-products']);

    Route::post('send-feedback',    ['uses'=>'MailController@sendFeedback', 'as'=>'send-feedback']);

    Route::post('send-feedback',    ['uses'=>'MailController@sendFeedback', 'as'=>'send-feedback']);

    Route::get('create-pdf',        ['uses'=>'CommonController@createPDF', 'as'=>'create-pdf']);

    Route::get('{slug}',            ['uses'=>'CommonController@getSlug', 'as'=>'get_slug']);



});



/*
 *
 *  admin panel
 *
 */
 
 
Route::get('admin/login', [
    'uses'          => 'Admin\AdminController@getLogin',
    'middleware'    => ['web']
]);

Route::post('admin/login',[
    'uses'          => 'Admin\AdminController@postLogin',
    'middleware'    => ['web']
]);

Route::group(['middleware' => ['web', 'admin']], function () {
    Route::get('admin', 'Admin\AdminController@index');
});

Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::controllers(['json' => 'Admin\JsonController']);

    Route::resource('content',          'Admin\ContentController');

    Route::resource('news',             'Admin\NewsController');
    
    Route::resource('categories',       'Admin\CategoriesController');
    
    Route::resource('products',         'Admin\ProductsController');

    Route::resource('lists',            'Admin\ListsController');

});

/*
 *
 *  photomanager
 *
 */
//////TODO middleware

    // upload
    Route::any('photos/upload', 'Admin\PhotosController@upload');
    Route::get('photos/getphotos', 'Admin\PhotosController@getJSONPhotos');
    Route::get('photos/changesort', 'Admin\PhotosController@changesort');
    Route::get('photos/delete/{id}', 'Admin\PhotosController@destroy');

//URL get content
//Route::get('{slug}', ['as' => 'getURL', 'uses' => 'ContentController@getBySlug', 'middleware'  => ['web']]);

/*
 * Route patterns
 *
 */
Route::pattern('id', '\d+');
Route::pattern('hash', '[a-z0-9]+');
Route::pattern('hex', '[a-f0-9]+');
Route::pattern('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
Route::pattern('base', '[a-zA-Z0-9]+');
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('username', '[a-z0-9_-]{3,16}');