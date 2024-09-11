 <link rel="stylesheet" href="assets/DataTables/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="assets/DataTables/buttons.dataTables.min.css"/>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="assets/DataTables/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="assets/DataTables/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="assets/DataTables/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="assets/DataTables/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="assets/DataTables/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="assets/DataTables/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="assets/DataTables/buttons.print.min.js"></script>
<script type="text/javascript" class="init">
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ],
        language:{
    url:'https://raw.githubusercontent.com/DataTables/Plugins/master/i18n/pt-BR.json'
  }
    } );
} );
</script>