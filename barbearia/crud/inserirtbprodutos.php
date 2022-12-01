<!DOCTYPE html>
<!--
Inserir dados em tabela - PRODUTOS.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $db = "barbearia";

        // Criar conexão com servidor de Bando de dados
        $conexao = new mysqli($servername, $username, $password, $db);

        // Checar conexão
        if ($conexao->connect_error) {
            die("Conexão falhou: " . $conexao->connect_error);
        }
        echo "Conectado com sucesso!" . "<br>";

        //Inserir dados na tabela - PRODUTOS
        $sql2 = "INSERT INTO produtos
        VALUES
        (1002,'Limpol','Removedor',5.99),
        (1003,'Ajax','Removedor',5.49),
        (1004,'Pinho Sol','Perfume floral',6.79);";
        
        if ($conexao->query($sql2) === true) {
            echo "Inserção na tabela PRODUTOS realizada com sucesso!!";
        } else {
            echo "Erro: ".$sql2. "<br><br>". $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
