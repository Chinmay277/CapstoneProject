<?php
class DB_Function {

    private $conn;

    // constructor
    function __construct() 
    {
        require_once 'DB_Connect.php';
        // connecting to database
        $db = new Db_Connect();
        $this->conn = $db->connect();
    }
    function __destruct() 
    {
        
    }

    function isOwnerExisted($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM Owner WHERE Email = ?");
        echo $this->conn->error;
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
          
        if($result->num_rows > 0)
        {
            $stmt->close();
            return 1;
        }
        else
        {
            $stmt->close();
            return 0;
        }
        
        
    }

    function storeOwner($Name, $email, $pass, $phone)
    {


        $query = "INSERT INTO `Owner`(`Name`, `Email`, `Password`, `Phone`) VALUES('".$Name."', '".$email."', '".$pass."', '".$phone."')";
         if($this->conn->query($query))
         {
            
             $stmt = $this->conn->prepare("SELECT * FROM Owner WHERE Email = ?");
                 echo $this->conn->error;
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $user = $stmt->get_result()->fetch_assoc();
                $stmt->close();
                return $user;
         }
    }

    function storeProperty($oid,$type, $bhk, $floor, $totFloor, $age, $face, $size, $city, $locality, $area, $rent, $deposite, $negotiable, $maintainace, $AvailableDate, $tenantType, $furnishing, $parking, $des, $photo, $bath, $balcony, $water, $gym, $nonveg, $Security, $amenities)
    {

    }

    function isTenantExisted($email)
    {
        $stmt = $this->conn->prepare("SELECT * FROM Tenant WHERE Email = ?");
        echo $this->conn->error;
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
          
        if($result->num_rows > 0)
        {
            $stmt->close();
            return 1;
        }
        else
        {
            $stmt->close();
            return 0;
        }
    }

    function storeTenant($name, $email, $pass, $phone)
    {   
        $query = "INSERT INTO `Tenant`(`Name`, `Email`, `Password`, `Phone`) VALUES('".$name."', '".$email."', '".$pass."', '".$phone."')";
        if($this->conn->query($query))
        {
            
             $stmt = $this->conn->prepare("SELECT * FROM `Tenant` WHERE `Email` = ?");
                 echo $this->conn->error;
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $user = $stmt->get_result()->fetch_assoc();
                $stmt->close();
                return $user;
        }
    }

    function getOID($email)
    {
        //echo $email;
        $stmt = $this->conn->prepare("SELECT * FROM Owner WHERE Email = ? ");
        echo $this->conn->error;
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $oid = $row['OID'];        
        $stmt->close();
        echo "\n";
        return $oid;
    }

    function ownlog($email, $pass)
    {
        $stmt = $this->conn->prepare("SELECT * FROM Owner WHERE Email = ? and Password = ?");
        echo $this->conn->error;
        $stmt->bind_param("ss",$email, $pass);
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc())
        {
            $oid = $row['OID'];
            echo "\n";
            echo $row['Name'];
        }    
        echo $result->num_rows;
        
        $stmt->close();
        echo "\n";
        return 1;
    }

    function getResult($city, $bhk, $type)
    {
        //$bhk = (int)$bhk;
        echo $bhk;
        echo $city;
        $stmt = $this->conn->prepare("SELECT * FROM Property WHERE City = ? and BHK = ?");
        echo $this->conn->error;
        $stmt->bind_param("ss",$city, $bhk);
        $stmt->execute();
        $result = $stmt->get_result();
        echo $result->num_rows;
        $stmt->close();
        return $result;
    }

    function propDetails($oid,$type, $bhk, $floor, $totFloor, $age, $face, $size)
    {
        $query = "INSERT INTO `Property`(`OID`,`Type`, `BHK`, `Floor`, `TotFloor`, `Age`, `Facing`, `Size`) VALUES('".$oid."','".$type."', '".$bhk."', '".$floor."', '".$totFloor."', '".$age."', '".$face."', '".$size."')";
        /*$this->conn->query($query);
        echo $this->conn->error;*/

         if($this->conn->query($query))
         {
            $stmt = $this->conn->prepare("SELECT PID FROM Property WHERE  `OID` = ?");
            echo $this->conn->error;
            $stmt->bind_param("s",$oid);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            $pid = $row['PID']; 
            //echo $pid;
            return $pid;
         }
         else
         {
            return 0;
         }
    }

    function storeLocation($city, $locality, $area)
    {
        $query = "INSERT INTO `Property`(`City`, `Locality`, `Area`) VALUES('".$city."', '".$locality."', '".$area."')";
         if($this->conn->query($query))
         {
            
            return 1;
         }
         else
         {
            return 0;
         }
    }

}
?>
