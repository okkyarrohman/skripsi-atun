<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // public function index() {
    //     if(Auth::id());
    //     {
    //         $id=Auth()->user()->id;

    //         if($id==1)
    //         {
    //             return view('guru.dashboard');
    //         }

    //         else if($id==2)
    //         {
    //             return view('siswa.dashboard');
    //         }
    //         else 
    //         {
    //             return redirect()->back();
    //         }
    //     }
    // }
        
    public function guru()
    {

         return view('guru.Dashboard');
    }

    public function siswa()
    {

        return view('siswa.Dashboard');
    }
}
