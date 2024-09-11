<?php 
require 'config.php';
if(isset($_POST['nome']) && !empty($_POST['senha'])){
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $login=$_POST['login'];
    $senha=md5($_POST['senha']);
    $token="TOKEN".md5($cpf);
    $permissao=1;
    $cad=$con->query("INSERT INTO usuario SET nome='$nome', cpf='$cpf',login='$login',senha='$senha', permissao='$permissao', token='$token'");
}?>
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        <h5 class="mb-2">Cadastrar Notas Fiscais</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row col-md-12">
                                    <div class="form-group col-9">
                                    <label for="exampleInputEmail1">Nome</label>
                                    <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="exampleInputPassword1">CPF</label>
                                    <input type="text" class="form-control" name="cpf"  placeholder="Cpf ">
                                </div>
                                 <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Login</label>
                                    <input type="text" class="form-control" name="login"  placeholder="Seu Login">
                                </div>
                                 <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" class="form-control" name="senha"  placeholder="Sua Senha">
                                </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
                            </form>

                        </div></div></div>
                   