<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogIn;

//Aqui mostramos el formulario
Route::get('/login', [LogIn::class,'login7'])
->name('login7');
//donde procesamos el formulario
Route::post('/Login',[LogIn::class, 'Login'])
->name('Login');