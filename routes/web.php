<?php

use App\Livewire\Homepage;
use App\Livewire\ProductsPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\ProductDetailPage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\PaystackController;
use App\Livewire\MyAccount;


Route::get('/', Homepage::class);
Route::get('/products-page', ProductsPage::class);

Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/forgot-password', ForgotPasswordPage::class);


Route::middleware('auth')->group(function(){
    Route::get('/logout', function () {
        auth()->logout();
        return redirect('/');
    });
    Route::get('/my-account', MyAccount::class);

    Route::get('callback', [PaystackController::class, 'callback'])->name('callback');
    Route::get('success', [PaystackController::class, 'success'])->name('success');
    Route::get('cancel', [PaystackController::class, 'cancel'])->name('cancel');
    Route::get('/products-page/{name}', ProductDetailPage::class);


});