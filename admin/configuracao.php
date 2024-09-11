<?php 
require 'config.php';
if(isset($_POST['nomesite'])){
$nomesite=$_POST['nomesite'];
$cor=$_POST['cor'];
$logo=$_POST['logo'];
$cabecalhopdf=$_POST['cabecalhopdf'];
$footerpdf=$_POST['footerpdf'];
$inserir=$con->query("INSERT INTO configuracao SET nomesite='$nomesite',cor='$cor',logo='$logo',cabecalhopdf='$cabecalhopdf',footerpdf='$footerpdf'");
}
 ?>

 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        <h5 class="mb-2">Configurações</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row">
                                    <div class="form-group col-lg-7 col-md-6 coml-sm-12">
                                    <label for="exampleInputEmail1">nomesite</label>
                                    <input type="text" class="form-control" name="nomesite" placeholder="nomesite Completo">
                                </div>
                                <div class="form-group col-lg-5 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">cor</label>
                                    <input type="text" class="form-control" name="cor"  placeholder="cor ">
                                </div>
                                 <div class="form-group col-lg-5 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">logo</label>
                                    <input type="text" class="form-control" name="logo"  placeholder="Seu logo">
                                </div>
                                 <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">cabecalhopdf</label>
                                    <input type="text" class="form-control" name="cabecalhopdf"  placeholder="Sua cabecalhopdf">
                                </div>
                                <div class="form-group col-lg-7 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">footerpdf</label>
                                    <input type="text" class="form-control" name="footerpdf"  placeholder="Sua footerpdf">
                                </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Cadastrar</button>
                            </form>

                        </div></div></div>