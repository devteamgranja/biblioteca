<?php 
require 'config.php';
$listFiscal=$con->query("SELECT * FROM fiscalcontrato");
$listasecretaria=$con->query("SELECT * FROM secretaria");
if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $portaria=$_POST['portaria'];
    $id_fiscal=$_POST['id_fiscal'];
    $cad=$con->query("INSERT INTO fiscalcontrato SET 
    nome='$nome', 
    cpf='$cpf',
    portaria='$portaria',
    id_fiscal='$id_fiscal'");  
    if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Cadastrado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=6';
                }, 3000);</script>
                ";
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
                        <h5 class="mb-2">Cadastro de Fiscais de Contrato</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row col-12">
                                    <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                                </div>
                                <div class="form-group col-lg-5 col-md-6 col-sm-12">
                                        <label for="inputState">Secretaria</label>
                                        <select id="inputState" name="id_fiscal" class="form-control">
                                            <option selected>Escolher...</option>
                                            <?php foreach($listasecretaria->fetchAll() as $listSec){?>
                                            <option value="<?=$listSec['secretaria'];?>"><?=$listSec['secretaria'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">CPF</label>
                                    <input type="text" class="form-control" name="cpf"  placeholder="Cpf ">
                                </div>
                                 <div class="form-group col-lg-8 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">portaria</label>
                                    <input type="text" class="form-control" name="portaria"  placeholder="Seu portaria">
                                </div>
                               
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
                            </form>

                        </div></div>
                     <h5 class="mb-2">Relaçao dos Fiscais</h5>
                            <!-- <div class="separator mb-4"></div> -->
                            <table id="example" class="table table-striped">
                                  <thead>
                                    <tr>
                                      <th scope="col">Nome</th>
                                      <th scope="col">CPF</th>
                                      <th scope="col">Portaria</th>
                                      <th scope="col">Secretaria</th>
                                      <th scope="col">Ação</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach($listFiscal->fetchAll() as $listFis){?>
                                    <tr>
                                      <th scope="row"><?=$listFis['nome'];?></th>
                                      <td><?=$listFis['cpf'];?></td>
                                      <td><?=$listFis['portaria'];?></td>
                                      <td><?=$listFis['id_fiscal'];?></td>
                                      <td><a href="del_fiscal.php?id=<?=$listFis['idfiscalcontrato'];?>"><i class="bi bi-trash3" style="font-size:1.5rem;color:#dc3545;"></i></a> &nbsp; <a href="index.php?link=23&id=<?=$listFis['idfiscalcontrato'];?>"> <i class="bi bi-arrow-clockwise" style="font-size:1.5rem;color:#0d6efd;"></i></a> </td>
                                    </tr>
                                <?php } ?>
                                  </tbody>
                                </table></div>