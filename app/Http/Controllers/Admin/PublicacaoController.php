<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Publicacao;
use Illuminate\Http\Request;

class PublicacaoController extends Controller
{

    public function index(){
        $publicacoes = Publicacao::with('pesquisador')->paginate(15);
        return view('publicacoes.index', compact('publicacoes'));
    }

    public function show($id){
        $publicacoes = Publicacao::findOrFail($id);
        return view('publicacoes.edit', compact('publicacoes'));
    }

public function update($id, Request $request){
    $data = $request->all();

    $publicacao = Publicacao::findOrFail($id);
    dd($publicacao->update($data));
}

    public function create(){
        return view('publicacoes.create');
    }

    public function store(Request $request){
        $data = $request->all();
        dd(Publicacao::create($data));

    }

    public function destroy($id)
    {
        $publicacao = Publicacao::findOrFail($id);
        dd($publicacao->delete());

    }
}
