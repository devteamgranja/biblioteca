<?php include 'header.php';?>
    <div class="allsite">
        <div class="menu">
            <div class="user">
                <div class="avatar">
                    <img src="../assets/img/avatar.png" width="100" alt="">
                <h2>Francisco Junior Gomes Gonçalves</h2>
                <h3>Desde 2024</h3>
                </div>
                <div class="logo">
                    <img src="../assets/img/logo.png" width="100"  alt="">
                </div>
            </div>  
           <?php include 'menu.php';?>
        </div>
        <div class="conteudo">
         
             <?php 
    // error_reporting(0);  
    @$link = $_GET['link']; 
    $pag[1]="cad_aluno.php";
    $pag[2]="cad_user.php";
    $pag[3]="listagem_artistas.php";
    $pag[4]="cad_arte.php";
    $pag[5]="cad_admin.php";
    $pag[99]="logout.php";
    if(!empty($link)){  
            if (file_exists($pag[$link])){
            include $pag[$link];
            // var_dump($link);
            // exit();
            }else{
                // include '404.php';
            echo "<img src='../img/404-bg.jpg' width='400' height='300' />";
            echo "<h1 class='naoexiste'>Chuck Norris, contou o infinito 4 vezes e não encontrou essa página!</h1>";
            } 
        }else{
            include "home.php";
           };
    ?>
        </div>
   
</div>
</body>
</html>