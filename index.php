<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lab Injection</title>
</head>
<body>

<h2>🔴 Login Vulnerável</h2>
<form method="POST" action="vulneravel/login.php">
    Email: <input type="text" name="email" required><br><br>
    Senha: <input type="text" name="senha" required><br><br>
    <button type="submit">Entrar (Vulnerável)</button>
</form>

<hr>

<h2>🟢 Login Seguro</h2>
<form method="POST" action="seguro/login.php">
    Email: <input type="text" name="email" required><br><br>
    Senha: <input type="password" name="senha" required><br><br>
    <button type="submit">Entrar (Seguro)</button>
</form>

</body>
</html>
