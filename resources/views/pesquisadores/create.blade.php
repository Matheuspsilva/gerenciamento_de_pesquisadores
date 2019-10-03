@extends('layouts.app')

@section('content')

<form action="{{route('pesquisadores.store')}}" method="post">

    @csrf

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control" value="{{old('nome')}}">
        @if($errors->has('nome'))
            @foreach($errors->get('nome') as $n)
                {{$n}}
            @endforeach
        @endif
    </div>

    <div class="form-group">
        <label for="">Cpf</label>
        <input type="text" name="cpf" class="form-control" value="{{old('cpf')}}">
        @if($errors->has('cpf'))
        @foreach($errors->get('cpf') as $n)
            {{$n}}
        @endforeach
    @endif
    </div>

    <div class="form-group">
        <label for="">Area formação</label>
        <input type="text" name="area_formacao" class="form-control" id="" value="{{old('area_formacao')}}">
        @if($errors->has('area_formacao'))
        @foreach($errors->get('area_formacao') as $n)
            {{$n}}
        @endforeach
    @endif
    </div>

    <div class="form-group">
        <label for="">Link Lattes</label>
        <input type="text" name="link_lattes"  class="form-control" id="" value="{{old('link_lattes')}}">
        @if($errors->has('link_lattes'))
        @foreach($errors->get('link_lattes') as $n)
            {{$n}}
        @endforeach
    @endif
    </div>

    <button class="btn btnlg btn-success">Cadastrar Pesquisador</button>

</form>

@endsection
