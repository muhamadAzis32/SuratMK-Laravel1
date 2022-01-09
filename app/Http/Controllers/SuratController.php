<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use App\Models\jenisSurat as ModelsJenisSurat;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use App\Models\User;
use Illuminate\Support\Facades\File;

class SuratController extends Controller
{
    //View Layout
    public function Main()
    {
        return view("layouts.main");
    }
    //View Halaman Utama
    public function index()
    {
        $suratMasuk = SuratMasuk::count();
        $user = User::count();
        return view("index", compact('suratMasuk'), compact('user'));
    }

}
