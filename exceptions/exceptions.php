<?php
function validateUser (array $user) : bool {
    if (empty($user['name']) || empty($user['age'])) {
        throw new Exception ("Campos obrigatórios não foram preenchidos!");
    }
    return true;
}

$user = [
    'name' => '',
    'age' => 26
];

try {
    $validUser = validateUser($user);
} catch (Exception $e) {
    echo $e->getMessage();
    die();
}

echo "... executing ...";