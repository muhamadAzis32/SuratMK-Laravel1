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
    //View Login
    public function viewLogin()
    {
        return view("login");
    }

    /*
    * SURAT KELUAR
    */
    //view surat keluar
    public function viewSk()
    {
        return view("surat-k.view-sk");
    }
    //Input surat keluar
    public function inputSk()
    {
        return view("surat-k.input-sk");
    }
    //Edit surat keluar
    public function editSk()
    {
        return view("surat-k.edit-sk");
    }
}
