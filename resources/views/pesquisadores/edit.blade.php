@extends('layouts.app')

@section('content')

<form action="{{route('pesquisadores.update', $pesquisadores->id)}}" method="post">
    @method("PUT")
    @csrf

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{$pesquisadores->nome}}">
    </div>

    <div class="form-group">
        <label for="">Cpf</label>
        <input type="text" name="cpf" class="form-control" value="{{$pesquisadores->cpf}}">
    </div>

    <div class="form-group">
        <label for="">Area formação</label>
    <input type="text" name="area_formacao" class="form-control" value="{{$pesquisadores->area_formacao}}">
    </div>

    <div class="form-group">
        <label for="">Link Lattes</label>
        <input type="text" name="link_lattes" class="form-control" value="{{$pesquisadores->link_lattes}}">
    </div>

    <button class="btn btn-lg btn-success">Atualizar Pesquisador</button>

</form>
<hr>
<form action="{{route('pesquisadores.destroy',  $pesquisadores->id)}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-lg btn-danger">Remover Pesquisador </button>
</form>

@endsection
