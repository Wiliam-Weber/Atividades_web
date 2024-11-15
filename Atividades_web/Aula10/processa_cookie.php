<?php
// Obtém os dados enviados pelo formulário
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Credenciais fixas para validação
$usuario_correto = "Wiliam";
$senha_correta = "1234";

// Verifica se o login e senha estão corretos
if ($usuario === $usuario_correto && $senha === $senha_correta) {
    // Gera a data/hora atual
    $data_hora_inicio = date('Y-m-d H:i:s');

    // Define os Cookies com tempo de vida de 5 minutos
    setcookie('usuario', $usuario, time() + (60 * 5), '/');
    setcookie('data_hora_inicio', $data_hora_inicio, time() + (60 * 5), '/');

    // Redireciona para a página de validação
    header("Location: valida_cookie.php");
    exit();
} else {
    // Exibe mensagem de erro se o login falhar
    echo "<script>alert('Usuário ou senha inválidos!');</script>";
    echo "<a href='login_cookie.php'>Tentar novamente</a>";
}
?>
