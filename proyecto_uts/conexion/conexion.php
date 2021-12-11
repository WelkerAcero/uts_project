<?php

class Conexion
{
    private $conn;
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'uts_project';


    //contructor
    function __construct()
    {
        $this->conectar();
    }


    public function conectar()
    {

        $this->conn = mysqli_connect($this->server, $this->user, $this->password, $this->dbname);
        if (mysqli_connect_error()) {
            die("Error: No se pudo conectar a la base de datos: " . mysqli_connect_error() . mysqli_connect_errno());
        }

        return $this->conn;
    }

    public function conectarseMetodo_2()
    {

    /*  
        $servidor = "mysql:dbname=uts_project;host=127.0.0.1"; // Cambiar al momento de subirlo a production
        $usuario = "root";
        $password = ""; 
    */
        try {
            $pdo = new PDO("mysql:host={$this->server};dbname={$this->dbname};", 
                            $this->user, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            
                            //echo "Conectado..";
        } catch (PDOException $e) {
            echo "Fallo en el servidor :( " . $e->getMessage();
        }

        return $pdo;

    }


    public function insertar_contact($name, $email, $phone, $date)
    {
        $sql = "INSERT INTO contact_center(contact_name,contact_email,contact_cellphone,recorded_date)
         VALUES('$name', '$email', '$phone','$date');";

        $result = mysqli_query($this->conn, $sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
        
    }


    public function limpiar_cadena($var)
    {
        $return = mysqli_real_escape_string($this->con, $var);
        return $return;
    } //fin limpiar_cadena


    public function leer_contact()
    {
        $sql = "SELECT * FROM contact_center;";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }


    public function leer_proyeccion(){
        $sql = "SELECT * FROM proyeccion;";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function leer_curso(){
        $sql = "SELECT * FROM cursos;";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }

    public function leer_admin(){
        $sql = "SELECT * FROM users;";
        $result = mysqli_query($this->conn, $sql);
        return $result;
    }
    
    
}
