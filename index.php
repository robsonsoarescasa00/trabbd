<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/php.css">
    <title>contatos</title>
</head>
<body>
                     <h1>Cadastro</h1>
    <form action="cadastra.php"  method="$_POST"  > 
<label  for="a">Nome:</label>
<input type="text" class="x" id="a" name="nome" placeholder="Digite Nome"><br>
<label for="b">Senha:</label>
<input id="b"  type="text" class="x" name="cpf"   placeholder="Digite  CPF"><br>
<label for="c">E-mail:</label>
<input type="email" class="x"  name="email" placeholder="Digite E-mail" id="c"><br>
<label for="d">Telefone:</label>
<input id="d" type="tel"  class="x" name="tel" placeholder="Digite telefone"><br>

        <input   type="submit" class="x" name="confirmar" value="confirmar">
    </form>
</body>
</html>