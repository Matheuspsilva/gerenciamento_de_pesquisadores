@extends('layouts.app')

@section('content')

<form action="{{route('publicacoes.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="">Título</label>
        <input type="text" name="titulo" class="form-control" value="{{old('titulo')}}">
        @if($errors->has('titulo'))
        @foreach($errors->get('titulo') as $n)
            {{$n}}
        @endforeach
    @endif
    </div>

    <div class="form-group">
            <label for="">Id Pesquisador</label>
            <input type="text" name="pesquisador_id" class="form-control" value="{{old('pesquisador_id')}}">
            @if($errors->has('pesquisador_id'))
                @foreach($errors->get('pesquisador_id') as $n)
                    {{$n}}
                @endforeach
            @endif
    </div>

    <div class="form-group">
        <label for="">Periódico</label>
        <input type="text" name="periodico" class="form-control" value="{{old('periodico')}}">
        @if($errors->has('periodico'))
            @foreach($errors->get('periodico') as $n)
                {{$n}}
            @endforeach
        @endif

    </div>

    <div class="form-group">
        <label for="">ISSN</label>
        <input type="text" name="issn" class="form-control" id="" value="{{old('issn')}}">
        @if($errors->has('issn'))
        @foreach($errors->get('issn') as $n)
            {{$n}}
        @endforeach
    @endif
    </div>

    <div class="form-group">
        <label for="">Ano</label>
        <input type="text" name="ano"  class="form-control" id="" value="{{old('ano')}}">
        @if($errors->has('ano'))
            @foreach($errors->get('ano') as $n)
                {{$n}}
            @endforeach
        @endif
    </div>

    <button class="btn btnlg btn-success">Cadastrar Publicação</button>

</form>

@endsection
