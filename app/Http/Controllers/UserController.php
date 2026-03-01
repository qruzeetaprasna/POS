<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function profile($id, $nama){
        return view('user.profile')
            ->with('name', $nama)
            ->with('id', $id);
    }

    public function index(){
        $data=[
            'username' => 'Pelanggan Pertama',

        ];
        UserModel::where('username', 'costumer-1')->update($data);


        $user = UserModel::all();
        return view('user.user', ['data'=> $user]);
    }
}
