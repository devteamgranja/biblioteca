       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.4.0/css/searchPanes.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/vendor/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/datatables.responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.4/css/select.dataTables.min.css">
    <style type="text/css" class="init">
    
    </style>
    <script type="text/javascript" src="/media/js/site.js?_=7f3ff05b95c2da3db6d895b5bf6d6487"></script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fapi%2Fhighcharts.html" async></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/searchpanes/1.4.0/js/dataTables.searchPanes.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.3.4/js/dataTables.select.min.js"></script>
    <script type="text/javascript" language="javascript" src="//code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
    <script type="text/javascript" class="init">
$(document).ready(function() {
	$('#example').DataTable(
    {
       
    language:{
    url:'https://raw.githubusercontent.com/DataTables/Plugins/master/i18n/pt-BR.json'
  }
    }
  );
} );
	</script>



















if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Cadastrado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=6';
                }, 3000);</script>
                ";
                // header('Location: index.php');
                }else{ 

                echo "<div class='alert alert-danger' role='alert'>
                    <strong>Calma Garoto!</strong> Voce nao Tem permissao para Cadastrar.
                </div>";
                
            
            }





              <option value="<?php echo $row['id_entidade_tipo']?>" <?php if( $usuario['id_entidade_tipo'] == $row['id_entidade_tipo']){?>selected<?php } ?>> <?php echo $row['tipo_entidade']?></option>





<?=$total=$conta['total'] <=7 ? "<img src='assets/img/no.png' height='20' >" : "<img src='assets/img/yes.png' height='20' >" ;?>













Aspire 3 A315-53
modelo N17C4


  SELECT id_relatorio,id_contrato,ver1+ver2+ver3+ver4+ver5+ver6+ver7+ver8 AS total FROM relatorio WHERE id_contrato='590.999.999000'