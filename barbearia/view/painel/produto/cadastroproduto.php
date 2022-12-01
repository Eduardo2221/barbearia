<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>CADASTRO DE PRODUTOS COM BANCO DE DADOS E PHP</title>
        <link href="css/style2.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <h3 align="center">Cadastro de Produto</h3>
        <form id="cadastrocliente" name="cadastrocliente" method="post" action="../../../model/painel/produto/cadastroprodutobd.php" onsubmit="return validar();
                return false;">
            <table width="625" border="0">
                <tr>
                    <td>Nome do Produto:</td>
                    <td><input name="nomeprod" type="text" id="nomeprod" size="14" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Categoria do Produto:</td>
                    <td><input name="catprod" type="text" id="catprod" size="30" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Quatidade do Produto:</td>
                    <td><input name="qtprod" type="number" id="qtprod"  />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Preço da Unidade:</td>
                    <td><input name="precoun" type="number" id="precoun"/>
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Imagem do Produto:</td>
                    <td><input name="imgprod" type="file" id="imgprod"/>
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Peso do Produto:</td>
                    <td><input name="pesoprod" type="number" id="pesoprod" size="20" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>

                <tr>
                    <td colspan="2"><p>
                            <input name="cadastrar" type="submit" id="cadastrar" value="CADASTRAR" <?php $cadastrar ?>/> 

                            <br></br>

                            <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />

                            <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!          </span></p>
                        <p>&nbsp; </p></td>
                </tr>   
            </table>
        </form>

<script src="modoesculo.js" type="text/javascript"></script>

    </body>
</html>
