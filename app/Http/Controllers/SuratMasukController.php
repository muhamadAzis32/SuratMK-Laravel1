<?php

namespace App\Http\Controllers;

use App\Models\JenisSurat;
use Illuminate\Http\Request;
use App\Models\SuratMasuk;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SuratMasukController extends Controller
{

    /*
    * SURAT MASUK
    */
    //view surat masuk
    public function viewSm()
    {
        $dataSm = SuratMasuk::all();
        return view("surat-m.view-sm", ['data' => $dataSm]);
    }

    //Input surat masuk
    public function inputSm()
    {
        $dataSm = JenisSurat::all();
        return view("surat-m.input-sm", ['data' => $dataSm]);
    }
    public function saveSm(Request $x)
    {
        $file = $x->file('file');
        if (empty($file)) {
            SuratMasuk::create([
                'noSmasuk' => $x->noSmasuk,
                'tglMasuk' => $x->tglMasuk,
                'pengirim' => $x->pengirim,
                'jenisSurat_id' => $x->jenisSurat_id,
            ]);
        } else {
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $ekstensi = $file->getClientOriginalExtension();
            $ukuran = $file->getSize();
            $patAsli = $file->getRealPath();
            $namaFolder = 'file';
            $file->move($namaFolder, $nama_file);
            $pathPublic = $namaFolder . "/" . $nama_file;

            SuratMasuk::create([
                'noSmasuk' => $x->noSmasuk,
                'tglMasuk' => $x->tglMasuk,
                'pengirim' => $x->pengirim,
                'jenisSurat_id' => $x->jenisSurat_id,
                'file' => $pathPublic,
            ]);
        }
        return redirect('/view-sm')->with('toast_success', 'Data berhasil tambah!');
    }

    //Edit surat masuk
    public function editSm($idSmasuk)
    {
        $dataJenis = JenisSurat::all();
        $dataSm = SuratMasuk::find($idSmasuk);
        return view("surat-m.edit-sm", ['data' => $dataSm], ['jenis' => $dataJenis]);
    }
    public function updateSm($idSmasuk, Request $x)
    {
        $file = $x->file('file');
        if (file_exists($file)) {
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $folder = 'file';
            $file->move($folder, $nama_file);
            $path = $folder . "/" . $nama_file;
            //delete
            $data = SuratMasuk::where('id', $idSmasuk)->first();
            File::delete($data->file);
        } else {
            $path = $x->pathFile;
        }
        SuratMasuk::where("id", "$idSmasuk")->update([
            'noSmasuk' => $x->noSmasuk,
            'tglMasuk' => $x->tglMasuk,
            'pengirim' => $x->pengirim,
            'jenisSurat_id' => $x->jenisSurat_id,
            'file' => $path,
        ]);
        return redirect('/view-sm')->with('toast_success', 'Data berhasil di update!');
    }

    //hapus surat masuk
    public function hapusSm($idSmasuk)
    {
        $data = SuratMasuk::where('id', $idSmasuk)->first();
        File::delete($data->file);
        SuratMasuk::where('id', $idSmasuk)->delete();

        return redirect('/view-sm')->with('toast_success', 'Data berhasil di hapus!');
    }


}
