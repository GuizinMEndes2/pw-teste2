<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProdutosController extends Controller
{
    public function index(){
        $prods = Produto::all();

        return view('produtos.index', [
            'prods'=> $prods
        ]);

    }

    public function add(){
        return view('produtos.add');

    }

    public function addSave(Request $form){
        // dd($form);
        $dados =$form->validate([
            'name'=> 'required|unique:produtos|min:3',
            'price'=> 'required|min:0|numeric',
            'quantity'=> 'required|integer|min:0',

        ]);

        Produto::create($dados);

        return redirect()->route('produtos')->with('sucesso', 'P.R.O.D.U.C.T i.n.s.e.r.i.d.o c.o.m S.u.c.e.s.s.o');

    }

    public function edit(Produto $produto){
        return view('produtos.add',[
            'prod' => $produto,
        ]);
    }

    public function editSave(Request $form, Produto $produto){
        $dados =$form->validate([
            'name'=> ['required',
            Rule::unique('produtos')->ignore($produto->id),
            'min:3',
        ],

            'price'=> 'required|min:0|numeric|gte:0',
            'quantity'=> 'required|integer|gte:0',

        ]);

        $produto->fill($dados)->save();
        return redirect()->route('produtos')->with('sucesso', 'P.R.O.D.U.C.T   a.l.t.e.r.a.d.o   c.o.m  S.u.c.e.s.s.o');
        ;
    }

    public function view(Produto $produto){
        return view('produtos.view', [
            'prod' =>$produto,
        ]);

    }

    public function deleteForReal(Produto $produto){

    }
}
