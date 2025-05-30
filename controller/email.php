<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$sql = "SELECT nome, email, mensagem, contato FROM faleconosco ORDER BY id DESC LIMIT 1";
$result = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_assoc($result);

$nome = $dados['nome'];
$email = $dados['email'];
$contato = $dados['contato']; 
$mensagem = $dados['mensagem'];

$mail = new PHPMailer(true);

try {
    
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'comunicamais2025@gmail.com';
    $mail->Password   = 'zjtvznxfbeolnajs';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->CharSet = 'UTF-8';

    $mail->setFrom('comunicamais2025@gmail.com');  
    $mail->addAddress('comunicamais2025@gmail.com', 'Responsável'); // <-- coloque aqui o e-mail de quem vai ajudar
    $mail->isHTML(true);
    $mail->Subject = 'Nova solicitação de ajuda de '. $nome .' enviada pelo site Comunica+';
    $mail->Body = "<p><b>Nome:</b> $nome</p>
                    <p><b>Email:</b> $email</p>
                    <p><b>Contato:</b> $contato</p>
                    <p><b>Mensagem:</b> " . nl2br($mensagem) . "</p>";
    $mail->send();


    $mail->clearAddresses(); 
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Sua solicitação de ajuda foi recebida';
    $mail->Body = "<p>Olá, $nome!</p>
        <p>
        Recebemos sua mensagem e já estamos de olho no que você precisa!
        <br>
        Nossa equipe vai te responder o quanto antes, com todo cuidado e atenção que você merece. 
        <br>
        Obrigada por entrar em contato com a gente!
        <br>
        <br>
        Com carinho,
        <br>
        <b>Equipe Comunica+</b> 💜
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <i> Mensagem automática, favor não responder a este email.</i></p>";
    $mail->send();

    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
}
?>