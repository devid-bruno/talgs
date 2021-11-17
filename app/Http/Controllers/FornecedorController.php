<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'nome' => 'fornecedor 1',
                'status' => 'n',
                'cnpj' => '0',
                'DDD' => '85', 
                'Telefone' => '0000-0000' 
            ],
            1 => [
                'nome' => 'fornecedor 2',
                'status' => 's',
                'cnpj' => null,
                'DDD' => '61',
                'Telefone' => '0000-0000' 
            ],
            2 => [
                'nome' => 'fornecedor 3',
                'status' => 'marromeno',
                'cnpj' => null,
                'DDD' => '',
                'Telefone' => '0000-0000' 
            ]
            ];

            return view('app.fornecedor.index', compact('fornecedores'));
    }
}
