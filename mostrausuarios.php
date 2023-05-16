<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
include 'conecta.php';

$sql = "select * from usuario";
$resultado = mysqli_query($conexao,$sql);
$linhas = mysqli_num_rows($resultado);
  

for ($i = 0;$i <$linhas; $i++){
     $user = mysqli_fetch_array($resultado);
    echo $user['nome'] . "--";
    echo $user['cpf'] . "<br/>";
    echo $user['tel'] ;
    echo $user['email'];
}

?>
</body>
</html>