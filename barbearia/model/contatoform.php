<!DOCTYPE html>
<!--

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        /*Campos do frontend por meio do atributo do HTML que serão 
         * variaveis no Backend PHP
         */
        $nome = $_POST['nome'];
        $tel = $_POST['tel'];
        $data = $_POST['data'];
        $email = $_POST['email'];
        $contato = $_POST['contato'];
        $mens = $_POST['mens'];
        
  //Um echo para todos o dados do frontend e backend 
        echo "Nome completo: " . $nome . "<br>"
        . "Telefone: " . $tel . "<br>"
        . "Data de Contato: " . $data . "<br>"
        . "E-mail: " . $email . "<br>"
        . "Tipo de contato: " . $contato . "<br>"
        . "Mensagem: " . $mens . "<br>"
        ;     
        
        ?>
    </body>
</html>
