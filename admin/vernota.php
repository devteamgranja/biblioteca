<?php
require 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sele = $con->query("SELECT * FROM contrato WHERE idcontrato='$id' ");
    $pega = $sele->fetch();
}
?>

<div class="row">
    <div class="card" style="width: 35rem;">
    <div class="card-body">
        <h3>Numero Contrato</h3>
        <h5 class="card-title"><?= $pega['num']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?= $pega['objeto']; ?></h6>
        <p class="card-text"><b>valor:</b><?= $pega['valor']; ?></p>
        <p><b>Data de Execucao:</b><?= date("d/m/Y", strtotime($pega['dataexecucao'])); ?></p>
        <p><b>Data de Vigencia:</b><?= date("d/m/Y", strtotime($pega['datavigencia'])); ?></p>
        <p><b>secretaria:</b><?= $pega['id_secretaria']; ?></p>
        <p><b>Fiscal de Contrato:</b><?= $pega['id_fiscalcontrato']; ?></p>
        <p><b>Credor:</b><?= $pega['id_credor']; ?></p>
        
        <a href="#" class="card-link"><b>Aditivo:</b><?= $pega['aditivo']; ?></a>
        <a href="#" class="card-link"><b>Relatorio:</b> <?= $pega['status']==0 ? "Nao fez" : "Feito"; ?></a>

    </div>
</div>
</div>