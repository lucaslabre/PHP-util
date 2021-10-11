<?php
    include 'services/messageService.php';
    include 'services/validationService.php';
    include 'services/categoryService.php';
    $name = $_POST["name"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    
    category($name, $age, $password);

    header('location: index.php');
?>