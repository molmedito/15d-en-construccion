$to = 'marcelo@15d.cl';

$subject = 'Cliente '.$_POST['nombre'].', via formulario.';

// Headers
$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
//$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Message
$message = '<html><body>';
$message .= '<img src="//css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['nombre']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
$message .= "<tr><td><strong>Mensaje:</strong> </td><td>" . $_POST['Mensaje'] . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

// Send mail
mail($to, $subject, $message, $headers);
