<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['prefix' => 'admin', 'middleware'=> 'auth'], function () {

    // gallery Route
    Route::get('/gallery/create', 'galleryController@create')->name('gallery.create');
    Route::post('/gallery/store', 'galleryController@store')->name('gallery.store');
    Route::get('/gallery/edit/{id}', 'galleryController@edit')->name('gallery.edit');
    Route::get('/gallery/delete', 'galleryController@destroy')->name('gallery.delete');


    // Blog Route
    Route::get('/blogs', 'blogController@index')->name('blogs');
    Route::get('/blog/create', 'blogController@create')->name('blog.create');
    Route::post('/blog/store', 'blogController@store')->name('blog.store');
    Route::get('/blog/edit/{id}', 'blogController@edit')->name('blog.edit');
    Route::post('/blog/update/{id}', 'blogController@update')->name('blog.update');
    Route::get('/blog/delete/{id}', 'blogController@destroy')->name('blog.delete');

    // Tag Route

    Route::get('/tags', 'tagController@index')->name('tags');
    Route::get('/tag/create', 'tagController@create')->name('tag.create');
    Route::post('/tag/store', 'tagController@store')->name('tag.store');
    Route::get('/tag/edit/{id}', 'tagController@edit')->name('tag.edit');
    Route::post('/tag/update/{id}', 'tagController@update')->name('tag.update');
    Route::get('/tag/delete/{id}', 'tagController@destroy')->name('tag.delete');


    // Gallery Route

    Route::get('/gallery', 'galleryController@index')->name('gallery');
    Route::get('/gallery/create', 'galleryController@create')->name('gallery.create');
    Route::post('/gallery/store', 'galleryController@store')->name('gallery.store');
    Route::get('/gallery/edit/{id}', 'galleryController@edit')->name('gallery.edit');
    Route::post('/gallery/update/{id}', 'galleryController@update')->name('gallery.update');
    Route::get('/gallery/delete/{id}', 'galleryController@destroy')->name('gallery.delete');

    // route for settings

    Route::get('/settings/create', 'SettingsController@create')->name('settings.create');
    Route::post('/settings/store', 'SettingsController@store')->name('settings.store');
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::post('/settings/update', 'SettingsController@update')->name('settings.update');


    // route for profile

    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile/store', 'ProfileController@store')->name('profile.store');
    Route::post('/profile/update', 'ProfileController@update')->name('profile.update');


    //route for price

    Route::get('/price/create', 'PriceController@create')->name('price.create');
    Route::post('/price/store', 'PriceController@store')->name('price.store');
    Route::get('/prices', 'PriceController@index')->name('prices');
    Route::get('/price/edit/{id}', 'PriceController@edit')->name('price.edit');
    Route::post('/price/update/{id}', 'PriceController@update')->name('price.update');
    Route::get('/price/delete/{id}', 'PriceController@destroy')->name('price.delete');

    // route for resume 

    Route::get('/resume', 'ResumeController@index')->name('resume');
    Route::get('/resume/create', 'ResumeController@create')->name('resume.create');
    Route::post('/resume/store', 'ResumeController@store')->name('resume.store');
    Route::get('/resume/edit/{id}', 'ResumeController@edit')->name('resume.edit');
    Route::post('/resume/update/{id}', 'ResumeController@update')->name('resume.update');
    Route::get('/resume/delete/{id}', 'ResumeController@destroy')->name('resume.delete');


    // route for skill 

    Route::get('/skill', 'SkillsController@index')->name('skill');
    Route::get('/skill/create', 'SkillsController@create')->name('skill.create');
    Route::post('/skill/store', 'SkillsController@store')->name('skill.store');
    Route::get('/skill/edit/{id}', 'SkillsController@edit')->name('skill.edit');
    Route::post('/skill/update/{id}', 'SkillsController@update')->name('skill.update');
    Route::get('/skill/delete/{id}', 'SkillsController@destroy')->name('skill.delete');


});

    // route for UI

    Route::get('/', 'SiteUIController@index')->name('index');
    Route::get('/posts/{slug}', 'SiteUIController@showBlog')->name('blog.show');
    Route::post('/message/store', 'MessagesController@store')->name('message.store');


    Route::get('/', function()
{
    return User::all();
});



    // route for comments
    // Route::post('/comments/store', 'CommentController@store')->name('comments.store');
