<?php
$usu=$_POST['usuario'];
$cont=$_POST['contraseña'];

if ($usu == 'lcp' and $cont == '123') {
    echo '<script language="javascript">alert("USUARIO Y CONTRASEÑA CORRECTA BIENVENIDO");
    window.location.href="verm.php"</script>';
} else {
    echo '<script language="javascript">alert("LO SENTIMOS VERIFICA QUE TUS CREDENCIALES ESTEN CORRECTOS");
    window.location.href="cmensajes.html"</script>';
    
}

?>