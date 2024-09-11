
<?php 
require 'config.php';
$listacredor=$con->query("SELECT * FROM credor");
if(isset($_POST['nome']) && !empty($_POST['cnpj'])){
    $nome=$_POST['nome'];
    $cnpj=$_POST['cnpj'];
    $resplegal=$_POST['resplegal'];
    $cpf=$_POST['cpf'];
    $contato=$_POST['contato'];

    $cad=$con->query("INSERT INTO credor SET nome='$nome', cnpj='$cnpj',resplegal='$resplegal',cpf='$cpf', contato='$contato'");
   if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Cadastrado com Sucesso!</strong> Você será redirecionado.
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
}?>
<?php include 'datatables.php'; ?>
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
                                    <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">CNPJ</label>
                                    <input type="text" class="form-control" name="cnpj"  placeholder="cnpj ">
                                </div>
                                 <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">Responsável legal</label>
                                    <input type="text" class="form-control" name="resplegal"  placeholder="Seu resplegal">
                                </div>
                                 <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">CPF</label>
                                    <input type="text" class="form-control" name="cpf"  placeholder="Sua cpf">
                                </div>
                                <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">Contato</label>
                                    <input type="text" class="form-control" name="contato"  placeholder="Sua cpf">
                                </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
                            </form>
                        </div></div>
                     <h5 class="mb-2">Relaçao dos Credores</h5>
                            <!-- <div class="separator mb-4"></div> -->
                            <table id="example" class="display table table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col">Nome</th>
                                      <th scope="col">CNPJ</th>
                                      <th scope="col">Responsável Legal</th>
                                      <th scope="col">CPF</th>
                                      <th scope="col">Contato</th>
                                      <th scope="col">Açoes</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach($listacredor->fetchAll() as $lisC){?>
                                    <tr>
                                      <td><?=$lisC['nome'];?></td>
                                      <td><?=$lisC['cnpj'];?></td>
                                      <td><?=$lisC['resplegal'];?></td>
                                      <td><?=$lisC['cpf'];?></td>
                                      <td><?=$lisC['contato'];?></td>
                                      <td><a href="del_credor.php?id=<?=$lisC['idcredor']?>"><i class="bi bi-trash3" style="font-size:1.5rem;color:#dc3545;"></i></a> &nbsp; <a href="index.php?link=22&id=<?=$lisC['idcredor'];?>"> <i class="bi bi-arrow-clockwise" style="font-size:1.5rem;color:#0d6efd;"></i></a> </td>
                                    </tr>
                                <?php } ?>
                                   
                                  </tbody>
                                </table></div>
