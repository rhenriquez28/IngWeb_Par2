<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Banco ABC - Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
  </head>
  <header>
    <div id="logo">
        <img src="img/header.png">
    </div>
  </header>
  <body>
    <form class="" action="login_check.php" method="post">
      <div class="imgcontainer">
    <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" name="username" value="root" autofocus required><br>

    <label><b>Password</b></label>
    <input type="password" name="password" value="1234" autofocus required><br>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
    </form>
  </body>
</html>
