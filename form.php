<?php
$baseUrl = $_SERVER['REQUEST_URI'];
$randomStr = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 30);

?>

<form
  class="contactForm"
  action="recibe.php?id=<?php echo $randomStr ?>"
  method="post"
>
  <div class="formField">
    <label for="nombre">Nombre:</label>
    <input
      type="text"
      name="nombre"
      id="nombre"
      required
      placeholder="Roberto"
    />
  </div>
  <div class="formField">
    <label for="apellido">Apellido:</label>
    <input
      type="text"
      name="apellido"
      id="nombre"
      required
      placeholder="Carlos"
    />
  </div>
  <div class="formField">
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required placeholder="25" />
  </div>
  <div class="formField">
    <label for="email">Email:</label>
    <input
      type="email"
      name="email"
      id="email"
      required
      placeholder="micorreo@gmail.com"
    />
  </div>
  <div class="formField">
    <label for="mensaje">Mensaje:</label>
    <textarea name="mensaje" id="mensaje" required rows="20"></textarea>
  </div>
  <!-- pagina web -->
  <div class="formField">
    <label for="paginaWeb">Web:</label>
    <input
      type="url"
      name="paginaWeb"
      id="paginaWeb"
      required
      placeholder="https://www.google.com"
    />
  </div>
  <div class="formField">
    <input type="file" name="archivo" id="archivo" accept="image/*" />
  </div>
  <div class="formField">
    <label for="pais">País:</label>
    <select name="pais" id="pais">
      <option value="mx">México</option>
      <option value="us">Estados Unidos</option>
      <option value="ca">Canadá</option>
      <option value="es">España</option>
      <option value="ar">Argentina</option>
      <option value="uy" selected>Uruguay</option>
    </select>
  </div>
  <div class="formField">
    <input type="radio" name="genero" id="generoM" value="M" />
    <label for="generoM">Masculino</label>
    <input type="radio" name="genero" id="generoF" value="F" />
    <label for="generoF">Femenino</label>
    <input type="radio" name="genero" id="generoO" value="O" />
    <label for="generoO">Otro</label>
  </div>
  <div class="formField">
    <input type="checkbox" name="acepto" id="acepto" required />
    <label for="acepto">Acepto los términos y condiciones</label>
  </div>
  <div class="formField">
    <input type="submit" value="Enviar" />
  </div>
</form>
