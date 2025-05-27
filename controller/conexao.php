<?php
define('HOST', 'ec2-3-131-141-8.us-east-2.compute.amazonaws.com');
define('USUARIO', 'root');
define('SENHA', 'Senha@123');
define('DB', 'comunica_mais');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
?>