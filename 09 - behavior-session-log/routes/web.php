<?php

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

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/log', function () {
    // Log::channel('slack')->info("Teste");
    Log::stack(['slack', 'daily'])->error("Teste");
});

Route::get('/session', function () {

    session([
        'course' => 'LaraDev'
    ]);

    session()->put('name', 'Jose Carlos');

    // echo session('student', function () {
    //     session()->put('student', 'Jose Carlos');
    //     return session('student');
    // });

    // echo session()->get('name', function () {

    // });

    // session()->push('time', 'JoseCarlosRomeiro');

    // $student = session()->pull('student');

    // echo $student;

    // session()->forget('name');

    // session()->flush();

    // if (session()->has('course')) {
    //     echo "O curso selecionafo foi: " . session()->get('course');
    // }

    // if (session()->exists('student')) {
    //     echo "Esse índice existe";
    // } else {
    //     echo "Esse índice não existe!";
    // }

    // session()->flash('message', 'O artigo foi publicado com sucesso!');
    // session()->reflash();

    var_dump(session()->all());
});
