

Route::get('/accounts',function (){
    return view('dashboard.account.index');
});



Route::get('/clear',function(){
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
});


