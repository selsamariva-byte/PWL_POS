<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class levelcontroller extends Controller
{
    public function index()
    {
        //DB::insert('insert into m_level (level_kode, level_nama, created_at)
        // values (?, ?, ?)', ['CUS', 'pelanggan', now()]);
        //return 'insert data berhasil';

        // $row = DB::update(
        //     'update m_level set level_nama = ? where level_kode = ?',
        //     ['customer', 'CUS']
        // );
        // return 'update data berhasil. jumlah data yang diupdate: ' . $row;

        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return 'delete data berhasil. jumlah data yang dihapus: ' . $row . ' baris ';

        $data = DB::select('select * from m_level');
        return view('level', ['data' => $data]);
    }
}
