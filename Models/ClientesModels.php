<?php

use Models\Database;

require_once $_SERVER['DOCUMENT_ROOT'] . './Database.php';

class Clientes
{
    private $conn; 

    public function __construct()
    {
        $funtionConexion = new Database;
        $this->conn = $funtionConexion->getConn();
    }


    public function all(){
        $query = "SELECT * FROM clientes";
      
        try {
           $stm = $this->conn->query($query);
           $stm->execute();
           $result = $stm->fetchAll(\PDO::FETCH_ASSOC);
           return $result;

        } catch (PDOException $e) {
           echo $e->getMessage();
        }
    }

}

