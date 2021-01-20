<?php

require_once 'include/DB_Function.php';
$db = new DB_Function();
if (isset($_POST['rent']) && isset($_POST['deposite']) 
    && isset($_POST['negotiable']) && isset($_POST['maintainance']) && isset($_POST['AvailableDate']) 
    && isset($_POST['tenantType']) && isset($_POST['furnishing']) && isset($_POST['parking']) && isset($_POST['des']))
{
	$rent = $_POST['rent'];
	$deposite = $_POST['deposite'];
	$negotiable = $_POST['negotiable'];
	$maintainance = $_POST['maintainance'];
	$AvailableDate= $_POST['AvailableDate'];
	$tenantType = $_POST['tenantType'];
	$furnishing = $_POST['furnishing'];
	$parking = $_POST['parking'];
	$des = $_POST['des'];

	$email = $_SESSION['uid'];
}
else
{

}

?>