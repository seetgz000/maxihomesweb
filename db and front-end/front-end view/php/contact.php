<?php

    $to = "support@lemonthemes.com"; //Resived mail here
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "You have a message from your Evo.";

    $fields = array();
    $fields{"name"} = "Name";
    $fields{"email"} = "Email";
    $fields{"message"} = "Message";

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
