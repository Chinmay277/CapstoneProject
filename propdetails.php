<?php

require_once 'include/DB_Function.php';
$db = new DB_Function();
if (isset($_POST['type']) && isset($_POST['bhk']) && isset($_POST['floor']) && isset($_POST['totFloor']) 
    && isset($_POST['age']) && isset($_POST['face'])&& isset($_POST['size']))
{
	$type =  $_POST['type'];
	$bhk = $_POST['bhk'];
	$floor = $_POST['floor'];
	$totFloor = $_POST['totFloor'];
	$age = $_POST['age'];
	$face = $_POST['face'];
	$size = $_POST['size']; 
	$email = "lio@gmail.com";
    $oid = $db->getOID($email);
    //echo $oid;
	$pid = $db->propDetails($oid, $type, $bhk, $floor, $totFloor, $age, $face, $size);
	//echo $pid;
	if($pid>0)
	{
		$SESSION['pid'] = $pid;
	}
	else
	{
		$response["error"] = TRUE;
        $response["error_msg"] = "Unknown error occurred in registration!";
        echo json_encode($response);
	}

}
else
{
	$response["error"] = TRUE;
    $response["error_msg"] = "Something is missing here..!";
    echo json_encode($response);
}
?>