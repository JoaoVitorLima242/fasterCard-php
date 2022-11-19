<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="payment.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/x-icon" href="/assets/logo1.png" />
    <title>Faster Cars</title>
  </head>
  <body>
  <?php
    include "layout/menu.php";
  ?>
    <div class="payment-container">
    <div class="payment-background"> 
      <h1 class="titulo">Dados do titular do cartão
    <form id="form">
      <div >
        <label for="nome">Nome completo</label>
        <input type="text" name="nome" required />
      </div>
      <div>
        <label for="cpf">CPF*</label>
        <input type="number" name="cpf" placeholder="___-___-___-__" required/>
      </div>
      <div>
        <label for="numCartao">Número do cartão</label>
        <input type="number" name="cartao" required>
      </div>
      <div >
        <label for="vencimento">Vencimento do cartão</label>
        <input type="date" name="vencimento" required />
      </div>
      <div >
        <label for="codigoSegurança">Código de segurança</label>
        <input type="text" name="segurança" maxlength="3" placeholder="CVV" required>
      </div>
      <div >
        <label for="telefone">Telefone</label>
        <input type="number" name="telefone" placeholder="(__)____-____" required>
      </div>
      <div>
        <label for="nascimento">Data de nascimento</label>
        <input type="date" name="nascimento" required>
      </div>
      <div>
        <input class="button" type="submit" id="submit" value="Pagar">
      </div>
    </div>
  </div>
    </form>
  </body>
</html>