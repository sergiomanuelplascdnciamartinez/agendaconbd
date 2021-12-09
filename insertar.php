<?php
if (isset($_POST['insertar'])){
    include 'MODEL/conexion.php';  
    $nombre=$_POST['nombre'];
    $apellido_p=$_POST['apellidoP'];
    $apellido_m=$_POST['apellidoM'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $fecha_n=$_POST['fecha'];
    $calle=$_POST['calle'];
    $numero=$_POST['numero'];
    $colonia=$_POST['colonia'];
    $municipio=$_POST['municipio'];
    $estado=$_POST['estado'];
    $codigo=$_POST['codigo'];

   $consulta = $con->prepare("INSERT INTO CONTACTOS(NOMBRE,APELLIDO_P,APELLIDO_M,TELEFONO,EMAIL,NACIMIENTO,CALLE,NUMERO,COLONIA,MUNICIPIO,ESTADO,CODIGO_P) VALUES(?,?,?,?,?,?,?,?,?,?,?,?);");
   $resultado = $consulta->execute([$nombre,$apellido_p,$apellido_m,$telefono,$email,$fecha_n,$calle,$numero,$colonia,$municipio,$estado,$codigo]);
   if($resultado==true){
       header("Location: index.php");
   }else {
       echo "No se pudo agregar el contacto";
   }


}

?>
