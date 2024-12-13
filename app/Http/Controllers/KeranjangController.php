<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    //
    public function keranjang()
    {
    	// mengambil data dari table pegawai
    	$keranjang = DB::table('keranjangbelanja')->get(); //hasilnya adalah array 2D, ini langsung manggil nama table, kalo ga pake pagination pake ini pas eas, klo ada tombol box(?) pake get bkn pagination


    	// mengirim data pegawai ke view index
    	return view('keranjang',['keranjang' => $keranjang]);

    }

    // method untuk menampilkan view form tambah pegawai
public function beli()
{

	// memanggil view tambah
	return view('beli');

}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
    DB::table('keranjangbelanja')->insert([
		'KodeBarang' => $request->kodebarang,
		'Jumlah' => $request->jumlahpembelian,
		'Harga' => $request->hargaperitem,

	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/keranjang');

}


// method untuk hapus data pegawai
public function batal($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('keranjangbelanja')->where('ID',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/keranjang');
}
}
