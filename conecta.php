<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$serv = "localhost";
$user = "root";
$pass = "";
$db = "contatos";
$conexao = mysqli_connect($serv,$user,$pass,$db);

if (!$conexao){   
echo "problema de bios no pc do Ale";
   die ("falha na conexao");
}
else
echo "deu certo";
?>
</body>
</html>