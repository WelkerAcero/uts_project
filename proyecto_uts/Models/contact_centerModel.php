<?php
require_once("Model.php");

class ContactCenterModel extends Model{

    public $contact_id;
    public $name;
    public $email;
    public $cellphone;
    public $date;
    
    public function __construct(){
        $this->db_name = "uts_project";
    } 

    public function create($contact_data = array()){

        foreach($contact_data as $key => $value){
            $$key = $value; //When $$ is assigned it turns into a dynamic variable
        }

        $recorded_date = date('Y-m-d');
        
        $this->query = ("INSERT INTO contact_center
        (contact_id, contact_name, contact_email, contact_cellphone, recorded_date) 
        VALUES
        ($contact_id,'$contact_name','$contact_email',$contact_cellphone,'$recorded_date')");
        
        $this->set_query();//Execute the query in the Model.

    }

    public function read($contact_id = ''){

        $this->query = ($contact_id != '') 
        ?"SELECT * FROM contact_center WHERE contact_id = $contact_id"
        :"SELECT * FROM contact_center";
        
        $this->get_query(); //$this->get_query()  A protected function from the father class
        //var_dump($this->rows);

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $field => $value) {
            array_push($data, $value); 
            //or also $data[$field] = $value;

        }

        return $data;

    }   
    
    public function update($contact_data = array()){
        $updateIn = date('Y-m-d');
        foreach($contact_data as $key => $value){
            $$key = $value;
        }

        $this->query = "UPDATE contact_center SET 
                        contact_id = $contact_id,
                        contact_name = '$contact_name',
                        contact_email = '$contact_email',
                        contact_cellphone = $contact_cellphone,
                        last_update = '$updateIn'
                        WHERE contact_id = $contact_id";

        $this->set_query(); //Execute the model in the class Model 

    }
    
    public function delete($contact_id = ''){
        if(!isset($contact_id)){
            echo "<h1 style='color:yellow' widht='100%'>
                Indique un id a eliminar</h1>";   
        }else{
            $this->query = "DELETE FROM contact_center WHERE contact_id = '$contact_id'";
            $this->set_query();
        }
    }

    public function __destruct()
    {
        /* unset($GLOBALS["{$this}"]); */
    }


}

?>