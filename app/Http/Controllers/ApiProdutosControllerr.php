<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiProdutosControllerr extends Controller
{
    public function list(){
        $dados = Produto::all();

        return response()->json($dados, 200);
    }
}
