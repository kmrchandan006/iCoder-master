<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usertable WHERE name = '$name' AND password = '$pass'";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
    header('location: Home_First.php');
}
else{
    echo "Please Login again";
    header('location: login.php');
}
?>