<?php

declare(strict_types=1);

$pdo = require 'connect.php';
// $pdo->query('use exemplo');
$sql = 'insert into produtos(description) values (?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['description']);
$prepare->execute();

echo $prepare->rowCount();