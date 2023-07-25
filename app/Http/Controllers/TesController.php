<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    
    public function tampilkanSession(Request $request){
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');
            echo $request->session()->get('kelas');
            echo $request->session()->get('absen');
        }else{
            echo 'Tidak ada data dalam session.';
        }
    }

    public function buatSession(Request $request){
        $request->session()->put(['nama' => 'Dipta', 'kelas' => 'xii-rpl', 'absen' => '20']);
        echo "Data telah ditambahkan ke session";
    }

    public function hapusSession(Request $request){
        $request->session()->forget(['nama', 'kelas', 'absen']);
        echo "Data telah dihapus dari session";
    }
}
