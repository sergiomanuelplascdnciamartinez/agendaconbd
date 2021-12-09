<?php 
if (!isset($_POST['Editar'])){
    header('Location: index.php');
}else {
    include 'MODEL/conexion.php';
    $nom=$_POST['nombre'];
    $pat=$_POST['apellidoP'];
    $mat=$_POST['apellidoM'];
    $tel=$_POST['telefono'];
    $street=$_POST['calle'];
    $number=$_POST['numero'];
    $col=$_POST['colonia'];
    $mun=$_POST['municipio'];
    $state=$_POST['estado'];
    $zip=$_POST['codigo'];
    $mail=$_POST['email'];
    $date=$_POST['fecha'];
    $id=$_POST['id2'];

    $consulta=$con-> prepare("UPDATE CONTACTOS SET NOMBRE=?, APELLIDO_P=?, APELLIDO_M=?, TELEFONO=?, CALLE=?, NUMERO=?, COLONIA=?, MUNICIPIO=?, ESTADO=?, CODIGO_P=?,EMAIL=?, NACIMIENTO=? WHERE ID_CONTACTO=?;");
    $resultado=$consulta->execute([$nom,$pat,$mat,$tel,$street,$number,$col,$mun,$state,$zip,$mail,$date,$id]); 

    //UPDATE CONTACTOS SET NOMBRE=?, APELLIDO_P=?, APELLIDO_M=?, TELEFONO=?, CALLE=?, NUMERO=?, COLONIA=?, MUNICIPIO=?, ESTADO=?, CODIGO_P=?,EMAIL=?, NACIMIENTO=? WHERE ID_CONTACTO=?
    //$nom,$pat,$mat,$tel,$street,$number,$col,$mun,$state,$zip,$mail,$date,$id

    if ($resultado==true) {
        header('Location: index.php');
    }else {
        echo 'error en la actualizacion';
    }

}
?>