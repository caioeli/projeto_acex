<?php
session_start();
require 'conexao.php';
if (isset($_POST['enviar'])) {
	$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
	$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$contato = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$mensagem = mysqli_real_escape_string($conexao, trim($_POST['email']));
	$senha = isset($_POST['senha']) ? mysqli_real_escape_string($conexao, password_hash(trim($_POST['senha']), PASSWORD_DEFAULT)) : '';
	$sql = "INSERT INTO login (nome, email, contato, mensagem, senha) VALUES ('$nome', '$email', '$contato' , '$mensagem', '$senha')";
	mysqli_query($conexao, $sql);
	if (mysqli_affected_rows($conexao) > 0) {
		$_SESSION['mensagem'] = 'email enviado com sucesso';
		header('Location: ajuda.php');
		exit;
	} else {
		$_SESSION['mensagem'] = 'email não enviado';
		header('Location: ajuda.php');
		exit;
	}
}
?>