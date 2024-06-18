<div class="modal fade" id="novo_endereco" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Novo Endereço</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-4">
            <label for="new_cep">CEP:</label>
            <input type="text" name="" id="new_cep" class="form-control maskcep " maxlength="9" autocomplete="off">
            </div>
            <div class="col-md-8">
            <label for="new_logadouro">Rua/Av.:</label>
            <input type="text" name="" id="new_logadouro" class="form-control capslock" maxlength="60" autocomplete="off">
            </div>
            <div class="col-md-2">
            <label for="new_uf">UF.:</label>
            <!-- <select  id="new_uf" class="form-control" onchange="get_municipio(value, 'new_municipio')"></select> -->
            <select  id="new_uf" class="form-control" ></select>
            </div>
            <div class="col-md-5">
            <label for="new_municipio">Município:</label>
            <input  id="new_municipio" class="form-control capslock" maxlength="35" autocomplete="off">
            </div>
            <div class="col-md-5">
            <label for="new_bairro">Bairro:</label>
            <input  id="new_bairro" class="form-control capslock" maxlength="30" autocomplete="off">
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-success" onclick="cad_endereco()">Salvar</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('.maskcep').mask('99999-999');
    get_uf('new_uf')
});
</script>