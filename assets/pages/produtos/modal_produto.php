<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$descproduto = strtoupper($_POST['descproduto']);

$Read = new Read;
$Tabela = "produtos";
$Colunas = "*";
$Where = "WHERE descricao_produto like :descricao";
$Valores = "descricao=%$descproduto%";
$Read->SetRead($Tabela, $Colunas, $Where, $Valores);
$Row = $Read->getNumLinhas();

?>

<div class="modal fade" id="list_produto" tabindex="-1" role="dialog" aria-labelledby="list_produtoCenterTitle" aria-hidden="true" data-backdrop="static">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="list_produtoLongTitle">Produtos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class=" text-primary">
                    <tr>
                        <th>Descrição</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($Row > 0) {
                        foreach ($Read->getResultado() as $key) {
                    ?>
                            <tr style="cursor: pointer;" onclick="loadDtProduto('<?php echo rtrim($key['id_produto']); ?>', '<?php echo rtrim($key['descricao_produto']); ?>')" data-dismiss="modal">
                                <td><?php echo $key['descricao_produto']; ?></td>
                                <td><?php echo $key['modelo']; ?></td>
                                <td><?php echo $key['cor_variacao']; ?></td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        </div>
      </div>
      <!-- <div class="modal-footer">
      </div> -->
    </div>
  </div>
</div>
