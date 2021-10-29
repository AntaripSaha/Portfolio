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

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about')->name('about');
Route::get('service/{id}', 'PagesController@service')->name('service');
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
    return redirect()->back()->with('success',' Your site Rebooted Successfully...');
});

 Route::prefix('admin')->group(function(){


    Auth::routes();

    Route::get('/dhome', 'HomeController@index')->name('dhome');

    Route::get('/', 'DashBoardController@index')->name('admin');
    Route::put('/', 'DashBoardController@update')->name('admin.update');
    Route::get('/home', 'HomePageController@home')->name('admin.home');
    Route::put('/home', 'HomePageController@homeupdate')->name('admin.home.update');
    
    Route::get('/service/create', 'ServicePagesController@create')->name('admin.service.create');
    Route::put('/service/create', 'ServicePagesController@store')->name('admin.service.store');
    Route::get('/service/list', 'ServicePagesController@index')->name('admin.service.list');
    Route::get('/service/edit/{id}', 'ServicePagesController@edit')->name('admin.service.edit');
    Route::put('/service/update/{id}', 'ServicePagesController@update')->name('admin.service.update');
    Route::delete('/service/destroy/{id}', 'ServicePagesController@destroy')->name('admin.service.destroy');

    Route::get('/portfolio/category', 'PortfolioPagesController@catcreate')->name('admin.portfolio.category');
    Route::post('/portfolio/category', 'PortfolioPagesController@catstore')->name('admin.portfolio.category');
    Route::delete('/portfolio/catdestroy/{id}', 'PortfolioPagesController@catdestroy')->name('admin.portfolio.catdestroy');
    Route::get('/portfolio/create', 'PortfolioPagesController@create')->name('admin.portfolio.create');
    Route::put('/portfolio/create', 'PortfolioPagesController@store')->name('admin.portfolio.store');
    Route::get('/portfolio/list', 'PortfolioPagesController@index')->name('admin.portfolio.list');
    Route::get('/portfolio/edit/{id}', 'PortfolioPagesController@edit')->name('admin.portfolio.edit');
    Route::put('/portfolio/update/{id}', 'PortfolioPagesController@update')->name('admin.portfolio.update');
    Route::delete('/portfolio/destroy/{id}', 'PortfolioPagesController@destroy')->name('admin.portfolio.destroy');
    
    Route::get('/testimonial/create', 'TestimonialPagesController@create')->name('admin.testimonial.create');
    Route::put('/testimonial/create', 'TestimonialPagesController@store')->name('admin.testimonial.store');
    Route::get('/testimonial/list', 'TestimonialPagesController@index')->name('admin.testimonial.list');
    Route::get('/testimonial/edit/{id}', 'TestimonialPagesController@edit')->name('admin.testimonial.edit');
    Route::put('/testimonial/update/{id}', 'TestimonialPagesController@update')->name('admin.testimonial.update');
    Route::delete('/testimonial/destroy/{id}', 'TestimonialPagesController@destroy')->name('admin.testimonial.destroy');

    Route::get('/team/create', 'TeamPagesController@create')->name('admin.team.create');
    Route::put('/team/create', 'TeamPagesController@store')->name('admin.team.store');
    Route::get('/team/list', 'TeamPagesController@index')->name('admin.team.list');
    Route::get('/team/edit/{id}', 'TeamPagesController@edit')->name('admin.team.edit');
    Route::put('/team/update/{id}', 'TeamPagesController@update')->name('admin.team.update');
    Route::delete('/team/destroy/{id}', 'TeamPagesController@destroy')->name('admin.team.destroy');

    Route::get('/about', 'AboutController@index')->name('admin.about');
    Route::put('/about', 'AboutController@update')->name('admin.about.update');

 });



