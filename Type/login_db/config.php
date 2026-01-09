<?php
//configurações para acesso ao BD
define('BD_USER', 'root'); // USE O TEU USUÁRIO DE BANCO DE DADOS
define('BD_PASS', 'usbw'); // USE A TUA SENHA DO BANCO DE DADOS
define('BD_NAME', 'turma24'); // USE O NOME DO TEU BANCO DE DADOS

$conexao = mysqli_connect('localhost', BD_USER, BD_PASS, BD_NAME);
?>