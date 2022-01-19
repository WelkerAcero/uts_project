<?php
class Router{
    public $route;

    public function __construct($route)
    {
        $session_options = array(
            'use_only_cookies' => 1,
            'read_and_close' => true,
        );

        if(!isset($_SESSION))  session_start($session_options);

        if(!isset($_SESSION['active']))  $_SESSION['active'] = false;

        if($_SESSION['active']){

        }else{
            $login_form = new ViewController();
            $login_form->load_view('index');
        }
    }
}