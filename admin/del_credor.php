<?php
require 'config.php';
  if(isset($_GET['id'])){
      $id=$_GET['id'];
      $deleta=$con->query("DELETE FROM credor WHERE idcredor='$id'");
      header("Location: index.php?link=4");
  }