<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    </head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LOGIN BD</title>
  </head>
    <body>
        <form action = "entrar.php" method = "POST" class="login-form" >
            <div class="container col-xs-4 col-sm-4 col-md-3 col-lg-4 text-center">
                <h1 class="text-danger"> Inicio de sesión</h1>
                <div class="txtb form-group">
                    <label class="text-danger" for="Usuario">Usuario:</label>
                    <input  class="form-control" type="text" name="Usuario" placeholder="Nickname" required>               
                </div>
                <div class="txtb form-group">
                    <label class="text-danger" for="Contraseña">Contraseña:</label>
                    <input  class="form-control" type="password" name="contra" placeholder="*****" required>               
                </div>
                <div class="col text-center p-4">
                    <button type="submit"class="btn btn-outline-danger">ENTRAR</button>
                </div>
                <br> <br> <br> <br>
          
                <?php $consulta = new PDO('mysql:host=localhost;dbname=YEPEZFE', 'root', 'Nando123'); ?>

                    <table class="table" name="tablita">
                        <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Gramos</th>
                            <th>Precio</th>
                        </tr>
                        </thead>

                <?php foreach ($consulta->query("SELECT * from PIZZA") as $row){ ?> 
                        <tr>
                            <td><?php echo $row['numero']  ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                            <td><?php echo $row['gramos'] ?></td>
                            <td><?php echo $row['precio'] ?></td>
                        </tr>
                <?php
                                                                                }
                ?>
                    </table>

            </div>         
        </form>
  </body>
</html>