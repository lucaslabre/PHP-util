<?php

declare(strict_types=1);

$pdo = require('connect.php');
$sql = 'update produtos set description=? where id=?';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['description']);
$prepare->bindParam(2, $_GET['id']);

$prepare->execute();

echo $prepare->rowCount();