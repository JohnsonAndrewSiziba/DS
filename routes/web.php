<?php

use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return view('welcome');
//});

Route::name('website.')->group(function () {
    Route::get('/', [App\Http\Controllers\Website\WebsiteController::class, 'home'])->name('home');

});


Route::middleware(['auth'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\Dashboard\DashboardController::class, 'index'])->name('home');

    Route::resource('users', App\Http\Controllers\Admin\Users\UsersResource::class);
    Route::resource('companies', App\Http\Controllers\Admin\Companies\CompaniesResource::class);
    Route::resource('deeds', App\Http\Controllers\Admin\Deeds\DeedsResource::class);
    Route::resource('logs', App\Http\Controllers\Admin\Logs\LogsResource::class);
    Route::resource('messages', App\Http\Controllers\Admin\Messages\MessagesResource::class);
    Route::resource('profile', App\Http\Controllers\Admin\Profile\ProfileResource::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

