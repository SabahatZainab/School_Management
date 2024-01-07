<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PermissionController;

// use Spatie\Permission\Middlewares\PermissionMiddleware;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();



// Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);


Route::group(['middleware' => ['auth']], function () {

    // Route::get('/logout', function(){
    //     Auth::logout();
    // });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('profile/{id}', [App\Http\Controllers\UserController::class, 'profile'])->name('user_profile');
    Route::post('profile/data/{id}', [App\Http\Controllers\UserController::class, 'saveData'])->name('save_data');
    Route::resource('roles', RoleController::class);
    /*     Route::get('users', [UserController::class, 'index'])->name('users.index');
        Route::get('users', [UserController::class, 'create'])->name('users.create');
        Route::post('users', [UserController::class, 'store'])->name('users.store'); */

    // Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('permissions', PermissionController::class);
    // Route::resource('teachers', TeacherController::class);

    Route::controller(UserController::class)->group(function () {
        Route::get('users/', 'index')->name('users.index');
        Route::get('users/create', 'create');
        Route::post('users/store', 'store')->name('users.store');
        Route::post('users/update', 'update')->name('users.update');
        Route::post('users/destroy/{id}', 'destroy');
        Route::get('users/edit/{id}', 'edit');
        Route::get('users/show/{id}', 'show');
        Route::get('users/profile', 'profile')->name('profile');
    });
});

