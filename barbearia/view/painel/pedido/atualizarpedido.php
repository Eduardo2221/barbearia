<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>ATUALIZAÇÃO DE CLIENTES COM BANCO DE DADOS E PHP</title>
        <link href="style2.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <h3 align="center">Atualização de Pedido</h3>
        <form id="cadastrocliente" name="cadastrocliente" method="post" action="../../../model/painel/pedido/cadastropedidobd.php" onsubmit="return validar();
                return false;">
            <table width="625" border="0">
                <tr>
                    <td width="69">Codigo do Pedido:</td>
                    <td width="546"><input name="nomecli" type="number" id="nomecli" size="70" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Codigo do Cliente:</td>
                    <td><input name="cpf" type="number" id="cpf" size="14" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Codigo do produto:</td>
                    <td><input name="tel" type="number" id="tel" size="30" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Descrição:</td>
                    <td><input name="dtnasc" type="text" id="dtnasc"  />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Valor Pedido:</td>
                    <td><input name="email" type="number" id="email"/>
                        <span class="style1">*</span></td>
                </tr>

                <tr>
                    <td colspan="2"><p>
                            <input name="atualizar" type="submit" id="atualizar" value="ATUALIZAR" <?php $atualizar ?>/> 

                            <br></br>

                            <input name="limpar" type="reset" id="limpar" value="Limpar Campos preenchidos!" />

                            <span class="style1">* Campos com * s&atilde;o obrigat&oacute;rios!          </span></p>
                        <p>&nbsp; </p></td>
                </tr>   
            </table>
        </form>

                <script type="text/javascript">
                    function validaCampo()
                    {
                        if (document.cadastrocliente.nomecli.value == "")
                        {
                            alert("O Campo NOME é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.cpf.value == "")
                        {
                            alert("O Campo CPF é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.tel.value == "")
                        {
                            alert("O Campo TELEFONE  é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.dtnasc.value == "")
                        {
                            alert("O Campo Data de Nascimento é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.email.value == "")
                        {
                            alert("O Campo E-mail é obrigatório!");
                            return false;
                            console.log('Executando');
                        } else
        
                        if (document.cadastrocliente.ender.value == "")
                        {
                            alert("O Campo Endereço é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.bairro.value == "")
                        {
                            alert("O Campo Bairro é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.cidade.value == "")
                        {
                            alert("O Campo Cidade é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.cep.value == "")
                        {
                            alert("O Campo CEP é obrigatório!");
                            return false;
                        } else
        
                        if (document.cadastrocliente.pais.value == "")
                        {
                            alert("O Campo PAÍS é obrigatório!");
                            return false;
                        } else
                            return true;
                    }
                    
                    
                </script>
            <!-- Fim do JavaScript que validará os campos obrigatórios -->

    </body>
</html>
