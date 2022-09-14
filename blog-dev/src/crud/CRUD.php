<?php 

namespace App\Crud;

class CRUD{
    
    protected $db;

    public function __construct()
    {
        $this->db = $GLOBALS["db"];
    }
}