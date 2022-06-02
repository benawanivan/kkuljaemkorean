<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Slider;
use App\Models\Clock;

class HomeController extends Controller
{
    public function home()
    {
        $images = DB::table('slider')->get();
        return view('index', ['images' => $images]);
    }

    public function pemula()
    {
        return view('homepage/pemula');
    }
    public function dasar()
    {
        return view('homepage/kelasdasar');
    }
    public function percakapan()
    {
        return view('homepage/kelaspercakapan');
    }

    public function menengah()
    {
        return view('homepage/menengah');
    }
    
    public function intensif1()
    {
        return view('homepage/intensif1');
    }

    public function intensif2()
    {
        return view('homepage/intensif2');
    }

    public function lanjutan()
    {
        return view('homepage/lanjutan');
    }

    public function topik()
    {
        return view('homepage/topik');
    }

    public function caradaftar()
    {
        return view('homepage/caradaftar');
    }
    
    public function starclass()
    {
        $clock = DB::table('clock')->first();
        return view('homepage/starclass', ['clock' => $clock]);
       
    }
    
    public function tentangbuku()
    {
        $clock = DB::table('clock')->first();
        return view('homepage/tentangbuku');
       
    }

    public function audiofile()
    {
        return view('homepage/audiofile');
       
    }

    public function kkuljaemedu()
    {
        return view('homepage/kkuljaemedu');
       
    }
}
