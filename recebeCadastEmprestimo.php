<?php
 $conn = mysqli_connect("localhost", "root","","web");
 // var_dump($conn);
  if($conn == false ){
     die("ERRO: Não conseguiu " . mysqli_connect_error());
  }
  //$id = $_POST['id'];
  $Nome_do_produto = $_POST['Nome_do_produto'];
  $codigo = $_POST['codigo'];
  $data_do_emprestimo = $_POST['data_do_emprestimo'];
  $data_da_devolução = $_POST['data_da_devolução'];
  $Nome_do_destinatario = $_POST['Nome_do_destinatario'];
  $Contato_do_destinatario = $_POST['Contato_do_destinatario'];


  //Monta o SQL para inserir os dados do formulario do MySQL
  $sql = "INSERT INTO emprestimos (Nome_do_produto, codigo, data_do_emprestimo, data_da_devolução, Nome_do_destinatario, Contato_do_destinatario) 
           VALUES
            ('$Nome_do_produto', '$codigo', '$data_do_emprestimo', '$data_da_devolução', '$Nome_do_destinatario', '$Contato_do_destinatario')";
  //echo $sql;   
  
  // Envia codigo SQL para o MySQL
  $res = mysqli_query($conn, $sql);

 //se inderiu com sucesso 
  if($res) {
     //rediriciona usuario para listagem 
     header("Location: listaEmprestimo.php");
  }
  else {
    echo "ERRO AO INSERIR";
  }


//echo var_dump($_POST);
/*echo "Nome do produto: " . $_POST ["Nome_do_produto"] . "<br>";
echo "Codigo: " . $_POST ["codigo"] . "<br>";
echo "data do emprestimo: " . $_POST ["data_do_emprestimo"] . "<br>";
echo "data da devolução: " . $_POST ["data_da_devolução"] . "<br>";
echo "Nome do destinatario: " . $_POST ["Nome_do_destinatario"] . "<br>";
echo "Contato do destinatario: " . $_POST ["Contato_do_destinatario"] . "<br>";
*/
?>
