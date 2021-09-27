<?php // Cabeçalho para criar uma session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get e Post</title>
</head>
<body>

    <form action="section.php" method="POST">
        
        <label for="name">Nome: </label><input name="name" type="text"><br>
        <label for="age">Idade: </label><input name="age" type="text"><br>
        <label for="password">Senha: </label><input type="password" name="password"><br>
        <button type="submit">enviar</button><br>
        <?php 
            $msgError = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
            $msgSuccess = isset($_SESSION['mensagem de sucesso']) ? $_SESSION['mensagem de sucesso'] : '';
            if (!empty($msgError)) {
                echo $msgError;
            }
            if (!empty($msgSuccess)) {
                echo $msgSuccess;
            }
        ?>
    </form>

</body>
</html>