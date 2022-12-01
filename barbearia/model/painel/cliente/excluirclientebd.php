<!DOCTYPE html>
<!--
BUSCA DE DADOS EM TABELAS
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once '../../../controller/conexao.php';

        // RECEBENDO OS DADOS PREENCHIDOS DO FORMUL�RIO !
        //$nomecli = $_POST ["nomecli"]; //atribuindo do campo "nome" vindo do formulario para variavel
        $cpf = $_POST ["cpf"];
        //$tel = $_POST ["tel"];
        //$dtnasc = $_POST ["dtnasc"];
        //$email = $_POST ["email"];
        //$ender = $_POST ["ender"];
        //$bairro = $_POST ["bairro"];
        //$cidade = $_POST ["cidade"];
        //$cep = $_POST ["cep"];
        //$pais = $_POST ["pais"];

        // Métodos do objeto Cliente
        //$buscar = $_POST ["buscar"];

        // SQL PARA BUSCAR EM TABELAS
        $sql = "DELETE FROM cliente WHERE cpf = '$cpf';";

        if ($conexao->query($sql)=== TRUE){
            echo "Realizada a exclusão do CLIENTE com Sucesso!";
        } else {
            echo "Erro de exclusão:". $conexao->error;
        }
                        
        $conexao->close();
       ?>
    </body>
</html>

