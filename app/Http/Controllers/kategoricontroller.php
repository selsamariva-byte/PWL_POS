<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoricontroller extends Controller
{
    public function index()
    {
        //   $data = [
        //         'kategori_kode' => 'SNK',
        //         'kategori_nama' => 'snack/makanan ringan',
        //         'created_at' => now()
        //     ];
        //     DB::table('m_kategori')->insert($data);
        //     return 'insert data baru berhasil';

        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'cemilan']);
        // return 'update data berhasil, jumlah data yang diupdate: ' . $row . ' baris';


        // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'cemilan']);
        // return 'delate data berhasil, jumlah data yang diupdate: ' . $row . ' baris';


        $data = DB::table('m_kategori')->get();
        return view('kategori', ['data' => $data]);
    }
}
//
