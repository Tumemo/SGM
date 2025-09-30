<?php
session_start();

// 1. Use $_POST, pois mudamos o método do formulário para POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Coleta e sanitiza os dados do formulário
    $email_digitado = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha_digitada = $_POST['senha']; // A senha deve ser verificada com hash, mas por simplicidade, faremos uma verificação simples.

    // 2. Lógica de Verificação (MUITO SIMPLIFICADA)
    // Em um ambiente real, você faria uma consulta ao banco de dados e verificaria o hash da senha.
    
    $email_correto = "user@solicitante.com";
    $senha_correta = "123456"; // Nunca armazene senhas sem hash!

    if ($email_digitado === $email_correto && $senha_digitada === $senha_correta) {
        
        // 3. Sucesso no Login: Define as variáveis de sessão.
        $_SESSION['email'] = $email_digitado; // Armazena o email para uso futuro.
        $_SESSION['logado'] = true; // Flag para indicar que o usuário está logado.
        
        // 4. Redireciona para a página correta.
        header('Location: solicitante_celular/home.php');
        exit;
        
    } else {
        
        // 5. Falha no Login: Armazena uma mensagem de erro e redireciona de volta para a página de login.
        $_SESSION['login_erro'] = "E-mail ou senha inválidos.";
        header('Location: index.php'); // Redireciona para o login.php para mostrar o erro.
        exit;
    }
} else {
    // Se o acesso não foi via POST, redireciona para a página de login.
    header('Location: index.php');
    exit;
}
?>