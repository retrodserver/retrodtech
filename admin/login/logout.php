<?php
session_start();
$_SESSION['loginid']=0;
header("Location: index.php");
?>