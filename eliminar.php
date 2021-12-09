<?php 
if (!isset($_GET['id'])){
    header('Location: index.php');
}else {
    include 'MODEL/conexion.php';
   
    $id=$_GET['id'];

    $consulta=$con-> prepare("DELETE FROM CONTACTOS WHERE ID_CONTACTO=?;");
    $resultado=$consulta->execute([$id]); 

    if ($resultado==true) {
        header('Location: index.php');
    }else {
        echo 'error en la actualizacion';
    }

}
?>