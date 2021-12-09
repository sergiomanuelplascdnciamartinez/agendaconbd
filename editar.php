<?php
if(!isset($_GET['id'])) {
    echo "no se puede editar el contacto";
}else {
    include 'MODEL/conexion.php';  
    $id=$_GET['id'];
    $consulta = $con->prepare("SELECT * FROM CONTACTOS WHERE ID_CONTACTO=?;");
    $consulta->execute([$id]);
    $contactos = $consulta->fetch(PDO::FETCH_OBJ);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AGENDA SQL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/5028ee9fe0.js" crossorigin="anonymous"></script>
</head>
<body>
     <!--NavBar-->
     <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <span class="fs-3 fw-bold" style="color: white">Formulario</span>
            </div>
        </nav>
        <br>
        <br>
        <div class="container w-100  bg-light rounded" >
            <div class="content row h-100 justify-content-center allign-items-center">
                <h2 class="text-center">EDITAR CONTACTO</h2>
                <form action="editar.php" method="POST" autocomplete="false" class="col-auto">
                    <div class="form-group">
                    <!--NOMBRE-->
                    <label for="nombre">NOMBRE
                    <input type="text" name="nombre" id="nombre" placeholder="ESCRIBE TU NOMBRE(S)"  value="<?php echo $contactos->NOMBRE?>" required>
                    </label>

                    <!--PATERNO-->
                    <label for="apellidoP">APELLIDO PATERNO
                    <input type="text" name="apellidoP" id="apellidoP" placeholder="ESCRIBE TU APELLIDO PATERNO" value="<?php echo $contactos->APELLIDO_P?>" required>
                    </label>

                    <!--MATERNO-->
                    <label for="apellidoM">APELLIDO MATERNO
                    <input type="text" name="apellidoM" id="apellidoM" placeholder="ESCRIBE TU APELLIDO MATERNO" value="<?php echo $contactos->APELLIDO_M?>" required>
                    </label>
                    </div>
                    <br>
                    
                    <div class="form-group">
                    <!--TELEFONO-->
                    <label for="telefono">TELEFONO
                    <input type="text" name="telefono" id="telefono" placeholder="ESCRIBE TU TELEFONO" value="<?php echo $contactos->TELEFONO?>" required>
                    </label>   

                    <!--E-MAIL-->
                    <label for="email">E-MAIL
                    <input type="text" name="email" id="email"  placeholder="E-mail" value="<?php echo $contactos->EMAIL?>" required>
                    </label>  

                    <!--FECHA NACIMIENTO-->
                    <label for="fecha">FECHA DE NACIMIENTO
                    <input type="date" name="fecha" id="fecha" placeholder="Fecha de nacimiento" value="<?php echo $contactos->NACIMIENTO?>" required>
                    </label>  
                    </div>
                    <br>
                    
                    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                    <div class="form-group">

                    <!--Calle-->
                    <label for="calle">CALLE
                    <input type="text" name="calle" id="calle" placeholder="CALLE" value="<?php echo $contactos->CALLE?>" required>
                    </label>   

                    <!--NUMERO-->
                    <label for="numero">NUMERO
                    <input type="text" name="numero" id="numero" placeholder="NUMERO #" value="<?php echo $contactos->NUMERO?>" required>
                    </label> 


                    <!--COLONIA-->
                    <label for="colonia">COLONIA
                    <input type="text" name="colonia" id="colonia" placeholder="COLONIA" value="<?php echo $contactos->COLONIA?>" required>
                    </label> 


                    <!--MUNICIPIO-->
                    <label for="municipio">MUNICIPIO
                    <input type="text" name="municipio" id="municipio" placeholder="MUNICIPIO" value="<?php echo $contactos->MUNICIPIO?>" required>
                    </label> 


                    <!--ESTADO-->
                    <label for="estado">ESTADO
                    <input type="text" name="estado" id="estado" placeholder="ESTADO" value="<?php echo $contactos->ESTADO?>" required>
                    </label> 

                     <!--CODIGO P-->
                     <label for="codigo">CODIGO POSTAL
                    <input type="text" name="codigo" id="codigo" placeholder="codigo postal" value="<?php echo $contactos->CODIGO_P?>" required>
                    </label> 
                    </div>
                    <br>
                    
                    
                    <div class="form-group">
                    <input type="hidden" name="id2" value="<?php echo $contactos->ID_CONTACTO?>">
                    <button type="submit" value="Editar Contacto" name="Editar" class="btn btn-success btn-lg">Editar</button>
                    </div>
                    <a href="index.php" class="btn btn-info btn-lg">Volver</a>
                    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                </form> 
            </div>
        </div>
        <br><br>

        

</body>
</html>