<?php
include "includes/conecta.php";

  $id = $_GET['id'];

  echo $sql = "DELETE FROM clientes WHERE id = $id";

  $res = mysqli_query($conn, $sql);

  header("Location: listaclientes.php");

  if($res == false ){
    die("ERRO: Não conseguiu " . mysqli_connect_error());
 }
?>