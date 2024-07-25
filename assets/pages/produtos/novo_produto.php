<div id="novo_produto" class="col-md-12">
    <div class="row">
        <legend>Dados gerais:</legend>
        <div class="col-md-4 ">
            <label for="descricao_produto">Descrição</label>
            <input type="text" id="descricao_produto" class="form-control capslock" autocomplete="off" maxlength="40">
        </div>
        <div class="col-md-3 ">
            <label for="categoria_produto">Categoria</label>
            <select id="categoria_produto" class="form-control" onchange="get_subcategoria(value, 'subcategoria_produto')"></select>
        </div>
        <div class="col-md-3 ">
            <label for="subcategoria_produto">Subcategoria</label>
            <select id="subcategoria_produto" class="form-control " disabled></select>
        </div>
        <div class="col-md-1">
            <label for="uni_produto">Uni. Trib.</label>
            <select id="uni_produto" class="form-control">
                <option value="UN">UN.</option>
                <option value="CX">CX.</option>
                <option value="PÇ">PÇ.</option>
                <option value="KG">KG.</option>
            </select>
        </div>
        <div class="col-md-3 mt-2">
            <label for="marca_produto">Modelo</label>
            <input type="text" id="marca_produto" class="form-control capslock" autocomplete="off" maxlength="30">
        </div>
        <div class="col-md-3 mt-2">
            <label for="cor_produto">Cor / Variação</label>
            <input type="text" id="cor_produto" class="form-control capslock" autocomplete="off" maxlength="30">
        </div>
        <div class="col-md-1 mt-2">
            <label for="tamanho_produto">Tamanho</label>
            <select id="tamanho_produto" class="form-control">
                <option value="P">P</option>
                <option value="M">M</option>
                <option value="G">G</option>
                <option value="U">U</option>
            </select>
        </div>
        <div class="col-md-3 row mt-2">
        <div class="col-md-6">
            <label for="preco_produto">Vlr. venda</label>
            <input type="text" id="preco_produto" class="form-control maskvlr" autocomplete="off" maxlength="9">
        </div>
        <div class="col-md-6">
            <label for="custo_produto">Vlr. custo</label>
            <input type="text" id="custo_produto" class="form-control maskvlr" autocomplete="off" maxlength="9">
        </div>
        </div>
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger" id="backFrmproduto" onclick="$('#frm_produtos').click()">Voltar</button>
            <button type="button" class="btn btn-success" id="saveproduto" onclick="cad_produto()">Salvar</button>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){
    get_categoria('categoria_produto');
    
    $(".maskvlr").maskMoney({
        allowNegative: true,
        thousands: '.',
        decimal: ',',
        affixesStay: false
    });
});
</script>