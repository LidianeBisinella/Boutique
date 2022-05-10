<!DOCTYPE html>
<html>
    <head>
        <title>botique - login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <header>
           <h2>Botique - login</h2>
          </header>
      <div>


        <?php 
        if(isset($_GET['erro'])){
            echo'<p style="text-align:center">usuario e/ou senha incoreto(s) .</p>';
        }
        if(isset($_GET['autentica'])){
            echo'<p style="text-align:center; color:red">Voce não tem permissão de acesso .</p>';
        }
?>
        <form action="login.php" method="post">
            <label for="login">Login</label>
            <input type="text" name="login" id="login"/>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha"/><br/><br/>
            
            <input type="submit" value="autenticar">
        </form>
      </div>  
        <footer>
            <p>Todos diretios reservados</p>
          </footer>


        
    </body>
        
</html>