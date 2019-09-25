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
    return view('dashboard.index');
})->name('home');

// Route::get('/colors',function (){
//     return view('dashboard.pages.colors');
// });
Route::get('/form',function (){
    return view('front-end.form.index');
});

Route::get('/form/view',function (){
    return view('front-end.form.view');
});

Route::get('/payments',function (){
    return view('front-end.form.payment');
});

Route::get('/accounts',function (){
    return view('dashboard.account.index');
});


Route::get('/clear',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
});
