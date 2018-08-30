<?php
//revisa que los campos del formulario no estén vacíos
if(empty($_POST['nombre']) ||
   empty($_POST['correo']) ||
   empty($_POST['mensaje']) || 
   !filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL))
   {
        printf(" <script type='text/javascript'>alert('Todos los campos son obligatorios.');</script> ");
        return false;
   }

   //destinatario
   $destinatario="juan_27angel@hotmail.com";
   $asunto="Mensaje de contacto Ruta74";

   //campos del formulario
   $nombre = $_POST['nombre'];
   $correo = $_POST['correo'];
   $mensaje = $_POST['mensaje'];

   //encabezados para el uso de html
   $headers = 'MIME-Version: 1.0' . "\r\n";
   $headers.= "Content-type: text/html; charset=UTF-8\r\n";

   //contenido del mensaje
   $contenido='
   <html lang="es">
   <head>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
   </head>
   <body>
       <h3>'.$nombre.' ha enviado el siguiente mensaje a través de la página</h3>
       <br>
       <p>'.$mensaje.'</p>
       <br>
       <h2>Te puedes poner en contacto con '.$nombre.' al correo '.$correo.'</h2> 
   </body>
   </html> 
   ';

   //validación del envío del correo
   $envio = mail($destinatario, $asunto, $headers, $contenido);

   if($envio){
        printf("<script type='text/javascript'>alert('Gracias por enviar tus datos, nos pondremos en contacto en breve');</script>");
        printf("<script type='text/javascript'>window.location.href = '#contact';</script>");
    }

   else{
        printf("<script type='text/javascript'>alert('Vuelve a intentarlo en unos momentos');</script>");
        return false;
    }
?>