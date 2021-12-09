<?php

include 'MODEL/conexion.php';  
$consulta = $con->query("SELECT * FROM CONTACTOS;");
$contactos = $consulta->fetchAll(PDO::FETCH_OBJ);
//print_r($contactos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AGENDA SQL</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/searchbuilder/1.3.0/css/searchBuilder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="CSS/estilo.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
     <!--NavBar-->
     <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <span class="fs-3 fw-bold" style="color: white">Formulario</span>
            </div>
        </nav>
        <br>
        <br>
        <div class="container w-100  bg-light rounded" >
            <div class="content">
                <h2 class="text-center">NUEVO CONTACTO</h2>
                <form action="insertar.php" method="POST" autocomplete="false">

                    <div class="col-lg-12 center-block form-group">
                    <!--NOMBRE-->
                    <label for="nombre">NOMBRE
                    <input type="text" name="nombre" id="nombre" placeholder="ESCRIBE TU NOMBRE(S)" required>
                    </label>

                    <!--PATERNO-->
                    <label for="apellidoP">APELLIDO PATERNO
                    <input type="text" name="apellidoP" id="apellidoP" placeholder="ESCRIBE TU APELLIDO PATERNO" required>
                    </label>

                    <!--MATERNO-->
                    <label for="apellidoM">APELLIDO MATERNO
                    <input type="text" name="apellidoM" id="apellidoM" placeholder="ESCRIBE TU APELLIDO MATERNO" required>
                    </label>
                    </div>
                    <br>
                    
                    <div class="col-md-12 center-block">
                    <!--TELEFONO-->
                    <label for="telefono">TELEFONO
                    <input type="text" name="telefono" id="telefono" placeholder="ESCRIBE TU TELEFONO" required>
                    </label>   

                    <!--E-MAIL-->
                    <label for="email">E-MAIL
                    <input type="text" name="email" id="email"  placeholder="E-mail">
                    </label>  

                    <!--FECHA NACIMIENTO-->
                    <label for="fecha">FECHA DE NACIMIENTO
                    <input type="date" name="fecha" id="fecha" placeholder="Fecha de nacimiento">
                    </label>  
                    </div>
                    <br>
                    
                    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                    <div class="col-md-12 center-block form-group">

                    <!--Calle-->
                    <label for="calle">CALLE
                    <input type="text" name="calle" id="calle" placeholder="CALLE" required>
                    </label>   

                    <!--NUMERO-->
                    <label for="numero">NUMERO
                    <input type="text" name="numero" id="numero" placeholder="NUMERO #" required>
                    </label> 


                    <!--COLONIA-->
                    <label for="colonia">COLONIA
                    <input type="text" name="colonia" id="colonia" placeholder="COLONIA" required>
                    </label> 


                    <!--MUNICIPIO-->
                    <label for="municipio">MUNICIPIO
                    <input type="text" name="municipio" id="municipio" placeholder="MUNICIPIO" required>
                    </label> 


                    <!--ESTADO-->
                    <label for="estado">ESTADO
                    <input type="text" name="estado" id="estado" placeholder="ESTADO" required>
                    </label> 

                     <!--CODIGO P-->
                     <label for="codigo">CODIGO POSTAL
                    <input type="text" name="codigo" id="codigo" placeholder="codigo postal" required>
                    </label> 
                    </div>
                    <br>

                    <button type="submit" value="insertarContacto" name="insertar" class="btn btn-success btn-lg">Agregar</button>
                    <!--////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

                </form> 
            </div>
        </div>
        <br><br>

        <div class="container-fluid bg-info rounded" id="contenidotabla">
            <h2 class="text-center">CONSULTA</h2>
            <div class="content">
                <table class="table table-striped table-bordered bg-info text-black text-center" style='font-size: 13px' id="myTable">
                    <thead>
                        <th>NOMBRE</th>
                        <th>APELLIDO P</th>
                        <th>APELLIDO M</th>
                        <th>TELEFONO</th>
                        <th>E-MAIL</th>
                        <th>FECHA DE NACIMIENTO</th>
                        <th>CALLE</th>
                        <th>NUMERO</th>
                        <th>COLONIA</th>
                        <th>MUNICIPIO</th>
                        <th>ESTADO</th>
                        <th>C.P</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($contactos as $dato) {
                        ?>
                        <tr>
                            <td><?php echo $dato->NOMBRE ?></td>
                            <td><?php echo $dato->APELLIDO_P?></td>
                            <td><?php echo $dato->APELLIDO_M?></td>
                            <td><?php echo $dato->TELEFONO?></td>
                            <td><?php echo $dato->EMAIL?></td>
                            <td><?php echo $dato->NACIMIENTO?></td>
                            <td><?php echo $dato->CALLE?></td>
                            <td><?php echo $dato->NUMERO?></td>
                            <td><?php echo $dato->COLONIA?></td>
                            <td><?php echo $dato->MUNICIPIO?></td>
                            <td><?php echo $dato->ESTADO?></td>
                            <td><?php echo $dato->CODIGO_P?></td>
                            <td><a href="editar.php?id=<?php echo $dato->ID_CONTACTO?>" class="btn btn-warning"> <i class="fa fa-pencil"></i> </a></td>
                            <td><a href="eliminar.php?id=<?php echo $dato->ID_CONTACTO?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        <?php } ?> 
                    </tbody>

                </table>
            </div>

        </div>

<script   src="https://code.jquery.com/jquery-3.6.0.slim.js"   integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="   crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.0/umd/popper.min.js" integrity="sha512-PZrlUFhlOigX38TOCMdaYkhiqa/fET/Lztzjn+kdGxefUZanNUfmHv+9M/wSiOHzlcLX/vcCnmvOZSHi5Dqrsw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script>
  $(document).ready( function () {
    $('#myTable').DataTable();
    searchBuilder: {
            greyscale: true
        }
} );
  </script>
</body>
</html>