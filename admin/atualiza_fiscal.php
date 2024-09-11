<?php 
require 'config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
$listFiscal=$con->query("SELECT * FROM fiscalcontrato WHERE idfiscalcontrato='$id'");
$listC=$listFiscal->fetch();
$listasecretaria=$con->query("SELECT * FROM secretaria");
if(isset($_POST['nome'])){
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $portaria=$_POST['portaria'];
    $id_fiscal=$_POST['id_fiscal'];

    $cad=$con->query("UPDATE fiscalcontrato SET 
    nome='$nome', 
    cpf='$cpf',
    portaria='$portaria',
    id_fiscal='$id_fiscal' WHERE idfiscalcontrato='$id'");  

    if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Atualizado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=6';
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
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        <h5 class="mb-2">Atualizando Fiscais de Contrato</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row col-12">
                                    <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="<?=$listC['nome'];?>" placeholder="Nome Completo">
                                </div>
                                <div class="form-group col-lg-5 col-md-6 col-sm-12">
                                        <label for="inputState">Secretaria</label>
                                        <select id="inputState" name="id_fiscal" class="form-control">
                                            <option selected>Escolher...</option>
                                            <?php foreach($listasecretaria->fetchAll() as $listSec){?>
                                            <option value="<?=$listSec['secretaria'];?>"
                                                 <?php if($listSec['secretaria']===$listC['id_fiscal']){?>selected<?php } ?>
                                                ><?=$listSec['secretaria'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">CPF</label>
                                    <input type="text" class="form-control" name="cpf" value="<?=$listC['cpf'];?>"  placeholder="Cpf ">
                                </div>
                                 <div class="form-group col-lg-8 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">portaria</label>
                                    <input type="text" class="form-control" name="portaria" value="<?=$listC['portaria'];?>"  placeholder="Seu portaria">
                                </div>
                               
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Atualiza</button>
                            </form>

                        </div></div>
                     </div>