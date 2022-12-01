<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>ATUALIZAÇÃO DE CLIENTES COM BANCO DE DADOS E PHP</title>
        <link href="style2.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>

        <h3 align="center">Atualização de Cliente</h3>
        <form id="cadastrocliente" name="cadastrocliente" method="post" action="../../../model/painel/cliente/atualizarclientebd.php" onsubmit="return validaCampo();
                return false;">
            <table width="625" border="0">
                <tr>
                    <td width="69">Nome:</td>
                    <td width="546"><input name="nomecli" type="text" id="nomecli" size="70" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>CPF:</td>
                    <td><input name="cpf" type="text" id="cpf" size="14" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Telefone:</td>
                    <td><input name="tel" type="tel" id="tel" size="30" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Data de nascimento:</td>
                    <td><input name="dtnasc" type="date" id="dtnasc"  />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input name="email" type="email" id="email"/>
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td><input name="ender" type="text" id="ender" size="70" maxlength="400" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Bairro:</td>
                    <td><input name="bairro" type="text" id="email" size="20" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>Cidade:</td>
                    <td><input name="cidade" type="text" id="cidade" size="20" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>CEP:</td>
                    <td><input name="cep" type="text" id="cep" size="30" maxlength="60" />
                        <span class="style1">*</span></td>
                </tr>
                <tr>
                    <td>País:</td>
                    <td><input name="pais" type="text" id="pais" size="30" maxlength="60" />
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

                <!--
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
                -->
            <!-- Fim do JavaScript que validará os campos obrigatórios -->

    </body>
</html>
