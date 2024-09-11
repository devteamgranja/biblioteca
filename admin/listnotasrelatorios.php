<?php include 'datatables.php'; ?>
    <?php 
require 'config.php';
$listanota=$con->query("SELECT * FROM relatorio  ");?>
  <h5 class="mb-2">Lista Geral - Contratos</h5>
     <div class="separator mb-4"></div>

    <?php if($listanota->rowCount() > 0){ ?>
         <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Contrato</th>
                <th>Nota</th>
                <th>cumprimento</th>
                <th>Empresa</th>
                <th>Valor</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($listanota->fetchAll() as $lis){?>
            <tr>
                 <td><?=$lis['num'];?></td>
                <td><?=$lis['id_nota'];?></td>
                <td><?=$lis['cumprimento'];?></td>
               
                <td><?=$lis['id_credor'];?></td>
                <td>R$ <?=$lis['valor'];?></td>
               
                <td>
                    <a href="meupdf.php?id=<?=$lis['id_relatorio'];?>&contrato=<?=$lis['num'];?>&not=<?=$lis['id_nota'];?>&valor=<?=$lis['valor'];?>" target='blank'><i class="bi bi-printer "style="font-size:1.5rem;color:#0d6efd;" data-toggle="modal" data-target="#exampleModal"></i></a>  | 
                     <a href="index.php?link=30&id=<?=$lis['id_relatorio']?>">  <i class="bi bi-card-heading" style="font-size:1.5rem;color:green;"></i></a> |
                    <a href="del_relatorio.php?id=<?=$lis['id_relatorio']?>">  <i class="bi bi-trash3" style="font-size:1.5rem;color:#dc3545;"></i></a>
            </td>
           <?php } ?>     
            </tr>
           
        </tbody>
       
    </table>

      
    <?php }else{ 
         echo  "Sem Contratos com relatorios";
       
     } ?>

  
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mudar Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post">
          <div class="modal-body">
        <center><input type="date" id="novadata" name="novadata" value=""></center>
      </div>
      <div class="modal-footer">
        <?php
        //if($_POST){
            //$novadata=$_POST['novadata'];
        //}
         ?>
        
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
         <a href="meupdf.php?id=<//?=$lis['num'];?>&n=<//?=$lis['id_nota'];?>&dt=<?=$novadata?>" target='blank'><button type="button" id="send" class="btn btn-primary">Imprimir</button></a>
      </div>
       <input type="hidden" id="novadata" name="novadata" value="<//?=//$novadata;?>"> 
      </form>
    </div>
  </div>
</div> -->
<!-- <script>
    var x="testando";
    document.getElementById("#novadata").value=x;
</script>
<script>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script> -->
