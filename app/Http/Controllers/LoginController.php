<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Tampilan Login
    public function viewLogin(){
        return view('login');
    }

    //Proses login
    public function login(Request $a){
        $cek = $a->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($cek)){
            $a->session()->regenerate();
            return redirect()->intended('/surat');
        }

        return back()->with('LoginError', 'Maap! Gagal Login');
    }

    //logout
    public function logout(Request $a){
        Auth::logout();
        $a->session()->invalidate();
        $a->session()->regenerateToken();
        return redirect('view-login');
    }

    /*
    * DATA USER
    */

    /*view data user */
    public function viewUser()
    {
        $dataUsr = User::all();
        return view("user.view-user", ['data'=> $dataUsr]);
    }
    //input data user
    public function inputUser()
    {
        return view("user.input-user");
    }
    public function saveUser(Request $x){
        $file = $x->file('image');
        if (empty($file)) {
            User::create([
                'name' => $x->name,
                'email' => $x->email,
                'password' => $x->password,
            ]);
        } else {
            $nama_file = time() . "-" . $file->getClientOriginalName();
            $ekstensi = $file->getClientOriginalExtension();
            $ukuran = $file->getSize();
            $patAsli = $file->getRealPath();
            $namaFolder = 'file';
            $file->move($namaFolder, $nama_file);
            $pathPublic = $namaFolder . "/" . $nama_file;

            User::create([
                'name' => $x->name,
                'email' => $x->email,
                'password' => $x->password,
                'image' => $pathPublic,
            ]);
        }
        return redirect('/view-user');
    }
    //edit data user
    public function editUser()
    {
        return view("user.edit-user");
    }

}

