<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $cor_fundo = $_POST['cor_fundo'] ?? '#ffffff';

    $conn = new mysqli("localhost", "root", "Senai@118", "exercicio");

    // Consulta usuário no BD
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

    $result = $conn->query($sql);

    // Verifica se encontrou o usuário
    if ($result->num_rows > 0) {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['cor_fundo'] = $cor_fundo;

        header("Location: 15d_perfil.php");
        exit();
    } else {
        $mensagem_erro = "Usuário ou senha incorretos";
    }

    // Fceha a conexão
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form method="post" action="">
        <h2>Login do sistema</h2>

        <?php
        if (isset($mensagem_erro)) {
            echo "<p style='color: red;'>$mensagem_erro</p>";
        }
        ?>


        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <input type="color" name="cor_fundo" value="#ffffff">

        <button type="submit">Entrar</button>
    </form>
</body>

</html>