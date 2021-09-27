<?php // Cabeçalho para criar uma session
    session_start();
?>

<?php
    $name = $_POST["name"];
    $password = $_POST["password"];
    $age = $_POST["age"];

    if (empty($name)) {
        // armazena a mensagem de erro no array associativo array['mensagem de erro'] => 'O nome não pode ser vazio'
        $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio';  
        // redireciona para o arquivo index.php
        header('location: index.php');  
    }
    if (strlen($password) < 5) {
        $_SESSION['mensagem de erro'] = 'A senha deve conter pelo menos 5 caracteres.<br>';  // array associativo
        header('location: index.php'); 
    }
    if (!is_numeric($age)) {
        $_SESSION['mensagem de erro'] = 'Informe um valor numérico para idade.<br>';  // array associativo
        header('location: index.php'); 
    }
    // Se passar por todas as condições de validação, executar abaixo
    $_SESSION['mensagem de sucesso'] = "Seu nome é $name, possui $age e sua senha é $password";
    header("location: index.php");
?>