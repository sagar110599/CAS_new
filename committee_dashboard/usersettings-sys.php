<?php


session_start();
include '../includes/dbh.php';

$userId=mysqli_real_escape_string($conn,$_SESSION['id']);

//get data
$faculty_name1=mysqli_real_escape_string($conn,$_POST['faculty_name']);
$email1=mysqli_real_escape_string($conn,$_POST['email']);
// $date_of_joining=mysqli_real_escape_string($conn,$_POST['date_of_joining']);
// $department=mysqli_real_escape_string($conn,$_POST['department']);
$mobileno1=mysqli_real_escape_string($conn,$_POST['mobileno']);

$sqle="SELECT email FROM faculty_table WHERE email='$email1' AND id <> '$userId'";
$resulte=mysqli_query($conn,$sqle);

if(mysqli_num_rows($resulte)==0)
{

	$sql="UPDATE faculty_table SET faculty_name='$faculty_name1', mobileno='$mobileno1' WHERE id='$userId'";
	$result=mysqli_query($conn,$sql);

	header("LOCATION: index.php?result=updated");

}
else
{
	header("LOCATION: index.php?result=gerror");
}