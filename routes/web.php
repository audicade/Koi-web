<?php

use App\Models\User;
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

Route::get('/login', function () {
   return redirect('login');
});

Route::get('/', function () {
    return view('landing.index');
})->name('index');
Route::get('/event-details', function () {
    return view('landing.event-details');
})->name('event-details');
Route::get('/lsidebar', function () {
    return view('landing.left-sidebar');
})->name('leftSidebar');
Route::get('/rsidebar', function () {
    return view('landing.right-sidebar');
})->name('rightSidebar');
Route::get('/nosidebar', function () {
    return view('landing.no-sidebar');
})->name('noSidebar');

Route::get('/blank', function () {
    return view('admin.blank');
})->name('blank');

Auth::routes();

Route::get('/main', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::put('/profile/{id}', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('profile.update');
Route::put('/profile/password/{id}', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('profile.update.password');
Route::put('/profile/image/{id}', [App\Http\Controllers\UserController::class, 'updateImage'])->name('profile.update.image');
Route::resource('post',App\Http\Controllers\PostController::class);Route::resource('event',App\Http\Controllers\EventController::class);
Route::resource('handler',App\Http\Controllers\HandlerController::class);Route::resource('kota',App\Http\Controllers\KotaController::class);Route::resource('kategori',App\Http\Controllers\KategoriController::class);Route::resource('varietas',App\Http\Controllers\VarietasController::class);Route::resource('entry',App\Http\Controllers\EntryController::class);
