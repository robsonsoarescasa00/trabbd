
 <!DOCTYPE html>
<html>
<head>
    <title>Página de Cadastro</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Página inicial</a></li>
                <li><a href="visualizacao.php">Visualização</a></li>
            </ul>
        </nav>
    </header>
    
    <h1>Página de Cadastro</h1>
    
    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $curso = $_POST["curso"];
        
    
        $conexao = mysqli_connect("localhost", "root", "", "bd_escola");
        $query = "INSERT INTO alunos (nome, idade, curso) VALUES ('$nome', '$idade', '$curso')";
        $resultado = mysqli_query($conexao, $query);
        
        if ($resultado) {
            echo "<p>Dados cadastrados com sucesso!</p>";
        } else {
            echo "<p>Ocorreu um erro ao cadastrar os dados.</p>";
        }
        
        
        mysqli_close($conexao);
    }
    ?>
    
    <form method="POST" action="">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        
        <label for="curso">Curso:</label>
        <input type="text" id="curso" name="curso" required>
        
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>

