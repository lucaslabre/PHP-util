<?php
    $name = $_POST["name"];
    $password = $_POST["password"];
    $age = $_POST["age"];

    if (empty($name)) {
        echo "O campo nome não pode ser vazio.<br>";
        return;
    }
    if (strlen($password) < 5) {
        echo "A senha deve conter pelo menos 5 caracteres.<br>";
        return;
    }
    if (!is_numeric($age)) {
        echo "Informe um valor numérico para idade.";
        return;
    }
    echo "$name possui $age e sua senha é $password";
?>