<?php 
require 'config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    
    $listasecretaria=$con->query("SELECT * FROM secretaria");
    $listafiscais=$con->query("SELECT * FROM fiscalcontrato");
    $listacredor=$con->query("SELECT * FROM credor");
    $listaContrato=$con->query("SELECT * FROM contrato WHERE idcontrato='$id'");
    $listC=$listaContrato->fetch();
    if(isset($_POST['num']) && !empty($_POST['num'])){
    $num=$_POST['num'];
    $objeto=$_POST['objeto'];
    $valor=$_POST['valor'];
    $dataexecucao=$_POST['dataexecucao'];
    $id_secretaria=$_POST['id_secretaria'];
    $id_fiscalcontrato=$_POST['id_fiscalcontrato'];
    $id_credor=$_POST['id_credor'];
    $status = 0;
    $relatoriofeito='n';
    $datavigencia=$_POST['datavigencia'];
    $aditivo=0;

    $cad=$con->query("UPDATE  contrato SET 
    num='$num', 
    objeto='$objeto',
    valor='$valor',
    dataexecucao='$dataexecucao', 
    id_secretaria='$id_secretaria',
    id_fiscalcontrato='$id_fiscalcontrato', 
    id_credor='$id_credor',
    status='$status',
    relatoriofeito='$relatoriofeito',
    datavigencia='$datavigencia',
    aditivo='$aditivo' WHERE idcontrato='$id'
    ");

    if($cad){
                    echo "<div class='success alert-success' role='success'>
                    <strong>Atualizado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=5';
                }, 3000);</script>
                ";
                // header('Location: index.php');
                }else{ 

                echo "<div class='alert alert-danger' role='alert'>
                    <strong>Calma Garoto!</strong> Voce nao Tem permissao para Cadastrar.
                </div>";
                
            
            }
}
}
// var_dump($cad);

?>
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
                <div class="col-lg-12 col-md-12 col-sm-12 ">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="mb-2">Cadastro de Contrato</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">

                               <div class="row">
                                    <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                    <label for="exampleInputEmail1">Numero do Contrato</label>
                                    <input type="text" class="form-control" name="num" value="<?=$listC['num'];?>" placeholder="Numero do Contrato">
                                </div>
                                <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                    <label for="exampleInputPassword1">Objeto do Contrato</label>
                                    <input type="text" class="form-control" name="objeto"value="<?=$listC['objeto'];?>" placeholder="Objeto do Contrato ">
                                </div>
                                <div class="form-group col-lg-2 col-md-6 col-sm-12 ">
                                    <label for="exampleInputPassword1">valor</label>
                                    <input type="text" class="form-control" name="valor" value="<?=$listC['valor'];?>" data-mask="#.##0,00" data-mask-reverse="true" data-mask-maxlength="false" placeholder="Valor">
                                </div>
                                <div class="form-group col-lg-3 col-md-6  col-sm-12">
                                    <label for="exampleInputPassword1">Data da Execução</label>
                                    <input type="date" class="form-control" name="dataexecucao" value="<?=$listC['dataexecucao'];?>"  placeholder="Vigencia">
                                </div>
                                <div class="form-group col-lg-3 col-md-6  col-sm-12">
                                    <label for="exampleInputPassword1">Data Vigencia</label>
                                    <input type="date" class="form-control" name="datavigencia" value="<?=$listC['datavigencia'];?>" placeholder="Vigencia">
                                </div>
                                <div class="form-group col-md-4">
                                        <label for="inputState">Secretaria</label>
                                        <select id="inputState" name="id_secretaria" class="form-control">
                                            <option selected>Escolher...</option>
                                            <?php foreach($listasecretaria->fetchAll() as $listSec){?>
                                            <option value="<?=$listSec['secretaria'];?>"
                                                <?php if($listSec['secretaria']===$listC['id_secretaria']){?>selected<?php } ?>><?=$listSec['secretaria'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Fiscal</label>
                                        <select id="inputState" name="id_fiscalcontrato" class="form-control">
                                            <option selected>Escolher...</option>
                                             <?php foreach($listafiscais->fetchAll() as $listFisc){?>

                                            <option value="<?=$listFisc['nome'];?>"
                                                <?php if($listFisc['nome']===$listC['id_fiscalcontrato']){?>selected<?php } ?>>
                                                <?=$listFisc['nome'];?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputState">Credor</label>
                                        <select id="inputState" name="id_credor" class="form-control">
                                            <option selected>Escolher...</option>
                                             <?php foreach($listacredor->fetchAll() as $listCred){?>
                                            <option value="<?=$listCred['nome'];?>"
                                                <?php if($listCred['nome']===$listC['id_credor']){?>selected<?php } ?>
                                                ><?=$listCred['nome'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Atualiza</button>
                            </form>

                        </div>
                    </div>
                   
                    </div>
                    
                   