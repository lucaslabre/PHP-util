<?php // Cabeçalho para criar uma session
    include 'services/messageService.php';
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

    <form action="session.php" method="POST">
        
        <label for="name">Nome: </label><input name="name" type="text"><br>
        <label for="age">Idade: </label><input name="age" type="text"><br>
        <label for="password">Senha: </label><input type="password" name="password"><br>
        <button type="submit">enviar</button><br>
        <?php 
            $msgError = getMessageError();
            $msgSuccess = getMessageSuccess();
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