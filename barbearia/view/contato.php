<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" lang="pt-br">
        <title>Contato com Barbearia 7timos</title>

        <link href="css/style2.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <div class="header" align="center">
            <img src="imagem/imagem7.png" alt="Barbearia setimos"/>


            <h1> Barbearia 7timos</h1>
        </div>

        <div class="menu">
            
            <ul>
                <li><a href="../index.html">Principal</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="agenda.php">Agenda</a></li>
                <li><a href="usuario.php">Usuário</a></li>
                <li><a href="avaliacao.php">Avaliação</a></li>
                <li><a href="sobre.html">Sobre</a></li>
            </ul>
            
        </div>


        <div>

            <form id="contato" name="contato" method="post" action="../model/contatoform.php">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome"><br><br>

                <label for="tel">Telefone:</label>
                <input type="tel" id="tel" name="tel"><br><br>


                <label for="data">Data do contato:</label>
                <input type="date" id="data" name="data"><br><br>


                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"><br><br>


                <label for="tpcont">Tipo de contato:</label><br>

                <input type="radio" id="duvida" name="contato" value="duvida">
                <label for="duvida"> Dúvida</label><br>

                <input type="radio" id="reclama" name="contato" value="reclama">
                <label for="reclama"> Reclamação</label><br>

                <input type="radio" id="elogio" name="contato" value="elogio">
                <label for="elogio"> Elogio</label><br><br>

                <label for="mens">Mensagem:</label><br>
                <textarea id="mens" name="mens"  rows="4" cols="50">
                </textarea>
                <br><br>

                <input type="submit" value="Enviar">
                <input type="reset" value="Apagar" >


            </form>             

        </div>


        <div>Conteúdo 2</div>


        <div>Rodapé</div>



        <?php
        // put your code here
        ?>
    </body>
</html>
