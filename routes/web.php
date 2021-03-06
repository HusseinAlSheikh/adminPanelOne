<?php

use App\Http\Controllers\UserController;
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

Route::get('/test',function (){
    return view('testComponent');
})->name('testComponent');

Route::middleware('auth')->group(function()
{
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('users', [UserController::class, 'index'])->name('users');
//    Route::get('profile', [\App\Models\User::class, 'create'])->name('user.profile');
});

require __DIR__.'/auth.php';
