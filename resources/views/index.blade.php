@extends('layout.app', ["current" => "index"])

@section('body')
    <div class="jumbotron border border-secondary mt-2">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de produtos</h5>
                        <p class="card-text">
                            Aqui você cadastra todos os seus produtos.
                            Só não se esqueça de cadastrar previamente as suas categorias.
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastrar Produtos</a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">
                            Aqui você cadastra todos os seus Categorias.
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastrar Categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection