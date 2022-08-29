<?php

use App\Http\Controllers\AdminCreateUserFormFieldController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('adminPanel.index');
    })->name('dashboard');
});


//panel routes

Route::prefix('dashboard')->middleware('auth')->group(function () {
    //migrate and seed database
    Route::get('/mrs', function () {
        Artisan::call('migrate:refresh');
        echo 'migration done.';
        Artisan::call('db:seed');
        echo 'database seed done.';
        return back();
    })->name('migrate-refresh');
    // = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =

    //user form fields
    Route::get('/RegisterFormPermissions', [AdminCreateUserFormFieldController::class, 'createNewUser'])->name('RegisterFormPermissions');
});

Route::get('/createuser', function () {
    return view('adminPanel.users.create');
});