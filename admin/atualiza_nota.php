<?php 
require 'config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
$listaContrato=$con->query("SELECT * FROM contrato");
$listanota=$con->query("SELECT * FROM nota WHERE idnota='$id'");
$listC=$listanota->fetch();
$listaCredor=$con->query("SELECT * FROM credor");
$listaSecretaria = $con->query("SELECT * FROM secretaria");
if(isset($_POST['num'])){
    $num=$_POST['num'];
    $datadanota=$_POST['datadanota'];
    $id_credor=$_POST['id_credor'];
    $id_contrato=$_POST['id_contrato'];
    $id_secretaria = $_POST['id_secretaria'];
    $valor=$_POST['valor'];
    

    $cad=$con->query("UPDATE  nota SET 
    num	='$num',
    datadanota	='$datadanota',
    id_credor	='$id_credor',
    id_contrato	='$id_contrato',
    id_secretaria='$id_secretaria',
    valor='$valor'
    WHERE idnota='$id'
    "); 
    if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Atualizado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=9';
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
?>

                <div class="col-lg-12 col-md-12 col-sm-12s">
                    <div class="card mb-4">
                        <div class="card-body">
                        <h5 class="mb-2">Cadastrar Nota</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row">
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                    <label for="exampleInputEmail1">Numero da Nota</label>
                                    <input type="text" class="form-control" name="num" value="<?=$listC['num'];?>" placeholder="Número'">
                                </div>
                               
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">Valor da Nota</label>
                                    <input type="text" class="form-control" name="valor" value="<?=$listC['valor'];?>" data-mask="#.##0,00" data-mask-reverse="true" data-mask-maxlength="false" placeholder="Valor" >
                                </div>
                                 <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">Pago em:</label>
                                    <input type="date" class="form-control" name="datadanota" value="<?=$listC['datadanota'];?>" placeholder="Número'">
                                </div>
                               
                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label for="inputState">Credor</label>
                                        <select id="inputState" name="id_credor" class="form-control">
                                            <option selected>Escolher...</option>
                                            <?php foreach($listaCredor->fetchAll() as $listCred){?>
                                            <option value="<?=$listCred['nome'];?>"
                                                <?php if($listCred['nome']===$listC['id_credor']){?>selected<?php } ?>
                                                ><?=$listCred['nome'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label for="inputState">Secretaria</label>
                                        <select id="inputState" name="id_secretaria" class="form-control">
                                            <option selected>Escolher...</option>
                                            <?php foreach($listaSecretaria->fetchAll() as $listSec){?>
                                            <option value="<?=$listSec['secretaria'];?>"
                                                <?php if($listSec['secretaria']===$listC['id_secretaria']){?>selected<?php } ?>
                                                ><?=$listSec['secretaria'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                        <label for="inputState">Contrato</label>
                                        <select id="inputState" name="id_contrato" class="form-control">
                                            <option selected>Escolher...</option>
                                            <?php foreach($listaContrato->fetchAll() as $listCont){?>
                                            <option value="<?=$listCont['num'];?>"
                                                <?php if($listCont['num']===$listC['id_contrato']){?>selected<?php } ?>
                                                ><?=$listCont['num'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Atualiza</button>
                            </form>

                        </div></div>
                    
                            </div>
                   