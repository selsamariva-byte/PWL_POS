<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\LevelModel; // ✅ tambahkan baris ini

class LevelController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Daftar Level',
            'list'  => ['Home', 'Level User']
        ];

        $page = (object)[
            'title' => 'Daftar level pengguna sistem'
        ];

        $activeMenu = 'level'; // set menu aktif
        return view('level.index', compact('breadcrumb', 'page', 'activeMenu'));
    }

    public function list(Request $request)
    {
        $data = LevelModel::select(['level_id', 'level_kode', 'level_nama']);
        return datatables()->of($data)
            ->addIndexColumn()
            ->addColumn('aksi', function ($level) {
                return '<a href="' . url('level/' . $level->level_id . '/edit') . '" class="btn btn-sm btn-warning">Edit</a>';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
}
