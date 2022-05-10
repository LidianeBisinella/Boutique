<?php
$conn = mysqli_connect("localhost", "root","","web");

if($conn == false ){
   die("ERRO: Não conseguiu " . mysqli_connect_error());
}
?>