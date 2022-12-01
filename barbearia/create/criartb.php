<!DOCTYPE html>
<!--
CRIAR TABELAS NO BANCO DE DADOS
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $servername = "127.0.0.1:3307";
        $username = "root";
        $password = "";
        $dbname = "barbearia";

        // PASSO 1 - CONECTAR AO SERVIDOR DE BANCO DE DADOS
        $conn = new mysqli($servername, $username, $password, $dbname);

        // PASSO 2 - VERIFICAR A CONEXÃO COM BD
        if ($conn->connect_error) {
            die("Conexão falhou:" . $conn->connect_error);
        }

        // SQL PARA CREAR TABELAS

        $sql1 = "CREATE TABLE cliente
        (
        codcli_PK INT NOT NULL AUTO_INCREMENT, 
        nomecli VARCHAR(200), 
        cpf VARCHAR(14), 
        tel VARCHAR(30), 
        dtnasc DATE, 
        email VARCHAR(50), 
        ender VARCHAR(400), 
        bairro VARCHAR(30), 
        cidade VARCHAR (30), 
        cep VARCHAR (30), 
        pais VARCHAR (30),
        PRIMARY KEY (codcli_PK)
        );" ;

        $sql2 = "CREATE TABLE produto
        (
        codprod_PK INT NOT NULL AUTO_INCREMENT,
        nomeprod VARCHAR(100),
        catprod VARCHAR(50), 
        qtprod INT, 
        precoun DECIMAL(10,3), 
        imgprod BLOB, 
        pesoprod DECIMAL(10,3),
        PRIMARY KEY (codprod_PK)
        );" ;

        $sql3 = "CREATE TABLE pedido
        (
        codped_PK INT NOT NULL AUTO_INCREMENT,
        codcli_FK INT, 
        codprod_FK INT, 
        descr VARCHAR(400), 
        vlped DECIMAL(10,3),
        PRIMARY KEY (codped_PK),
        FOREIGN KEY (codcli_FK) REFERENCES cliente (codcli_PK),
        FOREIGN KEY (codprod_FK) REFERENCES produto (codprod_PK)
        );" ;
  
        if ($conn->query($sql1)=== TRUE){
            echo "Tabela Cliente Criada com Sucesso!";
        } else {
            echo "Erro ao criar as tabelas:" . $conn->error;
        }
        
        echo "<br>";
        
        if ($conn->query($sql2)=== TRUE){
            echo "Tabela Pedido Criada com Sucesso!";
        } else {
            echo "Erro ao criar as tabelas:" . $conn->error;
        }
        
        echo "<br>";
        
        if ($conn->query($sql3)=== TRUE){
            echo "Tabela Produto Criada com Sucesso!";
        } else {
            echo "Erro ao criar as tabelas:" . $conn->error;
        }

        ?>
    </body>
</html>
