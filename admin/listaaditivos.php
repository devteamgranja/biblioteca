
<?php 
require 'config.php';
$listaaditivo=$con->query("SELECT * FROM aditivos");?>
<?php include 'datatables.php'; ?>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Contrato</th>
                <th>Valor</th>
                <th>Fiscal</th>
                <th>Credor</th>
                <th>Execucao</th>
                <th>Acão</th>
                
            </tr>
        </thead>
        <tbody>
        	<?php foreach($listaaditivo->fetchAll() as $lis){?>
            <tr>
                <td><?=$lis['id_contrato'];?></td>
                <td><?=$lis['valor'];?></td>
                <td><?=$lis['id_fiscal'];?></td>
                <td><?=$lis['id_credor'];?></td>
                <td><?=date("d/m/Y", strtotime($lis['dataexecucao']));?></td>   
                <td><a href="del_aditivo.php?id=<?=$lis['id'];?>"><i class="simple-icon-ban text-danger "></i></a> </td>
           <?php } ?>     
            </tr>
        </tbody>
    </table>
</body>
</html>

  
