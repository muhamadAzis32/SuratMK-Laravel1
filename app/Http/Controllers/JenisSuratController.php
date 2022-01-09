<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use App\Models\SuratMasuk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class JenisSuratController extends Controller
{
    /*
    * JENIS SURAT
    */
    //view jenis surat
    public function viewJenis()
    {
        $dataJenis = JenisSurat::all();
        $suratMasuk = SuratMasuk::first();

        return view("jenis-surat.view-jenis", ['data' => $dataJenis], ['dt2'=> $suratMasuk]);
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
