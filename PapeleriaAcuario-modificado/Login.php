<?php
require "database.php";

$message = "";

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT id, email, password FROM users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user["password"])) {
        // Password is correct
        session_start();
        $_SESSION["user_id"] = $user["id"];
        header("Location: index.php");
        exit();
    } else {
        $message = "Usuario no encontrado o contraseña incorrecta.";
    }
}
?>


<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <title>Inicia sesión o Regístrate</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Login-style.css">
</head>

<body>
    <div class="login-box">
        <img class="avatar" src="Imagenes/logo.png" alt="logo">
        <?php if (!empty($message)) : ?>
            <p> <?= $message ?></p>
        <?php endif; ?>
        <h1>Inicia sesión</h1>
        <form action="login.php" method="POST">
            <label for="email">Correo electrónico</label>
            <input type="text" name="email" placeholder="Ingresa tu email">
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="Ingresa tu contraseña">
            <input type="submit" name="Ingresar">
            <a href="signup.php">No tengo una cuenta</a>
        </form>
    </div>
</body>

</html>

