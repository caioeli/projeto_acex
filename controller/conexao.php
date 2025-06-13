<?php
define('HOST', 'ec2-3-15-203-168.us-east-2.compute.amazonaws.com'); 
define('USUARIO', 'root');
define('SENHA', 'Xsrd9876@@'); 
define('DB', 'comunica_mais');
define('PORTA', 3306);

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB, PORTA);

if (!$conexao) {
    echo "Erro de conexão: " . mysqli_connect_error();
    echo "<br>Código do erro: " . mysqli_connect_errno();
} else {
    echo "Conexão estabelecida com sucesso!";
    mysqli_set_charset($conexao, "utf8");
}
?>