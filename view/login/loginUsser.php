<?php include_once("../../model/dao/acces_page.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="control panel" content="">
  <meta name="team_cgpvisual" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Login - Usuario - CPGVisual</title>

</head>
<body>
  <center>
    <div id="page-login-index">
      <fieldset style="
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      ">

      <div class="card" style="width: 20rem;">
        <h3 class="card-title">Inicio de Sesión</h3>
        <form class="p-4" action="../../controller/app_controller/controller.php" method="POST">
          <div class="form-group">
            <label for="user">
              <h5 class="card-title">Usuario</h4>
              </label>
              <input type="text" class="form-control" id="user" name="user" pattern="[A-Za-z0-9_-]{2,20}" placeholder="Usuario">
            </div>
            <div class="form-group">
              <label for="passw">
                <h5 class="card-title">Contraseña</h4>
                </label>
                <input type="password" class="form-control" id="passw" name="passw" pattern="[A-Za-z0-9_-]{2,20}" placeholder="Contraseña">
              </div>
              <button type="submit" name="trigger" value="login" class="btn btn-primary">Iniciar</button>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-muted" href="addUsser.php">No Tienes Cuenta? Crea una!</a>
            <a class="dropdown-item text-muted" href="#">Olvidaste tu contraseña?</a>
          </div>
        </div>
      </fieldset>
    </center>
  </body>
  </html>