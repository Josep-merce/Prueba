<!----ES NECESARIO PARA QUE SE VEA EL NOMBRE---->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/estilos.css" />
    <title>Form</title>
  </head>
  <body>
    <div>
      <header class="enca">
        <div class="wrap">
          <div class="logos">Bases de datos</div>
          <!---BOTONES DE ARRIBA--->
          <nav>
            <a href="controlador_cerrar_session.php">INICIAR SESION</a>
          </nav>
          <!---BOTONES DE ARRIBA FIN--->
        </div>
      </header>
    </div>
    <div class="modal-body modal-dialog">
      <div class="container col-lg-11">
        <div class="modal-content col-lg-9 bg-dark">
          <!-----botones de cambio-->
          <button
            type="button"
            class="btn-close bg-light"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
          <!------------hasta aqui-->--
          <br />

          <h1 class="text-center blanco">Registro</h1>
          <!-------------------formulario----------------------------------->
          <form class="text-center bg-dark" action="registro.php" method="POST">
            <img class="logo" src="IMG/g.jpg" width="130px" height="130px" />
            <div class="mb-3">
              <br />

              <label for="exampleInputEmail1" class="form-label blanco"
                >Nombre Completo</label
              >
              <input
                type="text"
                class="form-control bg-light"
                name="txtNombre"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label blanco"
                >Usuario</label
              >
              <input
                type="text"
                class="form-control bg-light"
                name="txtUsuario"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label blanco"
                >Contraseña</label
              >
              <input
                type="text"
                class="form-control bg-light"
                name="txtContraseña"
              />

              <div id="emailHelp" class="verde">
                Verifique los datos proporcionados
              </div>
            </div>
            <button type="submit" class="btn btn-success">Registrar</button>
          </form>
          <br />
          <!-----------hasta aqui form----------------------->
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
  </body>
</html>