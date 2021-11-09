<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogIn extends Controller
{
    function login7(){
        return view('login');
    }
    function Login (Request $request){
        $correo = $request->input('incorreo');
        $password = $request->input('inpass');
        $log = "Si estás logueado papu";
        $log2 = "No estás logueado papu";
        $cpassword = "safaera";
        if ($password == $cpassword) {
        return view('showlog',['log' => $log]);
    } else { 
        return view('showlog2',['log2' => $log2]);}
}}