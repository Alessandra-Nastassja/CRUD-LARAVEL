@extends('layout.app', ["current" => "produto"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Produtos Cadastrados</h5>

        <table class="table table-ordered table-hover" id="tabelaProdutos">
            <thead>
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Quantidade</td>
                    <td>Preço</td>
                    <td>Categoria</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>

    </div>
    <div class="card-footer">
        <button class="btn btn-sm btn-primary" onclick="novoProduto()" >Novo Produto</button>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formProduto">
                <div class="modal-header">
                    <h5 class="modal-title">Novo Produto</h5>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="id">
                    <div class="form-group">
                        <label for="nomeProduto" class="control-label">Nome do Produto:</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="precoProduto" class="control-label">Preço:</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="precoProduto" placeholder="Preço do Produto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="quantidadeProduto" class="control-label">Quantidade:</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantidade do Produto">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="categoriaProduto" class="control-label">Categoria do Produto:</label>
                        <div class="input-group">
                            <select name="" class="form-control" id="categoriaProduto">
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="cancel" class="btn btn-secondary" data-dissmiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    <script type="text/javascript" defer>
        function novoProduto(){
            $('#id').val('');
            $('#nomeProduto').val('');
            $('#precoProduto').val('');
            $('#quantidadeProduto').val('');
            $('#dlgProdutos').modal('show');
            carregarCategorias();
        }

        function carregarCategorias(){
            $.getJSON('/api/categorias/', function(data){
                //categoriaProduto
                for(dado of data){

                   opcao = '<option value="'+ dado.id +'">'+ dado.nome + '</option>';
                   $('#categoriaProduto').append(opcao);
                }
            });
        }

        function montarLinha(p){
            let linha = "<tr>" +
                        "<td>" + p.id + "</td>"+
                        "<td>" + p.nome + "</td>"+
                        "<td>" + p.estoque + "</td>"+
                        "<td>" + p.preco + "</td>"+
                        "<td>" + p.categoria_id + "</td>"+
                        "<td>" +
                            "<button class='btn btn-primary btn-xs'> Editar </button>&nbsp&nbsp " +
                            "<button class='btn btn-danger btn-xs'> Apagar </button>" +
                        "</td>"+
                        "</tr>"
            return linha;
        }

        function carregarProdutos(){
            $.getJSON('/api/produtos',function(data){
                for(dado of data){
                    linha = montarLinha(dado);

                    $('#tabelaProdutos>tbody').append(linha);
                }
            });
        }

        $(function(){
            carregarCategorias();
            carregarProdutos();
        })
    </script>
@endsection