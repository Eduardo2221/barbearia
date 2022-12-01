<!DOCTYPE html>
<!--
Inserir dados em tabela - PEDIDOS.
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

       //Inserir dados na tabela - PEDIDOS
        $sql = "INSERT INTO pedidos
        (cod_ped_PK , cod_cli_FK , cod_prod_FK , form_pag)
        VALUES
        (100,14,1002, 'debito');";
        
        if ($conexao->query($sql) === true) {
            echo "Inserção na tabela PEDIDOS realizada com sucesso!";
        } else {
            echo "Erro: ".$sql. "<br><br>". $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
