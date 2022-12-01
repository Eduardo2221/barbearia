<!DOCTYPE html>
<!--
Deletar dados em tabela - CLIENTES.
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
        

        //Deletar dados na tabela - CLIENTE registrado
        $sql = "DELETE FROM clientes WHERE cod_cli_PK = 10";
        
        if ($conexao->query($sql) === true) {
            echo "Deleção de registro na tabela CLIENTE realizada com sucesso!";
        } else {
            echo "Erro de deleção de registro: ". $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
