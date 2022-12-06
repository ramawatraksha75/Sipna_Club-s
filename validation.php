<?php
session_start();

$conn =mysqli_connect('localhost','root');
if($conn){
    echo "connection successfull";
}else{
    echo "Not connected";
}

mysqli_select_db($conn, 'sipna_clubs');

$clubId=$_POST['clubId'];
$pass=$_POST['pass'];

$q ="select * from corelogin where clubId='$clubId' and pass='$pass' ";
$result=mysqli_query($conn,$q);

$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['clubId']= $clubId;
    header('location:AdminHome.php');
}else{
    header('location:AdminLogIn.php');
}

?>