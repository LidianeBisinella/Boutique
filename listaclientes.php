<?php
    include "includes/topo.php";
    ?>
        <header>
            <h2>Cadrastro do Cliente</h2>
          </header>
  
           <section>
            <nav>
             <ul id="menu"> 
               <li><a href="Tela inicial.php">Início</a></li>
               <li><a href="CadCliente.php">Cadastro de Cliente</a></li>
                <li><a href="CadMercadoria.php">Cadatro de Mercadoria</a></li>
               <li><a href="CadastEmprestimo.php">Cadastro de Emprestimo</a></li>
               <li><a href="Historico.php">Histórico</a></li>
              </ul>
             </nav>
            
             <article>
                <table border="1">
                    <tr>
                        <td>ID</td>
                        <td>Nome</td>
                        <td>cpf</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <?php

                        include "includes/conecta.php";
                         //Monta comando SQL para obter todos os pacientes
                         $sql = "SELECT id, nome, cpf, telefone, data_de_nascimento, email, genero FROM clientes";

                         //envia codigo SQL para o MySQL
                         $res = mysqli_query($conn, $sql);

                         //array associativo, como se fosse um dicionario. Percorre os registros encontrados 
                         while($row = mysqli_fetch_assoc($res)) {

                            echo "<tr>
                            <td>". $row ['id'] ."</td>
                            <td>". $row ['nome'] ."</td>
                            <td>". $row ['cpf'] ."</td>
                            <td><a href='CadCliente.php?id=". $row ['id'] ."'>Editar</a></td>
                            <td><a href='excluicliente.php?id=".$row['id'] ."'>Excluir</a></td>
                        </tr>";

                         }


                    ?>
                </table>
            </article>
          </section>
          
          <footer>
            <p>Todos diretios reservados</p>
          </footer>

        </form>
        <a href="Tela inicial.php">voltar</a>

    </body>
        
</html>
