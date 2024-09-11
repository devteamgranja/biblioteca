<?php
require 'config.php';
$listanota = $con->query("SELECT *  FROM  contrato");
$listaSec =$con->query("SELECT * FROM secretaria");
?>
<?php include 'datatables.php'; ?>
     
<!--         <div id="Container">
         <div class="col-12">
           <h2>Pesquisar Contrato por Data:</h2>
            <div id="Pesquisar">
                Infome o nome: <br><br>
                 <div class="form-group col-lg-4 col-md-4 col-sm-4">
                <input type="date" name="txtnome" />
             </div>
              <div class="form-group col-lg-4 col-md-4 col-sm-4">
                 <input type="date" name="txtnome" />
              </div>
                <input type="button" name="btnPesquisar" value="Pesquisar"/>
            </div>
            <center>
                
            
            <hr/>

            <h2>Resultados da pesquisa:</h2>
            <div id="Resultado"></div>
            <hr>
            </center>
</div> -->


    <?php
    //Recebe os dados do formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    ?>

    <form method="POST" class="form-row" action="">
        <?php
        $data_inicio = "";
        if (isset($dados['data_inicio'])) {
            $data_inicio = $dados['data_inicio'];
        }
        ?>
         <div class="form-group col-md-3">
        <label >Data Inicial</label>
        <input type="date" class="form-control" name="data_inicio" value="<?php echo $data_inicio; ?>"></div>

        <?php
        $data_final = "";
        if (isset($dados['data_final'])) {
            $data_final = $dados['data_final'];
        }
        ?>
         <div class="form-group col-md-3">
         <label >Data final</label>
        <input type="date" class="form-control" name="data_final" value="<?php echo $data_final; ?>"></div>
        <?php
        $secretaria = "";
        if (isset($dados['secretaria'])) {
            $secretaria = $dados['secretaria'];
        }
        ?>
        <div class="form-group col-md-3">
            <label >Secretaria</label>
            <select name="secretaria" class="form-control">
                <option >Secretaria</option>
                <?php foreach($listaSec->fetchAll() as $sec){ ?>
                    <option value="<?=$sec['secretaria'];?>"><?=$sec['secretaria'];?></option>
                <?php } ?>
            </select>
            
        </div>

        <div class="form-group col-md-3">
         <label>.</label>
        <input type="submit" class="form-control" value="Pesquisar" name="PesqEntreData">
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
    //Verifica se o usuário clicou no botão
    if (!empty($dados['PesqEntreData'])) {
        // var_dump($dados);
        $query_usuarios = "SELECT * FROM contrato WHERE  id_secretaria =:secretaria AND dataexecucao BETWEEN :data_inicio AND :data_final ";
        $result_usuarios = $con->prepare($query_usuarios);
        $result_usuarios->bindParam(':data_inicio', $dados['data_inicio']);
        $result_usuarios->bindParam(':data_final', $dados['data_final']);
        $result_usuarios->bindParam(':secretaria', $dados['secretaria']);
        $result_usuarios->execute();
        // var_dump($dados);
        while ($row_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)) {
            extract($row_usuario);?>
            <tr>
                      <td ><?=$num;?></td>
                       <td><?=$id_secretaria;?></td>
                        <td><?=$id_fiscalcontrato;?></td>
                        <td><?=$id_credor;?></td>
                      <td>R$ <?=$valor;?></td>
                      <td><?=date("d/m/Y", strtotime($dataexecucao));?></td>
                                      
                                    </tr>
            <!-- echo "ID: $num <br>";
            echo "Nome: $objeto<br>";
            echo "Cadastrado: $dataexecucao <br>"; -->

            <!-- echo "<hr>"; -->
       <?php  } 
       ?>
        </tbody>
                                </table>
                                <?php
    }
    ?>
