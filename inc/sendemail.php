<?php

    $to = "info@histrategy.co";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $headers = "Para: $from";
    $subject = "Tienes un mensaje enviado desde la Landing";

    $fields = array();
    $fields{"email"}    = "Correo";
    $fields{"sub"}    = "Asunto";
    $fields{"message"}   = "Mensaje";
    

    $body = "Contenido:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    /* $send = mail($to, $subject, $body, $headers); */

    if (mail($to, $subject, $body, $headers)){
        echo "mail enviado";
    }
    else{
        echo "envío fallido";
    }

?>