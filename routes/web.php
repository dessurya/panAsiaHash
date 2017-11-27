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

// frontend
	Route::get('/', 'Frontend\FrontendController@home')
		->name('frontend.home');
	Route::get('/gallery', 'Frontend\FrontendController@gallery')
		->name('frontend.gallery');
	Route::get('/goverment-message', 'Frontend\FrontendController@govermentMessage')
		->name('frontend.goverment-message');
	Route::get('/register-and-payment', 'Frontend\FrontendController@registerPayment')
		->name('frontend.registerPayment');
	Route::get('/schedule', 'Frontend\FrontendController@schedule')
		->name('frontend.schedule');
	Route::get('/commitee', 'Frontend\FrontendController@commitee')
		->name('frontend.commitee');
	Route::get('/who-coming', 'Frontend\FrontendController@coming')
		->name('frontend.coming');
// frontend

// backend
	Route::prefix('admin')->group(function(){

		Route::get('login', 'Auth\LoginController@showLoginForm')->name('loginForm');
	    Route::post('login', 'Auth\LoginController@login')->name('login');
	    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

	    // Middleware Auth
	    	Route::middleware(['auth'])->group(function(){
		    	// inbox
		    		Route::get('inbox', 'Backend\InboxController@index')
		    			->name('backend.inbox');
		    	// inbox
		    	// gallery
		    		Route::get('gallery', 'Backend\GalleryController@index')
		    			->name('backend.gallery');
		    		Route::post('gallery/store', 'Backend\GalleryController@store')
		    			->name('backend.gallery.store');
		    		Route::get('gallery/flag-publish/{id}', 'Backend\GalleryController@flagPublish')
		    			->name('backend.gallery.FP');
		    		Route::get('gallery/delete/{id}', 'Backend\GalleryController@delete')
		    			->name('backend.gallery.delete');
		    	// gallery
		    	// users
		    		Route::get('user', 'Backend\UserController@index')
		    			->name('backend.user');
		    		Route::get('user/reset-password/{id}', 'Backend\UserController@resetPassword')
		    			->name('backend.user.resetpassword');
		    		Route::get('user/delete/{id}', 'Backend\UserController@delete')
		    			->name('backend.user.delete');
		    		Route::get('user/status/{id}', 'Backend\UserController@status')
		    			->name('backend.user.status');
		    		Route::post('user/store', 'Backend\UserController@add')
		    			->name('backend.user.store');
		    		Route::post('user/update/me', 'Backend\UserController@update')
		    			->name('backend.user.update');
		    	// users
	    	});
	    // Middleware Auth

	});
// backend

