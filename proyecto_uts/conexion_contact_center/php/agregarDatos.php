<?php

require_once "../../Controllers/contact_centerController.php";

$con = new ContactCenterController();
$getData = $con->read();
$totalDataStored = count($getData);

$a = strtolower($_POST['contact_name']);
$a2 = ucwords($a);
$b = strtolower($_POST['contact_email']);
$c = $_POST['contact_cellphone'];
$date = $_POST['recorded_date'];

$createArray = array(
	'contact_id' => $totalDataStored+1,
	'contact_name' => $a2,
	'contact_email' => $b,
	'contact_cellphone' =>$c,
);

$con->create($createArray);