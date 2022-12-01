<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* Campos do frontend por meio do atributo do HTML que serão 
         * variaveis no Backend PHP
         */
        $nome = $_POST['nome'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $servicos = $_POST['servicos'];
        $tempo = $_POST['tempo'];

        //Um echo para todos o dados do frontend e backend 
        echo "Nome completo: " . $nome . "<br>"
        . "Telefone: " . $tel . "<br>"
        . "E-mail: " . $email . "<br>"
        . "Tipo de Serviço: " . $servicos . "<br>"
        . "Hora de agendamento: " . $tempo . "<br>"
        ;
        ?>
    </body>
</html>
