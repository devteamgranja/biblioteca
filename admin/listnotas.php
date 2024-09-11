
<?php
require 'config.php';
$listanota = $con->query("SELECT *  FROM  contrato");
?>
<?php include 'datatables.php'; ?>
<h5 class="mb-2">Lista Geral - Contratos</h5>
<div class="separator mb-4"></div>
<table id="example" class="display" width="100%">
    <thead>
        <tr>
            <th>Contrato</th>
            <th>Contratado</th>
            <th>Valor</th>
            <th>Secretaria</th>
            <th>Fiscal</th>
            <th></th>
            <th>Ações</th>
            <th>Aditvos</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listanota->fetchAll() as $lis) {
            // $peganum=$lis['num'];
            // $contastatus=$con->query("SELECT id_relatorio,id_contrato,ver1+ver2+ver3+ver4+ver5+ver6+ver7+ver8 AS total FROM relatorio WHERE id_contrato='$peganum'");
            // $conta=$contastatus->fetch();

            if ($lis['aditivo'] > 0) {
                echo "<tr class='aditivo'>";
            } else {
                echo "<tr >";
            } ?>

            <td><?= $lis['num']; ?></td>
            <td><?= $lis['id_credor']; ?></td>
            <td>R$<?= $lis['valor']; ?></td>
            <td><?= $lis['id_secretaria']; ?></td>
            <td><?= $lis['id_fiscalcontrato']; ?></td>
            <td><?= $lis['relatoriofeito'] == 'n' ? "<i class='bi bi-check-circle' style='font-size:2rem;color:#dc3545;'></i>" : "<i class='bi bi-check-circle' style='font-size:2rem;color:#0d6efd;'></i>"; ?></td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Ação
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item " href="index.php?link=28&id=<?= $lis['idcontrato']; ?>">Ver</a>
                        <a class="dropdown-item " href="index.php?link=21&id=<?= $lis['idcontrato']; ?>">Atualiza</a>
                        <?php if($lis['relatoriofeito']==='s'){

                        }else{ ?>
                        <a class="dropdown-item" href="index.php?link=8&c=<?= $lis['num']; ?>&id=<?=$lis['idcontrato']?>&credor=<?=$lis['id_credor'];?>">Criar Relatório</a>
                    <?php } ?>
                        <a class="dropdown-item" href="del_contrato.php?id=<?= $lis['idcontrato'] ?>">Deletar</a>
                    </div>
                </div>
            </td>
            <td><a href="index.php?link=20&id=<?= $lis['idcontrato']; ?>"><button class="btn btn-secondary border-0 ">+</button></a>
            </td>
        <?php } ?>
        </tr>

    </tbody>

</table>