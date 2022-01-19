<?php 
/* require_once("contact_centerModel.php"); */

echo "<h1>CRUd with MVC for contact_center table</h1>";

$contact = new ContactCenterModel();

/* ============================ READ ==================*/
$content = $contact->read();
print_r($content);

$num_of_contacts = count($content);

echo "<h2>Num of contacts recorded = {$num_of_contacts}</h2>";

/*============================ CREATE =======================*/
$data = array(
    'contact_id' => $num_of_contacts+1,
    'contact_name' => "Anggie Liseth Castellanos Camacho",
    'contact_email' => "anggie97@gmail.com",
    'contact_cellphone'=> 3118425945,
);

$contact->create($data);
echo "Se acaba de realizar un registro éxitoso";

/* ===================== UPDATE ============================*/
$update_data = array(
    'contact_id' => 1,
    'contact_name' => "Welker José Pérez Acero",
    'contact_email' => "universityestudiosca@gmail.com",
    'contact_cellphone'=> 3213655354,
);

$contact->update($update_data);

/*=================== Delete ================*/
//$status->delete(6);

?>