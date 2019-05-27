@extends('layout.app',["current" => "categoria"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Categorias Cadastradas</h5>

            @if (count($categorias)>0)

            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <td>Código</td>
                        <td>Nome Categoria</td>
                        <td>Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->nome }}</td>
                            <td>
                                <a href="/categorias/editar/{{ $categoria->id }}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/categorias/apagar/{{ $categoria->id }}" class="btn btn-danger btn-sm">Apagar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            @endif
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-sm btn-primary">Nova Categoria</a>
        </div>
    </div>
@stop