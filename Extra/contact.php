<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name-company'];
    $emailFrom = $_POST['cookie'];
    $message = $_POST['message'];

    $emailTo = "vkorchemnaya@gmail.com";
    $subject = "Mail from website";
    $message = "You got an email from " . $name . " with mailing address: " . $emailFrom . ".\n\n They said: " . $message;


    echo "Inside php";
    mail(
        $emailTo,
        $subject,
        $message
    );
    header("Location: index.php?mailsent");
}

?>
<!-- PHP isset()
PHP mail function mail(email to send to, the subject of the mail, the message) -->