<?php
include "includes/conecta.php";

$id = "";
$nome = "";
$cpf = "";
$telefone = "";
$data_de_nascimento = "";
$email = "";
$genero = "";

//se foi enviado ID via GET - se é edição de cliente
if(isset($_GET['id'])){
//obtem valor enviado via get
    $id = $_GET['id'];
    $sql = "SELECT * FROM clientes WHERE id = $id";
    //envia a consulta para obter dados do cliente atual
    $res = mysqli_query($conn, $sql);
    //Armazena os dados obitdos 
    $row = mysqli_fetch_assoc($res);

    $nome = $row['nome'];
    $telefone = $row['telefone'];
    $data_de_nascimento = $row['data_de_nascimento'];
    $email = $row['email'];
    $genero = $row['genero'];

}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>botique - CadCliente</title>
        <title>botique - tela inicial</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet">        
    </head>
    <body>
        <header>
            <h2>Cadrastro do Cliente</h2>
          </header>
  
           <section>
            <?php 
            include "includes/menu.php";
            ?>
            
             <article>
                <form action="recebecliente.php" method="post">

                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    
                    <label for="Nome">Nome</label>
                    <input type="text" name="nome" value="<?php echo $nome; ?>" />

                    <label for="Cpf">cpf</label>
                    <input type="text" name="cpf" value="<?php echo $cpf; ?>" />

                    <label for="Telefone">Telefone</label>
                    <input type="text" name="Telefone" value="<?php echo $telefone; ?>"/>

                    <label for="data de nascimento">data de nascimento</label>
                    <input type="text" name="dataNascimento" value="<?php echo $data_de_nascimento; ?>"/>

                    <label for="E-mail">E-mail</label>
                    <input type="text" name="email" value="<?php echo $email; ?>"/>

                    <label for="genero">genero</label>
                    <select name="genero">
                        <option value="M" <?php if ($genero=='M'){echo "selected";}?> >Masculino</option>
                        <option value="F" <?php if ($genero=='F'){echo "selected";}?>>Feminino</option>
                    </select>
                    <input type="submit"><br/><br/>
            </article>
          </section>
          
          <footer>
            <p>Todos diretios reservados</p>
          </footer>

        </form>
        <a href="Tela inicial.php">voltar</a>

    </body>
        
</html>