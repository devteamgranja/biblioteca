
<?php 
require 'config.php';
include 'datatables.php';
$listrel=$con->query("SELECT * FROM relatorio");?>

<table id="example" class=" table-striped" style="width:100%">
        <thead>
            <tr>
              
                <th>Contrato</th>
                <th>Data</th>
                <th>N Nota</th>
               
                 <th>Credor</th>
                  <th>Valor</th>
                 
                <th class="d-print-none">Acão</th>
                
            </tr>
        </thead>
        <tbody>
        	<?php foreach($listrel->fetchAll() as $lis){?>
            <tr>
                
                <td><?=$lis['id_contrato'];?></td>
                <td><?=$lis['datacumprimento'];?></td>
                <td><?=$lis['id_nota'];?></td>
               
                 <td><?=$lis['id_credor'];?></td>  
                  <td><?=$lis['valor'];?></td>  
                   
                <td class="d-print-none"><a href="relatoriopdf.php?id=<?=$lis['id_relatorio'];?>"><i class="bi bi-printer "style="font-size:1.5rem;color:#0d6efd;"></i></a> </td>
           <?php } ?>     
            </tr>
        </tbody>
    </table>
</body>
</html>

  
