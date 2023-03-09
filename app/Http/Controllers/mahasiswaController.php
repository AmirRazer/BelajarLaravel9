<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function dataMahasiswa(){
        $m1 = "Rizki"; $am1 = 'bandung';
        $m2 = 'siti'; $am2 = 'jakarta';

        return view ('daftar_mahasiswa',compact('m1','am1','m2','am2'));
    }

    public function nilaiMahasiswa()
    {
        $no=1;
        $s1 = ['nama' =>'Amir','nilai' => '85'];
        $s2 = ['nama' =>'Rizki','nilai' => '55'];
        $s3 = ['nama' =>'Siti','nilai' => '45'];
        $s4 = ['nama' =>'Rahmat','nilai' => '65'];
        // $judul = ['no','nama','nilai','keterangan'];

        $siswa = [$s1,$s2,$s3,$s4];

        return view ('nilai_mahasiswa',compact('no','siswa'));


    }
}
