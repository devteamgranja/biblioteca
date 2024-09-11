<?php
require 'config.php';
$nomepage='Relação das Notas';
$listaContrato = $con->query("SELECT * FROM contrato");
$listanota = $con->query("SELECT * FROM nota");
$listaCredor = $con->query("SELECT * FROM credor");
$listaSecretaria = $con->query("SELECT * FROM secretaria");
if (isset($_POST['num']) && !empty($_POST['num'])) {
    $num = $_POST['num'];
    $datadanota = $_POST['datadanota'];
    $id_credor = $_POST['id_credor'];
    $id_contrato = $_POST['id_contrato'];
    $id_secretaria = $_POST['id_secretaria'];
    $valor=$_POST['valor'];

    $cad = $con->query("INSERT INTO nota SET 
    num	='$num',
    datadanota	='$datadanota',
    id_credor	='$id_credor',
    id_contrato	='$id_contrato',
    id_secretaria='$id_secretaria',
    valor='$valor'
    ");
    if ($cad) {
        echo "<div class='success alert-success' role='success'>
                    <strong>Cadastrado com Sucesso!</strong> Você será redirecionado.
                </div>";
        echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=9';
                }, 3000);</script>
                ";
        // header('Location: index.php');
    } else {

        echo "<div class='alert alert-danger' role='alert'>
                    <strong>Calma Garoto!</strong> Voce nao Tem permissao para Cadastrar.
                </div>";
    }
}
?>
<title>Relacao</title>
<?php include 'datatables.php'; ?>
<div class="col-lg-12 col-md-12 col-sm-12s">
    <div class="card mb-4">
        <div class="card-body">
            <h5 class="mb-2">Cadastrar Nota</h5>
            <div class="separator mb-4"></div>
            <form method="POST">
                <div class="row">
                    <div class="form-group col-lg-4 col-md-6 col-sm-12 ">
                        <label for="exampleInputEmail1">Numero da Nota</label>
                        <input type="text" class="form-control" name="num" placeholder="Número'">
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="exampleInputEmail1">Valor </label>
                        <input type="text" class="form-control" name="valor" data-mask="#.##0,00" data-mask-reverse="true" data-mask-maxlength="false"  placeholder="Valor da Nota">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                        <label for="exampleInputEmail1">Pago em:</label>
                        <input type="date" class="form-control" name="datadanota" placeholder="Número'">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label for="inputState">Credor</label>
                        <select id="inputState" name="id_credor" class="form-control">
                            <option selected>Escolher...</option>
                            <?php foreach ($listaCredor->fetchAll() as $listCred) { ?>
                                <option value="<?= $listCred['nome']; ?>"><?= $listCred['nome']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label for="inputState">Secretaria</label>
                        <select id="inputState" name="id_secretaria" class="form-control">
                            <option selected>Escolher...</option>
                            <?php foreach ($listaSecretaria->fetchAll() as $listSec) { ?>
                                <option value="<?= $listSec['secretaria']; ?>"><?= $listSec['secretaria']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-12">
                        <label for="inputState">Contrato</label>
                        <select id="inputState" name="id_contrato"  class="form-control">
                            <option selected >Escolher...</option>
                            <?php foreach ($listaContrato->fetchAll() as $listCont) { ?>
                                <option value="<?= $listCont['num']; ?>"><?= $listCont['num']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
            </form>

        </div>
    </div>
    <h5 class="mb-2">Relaçao das Notas</h5>
    <!-- <div class="separator mb-4"></div> -->
    <table id="example" class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nota</th>
                <th scope="col">Valor</th>
                <th scope="col">Data</th>
                <th scope="col">Secretaria</th>
                <th scope="col">Credor</th>
                <th scope="col">Contrato</th>
                <th class="noprint" scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listanota->fetchAll() as $lisC) { ?>
                <tr>
                    <td>
                        <h6><?= $lisC['num']; ?></h6>
                    </td>
                     <td>R$ <?= $lisC['valor']; ?></td>
                    <td><?= date("d/m/Y", strtotime($lisC['datadanota'])); ?></td>
                    <td><?= $lisC['id_secretaria']; ?></td>
                    <td><?= $lisC['id_credor']; ?></td>
                    <td><?= $lisC['id_contrato']; ?></td>
                    <td><a href="del_nota.php?id=<?= $lisC['idnota']; ?>"><i class="simple-icon-ban text-danger "></i></a> &nbsp; <a href="index.php?link=25&id=<?= $lisC['idnota']; ?>"><i class="simple-icon-refresh"></i></a> </td>
                </tr>
            <?php } ?>

        </tbody>
    </table>
</div>
