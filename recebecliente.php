<?php
   include "includes/conecta.php";
   
   $id = $_POST['id'];
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $telefone = $_POST['Telefone'];
   $data_de_nascimento = $_POST['dataNascimento'];
   $Email = $_POST['email'];
   $genero = $_POST['genero'];

   //se Id estiver vazio - então é INSERT
   if(empty($id)){
      //Monta o SQL para inserir os dados do formulario do MySQL
      $sql = "INSERT INTO clientes (nome, cpf, telefone, data_de_nascimento, email, genero) 
               VALUES
               ('$nome', '$cpf', '$telefone', '$data_de_nascimento', '$Email', '$genero')";
      //echo $sql;   
      
      // Envia codigo SQL para o MySQL
      $res = mysqli_query($conn, $sql);

   //se inderiu com sucesso 
      if($res) {
         //rediriciona usuario para listagem 
         header("Location: listaclientes.php");
      }
      else {
      echo "ERRO AO INSERIR";
      }
   }
   else {
      $sql = "UPDATE clientes SET
               nome = '$nome',
               cpf = '$cpf',
               telefone = '$telefone',
               data_de_nascimento = '$data_de_nascimento',
               email = '$email',
               genero = '$genero'
               WHERE
               id = $id";

    // Envia codigo SQL para o MySQL
   $res = mysqli_query($conn, $sql);

   //se inderiu com sucesso 
    if($res) {
       //rediriciona usuario para listagem 
       header("Location: listaclientes.php");
    }
    else {
      echo "ERRO AO INSERIR";
    }
   }


   /*
   //echo var_dump($_POST);
   echo"nome: " . $_POST ["nome"] . "<br>";
   echo"cpf: " . $_POST ["cpf"] . "<br>";
   echo"Telefone: " . $_POST ["Telefone"] . "<br>";
   echo"data de nascimento: " . $_POST ["dataNascimento"] . "<br>";
   echo"E-mail: " . $_POST ["email"] . "<br>";
   echo"genero: " . $_POST ["genero"] . "<br>";
   */
?>
