<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\MemberController;

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

// // Login routes
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [LoginController::class, 'login']);

// // Logout route
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

//dashboard admin
Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('/admin2', function () {
    return view('admin.dashboard2');
});
Route::get('/admin3', function () {
    return view('admin.dashboard3');
});

//Pages
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/our-services', function () {
    return view('our-services');
});
Route::get('/course', function () {
    return view('course');
});
Route::get('/choose', function () {
    return view('choose');
});
Route::get('/admission-requirement', function () {
    return view('admission-requirement');
});
Route::get('/admission', function () {
    return view('admission');
});
Route::get('/success', function () {
    return view('success');
});
Route::get('/strength', function () {
    return view('strength');
});
Route::get('/job', function () {
    return view('job');
});
Route::get('/career', function () {
    return view('career');
});
Route::get('/thinking', function () {
    return view('thinking');
});
Route::get('/trainning', function () {
    return view('trainning');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/branches', function () {
    return view('branches');
});
Route::get('/Gallery', function () {
    return view('Gallery');
});
Route::get('/publication', function () {
    return view('publication');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/committee', function () {
    return view('committee');
});
Route::get('/member', function () {
    return view('member');
});

