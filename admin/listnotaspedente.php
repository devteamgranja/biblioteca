
    <?php 
require 'config.php';
$listanota=$con->query("SELECT * FROM contrato WHERE relatoriofeito = 'n' ");

 ?>
<?php include 'datatables.php'; ?>
  <h5 class="mb-2">Pedencias - Contratos</h5>
                            <div class="separator mb-4"></div>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>N Nota</th>
               
                <th>Valor</th>
                <th>Secretaria</th>
                <th>Fiscal</th>
                <th>Credor</th>
                <th>Relatório</th>
            </tr>
        </thead>
        <tbody>
        	<?php foreach($listanota->fetchAll() as $lis){?>
            <tr>
                <td><?=$lis['num'];?></td>
               
                <td>R$ <?=$lis['valor'];?></td>
                <td><?=$lis['id_secretaria'];?></td>
                <td><?=$lis['id_fiscalcontrato'];?></td>
                <td><?=$lis['id_credor'];?></td>
                <td><a href="index.php?link=8&c=<?=$lis['num'];?>"><i class="bi bi-file-pdf" style="font-size:1.5rem;color:#dc3545;"></i></a>

            </td>
           <?php } ?>     
            </tr>
           
        </tbody>
       
    </table>
  
