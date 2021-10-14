<?php

include 'Produtos.php';

$produto = new Produto();

switch ($_GET['operation']) {
    case 'list':
        echo '<h3>Produtos: </h3>';
        foreach ($produto->list() as $key => $value) {
            echo 'Id: '.$value['id'].'<br>Descrição: '.$value['description'].'<hr>';
        }
        break;

    case 'insert':
        $status = $produto->insert('Teste do Lucas 02');
        if (!$status) {
            echo 'Não foi possível inserir o produto';
            return false;
        }
        echo 'Produto inserido com sucesso!';
        break;
    
    case 'update':
        $status = $produto->update('Produto alterado', 9);
        if (!$status) {
            echo 'Não foi possível alterar o produto';
            return false;
        }
        echo 'Produto alterado com sucesso!';
        break;
    
    case 'delete':
        $status = $produto->delete(8);
        if (!$status) {
            echo 'Não foi possível deletar o produto';
            return false;
        }
        echo 'Produto deletado com sucesso!';
        break;
}

// $produto->list();