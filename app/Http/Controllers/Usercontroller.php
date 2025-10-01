<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        //tambahkan data user dengan eloquent model
        $data = [
            'name' => 'pelanggan pertama',

        ];
        UserModel::where('username', 'custumer-1')->update($data);

        //coba akses model usermodel
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}


 // 'nama' => 'pelanggan',
            // 'password' => Hash::make('12345'),
            // 'level_id' => 4,
