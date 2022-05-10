<?php
    //echo "Dados enviados via post<br>";
    //var_dump ($_POST);

    $Login = $_POST ["login"];
    $Senha = $_POST["senha"];
    include "includes/conecta.php";

    $sql = "SELECT * FROM usuario WHERE email = '$Login' AND senha = '$Senha'";
    $res = mysqli_query($conn, $sql);

    $qtdeRegistros = mysqli_num_rows($res);

    if($qtdeRegistros > 0){
        //Inicia a sessão 
        session_start(); 
        //Obtem dados do usuario 
        $row = mysqli_fetch_assoc($res);

        //armazena informações do usuario na sessão
        $_SESSION['id'] = $row['id'];
        $_SESSION['nome'] = $row['nome'];


        header("Location: Tela inicial.php");
    }
    else {
        header("Location: index.php");
    }
   

?>