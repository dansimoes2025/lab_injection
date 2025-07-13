<?php
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$stmt = $conn->prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ?");
$stmt->bind_param("ss", $usuario, $senha);
$stmt->execute();
$result = $stmt->get_result();

echo "<pre>Consulta segura preparada</pre>"; // Para estudo

if ($result->fetch_array()) {
    echo "<p style='color:green'>✅ Logado com segurança!</p>";
} else {
    echo "<p style='color:red'>❌ Usuário ou senha inválidos.</p>";
}
?>
