<?php
require 'config.php';
  if(isset($_GET['id'])){
      $id=$_GET['id'];
      $deleta=$con->query("DELETE FROM contrato WHERE idcontrato='$id'");
      header("Location: index.php?link=5");
  }