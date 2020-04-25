<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="team_cgpvisual" content="">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/canvasjs/1.7.0/canvasjs.min.js" integrity="sha256-CIc5A981wu9+q+hmFYYySmOvsA3IsoX+apaYlL0j6fg=" crossorigin="anonymous"></script>

  <script src="../model/js/grafica.js"></script>

  <title>CGPvisual-Dashboard</title>

</head>

<body>

 <?php
 require_once("../model/dao/userSessions.php");
 ?>
 <center>

  <ul class="list-inline">
    <li class="list-inline-item"><p class="h2">SU ROL DE USUARIO ES:</p></li>
    <li class="list-inline-item"><p class="h2"><?php echo @$_SESSION['login']['r_user']; ?></li>
  </ul>

<div class="row">
  <div class="col-sm-6">
    <div class="card" style="width: 30rem; height: 26rem;">
        <div id="chart" class="card-img-top"></div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card" style="width: 30rem; height: 26rem;">
       
    </div>
  </div>
</div>

</center>
</html>