<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$Read = new Read;
$Tabela = "produtos";
$Colunas = "*";
// $Where = "WHERE cod_uf =:cod_uf";
$Read->SetRead($Tabela, $Colunas);
$Row = $Read->getNumLinhas();

?>

<div class="card">
    <!-- <div class="card-header">
        <h4 class="card-title">Simple Table</h4>
    </div> -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th>Descrição</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($Row > 0) {
                        foreach ($Read->getResultado() as $key) {
                    ?>
                            <tr>
                                <td><?php echo $key['descricao_produto']; ?></td>
                                <td><?php echo $key['modelo']; ?></td>
                                <td><?php echo $key['cor_variacao']; ?></td>
                                <td>R$ <?php echo $key['vlr_venda']; ?></td>
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