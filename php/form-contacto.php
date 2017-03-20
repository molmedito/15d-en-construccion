<?php
    $to = 'marcelo@15d.cl';

    $subject = 'Cliente '.$_POST['nombre'].', via formulario.';

    // Headers
    $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
    $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
    //$headers .= "CC: susan@example.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Message
    $logo15d = data_uri('http://15d.cl/assets/logo_15d-email.png','image/png');

    $message = '<html><body>';
    $message .= '<img src="'.$logo15d.'" alt="Logo 15 Diseño" />';
    $message .= '<table rules="all" style="border-color: #666;margin-top:15px;" cellpadding="10">';
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>".strip_tags($_POST['nombre'])."</td></tr>";
    $message .= "<tr><td><strong>Empresa:</strong> </td><td>".strip_tags($_POST['empresa'])."</td></tr>";
    $message .= "<tr><td><strong>Email:</strong> </td><td>".strip_tags($_POST['email'])."</td></tr>";
    $message .= "<tr><td><strong>Mensaje:</strong> </td><td>" .$_POST['mensaje']."</td></tr>";
    $message .= "</table>";
    $message .= "</body></html>";

    // Send mail
    mail($to, $subject, $message, $headers);

    function data_uri($file, $mime){
        $contents = file_get_contents($file);
        $base64   = base64_encode($contents);
        return ('data:'.$mime.';base64,'.$base64);
    }
?>
