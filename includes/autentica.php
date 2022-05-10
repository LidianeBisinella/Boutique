<?php
    //(re) iniciar a sessão
    session_start();

    //Se já foi criada uma sessão autenticada 
    //se existe o valor ID guardado na sessão
    //!= valor Não
    if(!isset($_SESSION['id'])){

        header("Location: index.php?autentica=1");

       

    }


?>