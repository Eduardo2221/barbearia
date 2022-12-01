<!DOCTYPE html>
<!--
Buscar dados em tabela - CLIENTES.
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

        //Buscar dados na tabela - CLIENTES
        $sql = "SELECT cod_cli_PK , nm_cli FROM clientes";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            // dados de saída de cada linha 
            while ($linha = $resultado->fetch_assoc()) {
                echo "Código do Cliente:" . $linha["cod_cli_PK"] . 
                        " - Nome do Cliente:" . $linha["nm_cli"] . "<br>";
            }
        } else {
            echo "0 resultado na tabela CLIENTES";
        }

        $conexao->close();
        ?>
    </body>
</html>
