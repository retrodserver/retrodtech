<?php
$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "vwqmwweafd";
echo 'test';
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    echo "conecrtion failed";
}
echo "<pre>";
print_r($_POST);
echo "</pre>";

$response = array('success' => false);
$name=$_POST['name'];
echo "$name";

	$sql = "INSERT INTO register (UName, Mail, Phone, Hotelname, Totalinventory, plan) VALUES('".addslashes($_POST['name'])."', '".addslashes($_POST['mail'])."', '".addslashes($_POST['phone'])."', '".addslashes($_POST['hotelname'])."', '".addslashes($_POST['totalinventory'])."', '".addslashes($_POST['plans'])."')";
	echo "$sql";
	echo "result";
	echo "$sql";
	$result=mysqli_query($conn, $sql);
	echo "$result";
	if($result)
	{
		$response['success'] = true;
	}


echo json_encode($response);
// $conn = mysqli_connect($servername, $username, $password, $dbname);



// if (!$conn) {
//      die("Connection failed: " . mysqli_connect_error());
// }



// print_r($_GET);

// $name = $_GET['name'];
// $mail = $_GET['mail'];
// $phone = $_GET['phone'];
// $hotelname = $_GET['hotelname'];
// $totalinventory = $_GET['totalinventory'];
// $plan = $_GET['plans'];


// $sql = "INSERT INTO register (UName, Mail, Phone, Hotelname, Totalinventory, plan) VALUES('$name', '$mail', '$phone', '$hotelname', $totalinventory, '$plan')";
// echo "$sql";
// if (mysqli_query($conn, $sql)) 
// {
//      echo "New record created successfully";
// }
//  else
// {
//      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
// mysqli_close($conn);
?>