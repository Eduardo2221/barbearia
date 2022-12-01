<?php
	session_start();
	echo "Usuario: ". $_SESSION['usuarioNome'];	
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style_login.css">
    </head>
    <body>
        <main>
            <h1>SISTEMA WEB</h1>
            <div class="colunas">
                <h2>Cliente</h2>
                <ul>
                    <li><a href="cliente/cadastrocliente.php">Cadastrar</a></li>
                    <li><a href="cliente/buscarcliente.php">Buscar</a></li>
                    <li><a href="cliente/atualizarcliente.php">Alterar</a></li>
                </ul>
            </div>

            <div class="colunas">
                <h2>Produto</h2>
                <ul>
                    <li><a href="produto/cadastroproduto.php">Cadastrar</a></li>
                    <li><a href="produto/buscarproduto.php">Buscar</a></li>
                    <li><a href="produto/atualizarproduto.php">Alterar</a></li>
                </ul>
            </div>
            <div class="colunas">
                <h2>Pedido</h2>
                <ul>
                    <li><a href="pedido/cadastropedido.php">Cadastrar</a></li>
                    <li><a href="pedido/buscarpedido.php">Buscar</a></li>
                    <li><a href="pedido/atualizarpedido.php">Alterar</a></li>
                </ul>
            </div>
        </main>
        <br>
        <a href="../../controller/sair.php">Sair</a>
    </body>
</html>