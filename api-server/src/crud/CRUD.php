<?php 

namespace App\Crud;

use Database\ConnectionProvider;

class CRUD{
    
    protected $db;

    public function __construct()
    {
        $this->db = ConnectionProvider::getInstance()->getConnection();
    }
}