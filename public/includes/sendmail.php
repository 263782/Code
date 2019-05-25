<?php 
        if(isset($_POST['submit'])){
        $to = "berghuismatthijs@gmail.com"; 
        $from = $_POST['email']; 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $subject = "Bericht";
        $subject2 = "Kopie van je bericht";
        $message = $first_name . " " . $last_name . " Heeft het volgende geschreven:" . "\n\n" . $_POST['message'];
        $message2 = "Hier is een kopie van je bericht " . $first_name . "\n\n" . $_POST['message'];
        
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); 
        }
?>