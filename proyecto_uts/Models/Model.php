<?php

abstract class Model{
    //public -> can be accessed by external classes and they can be modified
    //protected -> this allowed access by daughter classes
    //private -> this is the most restrictive of all 
    private static $db_host = "localhost";
    private static $db_user = "root";
    private static $db_pass = "";
    protected $db_name = "";
    
    private static $db_charset = "utf8";
    private $conn;

    protected $query;
    protected $rows = array();


    //Methods
    //Abstract methods for CRUD of classes that will inherit
    abstract protected function create();

    abstract protected function read();

    abstract protected function update();
    
    abstract protected function delete();


    //Private method for connection to the database
    private function db_open(){
        //http://php.net/manual/es/class.mysqli.php
        // self:: => to call the attribute which is private and static and belongs to this same class
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, $this->db_name);

        $this->conn->set_charset(self::$db_charset);
    }

    //Private method for disconnection to the server database
    private function db_close(){
        mysqli_close($this->conn);
    }

    protected function set_query(){

        //http://php.net/manual/es/mysqli.query.php
        //THIS IS NOT THE PROTECTED ATTRIBUTE query(), 
        $this->db_open();
        // the word 'query' used is a inner php method and then 
        //'$this->query' is the class attribute 
        $this->conn->query($this->query);

        $this->db_close();
    }

    //Obtain data from a query (SELECT)
    protected function get_query(){
        $this->db_open();
        //Bring the query proceesed and saved it in a variable
        $result = $this->conn->query($this->query);

        //fetch_assoc = this going to return records from a 
        //query invoking the name of the field in database
        while($this->rows[] = $result->fetch_assoc());
        
        $this->db_close();
        
        // In this part 'array_pop' will be used 
        // to remove the last position which is NULL
        return array_pop($this->rows);

    }

    

}

?>