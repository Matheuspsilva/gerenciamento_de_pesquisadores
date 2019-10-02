@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <a href="{{route('publicacoes.create')}}" class="btn btn-success float-right">Cadastrar Publicação</a>
            <h2>Publicações Cadastradas</h2>
            <div class="clearfix"></div>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id </th>
                <th>Título </th>
                <th>Periódico</th>
                <th>Pesquisador</th>
                <th>Issn</th>
                <th>Ano</th>
                <th>Ação</th>

            </tr>
        </thead>
        <tbody>
            @forelse ($publicacoes as $publicacao)
                    <tr>
                        <td>{{$publicacao->id}}</td>
                        <td>{{$publicacao->titulo}}</td>
                        <td>{{$publicacao->periodico}}</td>
                        <td>{{$publicacao->pesquisador_id}}</td>
                        <td>{{$publicacao->issn}}</td>
                    <td>{{date('d/m/Y H:i:s', strtotime($publicacao->created_at))}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="{{route('publicacoes.show',  $publicacao->id)}}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{route('publicacoes.destroy', $publicacao->id)}}" method="post">
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
