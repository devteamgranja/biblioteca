<?php 
require 'config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
$secretaria=$con->query("SELECT * FROM secretaria WHERE idsecretaria='$id'");
$listC=$secretaria->fetch();
if(isset($_POST['secretaria']) && !empty($_POST['cpf'])){
    $secretaria=$_POST['secretaria'];
    $gestor=$_POST['gestor'];
    $cpf=$_POST['cpf'];
    $cad=$con->query("UPDATE secretaria SET secretaria='$secretaria', gestor='$gestor',cpf='$cpf' WHERE idsecretaria='$id'");
    if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Atualizado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=2';
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
                        <h5 class="mb-2">Cadastrar Secretaria</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row">
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">secretaria</label>
                                    <input type="text" class="form-control" name="secretaria" value="<?=$listC['secretaria'];?>" placeholder="secretaria Completo">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">gestor</label>
                                    <input type="text" class="form-control" name="gestor" value="<?=$listC['gestor'];?>"  placeholder="gestor ">
                                </div>
                                 <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                    <label for="exampleInputPassword1">cpf</label>
                                    <input type="text" class="form-control" name="cpf" value="<?=$listC['cpf'];?>" placeholder="Seu cpf">
                                </div>
                               
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Atualiza</button>
                            </form>

                        </div></div>
                    </div>
                   