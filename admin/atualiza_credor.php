<?php 

require 'config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
$listacredor=$con->query("SELECT * FROM credor where idcredor='$id'");
$listC=$listacredor->fetch();
if(isset($_POST['nome']) && !empty($_POST['cnpj'])){
    $nome=$_POST['nome'];
    $cnpj=$_POST['cnpj'];
    $resplegal=$_POST['resplegal'];
    $cpf=$_POST['cpf'];
    $contato=$_POST['contato'];

    $cad=$con->query("UPDATE  credor SET nome='$nome', cnpj='$cnpj',resplegal='$resplegal',cpf='$cpf', contato='$contato' WHERE idcredor='$id'");
    if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Atualizado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=4';
                }, 3000);</script>
                ";
                // header('Location: index.php');
                }else{ 

                echo "<div class='alert alert-danger' role='alert'>
                    <strong>Calma Garoto!</strong> Voce nao Tem permissao para Cadastrar.
                </div>";
                
            
            }

    // header("Location: index.php?link=4");
}}?>
 <!-- <h3>Credores</h3> -->
 <!-- <div class="separator mb-5"></div> -->
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        <h5 class="mb-2">Cadastro de Credores</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" class="form-control" name="nome" value="<?=$listC['nome'];?>" placeholder="Nome Completo">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">CNPJ</label>
                                    <input type="text" class="form-control" name="cnpj"  value="<?=$listC['cnpj'];?>" placeholder="cnpj ">
                                </div>
                                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">Responsável legal</label>
                                    <input type="text" class="form-control" name="resplegal" value="<?=$listC['resplegal'];?>"  placeholder="Seu resplegal">
                                </div>
                                 <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">CPF</label>
                                    <input type="text" class="form-control" name="cpf" value="<?=$listC['cpf'];?>"  placeholder="Sua cpf">
                                </div>
                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">Contato</label>
                                    <input type="text" class="form-control" name="contato"  value="<?=$listC['contato'];?>" placeholder="Contato">
                                </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Atualiza</button>
                            </form>
                        </div></div>
                    </div>
