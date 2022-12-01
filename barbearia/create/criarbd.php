<!DOCTYPE html>
<!--
CRIAR BANCO DE DADOS
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "127.0.0.1:3307";
        $username = "root";
        $password = "";
                   
        // PASSO 1 - CONECTAR AO SERVIDOR DE BANCO DE DADOS
        $conn = new mysqli($servername,$username,$password);
        
        // PASSO 2 - VERIFICAR A CONEXÃO COM BD
        if ($conn -> connect_error){
            die("Conexão falhou:" . $conn->connect_error);
        }
        
        //PASSO 3 - CRIAR UM BANCO DE DADOS
        $sql = "CREATE DATABASE barbearia";
        if($conn->query($sql)=== TRUE) {
            echo "Banco de dados criado com sucesso!";
        }else{
            echo "Erro ao criar o banco de dados." . $conn->error;
        }
        
        $conn->close();
        ?>
    </body>
</html>
