<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $nome = 'João';
    $idade = 21;
    $arr = [1,2,3,4,5];
    $nomes = ['Mateus', 'Maria', 'João'];

    return view('welcome',
    ['nome' => $nome,
     'idade' => $idade,
     'arr' => $arr,
     'nomes' => $nomes
    ]);
});

Route::get('/produtos', function(){

    $busca = request('search');
    return view('produtos', ['busca' => $busca]);
});

Route::get('/produtos_teste/{id?}', function($id = 1){
    return view('produto', ['id' => $id]);
});

Route::get('/contato', function(){
    return view('contato');
});

