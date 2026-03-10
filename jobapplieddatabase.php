<?php
include("admin/include/conn.php");

$response = array('success' => false);

$naam=$_POST['name'];
$mail=$_POST['email'];
$education=$_POST['education'];
$experience=$_POST['experience'];
$skills=$_POST['result'];
$additional=$_POST['additional'];

echo "$naam";

$sql = "INSERT INTO apply (Name, Email, education, experience, programs,additional) VALUES('$naam','$mail','$education',$experience,'$skills','$additional')";
	echo "$sql";
	$result=mysqli_query($conn, $sql);
	echo "$result";
	if($result)
	{
		$response['success'] = true;
	}

// Close the database connection
echo json_encode($response);
$conn->close();



?>