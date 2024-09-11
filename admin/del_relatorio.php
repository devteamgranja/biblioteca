<?php
require 'config.php';
  if(isset($_GET['id'])){
      $id=$_GET['id'];
      $deleta=$con->query("DELETE FROM relatorio WHERE id_relatorio='$id'");
      header("Location: index.php?link=16");
  }