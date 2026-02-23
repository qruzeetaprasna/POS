<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($id, $nama){
        return view('user.profile')
            ->with('name', $nama)
            ->with('id', $id);
    }
}
