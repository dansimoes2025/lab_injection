<?php
session_start();

$pdo = new PDO("mysql:host=localhost;dbname=lab_injection", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
$stmt->bindParam(":email", $email);
$stmt->execute();

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['usuario'] = $usuario['email'];
    header("Location: ../dashboard.php");
} else {
    echo "Login inválido";
}
?>
