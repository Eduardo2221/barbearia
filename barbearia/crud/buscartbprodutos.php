<!DOCTYPE html>
<!--
Buscar dados em tabela - PRODUTOS.
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

        //Buscar dados na tabela - PRODUTOS
        $sql = "SELECT cod_prod_PK , nm_prod , cat_prod , preco_prod FROM produtos";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            // dados de saída de cada linha 
            while ($linha = $resultado->fetch_assoc()) {
                echo "Código do Produto:" . $linha["cod_prod_PK"] . " - Nome do Produto:" . $linha["nm_prod"] . " Categoria:" . $linha["cat_prod"] . " Preço: R$" . $linha["preco_prod"] . "<br>";
            }
        } else {
            echo "0 resultado na tabela Produtos";
        }

        $conexao->close();
        ?>
    </body>
</html>
