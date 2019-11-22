<?php 
$con = mysqli_connect('localhost','root');
if ($con) {
	echo "Connection Successfull";
}
else{
	echo "No Connection";
}
mysqli_select_db($con,'buitstudentdata');

$user = $_POST['user'];
$email = $_POST['email'];
$semester = $_POST['semester'];
$branch = $_POST['branch'];
$mobile = $_POST['mobile'];

$query = "insert into userinfodata (user, email, semester, branch, mobile)
values ('$user', '$email', '$semester', '$branch', '$mobile')";

mysqli_query($con, $query);
header('location:successmsg.php');
?>