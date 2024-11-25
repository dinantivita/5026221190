<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    /* PAKE PUBLIC BIAR BISA DIPANGGIL DI ROUTE */
    public function index(){
        return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
    }

    public function blog(){
        return view('blog');
    }

    public function biodata(){
        $nama = "Dinanti Vita Rachman";
        $umur = 20;
        $hasil = 20 + 22;
        $matkul = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view('biodata',['nama' => $nama, 'umur' => $umur, 'hasil' => $hasil, 'matkul'=> $matkul]);
}
}
