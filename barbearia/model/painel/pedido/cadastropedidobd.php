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
        $codped_PK = $_POST ["codped_PK"];
        $codcli_FK = $_POST ["codcli_FK"];
        $codprod_FK = $_POST ["codprod_FK"];
        $descr = $_POST ["descr"];
        $vlped = $_POST ["vlped"];

        // SQL PARA INSERIR DADOS NA TABELAS ESPEFÍFICA
        $sql = "INSERT INTO pedido (codped_PK, codcli_FK, codprod_FK, descr, vlped)
        VALUE ('$codped_PK','$codcli_FK','$codprod_FK','$descr','$vlped');";

        if ($conexao->query($sql) === TRUE) {
            echo "Nova inserção de PEDIDO realizada Sucesso!";
        } else {
            echo "Erro:" . $sql . "<br>" . $conexao->error;
        }
        echo "<br>";
        $conexao->close();
        ?>
    </body>
</html>
