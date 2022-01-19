<?php
class AutoLoad{
    
    public function __construct()
    {
        spl_autoload_register(function($className){
            $models_path = "./Models/" . $className . ".php";
            $controllers_path = "./Controllers/" . $className . ".php";

            if(file_exists($models_path))  require_once($models_path); 

            if(file_exists($controllers_path))  require_once($controllers_path); 
        });


    }

    public function __destruct()
    {
        
    }

}