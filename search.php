<?php
require_once 'include/DB_Function.php';
$db = new DB_Function();

if(isset($_POST['loc']) && isset($_POST['bhk']) && isset($_POST['type']))
{
	$city = $_POST['loc'];
	$type = $_POST['type'];
	$bhk  = $_POST['bhk'];
	$result = $db->getResult($city,$bhk, $type);

	echo "<table border='1'>
	<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	</tr>";

	while($row = $result->fetch_assoc())
	{
		echo "<tr>";
		echo "<td>" . $row['Type'] . "</td>";
		echo "<td>" . $row['Floor'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
else
{
	echo "Something is missing here";
}

?>
