<?php

//use App\Http\Controllers\UserController as ControllersUserController;
use Illuminate\Support\Facades\Route;
//use Laravel\Fortify\Http\Controllers\UserController;
//use Laravel\fortify\src\Http\Controllers\UserController;

// use App\Mail\ReferredEmailNotification;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use Laravel\Fortify\Http\Controllers\UserController as ControllersUserController;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\CheckLanguage;

use App\Livewire\ReferredFormInvitation;
use App\Http\Controllers\ProductController;

use Laravel\Fortify\Http\Controllers\ContractController;

Route::get('/', function () {
    return view('welcome');    
})->middleware([CheckLanguage::class]);

Route::get('/lang/{language}', function ($language) {    
    Session::put('language', $language);
    //Session::setLocale('language', $language);
    return redirect()->back();
})->name('language');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard')->middleware([CheckLanguage::class]);

    
    Route::get('/referred-invitation', [ControllersUserController::class, 'referred_invitation'])->name('referred-invitation');

    Route::post('/invitation', [ControllersUserController::class, 'invitation'])->name('invitation');
    
    Route::get('/products_list', [ProductController::class, 'index'])->name('products_list');

    Route::get('/products', [ProductController::class, 'marketplace'])->name('products');
    
    Route::get('/product/{id?}', [ProductController::class, 'product_buy']);

    Route::get('/contract_list/{id?}', [ContractController::class, 'list'])->name('contract_list');
    
    Route::get('/contracts', [ContractController::class, 'index'])->name('contracts');

    Route::post('/checkout', [ContractController::class, 'store'])->name('checkout');

    
});

// require_once __DIR__ . '/jetstream.php';

