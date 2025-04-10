<?php
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/criar-conta', function () {
    return view('criar-conta');
});
Route::post('/salva-conta', function (Request $request) {
    //dd($request);
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();
    return "Usuário salvo com sucesso";
})->name('salva-conta');
//teste
Route::get('/teste', function () {
    return "o código foi testado";
});

Route::get('/usuário/{nome}', function ($nome) {
    return "O usuário atual é:  ".$nome;
});

Route::get('/soma/{num1}/{num2}', function ($num1, $num2){
    return "A soma é:  ".$num1 + $num2;
});

Route::get('/divisão/{num1}/{num2}', function ($num1, $num2){
    return "A divisão é:  ".$num1 + $num2;
});

Route::get('/multiplicacão/{num1}/{num2}', function ($num1, $num2){
    return "A multiplicão é:  ".$num1 + $num2;
});

Route::get('/subtracão/{num1}/{num2}', function ($num1, $num2){
    return "A subtracão é:  ".$num1 + $num2;
});

