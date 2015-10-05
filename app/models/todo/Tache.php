<?php

Class Tache{

    private $_nom;
    private $_done;
    private $_id;
    private $_datax;

  
    public function __construct($valeurs = false){
        if(is_array($valeurs)){
            var_dump($valeurs);
        }
    }
    
    
    // Setters
    public function set_nom($txt){
        if(is_string($txt)){
            if(strlen($txt) > 255){
                    $this->_nom = substr($txt, 0, 254);
            }else{
                    $this->_nom = $txt;
            }					
        }else{
            die('Le nom doit etre une chaine de caractère');
        }
    }
    
    
    public function set_done($bool){
        if(is_bool($bool)){
            $this->_done = $bool;
        }
    }
    
    
    public function set_id($int){
        if(is_int($int)){
            $this->_id = $int;
        }
    }
    
    // Hydratation de l'objet
    public function hydrate($valeurs){
        if(is_array($valeurs)){
            foreach ($valeurs as $key => $value) {
                $nomSetter = 'set_'.$key;
                if(method_exists($this, $nomSetter)){
                    $this->$nomSetter($value);
                }
            }
        }       
    }



}
?>