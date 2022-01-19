<?php
include($_SERVER['DOCUMENT_ROOT']."/ProyectoSitioWeb_UTS/proyecto_uts/Models/contact_centerModel.php");
//Si no se coloca así, la parte de admin no podrá entender la ruta

class ContactCenterController{

    private $model; //this will invoke or initialize our contact_centerModel.php

    public function __construct()
    {
        $this->model = new ContactCenterModel();
    }

    public function create($contact_data = array()){
        return $this->model->create($contact_data);
    }

    public function read($contact_id = ''){
        return $this->model->read($contact_id);
    }

    public function update($contact_data = array()){
        return $this->model->update($contact_data);
    }
    
    public function delete($contact_id = ''){
        return $this->model->delete($contact_id);
    }

    public function __destruct()
    {
        unset($this->model);
    }

}
?>