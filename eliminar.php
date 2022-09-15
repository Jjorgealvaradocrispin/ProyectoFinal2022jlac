<?php
include ("bd.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM mensajes WHERE nomensaje = $id ";
    $resul = mysqli_query($conn, $query);
    if(!$resul){
        die ("No se pudo eliminar");
    }
    header("location:verm.php");
}
?>