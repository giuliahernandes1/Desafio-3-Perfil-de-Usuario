<?php
session_start();

// Verifica de o usuário está logado
if (!isset($_SESSION['usuario'])) {
    header("Location: 15d_login.php");
    exit();
}
    // Pega a cor que veio da sessão
    $cor_fundo = $_SESSION['cor_fundo'] ?? '#ffffff';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do usuário</title>
</head>

<!-- Cor escolhida no login é aplicada aqui -->
<body style="background-color: <?php echo $cor_fundo; ?>;">
    
<h1>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h1>
<p>Esta é a sua página de perfil com a cor de fundo personlizada.</p>

<p><a href="15d_logout.php">Logout</a></p>
</body>
</html>