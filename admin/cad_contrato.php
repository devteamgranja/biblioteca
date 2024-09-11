<?php 
require 'config.php';
$listasecretaria=$con->query("SELECT * FROM secretaria");
$listafiscais=$con->query("SELECT * FROM fiscalcontrato");
$listacredor=$con->query("SELECT * FROM credor");
$listaContrato=$con->query("SELECT * FROM contrato");
if(isset($_POST['num']) && !empty($_POST['num'])){
    $num=$_POST['num'];
    $objeto=$_POST['objeto'];
    $valor=$_POST['valor'];
    $dataexecucao=$_POST['dataexecucao'];
    $id_secretaria=$_POST['id_secretaria'];
    $id_fiscalcontrato=$_POST['id_fiscalcontrato'];
    $id_credor=$_POST['id_credor'];
    $status = 0;
    $relatoriofeito='n';
    $datavigencia=$_POST['datavigencia'];
    $aditivo=0;

    $cad=$con->query("INSERT INTO contrato SET 
    num='$num', 
    objeto='$objeto',
    valor='$valor',
    dataexecucao='$dataexecucao', 
    id_secretaria='$id_secretaria',
    id_fiscalcontrato='$id_fiscalcontrato', 
    id_credor='$id_credor',
    status='$status',
    relatoriofeito='$relatoriofeito',
    datavigencia='$datavigencia',
    aditivo='$aditivo'
    ");
    if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Cadastrado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=5';
                }, 3000);</script>
                ";
                // header('Location: index.php');
                }else{ 

                echo "<div class='alert alert-danger' role='alert'>
                    <strong>Calma Garoto!</strong> Voce nao Tem permissao para Cadastrar.
                </div>";
                
            
            }
}
?>

<?php include 'datatables.php'; ?>
<div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-2">Cadastro de Contrato</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">

                               <div class="row">
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">Numero do Contrato</label>
                                    <input type="text" class="form-control" name="num" placeholder="Numero do Contrato">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">Objeto do Contrato</label>
                                    <input type="text" class="form-control" name="objeto"  placeholder="Objeto do Contrato ">
                                </div>
                                <div class="form-group col-lg-2 col-md-6 col-sm-12 ">
                                    <label for="exampleInputPassword1">valor</label>
                                    <input type="text" class="form-control" name="valor" data-mask="#.##0,00" data-mask-reverse="true" data-mask-maxlength="false" placeholder="Valor">
                                </div>
                               <div class="form-group col-lg-3 col-md-6  col-sm-12">
                                    <label for="exampleInputPassword1">Data da Execução</label>
                                    <input type="date" class="form-control" name="dataexecucao"  placeholder="Vigencia">
                                </div>
                                <div class="form-group col-lg-3 col-md-6  col-sm-12">
                                    <label for="exampleInputPassword1">Data Vigencia</label>
                                    <input type="date" class="form-control" name="datavigencia"  placeholder="Vigencia">
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="inputState">Secretaria</label>
                                        <select id="inputState" name="id_secretaria" class="form-control">
                                            <option selected>Escolher...</option>
                                            <?php foreach($listasecretaria->fetchAll() as $listSec){?>
                                            <option value="<?=$listSec['secretaria'];?>"><?=$listSec['secretaria'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Fiscal</label>
                                        <select id="inputState" name="id_fiscalcontrato" class="form-control">
                                            <option selected>Escolher...</option>
                                             <?php foreach($listafiscais->fetchAll() as $listFisc){?>
                                            <option value="<?=$listFisc['nome'];?>"><?=$listFisc['nome'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Credor</label>
                                        <select id="inputState" name="id_credor" class="form-control">
                                            <option selected>Escolher...</option>
                                             <?php foreach($listacredor->fetchAll() as $listCred){?>
                                            <option value="<?=$listCred['nome'];?>"><?=$listCred['nome'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
                            </form>

                        </div>
                    </div>
                     <h5 class="mb-2 ">Relaçao dos Contratos</h5>
                            <!-- <div class="separator mb-4"></div> -->
                            <table id="example" class="display" width="100%">
                                  <thead>
                                    <tr>
                                      <th scope="col">Num</th>
                                      <th scope="col">Secretaria</th>
                                      <th scope="col">Fiscal</th>
                                       <th scope="col">Credor</th>
                                      <th scope="col">Valor</th>
                                      <th scope="col">Vigencia</th>
                                      <th scope="col">Açoes</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach($listaContrato->fetchAll() as $lisC){?>
                                    <tr>
                                      <th scope="row"><?=$lisC['num'];?></th>
                                       <td><?=$lisC['id_secretaria'];?></td>
                                        <td><?=$lisC['id_fiscalcontrato'];?></td>
                                        <td><?=$lisC['id_credor'];?></td>
                                      <td>R$ <?=$lisC['valor'];?></td>
                                      <td><?=date("d/m/Y", strtotime($lisC['datavigencia']));?></td>
                                      <td><a href="del_contrato.php?id=<?=$lisC['idcontrato'];?>"><i class="bi bi-trash3" style="font-size:1.5rem;color:#dc3545;"></i></a> &nbsp; <a href="index.php?link=21&id=<?=$lisC['idcontrato'];?>"><i class="bi bi-arrow-clockwise" style="font-size:1.5rem;color:#0d6efd;"></i></a> </td>
                                    </tr>
                                <?php } ?>
                                   
                                  </tbody>
                                </table>
                    </div>
</div>

                    
                   