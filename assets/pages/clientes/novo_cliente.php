<div id="novo_cliente" class="col-md-12">
    <div class="row">
        <div class="col-md-3">
            <label for="tp_cliente">Tipo cliente</label>
            <select id="tp_cliente" class="form-control ">
                <option value="1">Pessoa Física</option>
                <!-- <option value="2">Pessoa Jurídica</option> -->
            </select>
        </div>
    </div>
    <hr>
    <div class="row">
        <legend >Dados pessoais:</legend>
        <div class="col-md-4">
            <label for="nm_cliente">Nome do cliente</label>
            <input type="text" id="nm_cliente" class="form-control is-invalid capslock" onkeyup="verify_fields_client(1)" autocomplete="off">
        </div>
        <div class="col-md-2">
            <label for="nasc_cliente">Data de nascimento</label>
            <input type="date" id="nasc_cliente" class="form-control " >
        </div>
        <div class="col-md-2">
            <label for="genero_cliente">Gênero</label>
            <select id="genero_cliente" class="form-control " >
                <option value="N">Não informado</option>
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="tel_cliente">Telefone</label>
            <input type="text" id="tel_cliente" class="form-control maskphone" autocomplete="off" maxlength="14" onkeyup="verify_fields_client(2)">
        </div>
        <div class="col-md-2">
            <label for="cel_cliente">Celular</label>
            <input type="text" id="cel_cliente" class="form-control is-invalid maskcel" maxlength="16" autocomplete="off" onkeyup="verify_fields_client(2)">
        </div>
        <div class="col-md-4 mt-2">
            <label for="email_cliente">Email</label>
            <input type="email" id="email_cliente" class="form-control capslock" autocomplete="off" maxlength="45">
        </div>
        <div class="col-md-2 mt-2">
            <label for="cpf_cliente">CPF</label>
            <input type="text" id="cpf_cliente" class="form-control maskcpf" autocomplete="off">
        </div>
    </div>
    <div class="row mt-3">
        <input type="hidden" name="" id="cod_end_cliente" class="dt_end_0">
        <legend >Endereço:</legend>
        <div class="col-md-2">
            <label for="cep_cliente">CEP</label>
            <input type="text" id="cep_cliente" class="form-control maskcep" autocomplete="off" maxlength="9" onchange="get_endereco(this, value)">
            <a href="#" onclick="modal_endereco('newAdresCliente')">Novo endereço</a>
        </div>
        <div class="col-md-3">
            <label for="log_cliente">Rua/Av.</label>
            <input type="text" id="log_cliente" class="form-control capslock dt_end_1" autocomplete="off" maxlength="60">

        </div>
        <div class="col-md-1">
            <label for="num_cliente">Nº</label>
            <input type="text" id="num_cliente" class="form-control " autocomplete="off" maxlength="6">
        </div>
        <div class="col-md-3">
            <label for="complemento_cliente">Complemento</label>
            <input type="text" id="complemento_cliente" class="form-control capslock" autocomplete="off" maxlength="25">
        </div>
        <div class="col-md-3">
            <label for="bairro_cliente">Bairro</label>
            <input type="text" id="bairro_cliente" class="form-control capslock dt_end_2" autocomplete="off" maxlength="60">
        </div>
        <div class="col-md-1 mt-2">
            <label for="uf_cliente">UF.:</label>
            <input id="uf_cliente" class="form-control capslock dt_end_3" autocomplete="off" maxlength="2">
        </div>
        <div class="col-md-2 mt-2">
            <label for="municipio_cliente">Município:</label>
            <input  id="municipio_cliente" class="form-control capslock dt_end_4" autocomplete="off" maxlength="25">
        </div>
        
    </div>
    <hr>
    <div class="row mt-3">
        <div class="col-md-6">
            <button type="button" class="btn btn-danger" id="backFrmCliente" onclick="$('#frm_clientes').click()">Voltar</button>
            <button type="button" class="btn btn-success" id="saveCliente" onclick="cad_cliente()">Salvar</button>
        </div>
    </div>
</div>

<!-- Modal NOVO ENDEREÇO-->
<div id="newAdresCliente"></div>

<script>
$(document).ready(function(){
    $('.maskcep').mask('99999-999');
    $('.maskphone').mask('(99) 9999-9999');
    $('.maskcel').mask('(99) 9 9999-9999');
    $('.maskcpf').mask('999.999.999-99');
    get_uf('uf_cliente')
});
</script>