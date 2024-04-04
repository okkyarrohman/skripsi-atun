<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'siswa' => User::role('siswa')->first(),
        'guru' => User::role('guru')->first(),
    ]);
});


// Route Guru
Route::group(['middleware' => 'role:guru'], function () {
    Route::prefix('guru')->group(function () {
        Route::get('/guru/dashboard', [HomeController::class, 'guru'])->name('dashboard.guru');
        Route::get('/LKPD', function() {
            return view('guru.LKPD');
        });
        Route::get('/kuis', function() {
            return view('guru.kuis');
        });
        Route::get('/materi', function() {
            return view('guru.materi');
        });
        Route::get('/kelompok', function() {
            return view('guru.kelompok');
        });
        Route::get('/modul', function() {
            return view('guru.modul');
        });
        Route::get('/LKPD/tambah_modul', function() {
            return view('guru.Tugas.tambah-tugas');
        });
        
    });
});

// Route Siswa
Route::group(['middleware' => 'role:siswa'], function () {
    Route::prefix('siswa')->group(function () {
        Route::get('/siswa/dashboard', [HomeController::class, 'siswa'])->name('dashboard.siswa');
        Route::get('/LKPD', function() {
            return view('siswa.LKPD');
        });
        Route::get('/kuis', function() {
            return view('siswa.kuis');
        });
        Route::get('/materi', function() {
            return view('siswa.materi');
        });
        Route::get('/kelompok', function() {
            return view('siswa.kelompok');
        });
    });
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
