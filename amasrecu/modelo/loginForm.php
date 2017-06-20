<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>

  </head>
  <body>
    <div>
      <h2>Login</h2>
      <form method="post" action="login.php">
        <label for="user">Nombre</label>
        <input type="text" id="nombre" name="nombre" placeholder="Tu nombre.." value=<?php if(isset($_SESSION["numAbonado"])) {echo $_SESSION["usuario"];} ?>>

        <label for="pass0">Contraseña</label>
        <input type="text" id="numabonado" name="numabonado" placeholder="Tu numero de abonado">
        <input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["usuario"])) { ?> checked <?php } ?> />
        <label for="remember-me">Recordarme</label>
        <input type="hidden" name="accion" value="login">

        <input type="submit" value="Login">
      </form>
    </div>
  </body>
</html>
