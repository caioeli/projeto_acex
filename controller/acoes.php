<?php
session_start();
require 'conexao.php';
if (isset($_POST['enviar'])) {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $contato = mysqli_real_escape_string($conexao, trim($_POST['contato']));
    $mensagem = mysqli_real_escape_string($conexao, trim($_POST['mensagem']));
    // Ajuste o nome da tabela para 'faleconosco' se for o correto
    $sql = "INSERT INTO faleconosco (nome, email, contato, mensagem) VALUES ('$nome', '$email', '$contato', '$mensagem')";
    mysqli_query($conexao, $sql);
    if (mysqli_affected_rows($conexao) > 0) {
        require 'email.php';
        $_SESSION['mensagem'] = 'E-mail enviado com sucesso!';
        header('Location: ../view/home.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'E-mail não enviado, tente novamente mais tarde.';
        header('Location: ../view/home.php');
        exit;
    }
}
?>