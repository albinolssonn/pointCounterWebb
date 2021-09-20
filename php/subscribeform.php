<?php

if(isset($_POST['submit'])){
    $mailFrom = $_POST['mail']; 

    $mailTo = "info@finansrapporten.se"; 
    $headers = "From: ".$mailFrom; 
    $txt = "I want to subscribe to the newsletter. Email address: ".$mailFrom.".\n\n";

    mail($mailTo, $txt, $headers);
    header("Location: contact.html?mailsend");  

}