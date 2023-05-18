<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taller de reparación de impresoras 3D</title>
</head>
<body>
  <!-- Menú de navegación -->
  <nav>
    <ul>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#seguimiento">Seguimiento</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
  </nav>

  <!-- Sección de inicio -->
  <section id="inicio">
    <h1>Bienvenidos al Taller de Reparación de Impresoras 3D</h1>
    <p>En nuestro taller ofrecemos un servicio de reparación de impresoras 3D de alta calidad y a precios competitivos. ¡Contáctanos para solicitar una reparación!</p>
    <form action="procesar_formulario.php" method="post">
      <label for="modelo">Modelo de la impresora:</label>
      <input type="text" id="modelo" name="modelo" required>
      <label for="descripcion">Descripción del problema:</label>
      <textarea id="descripcion" name="descripcion" required></textarea>
      <button type="submit">Enviar</button>
    </form>
  </section>

  <!-- Sección de seguimiento -->
  <section id="seguimiento">
    <h2>Seguimiento de reparación de impresoras 3D</h2>
    <p>Ingresa el número de orden de servicio para conocer el estado actual de tu impresora:</p>
    <form action="consultar_orden.php" method="post">
      <label for="numero_orden">Número de orden de servicio:</label>
      <input type="text" id="numero_orden" name="numero_orden" required>
      <button type="submit">Consultar</button>
    </form>
  </section>

  <!-- Sección de contacto -->
  <section id="contacto">
    <h2>Contacto</h2>
    <p>Ponte en contacto con nosotros para cualquier duda o consulta:</p>
    <ul>
      <li>Teléfono: 123456789</li>
      <li>Correo electrónico: info@tallerimpresoras3d.com</li>
      <li>Dirección: Calle Falsa 123, Ciudad Ficticia</li>
    </ul>
  </section>
</body>
</html>
