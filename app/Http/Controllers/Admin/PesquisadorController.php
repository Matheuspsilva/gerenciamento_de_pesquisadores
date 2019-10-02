<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Pesquisador;
use Illuminate\Http\Request;

class PesquisadorController extends Controller
{
    public function index(){
        $pesquisadores = Pesquisador::paginate(15);
        return view('pesquisadores.index', compact('pesquisadores'));
    }

    public function show($id){
        $pesquisadores = Pesquisador::findOrFail($id);
        return view('pesquisadores.edit', compact('pesquisadores'));
    }

    public function create(){
        return view('pesquisadores.create');
    }

    public function store(Request $request){
        $data = $request->all();
        dd(Pesquisador::create($data));
    }

    public function update($id, Request $request){
        $data = $request->all();
        $pesquisador = Pesquisador::findOrFail($id);
        dd($pesquisador->update($data));
    }

    public function destroy($id){
        $pesquisador = Pesquisador::findOrFail($id);
        dd($pesquisador->delete());
    }


}
