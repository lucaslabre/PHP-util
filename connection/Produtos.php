<?php

declare(strict_types=1);

class Produto {
    /**
     * @var PDO
     */
    private $connection;

    public function __construct () {
        try {
            $this->connection = new PDO('mysql: host=mysql; dbname: exemplo', 'root', 'root');
            $this->connection->query('use exemplo');
        } catch (Exception $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function list () : array {
        $sql = 'select * from produtos';
        echo '<h3>Produtos</h3>';
        
        $produtos = array();

        foreach ($this->connection->query($sql) as $key => $value) {
            array_push($produtos, $value);
            // echo 'Id: '.$value['id'].'<br>Descrição: '.$value['description'].'<hr>';
        }

        return $produtos;
    }

    public function insert (string $description) : int {
        $sql = 'insert into produtos(description) values (?)';
        $prepare = $this->connection->prepare($sql);
        $prepare->bindParam(1, $description);
        $prepare->execute();
        return $prepare->rowCount();
    }

    public function update (string $description, int $id) : int {
        $sql = 'update produtos set description=? where id=?';
        $prepare = $this->connection->prepare($sql);
        $prepare->bindParam(1, $description);
        $prepare->bindParam(2, $id);
        $prepare->execute();
        return $prepare->rowCount();
    }

    public function delete (int $id) : int {
        $sql = 'delete from produtos where id = ?';
        $prepare = $this->connection->prepare($sql);
        $prepare->bindParam(1, $id);
        $prepare->execute();
        return $prepare->rowCount();
    }
}