
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilo.css">
  <title>login con sesiones</title>
</head>
<body>
  <center>

<form action="loguear.php" method="POST">
 <h1>INICIAR SECION</h1>
<hr>
<?php 
  if (isset($_GET['error'])) {
    ?>
    <p class="error"></p>
    <?php 

echo $_GET['error']

     ?>
    </p>
    <?php 
  }

?>

<hr>

<input type="text" name="usuario" placeholder="Ingrese el usuario">
<br><br>
<input type="password" name="clave" placeholder="Ingrese la contraseña">
<br><br>
<button type="submit" >Ingresar</button>
</form>

  </center>

</body>
</html>