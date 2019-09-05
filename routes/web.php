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

Auth::routes();

Route::post('follow/{user}', 'FollowsController@store');

// Muestra la página de perfil de un usuario
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');
// Formulario para editar el perfil
Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

// Formulario para crear un post
Route::get('/p/create', 'PostsController@create');
// Muestra la página de un post concreto
Route::get('/p/{post}', 'PostsController@show');
// Para guardar el post
Route::post('/p', 'PostsController@store');
