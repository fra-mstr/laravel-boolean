<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
  public function index(){
    $users = User::all();
    // dd($users);

    return view('utenti', ['users'=>$users]);
  }
}
