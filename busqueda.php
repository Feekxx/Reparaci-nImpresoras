<?php
// Realizar la consulta SQL
$consulta = "SELECT id, modelo, estado FROM reparaciones";
$resultado = $conexion->query($consulta);

// Verificar si se obtuvieron resultados
if ($resultado->num_rows > 0) {
    // Imprimir los datos en una tabla HTML
    echo "<table>";
    echo "<tr><th>ID</th><th>Modelo</th><th>Estado</th></tr>";

    // Recorrer los resultados y generar las filas de la tabla
    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["modelo"] . "</td>";
        echo "<td>" . $fila["estado"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión
//$conexion->close();
?>
