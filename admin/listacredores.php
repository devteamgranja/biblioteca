
<?php 
require 'config.php';
$listanota=$con->query("SELECT * FROM credor");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.dataTables.min.css">
        <!-- <link rel="stylesheet" href="assets/css/vendor/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" href="assets/css/vendor/datatables.responsive.bootstrap4.min.css" /> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">

        <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
        <script type="text/javascript" language="javascript" src="//code.highcharts.com/highcharts.js"></script>
    <script>
        $(document).ready(function () {
    // Create DataTable
    var table = $('#example').DataTable({
            // dom: 'Pfrtip',

            // searchPanes:{},
            language:{
                url:'assets/DataTables/pt-BR.json'
            },
            buttons:['copy','excel','pdf'],
            
            // language:url('')
    });
   
 

 
    // Create the chart with initial data
    var container = $('<div/>').insertBefore(table.table().container());
    var chart = Highcharts.chart(container[0], {
        chart: {type: 'pie',},
        title: {text: 'Detalhes por Fiscais',},
        series: [
            {
                data: chartData(table),
            },
        ],
    });
 
    // On each draw, update the data in the chart
    table.on('draw', function () {
        chart.series[0].setData(chartData(table));
    });
});
 
function chartData(table) {
    var counts = {};
 
    // Count the number of entries for each position
    table
        .column(2, { search: 'applied' })
        .data()
        .each(function (val) {
            if (counts[val]) {
                counts[val] += 1;
            } else {
                counts[val] = 1;
            }
        });
 
    // And map it to the format highcharts uses
    return $.map(counts, function (val, key) {
        return {
            name: key,
            y: val,
        };
    });
}

    </script>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CNPJ</th>
                <th>Representante</th>
                <th>CPF</th>
                <th>Contato</th>
                <th>Acão</th>
                
            </tr>
        </thead>
        <tbody>
        	<?php foreach($listanota->fetchAll() as $lis){?>
            <tr>
                <td><?=$lis['nome'];?></td>
                <td><?=$lis['cnpj'];?></td>
                <td><?=$lis['resplegal'];?></td>
                <td><?=$lis['cpf'];?></td>
                <td><?=$lis['contato'];?></td>   
                <td>A | B</td>
           <?php } ?>     
            </tr>
        </tbody>
    </table>
</body>
</html>

  
