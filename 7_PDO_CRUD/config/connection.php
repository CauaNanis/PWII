<?php
// Configuração da conexão com o BD
$host = 'localhost';
$database = 'escola';
$user = 'root';
$password = '';

//Realizando conexão com o BD por meio
// do plugin PHP PDO
try {
$pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
} catch(PDOException $erro) {
    die("Erro de conexão: " . $erro->getMessage());
}
// ou $pdo = mysql(""); (Em certos casos)
?>
