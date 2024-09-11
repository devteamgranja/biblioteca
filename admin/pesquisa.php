<?php
require 'config.php';
// Verifica se existe a variável txtnome
if (isset($_GET["txtnome"])) {
    $nome = $_GET["txtnome"];
    if (empty($nome)) {
        $result=$con->query("SELECT * FROM contrato");
    } else {
        $nome .= "%";
        $result=$con->query("SELECT * FROM contrato WHERE num like '%$nome%'");
    }
    sleep(1);
    
    $cont = $result->rowCount();
    // Verifica se a consulta retornou linhas
    if ($cont > 0) { ?>

     <h5>Relaçao dos Contratos</h5>
                            <!-- <div class='separator mb-4'></div> -->
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
        // Captura os dados da consulta e inseri na tabela HTML
        foreach ($result->fetchAll() as $linha) { ?>
            <tr>
                                      <td><?=$linha['num']?></td>
                                       <td><?=$linha['id_secretaria'];?></td>
                                        <td><?=$linha['id_fiscalcontrato'];?></td>
                                        <td><?=$linha['id_credor'];?></td>
                                      <td>R$ <?=$linha['valor'];?></td>
                                      <td><?=date("d/m/Y", strtotime($linha['dataexecucao']));?></td>
                                      
                                    </tr>
        <?php } ?>
         </tbody>
                                </table>
       
    <?php } else {
        // Se a consulta não retornar nenhum valor, exibi mensagem para o usuário
        echo "<br><br><div class='text-danger'><h3>Não foram encontrados registros!</h3></div>";
    }
}
?>