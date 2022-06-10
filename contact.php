<?php
if (!isset($_POST)) header("Location: index.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$nome = $_POST["nome"];
$email = $_POST["email"];
$oggetto = $_POST["oggetto"];
$messaggio = $_POST["messaggio"];

$to = "magiaparrucchiericomo@gmail.com";

$GLOBALS["contact"] = true;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'magiaparrucchiericomo@gmail.com';
    $mail->Password = 'zsqppvdqegqxloxp';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $nome);
    $mail->addCC('magiaparrucchiericomo@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = $oggetto;
    $mail->Body = $messaggio;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
} catch (Exception $e) { }
header("Location: index.php");


