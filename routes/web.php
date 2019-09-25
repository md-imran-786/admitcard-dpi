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


// Route::get('/typography',function (){
//     return view('dashboard.pages.typography');
// });

//base element

Route::get('/base-breadcrumb',function(){
    return view('dashboard.pages.base.base-breadcrumb');
});

Route::get('/base-cards',function(){
    return view('dashboard.pages.base.base-cards');
});

Route::get('/base-carousel',function(){
    return view('dashboard.pages.base.base-carousel');
});

Route::get('/base-collapse',function(){
    return view('dashboard.pages.base.base-collapse');
});

Route::get('/base-forms',function(){
    return view('dashboard.pages.base.base-forms');
});

Route::get('/base-jumbotron',function(){
    return view('dashboard.pages.base.base-jumbotron');
});

Route::get('/base-list-group',function(){
    return view('dashboard.pages.base.base-list-group');
});

Route::get('/base-navs',function(){
    return view('dashboard.pages.base.base-navs');
});

Route::get('/base-pagination',function(){
    return view('dashboard.pages.base.base-pagination');
});

Route::get('/base-popovers',function(){
    return view('dashboard.pages.base.base-popovers');
});

Route::get('/base-progress',function(){
    return view('dashboard.pages.base.base-progress');
});

Route::get('/base-scrollspy',function(){
    return view('dashboard.pages.base.base-scrollspy');
});

Route::get('/base-switches',function(){
    return view('dashboard.pages.base.base-switches');
});

Route::get('/base-tables',function(){
    return view('dashboard.pages.base.base-tables');
});

Route::get('/base-tabs',function(){
    return view('dashboard.pages.base.base-tabs');
});

Route::get('/base-tooltips',function(){
    return view('dashboard.pages.base.base-tooltips');
});

//sample buttons
Route::get('/buttons-buttons',function(){
    return view('dashboard.pages.buttons.buttons-buttons');
});
Route::get('/buttons-button-group',function(){
    return view('dashboard.pages.buttons.buttons-button-group');
});
Route::get('/buttons-dropdowns',function(){
    return view('dashboard.pages.buttons.buttons-dropdowns');
});
Route::get('/buttons-brand-buttons',function(){
    return view('dashboard.pages.buttons.buttons-brand-buttons');
});

//charts
Route::get('/charts',function(){
    return view('dashboard.pages.charts');
});

//icons
Route::get('/icons-coreui-icons',function(){
    return view('dashboard.pages.icons.icons-coreui-icons');
});
Route::get('/icons-flags',function(){
    return view('dashboard.pages.icons.icons-flags');
});
Route::get('/icons-font-awesome',function(){
    return view('dashboard.pages.icons.icons-font-awesome');
});
Route::get('/icons-simple-line-icons',function(){
    return view('dashboard.pages.icons.icons-simple-line-icons');
});

//notifications
Route::get('/notifications-alerts',function (){
    return view('dashboard.pages.notifications.notifications-alerts');
});
Route::get('/notifications-badge',function (){
    return view('dashboard.pages.notifications.notifications-badge');
});
Route::get('/notifications-modals',function (){
    return view('dashboard.pages.notifications.notifications-modals');
});

Route::get('/widgets',function (){
    return view('dashboard.pages.widgets');
});

Route::get('/login',function (){
    return view('dashboard.pages.login');
});

Route::get('/404',function (){
    return view('dashboard.pages.404');
});

Route::get('/500',function (){
    return view('dashboard.pages.500');
});

Route::get('/register',function (){
    return view('dashboard.pages.register');
});
