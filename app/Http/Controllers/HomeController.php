<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function guru()
    {

        return Inertia::render('Guru/Dashboard');
    }

    public function siswa()
    {

        return Inertia::render('Siswa/Dashboard');
    }
}
