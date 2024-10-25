<?php
session_start();
if (empty($_SESSION["id"])) {
  header("location: login.php");
}
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/header.css" />
    <title>EDITAR</title>
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
<!-------------------mostrar----------------->
 <div class="espacio-tabla">
 <table class="table table-dark table-striped">
  <thead>
   
  </thead>
  <tbody>

  <?php
  $id=$_GET["id"];
  $sql="SELECT * FROM usuarios where ID='$id'";
  $result = mysqli_query($conexion, $sql);

  while ($mostrar = mysqli_fetch_array($result)) {
  ?>
   <form action="procesar_editar.php" method="POST">
        <input type="hidden" value="<?php echo $mostrar['ID'] ?>" name="txtID">
        <p>Nombre</p>
        <input type="text" value="<?php echo $mostrar['Nombre'] ?>" name="txtNombre">
        <p>Usuario</p>
        <input type="text" value="<?php echo $mostrar['Usuario'] ?>" name="txtUsuario">
        <p>Contraseña</p>
        <input type="text" value="<?php echo $mostrar['Contrasena'] ?>" name="txtContraseña">
    <?php
    }
    ?>
    <input type="submit" value="ACTUALIZAR">
  </tbody>
</table>
</div>
  

</html>