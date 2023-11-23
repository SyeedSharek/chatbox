<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat(){

        return view('welcome');
    }

    public function dashboar_view(){
        $users = User::all();
        return view('dashboard',compact('users'));
    }
}
