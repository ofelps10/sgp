<div id="novo_produto" class="col-md-12">
    <div class="row">
        <div class="col-md-1">
            <label for="cod_produto">Código</label>
            <input type="text" id="cod_produto" class="form-control" disabled value="0001">
        </div>
        <div class="col-md-2">
            <label for="cod_produto">Tipo de movimento</label>
            <select id="tp_movimentacao" class="form-control" >
            <option value="1">Entrada</option>                
            <option value="2">Saída</option>                
            </select>
        </div>
        <div class="col-md-2">
            <label for="srch_movimento">Pesquisar Nº Doc.</label>
            <input type="text" id="srch_movimento" class="form-control" >
        </div>
    </div>
    <hr>
    <legend >Dados do documento:</legend>
    <div class="row">
            <div class="col-md-8 ">
                <div class="row">
                    <div class="col-md-2 ">
                        <label for="dtDoc_mov">Data do doc.</label>
                        <input type="text" id="dtDoc_mov" class="form-control" autocomplete="off" placeholder="__/__/____">
                    </div>
                    <div class="col-md-2 ">
                        <label for="dtRec_mov">Data do receb.</label>
                        <input type="text" id="dtRec_mov" class="form-control capslock" autocomplete="off" placeholder="__/__/____">
                    </div>
                    <div class="col-md-2">
                        <label for="tpDoc_mov">Tipo do doc.</label>
                        <select id="tpDoc_mov" class="form-control ">
                            <option value="">NF</option>
                            <option value="">RECIBO</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="numDoc_mov">Nº Documento</label>
                        <input type="text" id="numDoc_mov" class="form-control " autocomplete="off" maxlength="8">
                    </div>
                    <div class="col-md-4">
                        <label for="fornecProd_mov">Fornecedor</label>
                        <select id="fornecProd_mov" class="form-control "></select>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="row">
                    <div class="col-md-4">
                        <label for="vlrDesc_mov">Desconto</label>
                        <input type="text" id="vlrDesc_mov" class="form-control maskvlr" autocomplete="off" placeholder="R$">
                    </div>
                    <div class="col-md-4">
                        <label for="vlrFrete_mov">Frete</label>
                        <input type="text" id="vlrFrete_mov" class="form-control maskvlr" autocomplete="off" placeholder="R$">
                    </div>
                    <div class="col-md-4">
                        <label for="vlrtotal_mov">Valor Total</label>
                        <input type="text" id="vlrtotal_mov" class="form-control maskvlr" autocomplete="off" placeholder="R$">
                    </div>
                </div>
            </div>
    </div>
    <hr>
    <legend >Dados do item:</legend>
    <div class="row">
        <div class="col-md-1 ">
            <label for="cod_prod_mov">Código</label>
            <input type="hidden" id="codProdMov">
            <input type="text" id="cod_prod_mov" class="form-control" autocomplete="off" maxlength="5" onchange="getProdutoId()">
        </div>
        <div class="col-md-4 ">
            <label for="desc_prod_mov">Descrição</label>
            <input type="text" id="desc_prod_mov" class="form-control capslock" autocomplete="off" maxlength="40" onchange="getModalProduto()">
        </div>
        <div class="col-md-1 ">
            <label for="qtd_prod_mov">Quantidade</label>
            <input type="number" id="qtd_prod_mov" class="form-control" autocomplete="off" maxlength="5" min="1" value="1" onchange="updateValorTotal()">
        </div>
        <div class="col-md-2 ">
            <label for="vlrUn_prod_mov">Valor unitário</label>
            <input type="text" id="vlrUn_prod_mov" class="form-control maskvlr" value="0,00" autocomplete="off" maxlength="8" onchange="updateValorTotal()">
        </div>
        <div class="col-md-2 ">
            <label for="vlrTt_prod_mov">Valor total</label>
            <input type="text" id="vlrTt_prod_mov" class="form-control maskvlr" disabled value="0,00">
        </div>
        <div class="col-md-2 ">
            <br>
            <button class="btn btn-sm btn-primary" id="addProdutoMovimento" ><i class="nc-icon nc-simple-add" ></i> Adicionar</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <legend>Itens adicionados:</legend>
            <div class="card ">
                <div class="card-body">
                    <div id="itens_adicionados" class="table-responsive"  style="height: 140px;">
                        <table class="table ">
                            <!-- <thead class=" text-primary">
                                <tr>
                                    <th>Código</th>
                                    <th>Descrição</th>
                                    <th>Quantidade</th>
                                    <th>Valor unitário</th>
                                    <th>Valor total</th>
                                    <th>#</th>
                                </tr>
                            </thead> -->
                            <tbody id="lista_itens">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger" id="backFrmmovimentacao" onclick="$('#frm_movimentacao').click()">Voltar</button>
            <button type="button" class="btn btn-success" id="savemovimento" onclick="gravamovimento()">Salvar</button>
        </div>
    </div>
</div>

<div id="modalProduto"></div>

<script>
$(document).ready(function(){
    get_fornecedor('fornecProd_mov');

    $(".maskvlr").maskMoney({
        allowNegative: true,
        thousands: '.',
        decimal: ',',
        affixesStay: false
    });
});

$(document).ready(function() {
    $('#addProdutoMovimento').click(function() {
        // Obtenha os valores dos campos
        var idProdMov = $('#codProdMov').val();
        var codProdMov = $('#cod_prod_mov').val();
        var descProdMov = $('#desc_prod_mov').val();
        var qtdProdMov = $('#qtd_prod_mov').val();
        var vlrUnProdMov = $('#vlrUn_prod_mov').val();
        var vlrTtProdMov = $('#vlrTt_prod_mov').val();

        if (idProdMov == '') {
            alert('Selecione um produto');
        }
        else {
            // Crie uma nova linha na tabela
            var novaLinha = '<tr data-id="'+idProdMov+'">' +
                '<td>'+codProdMov+'</td>' +
                '<td>'+descProdMov+'</td>' +
                '<td>'+qtdProdMov+'</td>' +
                '<td>'+vlrUnProdMov+'</td>' +
                '<td>'+vlrTtProdMov+'</td>' +
                '<td><button class="btn btn-danger btn-sm remover-item "><i class="nc-icon nc-simple-remove" ></i> Remover</button></td>' +
                '</tr>';
            // Adicione a nova linha à tabela
            $('#lista_itens').append(novaLinha);
            // Limpe os campos do formulário para adicionar um novo item
            $('#codProdMov').val('');
            $('#cod_prod_mov').val('');
            $('#desc_prod_mov').val('');
            $('#qtd_prod_mov').val('1');
            $('#vlrUn_prod_mov').val('');
            $('#vlrTt_prod_mov').val('');
            // Atualiza o valor total
            updateValorTotal();
        }
    });
    // Função para remover item
    $(document).on('click', '.remover-item', function() {
        $(this).closest('tr').remove();
    });
    // Função para atualizar o valor total

    // Evento de alteração para atualizar o valor total
    $('#qtd_prod_mov, #vlrUn_prod_mov').on('change', updateValorTotal);
});


</script>