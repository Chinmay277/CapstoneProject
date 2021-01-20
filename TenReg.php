<?php

require_once 'include/DB_Function.php';
$db = new DB_Function();
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['phone'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
	$pass = $_POST['pass'];
    $phone = $_POST['phone'];
    // check if user is already existed with the same owner_id
    if ($db->isTenantExisted($email)) {
        $response["error"] = TRUE;
        $response["error_msg"] = "User already existed with " . $email;
        echo json_encode($response);
    } 
    else 
    {
        // create a new user
        $user = $db->storeTenant($name, $email, $pass, $phone);
        if ($user) 
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
} else {
    $response["error"] = TRUE;
    $response["error_msg"] = "Something is missing here..!";
    echo json_encode($response);
}
?>

