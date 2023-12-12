<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '../Models/ClientesModels.php';

class ClientesControllers
{
    public function index()
    {
        $clientes = new Clientes;
        $result = $clientes->all();
        print_r($result); 
        return $result;
    }
}

$a= new ClientesControllers();
$a->index();