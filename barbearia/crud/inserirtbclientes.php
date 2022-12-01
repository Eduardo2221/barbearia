<!DOCTYPE html>
<!--
Inserir dados em tabela - CLIENTES.
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

        //Inserir dados na tabela - CLIENTE
        $sql = "INSERT INTO clientes
        (cod_cli_PK , rg_cli , cpf_cli , nm_cli , dt_nasc ,
        est_civil , tel , email , logra , qd , num , apto ,
        bairro , cidade , estado , cep)
        VALUES
        ( 10 ,'10.999.156 SSP-DF','103.235.569-85','Pedro Dias Serda',
        '1989-12-10','casado(a)','(61) 99656-5632','pedro@gmail.com',
        'Avenida','15',506,1002,'Jardim Águas Linda','Brasília',
        'Distrito Federal','71.950-400');";

        if ($conexao->query($sql) === true) {
            echo "Inserção na tabela CLIENTE realizada com sucesso!";
        } else {
            echo "Erro: ".$sql. "<br><br>". $conexao->error;
        }

        $conexao->close();
        ?>
    </body>
</html>
