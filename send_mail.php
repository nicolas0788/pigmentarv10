<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $categoria = htmlspecialchars($_POST['categoria']);
    $mensaje = htmlspecialchars($_POST['textarea']);

    $to = "infopigmentar@gmail.com"; 
    //$subject = "Nuevo mensaje de contacto";
    //$body = "Nombre: $nombre\nApellido: $apellido\nEmail: $email\nTeléfono: $telefono\nCategoría: $categoria\nMensaje: $mensaje";
    //$headers = "From: no-reply@pigmentar.com";

    if( empty(trim($nombre))) $nombre = 'anonimo';
    if( empty(trim($apellido))) $apellido = '';

    $body = <<<HTML 
        <h1>Contacto desde la Web</h1>
        <p>De: $nombre $apellido / $email</p>
        <h2>Mensaje</h2>
        $mensaje
    HTML;

    $headers = "MIME-Version: 1.0 \r\n";
    $headers.= "Content-type: text/html;
    charset=utf-8 \r\n";
    $headers.= "From: $nombre $apellido <$email> \r\n";
    $headers.= "To: Sitio Web <nicolas.molinari@hotmail.com> \r\n"
    
    

    if (mail($to, $subject, $body, $headers)) {
        $message = "Mensaje enviado con éxito.";
    } else {
        $message = "Error al enviar el mensaje.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Envío</title>
    <script>
        setTimeout(function(){
            window.location.href = 'contacto.html';
        }, 5000);
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        .message {
            font-size: 1.2em;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="message">
        <?php echo $message; ?>
    </div>
</body>
</html>