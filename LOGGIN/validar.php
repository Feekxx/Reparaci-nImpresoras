<?php
include('db.php');
$usuario=$_POST['usuario'];
$password=$_POST['contraseña'];



$consulta="SELECT*FROM credencial where usuario='$usuario' and contraseña='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
