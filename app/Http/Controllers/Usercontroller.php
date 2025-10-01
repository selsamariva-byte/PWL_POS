<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'pelanggan 1',
        ];
        UserModel::where('username', 'pelanggan1')->update($data);
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}

//UserModel::insert($data);
// $data = [
//             'username' => 'custumer-1',
//             'nama' => 'pelanggan pertama ',
//             'level_id' => 4,
//             'password' => Hash::make('costomer1234'),
//             'created_at' => now()
//         ];
//         //UserModel::insert($data);

//         $user = UserModel::all();
//         return view('user', ['data' => $user]);