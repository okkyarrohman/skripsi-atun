<?php

<<<<<<< Updated upstream
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
=======
use App\Http\Controllers\ProfileController;
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Route;
use App\Models\User;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
<<<<<<< Updated upstream
    return view('Welcome', [
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


=======
    return view('auth.login');
});

>>>>>>> Stashed changes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

<<<<<<< Updated upstream

=======
>>>>>>> Stashed changes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< Updated upstream
=======
Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('admin/tambah',function (){
        return view('admin.tambah');
    })->name('admin.tambah');
    Route::get('admin/tugas',function (){
        return view('admin.tugas.tugas');
    })->name('admin.tugas.tugas');
    Route::get('admin/tugas/tambah',function (){
        return view('admin.tugas.tambah');
    })->name('admin.tugas.tambah');
    Route::get('admin/tugas/detail',function (){
        return view('admin.tugas.detail');
    })->name('admin.tugas.detail');
    Route::get('admin/tugas/hasil',function (){
        return view('admin.tugas.hasil');
    })->name('admin.tugas.hasil');
    Route::get('admin/kelompok',function (){
        return view('admin.kelompok.kelompok');
    })->name('admin.kelompok.kelompok');
    Route::get('admin/materi',function (){
        return view('admin.Materi.index');
    })->name('admin.Materi.index');
});

Route::middleware(['auth', 'verified', 'role:siswa'])->group(function () {
    Route::get('siswa', function () {
        return view('siswa.dashboard');
    })->name('siswa.dashboard');
    Route::get('siswa/kelompok', function () {
        return view('siswa.kelompok.kelompok');
    })->name('siswa.kelompok.kelompok');
    Route::get('siswa/kelompok/detail', function () {
        return view('siswa.kelompok.detail');
    })->name('siswa.kelompok.detail');
    Route::get('siswa/kelompok/detailketua', function () {
        return view('siswa.kelompok.ketua.detail');
    })->name('siswa.kelompok.ketua.detail');
    Route::get('siswa/kelompok/detailketua/tambah', function () {
        return view('siswa.kelompok.ketua.tambah');
    })->name('siswa.kelompok.ketua.tambah');
    Route::get('siswa/tugas', function () {
        return view('siswa.tugas.tugas');
    })->name('siswa.tugas.tugas');
    Route::get('siswa/tugas/detail', function () {
        return view('siswa.tugas.detail');
    })->name('siswa.tugas.detail');
    
});

Route::middleware(['auth', 'verified', 'role:guru'])->group(function () {
    Route::get('guru', function () {
        return view('guru.dashboard');
    })->name('guru.dashboard');
    // Kelompok View
    Route::get('guru/kelompok', function () {
        return view('guru.kelompok.kelompok');
    })->name('guru.kelompok.kelompok');

    Route::get('guru/kelompok/detail',function (){
        return view('guru.kelompok.detail');
    })->name('guru.kelompok.detail');

    // Tugas view
    Route::get('guru/tugas', function () {
        return view('guru.tugas.tugas');
    })->name('guru.tugas.tugas');

    Route::get('guru/tugas/detail',function (){
        return view('guru.tugas.detail');
    })->name('guru.tugas.detail');

    Route::get('guru/tugas/detail/hasil',function (){
        return view('guru.tugas.hasil');
    })->name('guru.tugas.hasil');
    // Materi View
    Route::get('guru/materi', function () {
        return view('guru.Materi.index');
    })->name('guru.Materi.index');
    Route::get('guru/materi/detail', function () {
        return view('guru.Materi.detail');
    })->name('guru.Materi.detail');
});

>>>>>>> Stashed changes
require __DIR__.'/auth.php';
