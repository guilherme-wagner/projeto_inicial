<!DOCTYPE html>
<html lang="pt-br">

<head>
        <!-- -->
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lançamentos</title>
</head>

<body>
        <div class="box">
                <fieldset>
                        <legend>
                                <b>Informe os Dados Abaixo:</b>
                        </legend>
                        <br>
                        <div class="inputBox">
                                <form name="insercao" action="insercao.php" method="post">
                                        Descrição: <select name="desc" class="campo-desc">
                                                <option selected disabled value="">Selecione</option>
                                                <option name="itens">Itens Variados </option>
                                                <option name="agua">Água</option>
                                                <option name="luz">Luz</option>
                                                <option name="tel">Telefone</option>
                                                <option name="imposto">Imposto</option>
                                                <option name="aluguel">Aluguel</option>
                                                <option name="comida">Comida</option>
                                                <option name="artigos">Artigo Papelaria</option>
                                                <option name="venda">Venda</option>
                                        </select>
                                        <br><br>

                                        Tipo de Lançamento: <select name="tp_lanc" class="campo-lanc">
                                                <option selected disabled value="">Selecione</option>
                                                <option name="entrada" required>Entrada</option>
                                                <option name="saida" required>Saida</option>
                                        </select>
                                        <br><br>

                                        <!--Tipo Contábil: <select name="tp_cont">
                                <option name="primeiro">Selecione uma opção</option>
                                <option name="receita">Receita</option>
                                <option name="despesa">Despesa</option>
                        </select>
                        <br><br>-->

                                        Tipo Vendedor: <select name="tp_vend" class="campo-tp_vend">
                                                <option selected disabled value="">Selecione</option>
                                                <option name="loja">Loja</option>
                                                <option name="vendedor">Vendedor</option>
                                        </select>
                                        <br><br>

                                        Cliente: <input type="text" name="cliente" class="campo-cliente" required>
                                        <br><br>

                                        Forma de Pagamento: <select name="pagamento" class="campo-pgto">

                                                <option selected disabled value="">Selecione</option>
                                                <option name="credLoja">Crédito Loja</option>
                                                <option name="dinehiro">Dinheiro</option>
                                                <option name="cartDeb">Cartão Débito</option>
                                                <option name="cartCred">Cartão Crédito</option>
                                                <option name="pix"> PIX </option>
                                                <option name="transf">Transferência</option>
                                                <option name="boleto">Boleto</option>
                                        </select>
                                        <br><br>

                                        Valor R$: <input type="number" name="valor" class="campo-valor" required>
                                        <br><br>

                                        <INPUT TYPE="SUBMIT" VALUE="Cadastrar" class="bot-enviar">
                                        <INPUT TYPE="RESET" VALUE="Limpar" class="bot-reset">
                                </form>
                        </div>
                </fieldset>
        </div>
</body>

</html>