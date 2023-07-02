<!DOCTYPE html>
<html>
<head>
    <title>Página de Visualização</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Página inicial</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>
    
    <h1>Página de Visualização</h1>
    
    <?php
    $conexao = mysqli_connect("localhost", "root", "", "bd_escola");
    $query = "SELECT * FROM alunos";
    $resultado = mysqli_query($conexao, $query);
    

    if (mysqli_num_rows($resultado) > 0) {
    
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Idade</th><th>Curso</th></tr>";
        
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['idade'] . "</td>";
            echo "<td>" . $row['curso'] . "</td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>Não há dados cadastrados.</p>";
    }
    

    mysqli_close($conexao);
    ?>
</body>
</html>
