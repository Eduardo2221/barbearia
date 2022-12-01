<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agende com a Barbearia 7timos</title>

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
  
        <div>/*Divisão para ser aplicado no formulário de agendamento*/

            <form id="agenda" name="agenda" method="post" action="../model/agendaform.php">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome"><br><br>

                <label for="tel">Telefone:</label>
                <input type="tel" id="tel" name="tel"><br><br>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email"><br><br>

                <label for="tpserv">Tipo de Serviço:</label>

                <select id="servicos" name="servicos">
                    <option value="barbeiro1">Barbeiro - Aguinaldo Navalha</option><br>
                    <option value="barbeiro2">Barbeiro - Felipe Tesoura</option><br>
                    <option value="podologa"> Podóloga - Marienta Mãos de Anjo</option><br>
                    <option value="esteticista"> Esteticista - Joana Melhores</option><br><br>
                </select><br><br>

                <label for="time">Hora de agendamento:</label>
                <input type="time" id="tempo" name="tempo"><br><br>

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
