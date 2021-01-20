<?php

require_once 'include/DB_Function.php';
$db = new DB_Function();
if (isset($_POST['type']) && isset($_POST['bhk']) && isset($_POST['floor']) && isset($_POST['totFloor']) 
    && isset($_POST['age']) && isset($_POST['face']))/*&& isset($_POST['size']) && isset($_POST['city']) 
    && isset($_POST['locality']) && isset($_POST['area']) && isset($_POST['rent']) && isset($_POST['deposite']) 
    && isset($_POST['negotiable']) && isset($_POST['maintainance']) && isset($_POST['AvailableDate']) 
    && isset($_POST['tenantType']) && isset($_POST['furnishing']) && isset($_POST['parking']) && isset($_POST['des']) 
    && isset($_POST['photo']) && isset($_POST['bath']) && isset($_POST['balcony']) && isset($_POST['water']) 
    && isset($_POST['gym']) && isset($_POST['nonveg']) && isset($_POST['Security'])) */
{



    $type = $_POST['type'];
    $bhk = $_POST['bhk'];
	$floor = $_POST['floor'];
    $totFloor = $_POST['totFloor'];
    $age = $_POST['age'];
    $face = $_POST['face'];
    $size = $_POST['size'];
    $face = $_POST['face'];

    echo $face;
    $email = "chinmay@gmail.com";
    $oid = $db->getOID($email);

    echo $oid;
    /*$size = $_POST['size'];
    $city = $_POST['age'];
    $locality = $_POST['locality'];
    $area = $_POST['rent'];
    $deposite = $_POST['deposite'];
    $negotiable = $_POST['negotiable'];
    $maintainace = $_POST['maintainace'];
    $AvailableDate = $_POST['AvailableDate'];
    $tenantType = $_POST['tenantType'];
    $furnishing = $_POST['furnishing'];
    $parking = $_POST['parking'];
    $des = $_POST['des'];
    $photo = $_POST['photo'];
    $bath = $_POST['bath'];
    $balcony = $_POST['balcony'];
    $water = $_POST['water'];
    $gym = $_POST['gym'];
    $nonveg = $_POST['nonveg'];
    $Security = $_POST['Security'];
    //$amenities = implode(',', $_POST['amenities'])


    //$email = $_SESSION['$email'];
    $email="chinmay@gmail.com";
    //$this->conn = $db->connect();
    $oid = db->getOID($email);

    /*echo $type;


    $prop = $db->storeProperty($oid,$type, $bhk, $floor, $totFloor, $age, $face, $size, $city, $locality, $area, $rent, 
            $deposite, $negotiable, $maintainace, $AvailableDate, $tenantType, $furnishing, $parking, $des, $photo, $bath, 
            $balcony, $water, $gym, $nonveg, $Security, $amenities);
    if($prop) 
    {
            echo json_encode($response);
    } 
    else 
    {
        $response["error"] = TRUE;
        $response["error_msg"] = "Unknown error occurred in registration!";
        echo json_encode($response);
    }*/
} 
    else 
    {

        echo "Hello";
        $response["error"] = TRUE;
        $response["error_msg"] = "Something is missing here..!";
        echo json_encode($response);
    }
?>

