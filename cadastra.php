
    <?php
include_once 'conecta.php';

// apartir deste momento eu pego as info q vieram do form

$cpf = $_POST["cpf"];
$nome = $_POST["nome"];
$tel = $_POST["tel"];
$email = $_POST["email"];

 $sql = "insert into usuario (cpf,nome,tel,email) values ('$cpf','$nome','$tel','$email')";

     ?>

