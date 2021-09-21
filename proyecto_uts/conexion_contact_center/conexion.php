<?php

class conexion
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
    }

    public function insertar_contact($name, $email, $phone)
    {
        $sql = "INSERT INTO contact_center(contact_name,contact_email,contact_cellphone)
         VALUES('$name', '$email', '$phone');";

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
}
