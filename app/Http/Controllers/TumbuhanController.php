<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TumbuhanController extends Controller
{
    // Method untuk menampilkan data tumbuhan
    public function tumbuhan()
    {
        // Mengambil data dari tabel tumbuhan dengan pagination
        $tumbuhan = DB::table('tumbuhan')->paginate(10);

        // Mengirim data tumbuhan ke view 'tumbuhan'
        return view('tumbuhan', ['tumbuhan' => $tumbuhan]);
    }

    // Method untuk menampilkan form tambah tumbuhan
    public function tambahtumbuhan()
    {
        // Memanggil view 'tambahtumbuhan'
        return view('tambahtumbuhan');
    }

    // Method untuk menyimpan data tumbuhan ke database
    public function storetumbuhan(Request $request)
    {
        // Insert data ke tabel tumbuhan
        DB::table('tumbuhan')->insert([
            'namatumbuhan' => $request->namatumbuhan,
            'jumlahtumbuhan' => $request->jumlahtumbuhan,
            'tersedia' => $request->tersedia,
        ]);

        // Alihkan halaman ke halaman daftar tumbuhan
        return redirect('pegawai/tumbuhan');
    }

    // Method untuk menampilkan form edit data tumbuhan
    public function edittumbuhan($id)
    {
        // Mengambil data tumbuhan berdasarkan id
        $tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan', '=', $id)->get();

        // Passing data tumbuhan ke view 'edittumbuhan'
        return view('edittumbuhan', ['tumbuhan' => $tumbuhan]);
    }

    // Method untuk mengupdate data tumbuhan
    public function updatetumbuhan(Request $request)
    {
        // Update data tumbuhan
        DB::table('tumbuhan')->where('kodetumbuhan', $request->id)->update([
            'namatumbuhan' => $request->namatumbuhan,
            'jumlahtumbuhan' => $request->jumlahtumbuhan,
            'tersedia' => $request->tersedia,
        ]);

        // Alihkan halaman ke halaman daftar tumbuhan
        return redirect('/pegawai/tumbuhan');
    }

    // Method untuk menghapus data tumbuhan
    public function hapustumbuhan($id)
    {
        // Menghapus data tumbuhan berdasarkan id
        DB::table('tumbuhan')->where('kodetumbuhan', $id)->delete();

        // Alihkan halaman ke halaman daftar tumbuhan
        return redirect('/pegawai/tumbuhan');
    }

    // Method untuk mencari data tumbuhan
    public function caritumbuhan(Request $request)
    {
        // Menangkap data pencarian
        $caritumbuhan = $request->caritumbuhan;

        // Mengambil data dari tabel tumbuhan sesuai pencarian
        $tumbuhan = DB::table('tumbuhan')
            ->where('namatumbuhan', 'like', "%" . $caritumbuhan . "%")
            ->paginate();

        // Mengirim data tumbuhan ke view 'tumbuhan'
        return view('tumbuhan', ['tumbuhan' => $tumbuhan]);
    }
}
