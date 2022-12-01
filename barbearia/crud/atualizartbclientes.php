<!DOCTYPE html>
<!--
Atualizar dados em tabela - CLIENTES.
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
        

        //Atualizar  dados na tabela - CLIENTE
        $sql = "UPDATE clientes SET nm_cli= 'Ricardo Dias Serda Antunes' WHERE cod_cli_PK = 14";
        
        if ($conexao->query($sql) === true) {
            echo "Atualização de registro na tabela CLIENTE realizada com sucesso!";
        } else {
            echo "Erro de atualização de registro: ". $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
