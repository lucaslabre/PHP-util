# get-post-authenticate

## Introdução

Nesse repositório é apresentada a forma básica de validação e persistência de dados através da session.

- Estrutura básica
```php
<?php
    session_start();
?>
```
Essa estrutura deve ser colocada no início do arquivo principal e do arquivo .php que armazenará as validações.

Para armazenar a mensagem na session utilizamos a estrutura

```php
/*
armazena a mensagem de erro no array associativo array['mensagem de erro'] => 'O nome não pode ser vazio'
*/
$_SESSION['mensagem de erro'] = 'O nome não pode ser vazio';  
// redireciona para o arquivo index.php
header('location: index.php');  
```


