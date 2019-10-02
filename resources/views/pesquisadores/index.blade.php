@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('pesquisadores.create')}}" class="btn btn-success float-right">Cadastrar Pesquisador</a>
            <h2>Pesquisadores Cadastrados</h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id </th>
                <th>Nome </th>
                <th>Área de Formação</th>
                <th>Criado em</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pesquisadores as $pesquisador)
                    <tr>
                        <td>{{$pesquisador->id}}</td>
                        <td>{{$pesquisador->nome}}</td>
                        <td>{{$pesquisador->area_formacao}}</td>
                    <td>{{date('d/m/Y H:i:s', strtotime($pesquisador->created_at))}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('pesquisadores.show',  $pesquisador->id)}}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{route('pesquisadores.destroy',  $pesquisador->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4"> Nada Encontrado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
