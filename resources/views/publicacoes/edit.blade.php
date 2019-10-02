@extends('layouts.app')

@section('content')

<form action="{{route('publicacoes.update', $publicacoes->id)}}" method="post">
    @method("PUT")
    @csrf

    <div class="form-group">
        <label for="">Título</label>
        <input type="text" name="titulo" class="form-control" value="{{$publicacoes->titulo}}">
    </div>

    <div class="form-group">
        <label for="">Periódico</label>
        <input type="text" name="periodico" class="form-control" value="{{$publicacoes->periodico}}">
    </div>

    <div class="form-group">
        <label for="">ISSN</label>
    <input type="text" name="issn" class="form-control" value="{{$publicacoes->issn}}">
    </div>

    <div class="form-group">
        <label for="">ano</label>
        <input type="text" name="ano" class="form-control" value="{{$publicacoes->ano}}">
    </div>

    <button class="btn btn-lg btn-success">Atualizar Publicação</button>

</form>
<hr>
<form action="{{route('publicacoes.destroy',  $publicacoes->id)}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-lg btn-danger">Remover Publicação </button>
</form>

@endsection
