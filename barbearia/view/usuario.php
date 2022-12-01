<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Usuário Barbearia 7timos</title>
        
        <link href="css/style2.css" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/signin.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="header" align="center">
         <img src="imagem/imagem7.png" alt="Barbearia setimos"/>
            
            <h1> Barbearia 7timos</h1>
        </div>

        <div class="menu">
            
            <ul>
                <li><a href="../index.html">Principal</a></li>
                <li><a href="servicos.html">Serviços</a></li>
                <li><a href="agenda.php">Agenda</a></li>
                <li><a href="usuario.php">Usuário</a></li>
                <li><a href="avaliacao.php">Avaliação</a></li>
                <li><a href="sobre.html">Sobre</a></li>
            </ul>
            
        </div>

        <div class="container">

            <form class="form-signin" method="POST" action="../controller/valida.php">
              <h2 class="form-signin-heading">Área Restrita</h2>
              <label for="inputEmail" class="sr-only">Email</label>
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
              <label for="inputPassword" class="sr-only">Senha</label>
              <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
              <button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
            </form>
	    <p class="text-center text-danger">
	  
	  
	        <!--Recuperando o valor da variável global, os erro de login.-->
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
                                echo "<script>alert('Falha ao logar!');</script>";
				unset($_SESSION['loginErro']);
			}?>
			
			
		</p>
		<p class="text-center text-success">
			
		<!--//Recuperando o valor da variável global, deslogado com sucesso.-->
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
        </div> <!-- /container -->
    </body>
</html>
