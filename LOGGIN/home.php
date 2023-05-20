<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taller de reparación de impresoras 3D</title>
  <style>
    /* Paleta de colores */
    :root {
      --color-primario: #62A0A5; /* Azul acero */
      --color-secundario: #B1B6C1; /* Gris acero */
      --color-fondo: #F0F3F5; /* Gris claro */
    }
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url('https://images.unsplash.com/photo-1611117775350-ac3950990985?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80');  
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0);
      }
      img {
        background-opacity: 0.5;
      }
      nav {
        background-color: var(--color-primario);
        color: #fff;
        padding: 10px;
      }

      nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
      }

      nav ul li {
        display: inline;
        margin-right: 10px;
      }

      nav ul li a {
        color: #fff;
        text-decoration: none;
      }

      section {
        padding: 20px;
      }

      h1, h2 {
        color: #333;
      }

      form {
        margin-bottom: 20px;
      }

      label {
        display: block;
        margin-bottom: 5px;
      }

      input[type="text"],
      textarea {
        width: 100%;
        padding: 5px;
        margin-bottom: 10px;
      }

      button {
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
      }

      ul {
        list-style: none;
        padding: 0;
      }

      li {
        margin-bottom: 10px;
      }
  </style>
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

  <h1>Tabla de reparaciones</h1>
  <?php include 'busqueda.php'; ?>

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
