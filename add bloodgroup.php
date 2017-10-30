<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
// Code for change password	
if(isset($_POST['submit']))
{
$bloodgroup=$_POST['bloodgroup'];
$sql="INSERT INTO  tblbloodgroup(BloodGroup) VALUES(:bloodgroup)";
$query = $dbh->prepare($sql);
$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Blood Group Created successfully";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
