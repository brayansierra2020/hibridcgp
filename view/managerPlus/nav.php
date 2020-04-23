<form action="../controller/app_controller/buttonscontroller.php" method="POST">
  <div>
    <nav class="navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <button class="navbar-toggler" type="button" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="bi bi-person" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M13 14s1 0 1-1-1-4-6-4-6 3-6 4 1 1 1 1h10zm-9.995-.944v-.002.002zM3.022 13h9.956a.274.274 0 00.014-.002l.008-.002c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664a1.05 1.05 0 00.022.004zm9.974.056v-.002.002zM8 7a2 2 0 100-4 2 2 0 000 4zm3-2a3 3 0 11-6 0 3 3 0 016 0z" clip-rule="evenodd"/>
        </svg>
      </button>
    </nav>
  </div>

  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <div class="pos-f-t">
        <button class="dropdown-item" data-toggle="dropdown" type="button" style="color: white" name="btn" value="usr">Usuarios</button>
        <div class="dropdown-menu">
            <button class="dropdown-item" type="summit" style="color: black" name="btn" value="usr">Cambiar Roles</button>
        </div>
        <hr>
        <button class="dropdown-item" type="summit" style="color: white" name="btn" value="stock">Inventario</button>
        <hr>
        <button class="dropdown-item" type="summit" style="color: white" name="btn" value="#">Solicitudes</button>
        <hr>
        <button class="dropdown-item" type="summit" style="color: white" name="btn" value="#">Movimientos</button>
        <hr>
        <button class="dropdown-item" type="summit" style="color: white" name="btn" value="#">Notificaciones</button>
        <hr>
        <button class="dropdown-item" type="summit" style="color: white" name="btn" value="#">Cuenta</button>
        <hr>
        <button class="dropdown-item" type="summit" style="color: white" name="btn" value="endSession">Cerrar Sesion</button>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>