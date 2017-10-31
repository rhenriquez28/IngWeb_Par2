<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="index.html" method="post">
      <label for="">Username:</label>
      <input type="text" name="username" value="" required><br>
      <label for="">Password:</label>
      <input type="password" name="password" value="" required><br>
      <button type="submit" name="enviar"></button>
    </form>
    <?php
    if (isset($_POST["username"]&& isset($_POST["password"]))) {
      # code...
    }else {
      # code...
    }
     ?>
  </body>
</html>
