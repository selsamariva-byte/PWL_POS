<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::findOr(20, ['username', 'nama'], function () {
            abort(404);
        });
        return view('user', ['data' => $user]);
    }
}    
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'manager_3',
        //     'pasword' => Hash::make('12345'),
        // ];
        //

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
    


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

//  UserModel::where('username', 'pelanggan1')->update($data);
//         $user = UserModel::all();
//         return view('user', ['data' => $user]);