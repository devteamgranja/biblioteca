<?php 
try {
	$con=new PDO("mysql:host=localhost;dbname=biblioteca","root","");
} catch (PDOException $e) {
	echo 'Erro ao se conectar';
}

 ?>