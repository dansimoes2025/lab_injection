<?php
$conn = mysqli_connect("localhost", "root", "", "lab_injection");
if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
