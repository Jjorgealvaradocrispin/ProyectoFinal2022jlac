<?php
include('bd.php');
if (isset($_POST['e'])) {
    $aa=$_POST['a'];
    $bb=$_POST['b'];
    $cc=$_POST['c'];
    $dd=$_POST['d'];
    $query="INSERT INTO mensajes(nombre, telefono, correo, mensaje) VALUES ('$aa','$bb', '$cc', '$dd')";
$resultado=mysqli_query($conn, $query);
if ($resultado) {
    echo '<script lenguage="javascript">';
    echo 'alert(" MENSAJE ENVIADO EXITOSAMENTE")
    window.location = "contacto.php";
    </script>';
    }
    if (!$resultado) {
        die('Error al guardar los datos');
    }
}
?>