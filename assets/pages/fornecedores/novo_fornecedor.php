<div id="novo_fornecedor" class="col-md-12">
    <div class="row">
        <div class="col-md-3">
            <label for="tp_fornecedor">Tipo fornecedor</label>
            <select id="tp_fornecedor" class="form-control ">
                <option value="2">Pessoa Jurídica</option>
                <option value="1">Pessoa Física</option>
            </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <legend >Dados gerais:</legend>
        <div class="col-md-2 ">
            <label for="cnpj_fornecedor">CNPJ</label>
            <input type="text" id="cnpj_fornecedor" class="form-control maskcnpj" autocomplete="off" maxlength="17">
        </div>
        <div class="col-md-4">
            <label for="rs_fornecedor">Razão social</label>
            <input type="text" id="rs_fornecedor" class="form-control capslock is-invalid" autocomplete="off">
        </div>
        <div class="col-md-3">
            <label for="nf_fornecedor">Nome fantasia</label>
            <input type="text" id="nf_fornecedor" class="form-control capslock is-invalid" autocomplete="off">
        </div>
        <div class="col-md-2">
            <label for="tel_fornecedor">Telefone</label>
            <input type="text" id="tel_fornecedor" class="form-control maskphone" autocomplete="off" maxlength="14" onkeyup="verify_fields_client(2)">
        </div>
        <div class="col-md-2 mt-2">
            <label for="cel_fornecedor">Celular</label>
            <input type="text" id="cel_fornecedor" class="form-control is-invalid maskcel" maxlength="16" autocomplete="off" onkeyup="verify_fields_client(2)">
        </div>

        <div class="col-md-2 mt-2">
            <label for="contato_fornecedor">Contato</label>
            <input type="text" id="contato_fornecedor" class="form-control capslock" maxlength="20" autocomplete="off" onkeyup="verify_fields_client(2)">
        </div>

        <div class="col-md-3 mt-2">
            <label for="email_fornecedor">Email</label>
            <input type="email" id="email_fornecedor" class="form-control capslock" autocomplete="off">
        </div>

        <div class="col-md-3 mt-2">
            <label for="site_fornecedor">Site/Blog</label>
            <input type="text" id="site_fornecedor" class="form-control " autocomplete="off">
        </div>

        <div class="col-md-6 mt-2">
            <label for="site_fornecedor">Observações</label>
            <textarea id="obs_fornecedor" class="form-control capslock" autocomplete="off"></textarea>
        </div>

    </div>
    <div class="row mt-3">
        <input type="hidden" name="" id="cod_end_fornecedor" class="dt_end_0">
        <legend >Endereço:</legend>
        <div class="col-md-2">
            <label for="cep_fornecedor">CEP</label>
            <input type="text" id="cep_fornecedor" class="form-control maskcep" autocomplete="off" maxlength="9" onchange="get_endereco(this, value)">
            <a href="#" onclick="modal_endereco('newAdresFornecedor')">Novo endereço</a>
        </div>
        <div class="col-md-3">
            <label for="log_fornecedor">Rua/Av.</label>
            <input type="text" id="log_fornecedor" class="form-control dt_end_1" autocomplete="off" maxlength="60">

        </div>
        <div class="col-md-1">
            <label for="num_fornecedor">Nº</label>
            <input type="text" id="num_fornecedor" class="form-control " autocomplete="off" maxlength="5">
        </div>
        
        <div class="col-md-3">
            <label for="complemento_fornecedor">Complemento</label>
            <input type="text" id="complemento_fornecedor" class="form-control capslock" autocomplete="off" maxlength="200">
        </div>
        <div class="col-md-3">
            <label for="bairro_fornecedor">Bairro</label>
            <input type="text" id="bairro_fornecedor" class="form-control dt_end_2" autocomplete="off" maxlength="60">
        </div>
        <div class="col-md-1 mt-2">
            <label for="uf_fornecedor">UF.:</label>
            <input type="text" id="uf_fornecedor" class="form-control dt_end_3" autocomplete="off" maxlength="2">
        </div>
        <div class="col-md-2 mt-2">
            <label for="municipio_fornecedor">Município:</label>
            <input type="text" id="municipio_fornecedor" class="form-control dt_end_4" autocomplete="off" maxlength="25">
        </div>
        
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger" id="backFrmfornecedor" onclick="$('#frm_fornecedores').click()">Voltar</button>
            <button type="button" class="btn btn-success" id="savefornecedor" onclick="cad_fornecedor()">Salvar</button>
        </div>
    </div>
</div>

<!-- Modal NOVO ENDEREÇO-->
<div id="newAdresFornecedor"></div>

<script>
$(document).ready(function(){
    $('.maskcep').mask('99999-999');
    $('.maskphone').mask('(99) 9999-9999');
    $('.maskcel').mask('(99) 9 9999-9999');
    $('.maskcnpj').mask('99.999.999/9999-99');
});
</script>