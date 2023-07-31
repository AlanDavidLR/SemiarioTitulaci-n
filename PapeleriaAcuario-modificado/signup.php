<?php
require "database.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $full_name = $_POST["full_name"];
    $age = $_POST["age"];
    $sex = $_POST["sex"];
    $country = $_POST["country"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Introduce un email válido.";
    } else {
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[\$%&/()]@', $password);

        if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
            $message = "La contraseña debe contener: una letra mayúscula, una letra minúscula, un número, un caracter especial $%&/() y al menos 8 caracteres.";
        } else {
            if ($password !== $confirm_password) {
                $message = "La contraseña debe ser la misma.";
            } else {
                // Use bcrypt to hash the password
                $hashed_password = password_hash($password, PASSWORD_BCRYPT);

                $sql = "INSERT INTO users(email, password, nombre, edad, sexo, pais) VALUES (:email, :password, :nombre, :edad, :sexo, :pais)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":password", $hashed_password);
                $stmt->bindParam(":nombre", $full_name);
                $stmt->bindParam(":edad", $age);
                $stmt->bindParam(":sexo", $sex);
                $stmt->bindParam(":pais", $country);

                if ($stmt->execute()) {
                    $message = "Usuario creado satisfactoriamente";
                } else {
                    $message = "Ha ocurrido un error creando su cuenta";
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
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
        <?php if (!empty($message)) : ?>
            <p><?= $message ?></p>
        <?php endif; ?>
        <h1>Registro de Usuario</h1>
        <span>or <a href="login.php">Login</a></span>
        <form action="signup.php" method="POST">
            <input type="text" name="full_name" placeholder="Nombre completo">
            <input type="number" name="age" placeholder="Edad">
            <label for="sex">Sexo:</label>
            <select name="sex">
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
            <input type="text" name="country" placeholder="País">
            <input type="text" name="email" placeholder="Ingrese su email">
            <input type="password" name="password" placeholder="Ingresa tu contraseña">
            <input type="password" name="confirm_password" placeholder="Confirma tu contraseña">
            <input type="submit" name="submit">
        </form>
    </div>
</body>

</html>
