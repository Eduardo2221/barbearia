<!DOCTYPE html>
<!--
Buscar dados em tabela - PEDIDOS.
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

        //Buscar dados na tabela - PEDIDOS
        $sql = "SELECT cod_ped_PK , cod_cli_FK , cod_prod_FK , form_pag FROM pedidos";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            // dados de saída de cada linha 
            while ($linha = $resultado->fetch_assoc()) {
                echo "Código do Pedido:" . $linha["cod_ped_PK"] . " - Código do cliente:" . $linha["cod_cli_FK"] . " Código do produto:" . $linha["cod_prod_FK"] . " Forma de pagamento:" . $linha["form_pag"] . "<br>";
            }
        } else {
            echo "0 resultado na tabela Pedidos";
        }

        $conexao->close();
        ?>
    </body>
</html>
