<?php 
require 'config.php';
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $contrato=$_GET['contrato'];
    $not=$_GET['not'];
    $valor=$_GET['valor'];
    // $datadanota=$_GET['datadanota'];
    $nota=$con->query("SELECT * FROM nota  WHERE id_contrato='$contrato' AND num = '$not' ");
    $lista=$con->query("SELECT * FROM relatorio  WHERE id_relatorio='$id' AND num='$contrato' AND id_nota='$not' ");
    $listaContrato=$lista->fetch();
    $peganota=$nota->fetch();

    // var_dump($peganota);
}
 ?>
<html>
<head>
<meta charset="utf-8">
<title>fomulario2</title>
</head>
 <style type="text/css">
    @import url("https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700");
    *{
        font-family: "Nunito", sans-serif;
              font-size: 12px;
              font-weight: 400;
              color: #222;
              text-transform: uppercase;
             
    }
    span{
        font-size: 12px;
        font-weight: 600;
        color: #111;
        padding: 0 5px;

    }
    .verif{
        font-size: 12px;
        font-weight: 600;
        
    }
    .nomesecreatria{
        font-size: 16px;
        font-weight: 600;
       
    }
    .bg{
         /*background-color: #ccc;*/
         background-color: rgba(0,0,0,.2);

    }
    .bgverif{
        background-color: rgba(0,0,0,.1);
    }
    .fonttitulo{
        font-size: 14px;
        font-weight: 700;
       
        text-transform: uppercase;
    }
    .titulo{
        font-size: 18px;
        font-weight: 700;
       

    }
    .linhacima{

        border-top: 1px solid #222;
        width: 100px;
        /*height: 30px;*/
    }
    .rodape{
      position: absolute;
      bottom:-40px;
    }
    </style>
    
    
<body>
<table width="100%" border="0" align="center">
  <tbody><br>
    <tr>
      <td width="50%"  align="right"><img src="https://sisfiscal.net/admin/assets/img/logofolha.png" width="217" height="74" alt=""/></td>
      <td class="nomesecreatria" width="50%" align="left"><?=$peganota['id_secretaria']?></td>
    </tr><br>
    <tr>
      <td class="bg" colspan="2"><strong class="titulo">RELATÓRIO DE  ACOMPANHAMENTO DO FISCAL DE CONTRATOS</strong></td>
    </tr>
    <tr>
      <td>Nº CONTRATO:<span>   <?=$listaContrato['num'];?></span></td>
      <td align="right">VIGÊNCIA:<span>   <?=date("d/m/Y", strtotime($listaContrato['datacumprimento']));?></span></td>
    </tr>
    <tr>
      <td colspan="2">OBJETO:<span><?=$listaContrato['objeto'];?></span></td>
    </tr>
    <tr>
      <td colspan="2">CONTRATADO(A):<span><?=$listaContrato['id_credor'];?></span></td>
    </tr>
	  <tr>
      <td colspan="2">RESPONSÁVEL LEGAL:
        <?=$listaContrato['resplegal'];?></td>
    </tr>
    <tr>
      <td>CNPJ:<span><?=$listaContrato['cnpj'];?></td>
      <td><table width="100%" border="0">
        <tbody>
          <tr>
            <td>Valor da NF: <span>
              <?=$listaContrato['valor'];?>
            </span></td>
            <td>Nº da NF: <span>
              <?=$listaContrato['id_nota'];?>
            </span></td>
            <td>Pago Em: <span>
              <?=date("d/m/Y", strtotime($peganota['datadanota']));?>
            </span></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
   <!--  <tr>
      <td colspan="2">&nbsp;</td>
    </tr> -->
  </tbody>
</table><br>
<table width="100%" border="0" align="center">
  <tbody>
    <tr class="bg">
      <td width="94%"><strong class="fonttitulo">VERIFICAÇÕES </strong></td>
      <td width="6%" align="center"><strong class="fonttitulo">CUMPRIU</strong></td>
    </tr>
    <tr>
      <td class="bgverif">No ato da entrega da NF a empresa apresentou certidões  de regularidade fiscal válidas?</td>
      <td class="bgverif" align="center"> <span class="verif" ><?=$listaContrato['ver1']==1 ? "SIM" : "NÃO" ;?></span> </td>
    </tr>
    <tr>
      <td class="bgverif">Os serviços/produtos foram executados/fornecidos  conforme o objeto contratado?</td>
      <td class="bgverif" align="center"> <span class="verif" ><?=$listaContrato['ver2']==1 ? "SIM" : "NÃO" ;?></span> </td>
    </tr>
    <tr>
      <td class="bgverif">Os valores e quantitativos da NF conferem com a  medição dos serviços executados/produtos fornecidos?</td>
      <td class="bgverif" align="center"> <span class="verif" ><?=$listaContrato['ver3']==1 ? "SIM" : "NÃO" ;?></span> </td>
    </tr>
    <tr>
      <td class="bgverif">A NF apresenta as informações exigidas no Edital  e Contrato?</td>
      <td class="bgverif" align="center"> <span class="verif" ><?=$listaContrato['ver4']==1 ? "SIM" : "NÃO" ;?></span> </td>
    </tr>
    <tr>
      <td class="bgverif">Necessidade de notificação?</td>
      <td class="bgverif" align="center"> <span class="verif" ><?=$listaContrato['ver5']==1 ? "SIM" : "NÃO" ;?></span> </td>
    </tr>
    <tr>
      <td class="bgverif">Necessidade de procedimento de penalização?</td>
      <td class="bgverif" align="center"> <span class="verif" ><?=$listaContrato['ver6']==1 ? "SIM" : "NÃO" ;?></span> </td>
    </tr>
    <tr>
      <td class="bgverif">Necessidade de rescisão?</td>
      <td class="bgverif" align="center"> <span class="verif" ><?=$listaContrato['ver7']==1 ? "SIM" : "NÃO" ;?></span> </td>
    </tr>
    <tr>
      <td class="bgverif">Necessidade de alterações contratuais?
      <br>Motivo</td>
      <td class="bgverif" align="center"> <span class="verif" ><?=$listaContrato['ver8']==1 ? "SIM" : "NÃO" ;?></span> </td>
    </tr><br>
  </tbody>
</table>
<table width="100%" border="0" align="center">
  <tbody>
    <tr>
      <td class="bg" ><strong class="fonttitulo">OUTRAS OCORRÊNCIAS</strong></td>
    </tr>
    <tr>
      <td ><?=$listaContrato['outrasocorrencias'];?></td>
    </tr><br>
  </tbody>
</table>

<table width="100%" border="0" align="center">
  <tbody>
    <tr>
      <td class="bg" colspan="2" ><strong class="fonttitulo">CUMPRIMENTO DO CONTRATO /EXECUÇÃO DO OBJETO </strong></td>
    </tr>
    <tr>
      <td align="left"> 
       <?php 
       if($listaContrato['cumprimento'] == 'Em Andamento'){
        echo " (X) Em Andamento";
       }elseif($listaContrato['cumprimento'] == 'Encerrado'){
        echo " (X) Encerrado";
       }else{
        echo " (X) Suspenso";
       } ?>

 </td>
      <td align="right">Data: <span><?=date("d/m/Y", strtotime($listaContrato['datanoticiacao']));?></span></td>
    </tr>
    <br><br><br>
    <tr>
      <td class="bg"  colspan="2" align="left"><span class="fonttitulo" >Considerações</span></td>
    </tr>
    <tr>
      <td colspan="2" ><?=$listaContrato['consideracoes'];?></td>
    </tr>
    
  </tbody> 
  
</table> <br><br>
<table width="100%" border="0" align="center">
 
      <tr align="right">
      <td >Granja, <span><?=date("d/m/Y", strtotime($peganota['datadanota']));?></span></td>
    </tr>
  
  </table>
<!--  --> <br><br><br>
<table width="40%" border="0" align="center">
  <tbody align="center"><br><br><br><br>
    <tr align="center">
      <td  class="linhacima" align="center"><?=$listaContrato['id_fiscal'];?></td>
    </tr>
    <tr>
      <td align="center">Fiscal de Contratos </td>
    </tr><br>
    
  </tbody>
</table>
  <div class="rodape">
    <table width="100%" border="0">
  <tbody>
    <tr>
      <td><img src="https://sisfiscal.net/admin/assets/img/rodape_granja.png" width="100%" height="100" alt=""/></td>
    </tr>
  </tbody>
</table>
  </div>
</body>
</html>

