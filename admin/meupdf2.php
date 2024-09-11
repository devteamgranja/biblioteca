<?php
error_reporting(E_ALL);
$var1 = "";
require_once 'assets/dompdf/autoload.inc.php';
 $var1 .= '
    <html>
    <head>
        <link rel="stylesheet" href="assets/css/dompdf.css" />
    </head>
    <body>
       <table class=tabela_topo>

    <th><img src="http://localhost/sisfiscal/admin/assets/img/logofolha.png" alt=></th>
    <th><i>Secretaria do Trabalho e <br> Desenvolvimento social</i></th>
</table>
<table class=tabela_topo_texto>
    <th class=negrito>RELATÓRIO DE ACOMPANHAMENTO DO FISCAL DE CONTRATOS</th>
</table>
<table border=1 class=tabela >
    <tr>
        <td>Nº CONTRATO:num</td>
        <td>VIGÊNCIA:datanoticiacao</td>
    </tr>
    <tr>
        <td colspan=2>OBJETO:objeto</td>

    </tr>
    <tr>
        <td colspan=2>CONTRATADO(A):</td>
    </tr>
    <tr>
        <td>CNPJ:cnpj</td> <td> RESP. LEGAL:id_credor</td>
    </tr>
</table>
<br>
<br>
<table border=1 class=tabela>


        <th colspan=2 height=50px><span class=negrito>VERIFICAÇÕES</span> </th>
        <th colspan=2>CUMPRIU</th>

    <tr>
        <td colspan=2>Nº da NF:id_nota&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Valor da NF:valor</td>
        <td width=50px class=status>SIM</td>
        <td width=50px class=status>NÃO</td>
    </tr>
    <tr>

        <td colspan=2>No ato da entrega da NF a empresa apresentou certidões de regularidade fiscal válidas?</td>
        <td width=50px class=status>SIM</td>
        <td width=50px class=status>NÃO</td>
    </tr>
    <tr>
        <td colspan=2>Os serviços/produtos foram executados/fornecidos conforme o objeto contratado?</td>
        <td width=50pxclass=statusclass=status>SIM</td>
        <td width=50pxclass=statusclass=status>NÃO</td>
    </tr>
    <tr>
        <td colspan=2>Os valores e quantitativos da NF conferem com a medição dos serviços executados/produtos fornecidos?</td>
        <td width=50pxclass=statusclass=status>SIM</td>
        <td width=50pxclass=statusclass=status>NÃO</td>
    </tr>
    <tr>
        <td colspan=2>A NF apresenta as informações exigidas no Edital  e Contrato?</td>
        <td width=50pxclass=statusclass=status>SIM</td>
        <td width=50pxclass=statusclass=status>NÃO</td>
    </tr>
    <tr>
        <td colspan=2>Necessidade de notificação?&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Data: _____/______/______</td>
        <td width=50pxclass=statusclass=status>SIM</td>
        <td width=50pxclass=statusclass=status>NÃO</td>
    </tr>
    <tr>
        <td colspan=2>Necessidade de procedimento de penalização?</td>
        <td width=50pxclass=statusclass=status>SIM</td>
        <td width=50pxclass=statusclass=status>NÃO</td>
    </tr>
    <tr>
        <td colspan=2>Necessidade de rescisão?</td>
        <td width=50pxclass=status>SIM</td>
        <td width=50pxclass=status>NÃO</td>
    </tr>
    <tr>
        <td colspan=2>Necessidade de alterações contratuais?<br>
            Motivo:_____________________________________________________________________
        </td>
        <td width=50pxclass=status>SIM</td>
        <td width=50pxclass=status>NÃO</td>
    </tr>
</table>
<br>
<br>
<br>
<table border=1 class=tabela>
    <tr>

        <th class=negrito>OUTRAS OCORRÊNCIAS</th>
    </tr>
    <tr>
        <td height=25px></td>
    </tr>
    <tr>
        <td height=25px></td>
    </tr>
    <tr>
        <td height=25px></td>
    </tr>
</table>
<br>
<br>
<br>
<table border=1 class=tabela>
    <tr>
        <th class=negrito>CUMPRIMENTO DO CONTRATO /EXECUÇÃO DO OBJETO</th>
    </tr>
    <tr>
        <td height=25px> &ensp;&ensp;&ensp;&ensp;( &ensp;&ensp; )&ensp;&ensp;Provisório&ensp;&ensp;&ensp;&ensp;(  &ensp;&ensp;  ) definitivo &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Data: ____/____/______</td>
    </tr>
    <tr>
        <td height=25px> &ensp;&ensp;&ensp;&ensp;Considerações:</td>
    </tr>
    <tr>
        <td height=25px></td>
    </tr>
</table>
<table class=data-footer>
        <th>Granja-CE, ____/____/________</th>
</table>
<table class=assinatura-footer>
        <tr>
            <th>_____________________________________ <br></th>
        </tr>
        <tr>
            <td>Assinatura do Fiscal de Contratos<br></td>
        </tr>
</table>
<table class="tabela_footer">
    <th><img src="http://localhost/sisfiscal/admin/assets/img/rodape.png" alt="" width=""></th>
</table>
            </body>
            </html>
        ';
  
$encoding = mb_internal_encoding();
//$encoding = mb_internal_encoding();

$content = $var1;

use Dompdf\Dompdf;
use Dompdf\Options;

$option = new Options();
$option->set('isRemoteEnabled', TRUE);

$dompdf = new DOMPDF($option);

//$dompdf->set_base_path("public_html/css/");
$dompdf->set_base_path('http://localhost/sisfiscal/admin/assets/css/dompdf.css');
// Carrega seu HTML
$dompdf->load_html($content);

//Renderizar o html
$dompdf->render();

//Exibir a página
$dompdf->stream(
    $nome."cv.pdf",
    array(
        "Attachment" => false //Para realizar o download somente alterar para true
    )
);

?>