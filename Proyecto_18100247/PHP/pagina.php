<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	 <title>Información del Menu</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <link rel="stylesheet" href="estilos.css">

</head>
	<body>
        <form action='Accion.php' method='post'class="login-form" >        
        <div class= "container">   
        <h1 class = text-center> Información del Menu </h1>
		   <br> <br> 
           <div class="row">
                <div class="form-group col-md-1">
                    <label class="text-light">Item actual:</label>
                    <input  class="form-control" type="text" name="Numero" placeholder="" id="Num" readonly>               
                </div>
                <div class="form-group col-md-3">
                    <label class="text-light">Nombre:</label>
                    <input  class="form-control" type="text" name="Nombre" placeholder="Nombre..." id="N" required>               
                </div>
                <div class="form-group col-md-3">
                    <label class="text-light">Descripcion:</label>
                    <input  class="form-control" type="text" name="Descripcion" placeholder="Pizza con..." id="D"required>               
                </div>
                <div class="form-group col-md-3">
                    <label class="text-light">Gramos:</label>
                    <input  class="form-control" type="text" name="Gramos" placeholder="200.00" id="G" required>               
                </div>
                <div class="form-group col-md-3">
                    <label class="text-light">Precio:</label>
                    <input  class="form-control" type="text" name="Precio" placeholder="300.00" id="P" required>               
                </div>
            </div>
                <div class="col text-center p-4">
                    <button type="submit" name= "registrar" class="btn btn-outline-warning">REGISTRAR</button> 
                    <button type="submit"name= "editar" class="btn btn-outline-success">ACTUALIZAR</button> 
                    <button type="submit"name= "eliminar" class="btn btn-outline-danger">ELIMINAR</button> 
                </div>
        </form>
		   <?php $consulta = new PDO('mysql:host=localhost;dbname=YEPEZFE', 'root', 'Nando123'); ?>

                <table id= "table" class="table">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Gramos</th>
                        <th>Precio</th>
                    </tr>
                    </thead>

          <?php foreach ($consulta->query("SELECT * from PIZZA") as $row){ // aca puedes hacer la consulta e iterarla con each. ?> 
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
                    <div class= text-center>
                        <a href="salir.php">Cerrar sesión</a>
                    </div>
        </div>
   		
	</body>
</html>
<script>
$("table tbody tr").click(function(){
   $(this).addClass('selected').siblings().removeClass('selected');    
   var num = $(this).closest("tr").find('td:eq(0)').text();
   var no = $(this).closest("tr").find('td:eq(1)').text();
   var de = $(this).closest("tr").find('td:eq(2)').text();
   var gr = $(this).closest("tr").find('td:eq(3)').text();
   var pr = $(this).closest("tr").find('td:eq(4)').text();
    $('#N').val(no);
    $('#D').val(de);
    $('#G').val(gr);  
    $('#P').val(pr);  
    $('#Num').val(num);        
    /* var value=$(this).find('td:first').html();
   alert("Selecciono la Pizza Número: "+id);*/
});
</script>

