<?php

Class Model_Todo extends Db{
        
   public function getList(){

       $q   = "SELECT * FROM tache";
       $sth = $this->bdd->prepare($q);
       $sth->execute();
       $results = $sth->fetchAll();

    

       return $results;
       
   }
    
    
    
    
    
    
    

    
    
    
    
    
}

