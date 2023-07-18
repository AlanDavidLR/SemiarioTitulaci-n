<?php
require "database.php";

$message = "";

if (!empty($_POST["email"]) && !empty($_POST["password"])) {
    $sql = "INSERT INTO users(email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":email", $_POST["email"]);
    $password = md5($_POST["password"]); // Encriptar el password con MD5
    $stmt->bindParam(":password", $password);

    if ($stmt->execute()) {
        $message = "Usuario creado satisfactoriamente";
    } else {
        $message = "Ha ocurrido un error creando su contraseña";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SignUp</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <?php require "partials/header.php" ?>


    <link rel="stylesheet" href="Login-style.css">
    
</head>

<body>
<div class="login-box">
<img class="avatar" src="Imagenes/logo.png" alt="logo">
<?php if(!empty($message)):?>
    <p><?= $message?></p>
    <?php endif; ?>

    <h1>Registro de Usuario</h1>
    <span>or <a href="login.php">Login</a></span>
    
 
    <form action="signup.php" method="POST">
        <input type="text" name="email" placeholder="ingrese su email">
        <input type="password" name="password" placeholder="Ingresa tu password">
        <input type="password" name="confirm_password" placeholder="Confirma tu password">
        <input type="submit" name="submit">
        
    </form>
    </div>
</body>

</html>