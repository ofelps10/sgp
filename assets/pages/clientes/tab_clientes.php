<?php
require_once '../../db/Conn.Class.php';
require_once '../../db/Read.Class.php';

$Read = new Read;
$Tabela = "clientes";
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
                        <th>Nome</th>
                        <th>Celular</th>
                        <th>Endereço</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($Row > 0) {
                        foreach ($Read->getResultado() as $key) {
                    ?>
                            <tr>
                                <td><?php echo $key['nome_cliente']; ?></td>
                                <td><?php echo $key['celular_cliente']; ?></td>
                                <td><?php echo $key['cod_endereco']; ?></td>
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