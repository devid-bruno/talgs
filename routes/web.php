<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/produto', [\App\Http\Controllers\ProdutoController::class, 'produto'])->name('site.produto');
Route::get('/preco', [\App\Http\Controllers\PrecoController::class, 'preco'])->name('site.preco');
Route::get('/login', function (){return 'Login';})->name('site.login');
Route::get('/vendas', function (){return view('site.vendas');})->name('site.vendas');
Route::get('/vendasblack', function (){return view('site.vendasblack');})->name('site.vendasblack');
Route::get('/finalizar', function (){return view('site.finalizar');})->name('site.finalizar');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function (){return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    
});


Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'] )->name('site.rota1');
    

Route::fallback(function(){
    echo 'rota acessada inexistente, clique <a href="'.route('site.index').'">aqui</a> para ir ao home';
});