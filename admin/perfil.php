<?php 
require 'config.php';
 $user=$_SESSION['user'];
 $permissao=$_SESSION['permissao'];
 $token=$_SESSION['token'];
$puser=$con->query("SELECT * FROM usuario WHERE token='$token'");
$pegauser=$puser->fetch();

 ?>
 <h1>Olá <?=$_SESSION['user'];?></h1>
 <div class="row">
     <div class="col-sm-12">
        <div class="card">
             <span>Nome: <strong><?=$pegauser['nome'];?></strong></span>
         </div>
         <div class="card">
             <span>CPF: <strong><?=$pegauser['cpf'];?></strong></span>
         </div>
         <div class="card">
             <span>Login: <strong><?=$pegauser['login'];?></strong></span>
         </div>
         <div class="card">
             <span><img src="<?=$pegauser['foto'];?>" width="200" alt=""></span>
         </div>
         <div class="fotouser">
             <h4 class="bg-red">Fazer a Troca</h4>

              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal1"  >Imagem</button>
         <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal2"  >Senha</button>
         </div>
        
     </div>
 </div>
     <!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Trocar Foto de perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <?php include 'upload.php';?>
      </div>
     <!--  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Atualizar Senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <?php 
            if(isset($_POST['senha'])){
                $senha=md5($_POST['senha']);
                $atualiza=$con->query("UPDATE usuario SET senha='$senha' WHERE token='$token'");
             
            }
            ?>
            <form method="post">

               <input type="password" name="senha" placeholder="Insirar a nova senha"><br><br>
               <input type="submit" class="btn btn-primary" value="Atualizar">
                </form>
               
       
      
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
    <script src="admin/js/jquery-2.1.1.js"></script>
    <script src="admin/js/bootstrap.min.js"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
    </script>