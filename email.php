<?php

    if(isset($_POST['email']) && !empty($_POST['email']));

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "christianoliveira8@gmail.com"
    $subject = "Nova mensagem - Countdown"
    $body = "Nome: ".$nome. "\n".
            "Email: ".$email."\n".
            "Mensagem: ".$mensagem;
    $header = "From:christian.santos92@gmail.com"."\r\n"."Reply to:"$email."\r\n"."X=Mailer:PHP/".phpversion();

    if(mail($to,$subject,$body,$header)) {
        echo("Email enviado com sucesso!");
    }else {
        echo("O email não pode ser enviado");
    }

?>