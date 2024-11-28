<?php
$host = 'localhost';
$dbname = 'crud_php';
$user = 'root'; // Altere se necessário
$password = 'nova_senha'; // Altere se necessário

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>
