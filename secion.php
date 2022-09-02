<?php
$usu=$_POST['usuario'];
$cont=$_POST['contraseña'];

if ($usu == 'LCP' and $cont == '123') {
    echo '<script language="javascript">alert("USUARIO Y CONTRASEÑA CORRECTA BIENVENIDO");
    window.location.href="princi.php"</script>';
} else {
    echo '<script language="javascript">alert("LO SENTIMOS VERIFICA QUE TUS CREDENCIALES ESTEN CORRECTOS");
    window.location.href="index.html"</script>';
    
}

?>