<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class karyawan1Controller extends Controller
{
    //
    public function karyawan1()
    {
    	// mengambil data dari table pegawai
    	$karyawan1 = DB::table('karyawan1')->get(); //hasilnya adalah array 2D, ini langsung manggil nama table, kalo ga pake pagination pake ini pas eas, klo ada tombol box(?) pake get bkn pagination


    	// mengirim data pegawai ke view index
    	return view('indexkaryawan',['karyawan1'=>$karyawan1]);

    }

    // method untuk menampilkan view form tambah pegawai
public function tambahdata()
{

	// memanggil view tambah
	return view('tambahdata');

}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
    DB::table('karyawan1')->insert([
		'NIP' => $request->NIP,
        'Nama' => $request->Nama,
		'Pangkat' => $request->Pangkat,
		'Gaji' => $request->Gaji,

	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/indexkaryawan');

}


// method untuk hapus data pegawai
public function hapusdata($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('karyawan1')->where('NIP',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/indexkaryawan');
}
}
