<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::post('/save', 'postcontroller@save');

//['middleware' => 'jwt.auth']
//Route::group(['middleware' => 'jwt.auth'], function(){
route::get('/posts', 'postcontroller@posts');
//});

route::get('/single/{id}', 'postcontroller@single');

route::get('/edit/{id}', 'postcontroller@edit');

route::post('/update', 'postcontroller@update');

route::get('/del/{id}', 'postcontroller@del');

route::post('/comment', 'postcontroller@comment');

route::get('/coms/{id}', 'postcontroller@coms');

route::get('/com-count/{id}', 'postcontroller@com_count');

route::get('/imgs', 'postcontroller@imgs');

route::post('/sub', 'subcontroller@sub');

route::get('/search/{query}', 'postcontroller@search');



route::post('/customlogin', 'customauthcontroller@login');

route::post('/customreg', 'customauthcontroller@reg');