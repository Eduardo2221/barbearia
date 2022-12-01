<!DOCTYPE html>
<!--
INSERÇÃO DE DADOS EM TABELAS
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
        $nomecli = $_POST ["nomecli"]; //atribuindo do campo "nome" vindo do formulario para variavel
        $cpf = $_POST ["cpf"];
        $tel = $_POST ["tel"];
        $dtnasc = $_POST ["dtnasc"];
        $email = $_POST ["email"];
        $ender = $_POST ["ender"];
        $bairro = $_POST ["bairro"];
        $cidade = $_POST ["cidade"];
        $cep = $_POST ["cep"];
        $pais = $_POST ["pais"];

        // SQL PARA INSERIR DADOS NA TABELAS ESPEFÍFICA
        $sql = "INSERT INTO cliente (nomecli,cpf,tel,dtnasc,email,ender,bairro,cidade,cep,pais)
        VALUE ('$nomecli','$cpf','$tel','$dtnasc','$email','$ender','$bairro','$cidade','$cep','$pais');";

        if ($conexao->query($sql) === TRUE) {
            echo "Nova inserção de CLIENTE realizada Sucesso!";
        } else {
            echo "Erro:" . $sql . "<br>" . $conexao->error;
        }
        echo "<br>";
        $conexao->close();
        ?>
    </body>
</html>
