<?php
include 'conexao.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
echo "<pre>Consulta gerada: $query</pre>"; // Para estudo

$result = mysqli_query($conn, $query);

if (mysqli_fetch_array($result)) {
    echo "<p style='color:green'>Logado com sucesso!</p>";
} else {
    echo "<p style='color:red'>Usuário ou senha inválidos.</p>";
}
?>
