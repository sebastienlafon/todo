<?php

Class Db{
    
    protected $bdd;
    
    public function __construct() {
        $this->bdd = new PDO('mysql:host=localhost;dbname=todo;charset=utf8', 'root', 'root', 
                     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        
    }
    
    
    
}

