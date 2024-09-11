<?php 
if(isset($_GET['id'])){
	$id=$_GET['id'];
require 'config.php';
$listasecretaria=$con->query("SELECT * FROM secretaria");
$listafiscais=$con->query("SELECT * FROM fiscalcontrato");
$listacredor=$con->query("SELECT * FROM credor");
// $listaContrato=$con->query("SELECT * FROM contrato");
$listaContrato=$con->query("SELECT * FROM contrato WHERE idcontrato='$id'");
$lsContrato=$listaContrato->fetch();
if(isset($_POST['id_contrato']) && !empty($_POST['id_contrato'])){
    $id_contrato=$_POST['id_contrato'];
    $objeto=$_POST['objeto'];
    $valor=$_POST['valor'];
    $dataexecucao=$_POST['dataexecucao'];
    $id_secretaria=$_POST['id_secretaria'];
    $id_fiscal=$_POST['id_fiscal'];
    $id_credor=$_POST['id_credor'];
    $datavigencia=$_POST['datavigencia'];

    $cad=$con->query("INSERT INTO aditivos SET 
    id_contrato='$id_contrato', 
    objeto='$objeto',
    valor='$valor',
    dataexecucao='$dataexecucao', 
    id_secretaria='$id_secretaria',
    id_fiscal='$id_fiscal', 
    id_credor='$id_credor',
    datavigencia='$datavigencia'

    ");
    $atualiza=$con->query("UPDATE  contrato SET aditivo=aditivo+1 WHERE num ='$id_contrato' ");

     if($cad&$atualiza){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Cadastrado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php';
                }, 3000);</script>
                ";
                // header('Location: index.php');
                }else{ 
                echo "<div class='alert alert-danger' role='alert'>
                    <strong>Calma Garoto!</strong> Voce nao Tem permissao para Cadastrar.
                </div>";
            }
        }
}
// var_dump($cad);

 ?>
                 <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-2">Cadastro de Contrato</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">

                            <div class="row">
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                            <label for="exampleInputEmail1">Numero do Contrato</label>
                            <input type="text" class="form-control" name="id_contrato" value="<?=$lsContrato['num'];?>" placeholder="Numero do Contrato">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">Objeto do Contrato</label>
                                    <input type="text" class="form-control" name="objeto" value="<?=$lsContrato['objeto'];?>" placeholder="Objeto do Contrato ">
                                </div>
                                <div class="form-group col-lg-2 col-md-6 col-sm-12 ">
                                    <label for="exampleInputPassword1">valor</label>
                                    <input type="text" class="form-control" name="valor" value="<?=$lsContrato['valor'];?>" data-mask="#.##0,00" data-mask-reverse="true" data-mask-maxlength="false" placeholder="Valor">
                                </div>
                                <div class="form-group col-lg-3 col-md-6  col-sm-12">
                                    <label for="exampleInputPassword1">Data da Execução</label>
                                    <input type="date" class="form-control" name="dataexecucao" value="<?=$lsContrato['dataexecucao'];?>"  placeholder="Vigencia">
                                </div>
                                <div class="form-group col-lg-3 col-md-6  col-sm-12">
                                    <label for="exampleInputPassword1">Data Vigencia</label>
                                    <input type="date" class="form-control" name="datavigencia" value="<?=$lsContrato['datavigencia'];?>" placeholder="Vigencia">
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="inputState">Secretaria</label>
                                        <select id="inputState" name="id_secretaria" class="form-control">
                                            <option selected>Escolher...</option>
                                            <?php foreach($listasecretaria->fetchAll() as $listSec){?>
                                            <option value="<?=$listSec['secretaria'];?>"
                                                 <?php if($listSec['secretaria']===$lsContrato['id_secretaria']){?>selected<?php } ?>
                                                ><?=$listSec['secretaria'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Fiscal</label>
                                        <select id="inputState" name="id_fiscal" class="form-control">
                                            <option selected>Escolher...</option>
                                             <?php foreach($listafiscais->fetchAll() as $listFisc){?>
                                            <option value="<?=$listFisc['nome'];?>"
                                                 <?php if($listFisc['nome']===$lsContrato['id_fiscalcontrato']){?>selected<?php } ?>
                                                ><?=$listFisc['nome'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Credor</label>
                                        <select id="inputState" name="id_credor" class="form-control">
                                            <option selected>Escolher...</option>
                                             <?php foreach($listacredor->fetchAll() as $listCred){?>
                                            <option value="<?=$listCred['nome'];?>"
                                                 <?php if($listCred['nome']===$lsContrato['id_credor']){?>selected<?php } ?>
                                                ><?=$listCred['nome'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
                            </form>

                        </div>
                    </div>
                    
                    </div>