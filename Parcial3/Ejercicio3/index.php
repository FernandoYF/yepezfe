<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="Estilo.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN BD</title>
  </head>
      <body>
        <form action = "Entrar.php" method = "POST" class="login-form" >
          <div class="container col-xs-4 col-sm-4 col-md-3 col-lg-4">
            <h1> Inicio de sesión</h1>
          <div class="txtb form-group">
            <label for="Usuario">Usuario:</label>
            <input  class="form-control" type="text" name="Usuario" placeholder="Nickname" required>               
          </div>
          <div class="txtb form-group">
            <label for="Contraseña">Contraseña:</label>
            <input  class="form-control" type="password" name="contra" placeholder="*****" required>               
          </div>
          <div class="col text-center p-2">
            <input id= "Enviar"  type="submit" class="logbtn" value="Login">
          </div>
          </div>         
        </form>
  </body>
</html>