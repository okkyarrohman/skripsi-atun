<?php

namespace App\Http\Controllers;

use App\Models\Modul;
use App\Models\Simulasi;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function guru()
    {
        $simulasis = Simulasi::latest()->take(4)->get();
        $moduls = Modul::latest()->take(4)->get();
        $materis = $moduls->merge($simulasis)->take(4);

        $siswas = User::role('siswa')->where('kelas', Auth::user()->kelas)->get();

        return view('guru.dashboard', compact('materis', 'siswas'));
    }

    public function siswa()
    {
        $simulasis = Simulasi::latest()->take(4)->get();
        $moduls = Modul::latest()->take(4)->get();
        $materis = $moduls->merge($simulasis)->take(4);

        return view('siswa.dashboard', compact('materis'));
    }

    public function admin()
    {
        $siswas = User::role('siswa')->get();
        $gurus = User::role('guru')->get();

        return view('admin.dashboard', compact('siswas', 'gurus'));
    }
}
