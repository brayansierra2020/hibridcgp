<?php
@session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="control panel" content="">
  <meta name="team_cgpvisual" content="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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

</center>
</html>