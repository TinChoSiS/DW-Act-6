<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta type="author" content="Martín Acosta" />
    <meta name="description" content="Formulario de contacto" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/sis_logo.svg" type="image/x-icon" />
    <title>Actividad 6</title>
    <link rel="stylesheet" href="assets/styles.css" />
  </head>

  <body>
    <header>
      <div class="logo">
        <img src="assets/sis_logo.svg" alt="Logo de la empresa" height="60px" />
      </div>
      <nav class="navegacion">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="#">Contacto</a></li>
          <li><a href="#">Formulario</a></li>
        </ul>
      </nav>
      <div>
        <button id="toggleTheme">🌙</button>
      </div>
    </header>

    <main class="container">
      <h1>Formulario de Contacto</h1>
      <?php include("form.php") ?>
    </main>

    <footer>
      <p>&copy; 2024 - Martín Acosta (sis.uy)</p>
    </footer>

    <script>
      const toggleTheme = document.getElementById("toggleTheme");
      const style = document.documentElement.style;
      toggleTheme.addEventListener("click", () => {
        style.getPropertyValue("color-scheme") === "dark"
          ? style.setProperty("color-scheme", "light")
          : style.setProperty("color-scheme", "dark");
      });
    </script>
  </body>
</html>
