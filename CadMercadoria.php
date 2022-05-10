<?php
    include "includes/topo.php";
    ?>
        <header>
            <h2>Cadrastro do Produto</h2>
          </header>
  
           <section>
           <?php 
            include "includes/menu.php";
            ?>
             <article>
                <form action="recebeMercadoria.php" method="post">
                    Nome <input type="text" name="nome"/><br/><br/>
                    Tipo do Produto <input type="text" name="Tipo do Produto"/><br/><br/>
                    Descrição <input type="text" name="Descrição"/><br/><br/>
                    Estado do produto <select name="Estado do produto">
                                <option>Novo</option>
                                <option>Usado em boas condições de uso</option>
                                <option>Usado em condições razoaveis</option>
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