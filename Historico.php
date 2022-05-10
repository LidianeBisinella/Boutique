<!DOCTYPE html>
<html>
    <head>
        <title>botique - Historico</title>
        <title>botique - tela inicial</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h2>Histórico</h2>
          </header>
  
           <section>
           <?php 
            include "includes/menu.php";
            ?>
           
        
                <article>
                    <form action="recebeHistorico.php" method="post">
                        <label for="Nome do produto">Nome do produto</label> 
                        <input type="text" name="Nome do produto"/>
        
                        <label for="Codigo">Codigo</label> 
                        <input type="text" name="Codigo"/>
                        
                        <label for="data do emprestimo">data do emprestimo</label>
                        <input type="date" name="data do emprestimo"/>
        
                        <label for="data da devolução ">data da devolução </label>
                        <input type="date" name="data da devolução"/>
        
                        <label for="Nome do destinatario">Nome do destinatario </label>
                        <input type="text" name="Nome do destinatario"/>
        
                        <label for="Contato do destinatario ">Contato do destinatario </label>
                        <input type="text" name="Contato do destinatario"/>     

                        <input type="submit"><br/><br/>      
                    </form>
                    
                    <a href="Tela inicial.php">voltar</a>
                  </article>

          </section>
          
          <footer>
            <p>Todos diretios reservados</p>
          </footer>

    </body>
        
</html>