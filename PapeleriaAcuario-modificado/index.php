<?php
  session_start();

  require "database.php";

  if (isset($_SESSION["user_id"])) {
    $records = $conn->prepare("SELECT id, email, password FROM users WHERE id = :id");
    $records->bindParam(":id", $_SESSION["user_id"]);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Papeleria Acuario </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>

<?php require "partials/header.php" ?>

<?php if(!empty($user)): ?>
      <br> Bienvenido. <?= $user["email"]; ?>
      <br>Tu has ingresado satisfactoriamente
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>

      <link rel="stylesheet" href="assets/css/style.css">
    <h3 class="logueo">Porfavor Logeate</h3>
    <a href="login.php">login</a>
    <a href="signup.php">Signup</a>
    <?php endif; ?>
    <link rel="stylesheet" href="assets/css/style.css">
    <section>
        <h1 class="sectitulo">Categorias</h1>
        <div class="categorias">

            <article>
                <a href="Computo">
                    <img src="Imagenes/Computo.png" class="computo" width="200">
                    <h1>Computo</h1>
                </a>
            </article>
            <article>
                <a href="Escritura">
                    <img src="Imagenes/Escritura.png" class="escritura" width="200">
                    <h1>Escritura</h1>
                </a>
            </article>
            <article>
                <a href="Muebles">
                    <img src="Imagenes/muebles.png" class="muebles" width="200">
                    <h1>Muebles</h1>
                </a>
            </article>
            <article>
                <a href="Salud">
                    <img src="Imagenes/salud.png" class="salud" width="200">
                    <h1>Salud</h1>
                </a>
            </article>
        </div>
        <h1 class="sectitulo">Favoritos</h1>
        <div class="Favoritos">

            <article>
                <a href="Calculadora casio rosa.html">
                    <img src="Imagenes/Calculadora.jpg" class="calculadora" alt="calculadora" width="200">
                    <h1>Calculadora Cientifica Casio Rosa</h1>
                    <p>$235.00</p>
                    <div class="carrito">
                        <button>Añadir a carrito</button>
                    </div>
                </a>
            </article>

            <article>
                <a href="Engrapadora.html">
                    <img src="Imagenes/Engrapadora.jpg" class="Engrapadora" alt="Engrapadora" width="200">
                    <h1>Engrapadora Metalica Tira Completa</h1>
                    <p>$209.00</p>
                    <div class="carrito">
                        <button>Añadir a carrito</button>
                    </div>
                </a>
            </article>

            <article>
                <a href="Prismacolor.html">
                    <img src="Imagenes/Prismacolor.jpg" class="Prismacolor" alt="Prismacolor" width="200">
                    <h1 class="prismatext">Lápices de Colores Bicolores Redondos Prismacolor Junior Intensos 4.0 mm / 48 piezas</h1>
                    <p>$235.50</p>
                    <div class="carrito">
                        <button>Añadir a carrito</button>
                    </div>
                </a>
            </article>

            <article>
                <a href="Diccionario ingles español.html">
                    <img src="Imagenes/Diccionario.jpg" class="Diccionario" alt="Diccionario" width="200">
                    <h1>Diccionario Bilingüe Pocket Inglés a Español Editorial Larousse</h1>
                    <p>$65.00</p>
                    <div class="carrito">
                        <button>Añadir a carrito</button>
                    </div>
                </a>
            </article>

            <article>
                <a href="Marcadores permanentes.html">
                    <img src="Imagenes/marcadores.jpg" class="marcadores" alt="marcadores" width="200">
                    <h1>Marcador Permanente Delgado Azul Blíster Tatoo</h1>
                    <p>$15.50</p>
                    <div class="carrito">
                        <button>Añadir a carrito</button>
                    </div>
                </a>
            </article>

            <article>
                <a href="Paquete de 100 hojas.html">
                    <img src="Imagenes/paquete de hojas.jpg" class="hojas" alt="hojas" width="200">
                    <h1>Papel Bond Tamaño Carta Blanco de 37 kg con 500 Hojas Ecológico Scribe</h1>
                    <p>$88.00</p>
                    <div class="carrito">
                        <button>Añadir a carrito</button>
                    </div>
                </a>
            </article>
        </div>
    </section>
</body>

</html>