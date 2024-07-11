<?php
session_start();
header('location: login.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$sql = "SELECT * FROM usertable WHERE name = '$name'";

$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "username Already Taken";
}
else{
    $reg = "INSERT INTO usertable (sno, name, password) VALUES (NULL,'$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Registration was Successful";
}
?>