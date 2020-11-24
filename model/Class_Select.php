<?php

require_once 'Config.php';

Class SelectConnect extends DatabaseConnect {
    public function select(){
        $result = array();
        $select = $this->pdo->prepare('SELECT * FROM users');
        $select->execute();
        $result = $select->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}