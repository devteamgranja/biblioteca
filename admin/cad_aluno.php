<?php 
require 'config.php';
$user=$con->query("SELECT * FROM aluno");
// id  nome    matricula   senha   whatsapp    token   foto    
if(isset($_POST['nome']) && !empty($_POST['senha'])){
    $nome=$_POST['nome'];
    $matricula=$_POST['matricula'];
    $senha=md5($_POST['senha']);
    $whatsapp=$_POST['whatsapp'];
    $token="TOKEN".md5($matricula);
    $foto='assets/img/noavatar.png';
    $cad=$con->query("INSERT INTO aluno SET nome='$nome', matricula='$matricula',senha='$senha',whatsapp='$whatsapp',  token='$token', foto='$foto'");
     if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Cadastrado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=1';
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
<div class="container">
 <!-- <h1>Cadastrar Usuários</h1> -->
 <!-- <div class="separator mb-5"></div> -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        <h5 class="mb-2">Cadastro de Usuário</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row">
                                    <div class="form-group col-lg-7 col-md-6 coml-sm-12">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                                </div>
                                <div class="form-group col-lg-5 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">matricula</label>
                                    <input type="text" class="form-control" name="matricula"  placeholder="matricula ">
                                </div>
                                 
                                 <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" class="form-control" name="senha"  placeholder="Sua Senha">
                                </div>
                                <div class="form-group col-lg-5 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">WhatsApp</label>
                                    <input type="text" class="form-control" name="whatsapp"  placeholder="Whatsapp">
                                </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
                            </form>

                        </div></div>
                        <h5 class="mb-2 ">Relaçao dos Usuários</h5>
                            <!-- <div class="separator mb-4"></div> -->
                            <table id="example" class="table table-striped " width="100%">
                                  <thead>
                                    <tr>
                                      <th>User</th>
                                      <th>senha</th>
                                      <th>Ação</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach($user->fetchAll() as $lisC){?>
                                    <tr>
                                      <td><?=$lisC['nome'];?></td>
                                      <td><?=$lisC['senha'];?></td>
                                    <td><a href="del_user.php?id=<?=$lisC['id'];?>"><i class="bi bi-trash3" style="font-size:1.5rem;color:#dc3545;"></i></a> </td>
                                    </tr>
                                <?php } ?>
                                   
                                  </tbody>
                                </table>
                    </div>
                   </div>