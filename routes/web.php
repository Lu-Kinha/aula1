<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tela', function () {
    return view('minha-tela');
});

Route::get('/nome/{nome}',
function (string $nome) {
    return 'Olá '.$nome;
});

Route::get('/nome/{nome}/{profissao}',
function (string $nome, string $profissão) {
    return "Olá .$nome,
     você é o melhor $profissão do mundo";
});
