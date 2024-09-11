<?php 
require 'config.php';
$contasecretaria=$con->query("SELECT * FROM secretaria");
if(isset($_POST['secretaria']) && !empty($_POST['cpf'])){
    $secretaria=$_POST['secretaria'];
    $gestor=$_POST['gestor'];
    $cpf=$_POST['cpf'];
    $cad=$con->query("INSERT INTO secretaria SET secretaria='$secretaria', gestor='$gestor',cpf='$cpf'");
    if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Cadastrado com Sucesso!</strong> Você será redirecionado.
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
?>
<?php include 'datatables.php'; ?>

                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        <h5 class="mb-2">Cadastrar Secretaria</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row">
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">secretaria</label>
                                    <input type="text" class="form-control" name="secretaria" placeholder="secretaria Completo">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">gestor</label>
                                    <input type="text" class="form-control" name="gestor"  placeholder="gestor ">
                                </div>
                                 <div class="form-group col-lg-4 col-md-4 col-sm-12">
                                    <label for="exampleInputPassword1">cpf</label>
                                    <input type="text" class="form-control" name="cpf"  placeholder="Seu cpf">
                                </div>
                               
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
                            </form>

                        </div></div>
                        <h5 class="mb-2 ">Relaçao das Secretarias</h5>
                            <!-- <div class="separator mb-4"></div> -->
                            <table id="example" class="table table-striped ">
                                  <thead>
                                    <tr>
                                      <td>Secretaria</td>
                                      <td>Ação</td>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach($contasecretaria->fetchAll() as $lisC){?>
                                    <tr>
                                      <th scope="row"><?=$lisC['secretaria'];?></th>
                                    <td><a href="del_secretaria.php?id=<?=$lisC['idsecretaria'];?>"><i class="bi bi-trash3" style="font-size:1.5rem;color:#dc3545;"></i></a> &nbsp; <a href="index.php?link=24&id=<?=$lisC['idsecretaria'];?>"> <i class="bi bi-arrow-clockwise" style="font-size:1.5rem;color:#0d6efd;"></i></a> </td>
                                    </tr>
                                <?php } ?>
                                   
                                  </tbody>
                                </table>
                    </div>
                   