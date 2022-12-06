<?php

$name=$_POST['name'];
$email=$_POST['email'];
$year=$_POST['year'];
$branch=$_POST['branch'];
$utr=$_POST['utr'];

$conn = new mysqli('localhost', 'root', '', 'sipna_clubs');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

$sql = "INSERT INTO competitive(uname, student_id, Yyear, branch, utr) VALUES ('$name', '$email', '$year', '$branch', '$utr');";



if ($conn->query($sql) === TRUE) {
  header('location:StudentHome.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    
    echo "Registration successful";
    $conn ->close();
}
    
?>