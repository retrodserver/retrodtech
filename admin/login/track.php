<?php
include './admin/include/dbcon.php';
if(!isset($_COOKIE['visit'])){
	setCookie('visit','yes',time()+(60*60*24*30));
	mysqli_query($conn,"update visit set total_count=total_count+1");
}
?>