<?php
session_start();
if (empty($_SESSION["id"])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/estilos.css" />
    <title>Form</title>
  </head>
  <body>
    <div>
      <header class="enca">
        <div class="wrap">
          <div class="logos">Bases de datos</div>
          <nav>
            <?php
            echo $_SESSION["nombre"];
            ?>
            <a href="inicio.php">INICIO</a>
            <a href="agregar.php">AGREGAR</a>
            <a href="mostrar.php">TABLA</a>
            <a href="controlador_cerrar_session.php">SALIR</a>
          </nav>
        </div>
      </header>
    </div>
    </body>
</html>
