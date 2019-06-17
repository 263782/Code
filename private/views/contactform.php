<?php 

if (isset($_POST['subject'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "berghuismatthijs@gmail.com";
    $headers = "Door: ".$mailFrom;
    $txt = "Je hebt een mailtje ontvangen van ".$name.".\n\n".$message;

    mail($mailTo, $subject, $text, $headers);
    header("Location: index.php?mailsend");
}