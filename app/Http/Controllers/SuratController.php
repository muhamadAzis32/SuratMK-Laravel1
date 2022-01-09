<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use App\Models\jenisSurat as ModelsJenisSurat;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
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
        return view("index");
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

    /*
    * JENIS SURAT
    */
    //view jenis surat
    public function viewJenis()
    {
        $dataJenis = JenisSurat::all();
        return view("jenis-surat.view-jenis", ['data' => $dataJenis]);
    }
    //tambah jenis surat
    public function inputJenis()
    {
        return view("jenis-surat.input-jenis");
    }
    public function saveJenis(Request $x)
    {
        JenisSurat::create([
            'kodeSurat' => $x->kodeSurat,
            'keterangan' => $x->keterangan,
        ]);
        return redirect('/view-jenis');
    }
    //edit jenis surat
    public function editJenis($idJenis)
    {
        $dataJenis = JenisSurat::find($idJenis);
        return view("jenis-surat.edit-jenis", ['data' => $dataJenis]);
    }
    public function updateJenis($idJenis, Request $x)
    {
        JenisSurat::where("id", "$idJenis")->update([
            'kodeSurat' => $x->kodeSurat,
            'keterangan' => $x->keterangan,
        ]);
        return redirect('/view-jenis');
    }
    //Hapus jenis surat
    public function hapusJenis($idJenis)
    {
        JenisSurat::where('id', $idJenis)->delete();
        return redirect('/view-jenis');
    }

}
