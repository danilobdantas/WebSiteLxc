<?php

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$subject = addslashes($_POST['subject']);
$message = addslashes($_POST['message']);

$to = "efim@uol.com.br, danilo.dantas@lexicon.com.br";
$subject = "Formulário Site Lexicon";
$body = "Nome: ".$name."\r\n".
        "E-mail: ".$email."\r\n".
        "Mensagem: ".$message;

$header = "Content-Type: text/html; charset=UTF-8"."\r\n".
        "From: lexicon@lexicon.com.br"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header))        
{
    echo("OK");
}
else
{
    echo("ERRO");
}

?>