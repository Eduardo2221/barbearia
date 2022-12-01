<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>PESQUISA DE CLIENTES COM BANCO DE DADOS E PHP</title>
        <link href="style2.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <h3 align="center">Pesquisa de Cliente por CPF</h3>
        <form id="buscacliente" name="buscacliente" method="post" action="../../../model/painel/cliente/buscarclientebd.php" onsubmit="return validaCampo();
                return false;">
            <table width="625" border="0">
                <tr>
                    <td>CPF:</td>
                    <td><input name="cpf" type="text" id="cpf" size="14" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>


                <tr>
                    <td colspan="2"><p>

                            <input name="buscar" type="submit" id="buscar" value="BUSCAR" <?php $buscar ?>/> 

                            <br></br>

                            <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />

                            <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!          </span></p>
                        <p>&nbsp; </p></td>
                </tr>   
            </table>
        </form>
    </body>
</html>
