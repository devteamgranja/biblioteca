<?php
session_start();
$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
$path = 'assets/img/users/'; // upload directory
if(!empty($_POST['id_aluno']) || !empty($_POST['tema']) || $_FILES['image']){
$img = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
// get uploaded file's extension
$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$img;
// check's valid format
if(in_array($ext, $valid_extensions)) { 
$path = $path.strtolower($final_image); 
if(move_uploaded_file($tmp,$path)) {
echo "<img src='$path' />";
$token=$_SESSION['token'];
//include database configuration file
include_once 'config.php';
//insert form data in the database

$insert = $con->query("UPDATE usuario SET foto='$path' WHERE token='$token'");

if($_SESSION['permissao']==0){
    echo "
                <script>setTimeout(function() {
                    window.location.href = 'index.php?link=18';
                }, 3000);</script>
                ";
            }elseif($_SESSION['permissao']==1){
                $insert = $con->query("UPDATE professor SET foto='$path' WHERE token='$token'");
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index_teacher.php?link=16';
                }, 3000);</script>
                ";
            }else{
                $insert = $con->query("UPDATE aluno SET foto='$path' WHERE token='$token'");
                echo "
                <script>setTimeout(function() {
                    window.location.href = 'index_user.php?link=16';
                }, 3000);</script>
                ";
            }


// echo $insert?'ok':'err';
}
} 
else 
{
echo 'invalid';
}
}
?>