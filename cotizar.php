<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "altoelmanzano@altoelmanzano.cl";
    $email_subject = "ALTO EL MANZANO - COTIZAR";

    function died($error) {
        // your error code can go here
        echo "Lo sentimos, hemos encontrado un error. ";
        echo $error."<br /><br />";
        die();
    }



    $nombre = $_POST['nombre']; // required
    $email = $_POST['email']; // required
    $telefono = $_POST['telefono']; // required
    $casas = $_POST['casas']; // required
    $comments = $_POST['comments']; // required


    $email_message = "Los datos del interesado en COTIZAR son:\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Nombre: ".clean_string($nombre)."\n";
    $email_message .= "Correo: ".clean_string($email)."\n";
    $email_message .= "Teléfono: ".clean_string($telefono)."\n";
    $email_message .= "Casa: ".clean_string($casas)."\n\n";
    $email_message .= "Comentario: ".clean_string($comments)."\n";

// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
sleep(2);
echo "<meta http-equiv='refresh' content=\"0; url=./index.html\">";
?>

<?php
}
?>
