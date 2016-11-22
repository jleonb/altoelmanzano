<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "altoelmanzano@altoelmanzano.cl";
    $email_subject = "ALTO EL MANZANO - NEWSLETTER";

    function died($error) {
        // your error code can go here
        echo "Lo sentimos, hemos encontrado un error. ";
        echo $error."<br /><br />";
        die();
    }




    $email = $_POST['email']; // required



    $email_message = "El E-mail del interesado en estar suscrito al NEWSLETTER es:\n\n";

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "".clean_string($email)."\n\n";


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
