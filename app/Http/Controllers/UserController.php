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

  public function show($id){
    $user = User::find($id);
    return view('utenti_info', compact('user'));
  }
}
