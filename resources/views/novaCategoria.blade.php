@extends('layout.app',["current"=>'categoria'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="{{ url('/categorias') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da Categoria:</label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Digite a Categoria">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>
@endsection