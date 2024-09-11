<?php
require 'config.php';
include 'datatables.php';
// $listanota = $con->query("SELECT *  FROM  contrato");
if(isset($_POST['num'])){
    $num=$_POST['num'];
    
}
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
?>


    <form method="POST" class="form-row" >
         <div class="form-group col-md-4">
        <label >Numero do Contrato</label>
        <input type="text" class="form-control" name="num"></div>


        <div class="form-group col-md-2">
         <label>.</label>
        <input type="submit" class="form-control" value="Pesquisar" name="PesquiNum">
     </div>

    </form>

    <hr>
     <h5 class="">Relaçao dos Contratos</h5>
                            <!-- <div class="separator mb-4"></div> -->
                            <table id="example" class="display" width="100%">
                                  <thead>
                                    <tr>
                                      <th scope="col">Num</th>
                                      <th scope="col">Secretaria</th>
                                      <th scope="col">Fiscal</th>
                                       <th scope="col">Credor</th>
                                      <th scope="col">Valor</th>
                                      <th scope="col">Data</th>
                                    
                                    </tr>
                                  </thead>
                                  <tbody>
    <?php
    //Verifica se o usuário clicou no botão  like '%$nome%'
     if (!empty($dados['PesquiNum'])) {
        $query_usuarios =$con->query("SELECT * FROM contrato WHERE num like '%$num%' ");
        foreach ($query_usuarios->fetchAll() as $listN) { ?>
            <tr>
                                      <td ><?=$listN['num'];?></td>
                                       <td><?=$listN['id_secretaria'];?></td>
                                        <td><?=$listN['id_fiscalcontrato'];?></td>
                                        <td><?=$listN['id_credor'];?></td>
                                      <td>R$ <?=$listN['valor'];?></td>
                                      <td><?=date("d/m/Y", strtotime($listN['dataexecucao']));?></td>
                                      
                                    </tr>

       <?php  } ?>
        </tbody>
                                </table>
                            <?php }?>

