<!DOCTYPE html>
<!--
Deletar dados em tabela - PEDIDOS.
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
        

        //Deletar dados na tabela - PEDIDOS registrado
        $sql = "DELETE FROM pedidos WHERE cod_ped_PK = 100";
        
        if ($conexao->query($sql) === true) {
            echo "Deleção de registro na tabela PEDIDOS realizada com sucesso!";
        } else {
            echo "Erro de deleção de registro: ". $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
