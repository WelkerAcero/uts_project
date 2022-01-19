<?php 
class ViewController{

    private static $view_path = './resources/views/paginas/';

    public function load_view($path){
        require_once(self::$view_path . $path . '.php');
    }

    public function __destruct()
    {
        
    }

}
