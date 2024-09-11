<?php 
require 'config.php';
ini_set('display_errors', 1);
// error_reporting(E_ALL);
$fiscal=$con->query("SELECT * FROM fiscalcontrato");
$listacredor=$con->query("SELECT * FROM credor");
if(isset($_GET['id'])){
    // $c=$_GET['c'];
    $id=$_GET['id'];
    $pegarelatorio=$con->query("SELECT * FROM relatorio WHERE id_relatorio='$id'");
    $pr=$pegarelatorio->fetch();
    // var_dump($pr['num']);
if(isset($_POST['num'])){
    $num=$_POST['num'];
    $ver1=$_POST['ver1'];
    $ver2=$_POST['ver2'];
    $ver3=$_POST['ver3'];
    $ver4=$_POST['ver4'];
    $ver5=$_POST['ver5'];
    $ver6=$_POST['ver6'];
    $ver7=$_POST['ver7'];
    $ver8=$_POST['ver8'];
    $outrasocorrencias=$_POST['outrasocorrencias'];
    $cumprimento=$_POST['cumprimento'];
    $datacumprimento=$_POST['datacumprimento'];
    $datanoticiacao=$_POST['datanoticiacao'];
    $objeto=$_POST['objeto'];
    $cnpj=$_POST['cnpj'];
    $resplegal=$_POST['resplegal'];
    $id_nota=$_POST['id_nota'];
    $id_contrato=$_POST['num'];
    $id_fiscal=$_POST['id_fiscal'];
    $id_credor=$_POST['id_credor'];
    $valor=$_POST['valor'];
    $consideracoes=$_POST['consideracoes'];
    // $pedencia+=$ver1+$ver2+$ver3+$ver4+$ver5+$ver6+$ver7+$ver8;

    // var_dump($_POST);
            $cad=$con->query("UPDATE  relatorio SET 
            num	='$num',
            ver1='$ver1',
            ver2='$ver2',
            ver3='$ver3',
            ver4='$ver4',
            ver5='$ver5',
            ver6='$ver6',
            ver7='$ver7',
            ver8='$ver8',
            outrasocorrencias	='$outrasocorrencias',
            cumprimento ='$cumprimento',
            datacumprimento	='$datacumprimento',
            datanoticiacao	='$datanoticiacao',
            objeto	='$objeto',
            cnpj	='$cnpj',
            resplegal='$resplegal',
            id_nota ='$id_nota',
            id_contrato ='$id_contrato',
            id_fiscal='$id_fiscal',
            id_credor   ='$id_credor',
            valor='$valor',
            consideracoes='$consideracoes' WHERE id_relatorio ='$id'
            "); 

            // if($pedencia == 8 ){
            //     $atualizastatus = $con->query("UPDATE contrato SET relatoriofeito='s' WHERE num='$id_contrato' ");
            // } 

if($cad){
                echo "<div class='success alert-success' role='success'>
                <strong>Atualizado com Sucesso!</strong> Você será redirecionado.
                </div>";
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=16';
                }, 3000);</script>
                ";
                }else{ 

                echo "<div class='alert alert-danger' role='alert'>
                    <strong>Calma Garoto!</strong> Voce nao Tem permissao para Atualizar.
                </div>";
                
            
            }
}
 // var_dump($cad);
 

}
?>
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body">
                        <h5 class="mb-2">Atualização de Relatório</h5>
                            <div class="separator mb-4"></div>
                            <form method="POST">
                               <div class="row col-md-12">
                                    <div class="form-group col-3">
                                    <label for="exampleInputEmail1">Nota Fiscal</label>
                                    <input type="text" class="form-control" name="id_nota" value="<?php echo $pr['id_nota'] ?>" placeholder="Insira o numero da nota">
                                </div>
                                <div class="form-group col-md-3">
                                        <label for="inputState">Contrato</label>
                                         <input type="text" class="form-control" name="num"  value="<?php echo $pr['num'] ?>" placeholder="Número'">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Valor</label>
                                          <input type="text" class="form-control" name="valor" data-mask="#.##0,00" data-mask-reverse="true" data-mask-maxlength="false" value="<?php echo $pr['valor'] ?>" placeholder="Número'">
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label >Credor</label>
                                        <select  name="id_credor" class="form-control">
                                            <option selected>Escolher...</option>
                                           <?php foreach($listacredor->fetchAll() as $listCred){?>
                                            <option value="<?=$listCred['nome']?>"
                                                 <?php if($listCred['nome']==$pr['id_credor']){?>selected<?php } ?>
                                                ><?=$listCred['nome']?></option>
                                           
                                            <?php } ?>
                                        </select>
                                    </div>
                                   <!--  <div class="form-group col-md-3">
                                        <label for="inputState">Credor</label>
                                         <input type="text" class="form-control" name="id_credor"  value="<?php echo $pr['id_credor'] ?>" placeholder="Número'">
                                        </select>
                                    </div> -->
                                    <div class="form-group col-md-12">
                                    <h5 class="mb-2">Verificações</h5>
                                    <table class="table">
                                        
                                        <tbody>
                                            <tr>
                                           
                                            <!-- <th scope="row">1</th> -->
                                            <td>No ato da entrega da NF a empresa apresentou certidões de regularidade fiscal válidas?</td>
                                            <td>
                                                <select name="ver1" class="border-0" >
                                                  <option value="1">Sim</option>
                                                  <option  value="0" selected >Nao</option>
                                                  <option value="1">NR</option>
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <!-- <th scope="row">2</th> -->
                                            <td>Os serviços/produtos foram executados/fornecidos conforme o objeto contratado?</td>
                                            <td>
                                                <select name="ver2" class="border-0" >
                                                  <option value="1">Sim</option>
                                                  <option  value="0" selected >Nao</option>
                                                  <option value="1">NR</option>
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <!-- <th scope="row">3</th> -->
                                            <td>Os valores e quantitativos da NF conferem com a medição dos serviços executados/produtos fornecidos?</td>
                                            <td>
                                                <select name="ver3" class="border-0" >
                                                  <option value="1">Sim</option>
                                                  <option  value="0" selected >Nao</option>
                                                  <option value="1">NR</option>
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <!-- <th scope="row">4</th> -->
                                            <td>A NF apresenta as informações exigidas no Edital  e Contrato?</td>
                                            <td>
                                                <select name="ver4" class="border-0" >
                                                  <option value="1">Sim</option>
                                                  <option  value="0" selected >Nao</option>
                                                  <option value="1">NR</option>
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <!-- <th scope="row">5</th> -->
                                            <td>Necessidade de notificação?         </td>
                                            <td>
                                                <select name="ver5" class="border-0" >
                                                  <option value="1">Sim</option>
                                                  <option  value="0" selected >Nao</option>
                                                  <option value="1">NR</option>
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <!-- <th scope="row">6</th> -->
                                            <td>Necessidade de procedimento de penalização?         </td>
                                            <td>
                                                <select name="ver6" class="border-0" >
                                                  <option value="1">Sim</option>
                                                  <option  value="0" selected >Nao</option>
                                                  <option value="1">NR</option>
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <!-- <th scope="row">7</th> -->
                                            <td>Necessidade de rescisão?         </td>
                                            <td>
                                                <select name="ver7" class="border-0" >
                                                  <option value="1">Sim</option>
                                                  <option  value="0" selected >Nao</option>
                                                  <option value="1">NR</option>
                                                </select>
                                            </td>
                                            </tr>
                                            <tr>
                                            <!-- <th scope="row">8</th> -->
                                            <td>Necessidade de alterações contratuais? </td>
                                            <td>
                                                <select name="ver8" class="border-0" >
                                                  <option value="1">Sim</option>
                                                  <option  value="0" selected >Nao</option>
                                                  <option value="1">NR</option>
                                                </select>
                                            </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                        </table>
                                    <!-- <div class="form-check">
                                        <div class="form-group col-sm-3">
                                            <input class="form-check-input" type="checkbox" value="1" id="invalidCheck"
                                            required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Opcao1
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree before submitting.
                                        </div></div>
                                        
                                    </div> -->
                                </div>
                                <div class="form-group col-sm-12">
                                <div class="form-floating">
                                    <label for="floatingTextarea2">Outras Ocorrencias</label>
                                <textarea class="form-control" placeholder="Outras Ocorrencias" name="outrasocorrencias" style="height: 100px"><?php echo $pr['outrasocorrencias'] ?>
                                </textarea>
                                
                                </div>
                                </div>
                                <div class="form-group col-sm-12">
                                <div class="form-floating">
                                    <label for="floatingTextarea2">Objetos</label>
                                <textarea class="form-control" placeholder="Objetos"  name="objeto" style="height: 100px"><?php echo $pr['objeto'] ?></textarea>
                                
                                </div>
                                </div>
                                
                                <div class="form-group col-md-3">
                                        <label >Cumprimento</label>
                                        <select  name="cumprimento" class="form-control">
                                            <option selected value="Em Andamento">Em Andamento</option>
                                            <option  value="Encerrado">Encerrado</option>
                                            <option value="Suspenso">Suspenso</option>
                                            
                                        </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label >Fiscal</label>
                                        <select  name="id_fiscal" class="form-control">
                                            <option selected>Escolher...</option>
                                           <?php foreach($fiscal->fetchAll() as $fisc){?>
                                            <option value="<?=$fisc['nome']?>"
                                                 <?php if($fisc['nome']==$pr['id_fiscal']){?>selected<?php } ?>
                                                ><?=$fisc['nome']?></option>
                                           
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group col-3">
                                    <label for="exampleInputEmail1">Data Contrato</label>
                                    <input type="date" class="form-control" value="<?php echo $pr['datacumprimento'] ?>" name="datacumprimento" placeholder="Data'">
                                </div>
                                <div class="form-group col-3">
                                    <label for="exampleInputEmail1">Data da Notificação</label>
                                    <input type="date" class="form-control" value="<?php echo $pr['datanoticiacao'] ?>" name="datanoticiacao"  placeholder="Data'">
                                    <small>Caso haja notificação</small>
                                </div> 
                                
                                 <div class="form-group col-3">
                                    <label for="exampleInputEmail1">CNPJ</label>
                                    <input type="text" class="form-control"  name="cnpj" value="<?php echo $pr['cnpj'] ?>" placeholder="Número'">
                                </div> 
                                 <div class="form-group col-9">
                                    <label for="exampleInputEmail1">Responsavel Legal</label>
                                    <input type="text" class="form-control" value="<?php echo $pr['resplegal'] ?>" name="resplegal"  placeholder="Número'">
                                </div> 
                                 <div class="form-group col-sm-12">
                                <div class="form-floating">
                                    <label for="floatingTextarea2">Consideraçoes Finais</label>
                                <textarea class="form-control" placeholder="Consideraçoes Finais"  name="consideracoes" style="height: 100px"><?php echo $pr['consideracoes'] ?></textarea>
                                
                                </div>
                                </div>
                               </div>
                                <button type="submit" class="btn btn-primary mb-0">Atualizar relatório</button>
                                <!-- <input type="hidden" name="id_nota" value="<?php //echo $pr['num'] ?>"> -->
                            </form>

                        </div></div></div>
                   