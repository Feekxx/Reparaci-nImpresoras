<?php
// Recibimos los datos del formulario
include('db.php');
$modelo = $_POST['modelo'];
$descripcion = $_POST['descripcion'];



// Verificamos que la conexión a la base de datos sea exitosa
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Preparamos la consulta SQL para insertar los datos en la tabla correspondiente
$tabla = 'reparaciones';
$consulta = "INSERT INTO $tabla (modelo, descripcion, estado) VALUES ('$modelo', '$descripcion', 'recepcion')";

// Ejecutamos la consulta
/*if (mysqli_query($conexion, $consulta)) {
    echo "Los datos se han guardado correctamente";
} else {
    echo "Error al guardar los datos: " . mysqli_error($conexion);
}*/

// Cerramos la conexión a la base de datos
mysqli_close($conexion);
?>