<?php
// Verifica se os Cookies estão definidos
if (isset($_COOKIE['usuario']) && isset($_COOKIE['data_hora_inicio'])) {
    $usuario = $_COOKIE['usuario'];
    $data_hora_inicio = $_COOKIE['data_hora_inicio'];

    echo "<h1>Bem-vindo, $usuario!</h1>";
    echo "<p>Data/hora de início: $data_hora_inicio</p>";
} else {
    // Alerta caso os dados do Cookie estejam ausentes
    echo "<script>alert('Os dados da sessão foram perdidos ou expiraram.');</script>";
    echo "<p>Por favor, faça login novamente.</p>";
    echo "<a href='login_cookie.php'>Voltar ao login</a>";
}
?>