@extends('layouts.app')

@section('content')

<form action="{{route('publicacoes.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="">Título</label>
    <input type="text" name="titulo" class="form-control" value="{{old('titulo')}}">
    </div>

    {{-- <div class="form-group">
            <label for="">Id Pesquisador</label>
            <input type="text" name="pesquisador_id" class="form-control" value="{{old('pesquisador_id')}}">
    </div> --}}

    <div class="form-group">
        <label for="">periodico</label>
    <input type="text" name="periodico" class="form-control" value="{{old('periodico')}}">
    </div>

    <div class="form-group">
        <label for="">ISSN</label>
    <input type="text" name="issn" class="form-control" id="" value="{{old('issn')}}">
    </div>

    <div class="form-group">
        <label for="">ANO</label>
    <input type="text" name="ano"  class="form-control" id="" value="{{old('ano')}}">
    </div>

    <button class="btn btnlg btn-success">Cadastrar Publicação</button>

</form>

@endsection
