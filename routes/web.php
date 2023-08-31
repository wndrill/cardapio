<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function(){
    return view('welcome');
});

Route::get('/login', function(){
    return view('login');
})->name('login')->middleware('guest');

Route::get('/register', function(){
    return view('cadastro');
})->name('register')->middleware('guest');

Route::controller(UserController::class)->middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/food/{id}/destroy', 'destroy')->name('food.destroy');
    Route::get('/food/{id}/edit', 'edit')->name('food.edit');
    Route::put('/food/{id}', 'update')->name('food.update');
    Route::get('/logout', function(){
        Auth::logout();
        return redirect(route('home'));
    })->name('user.logout');
});

/*
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
*/





Route::get('auth/{provider}/callback', [ProviderController::class, 'callback'])->name('callback');
Route::get('auth/{provider}/redirect', [ProviderController::class, 'redirect'])->name('redirect');