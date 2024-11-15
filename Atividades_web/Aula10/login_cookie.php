<!DOCTYPE html>
<html>
<head>
    <title>Login com Cookie</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="processa_cookie.php">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>
        
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
