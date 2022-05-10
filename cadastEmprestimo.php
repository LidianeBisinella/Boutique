<?php
    include "includes/topo.php";
    ?>
        <header>
            <h2>Cadastro de empréstimo</h2>
          </header>
          <section>
          <?php 
            include "includes/menu.php";
            ?>
          
          <article>
            <form action="recebeCadastEmprestimo.php" method="post">
                <label for="Nome do produto">Nome do produto</label> 
                <input type="text" id="Nome_do_produto" name="Nome_do_produto"/>

                <label for="codigo">Codigo</label> 
                <input type="text" name="codigo"/>
                
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