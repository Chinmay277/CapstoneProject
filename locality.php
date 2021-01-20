<?php

require_once 'include/DB_Function.php';
$db = new DB_Function();
if(isset($_POST['city']) && isset($_POST['locality']) && isset($_POST['area']))
{
	$city = $_POST['city'];
	$locality = $_POST['locality'];
	$area = $_POST['area'];

	$user = $db->storeLocation($city, $locality, $area);
	if($user)
	{
		echo json_encode($response);
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