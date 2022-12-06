<?php


$ClubName=$_POST['ClubName'];
$activityName=$_POST['activityName'];
$details=$_POST['details'];
$LastDate=$_POST['LastDate'];
$ResultDate=$_POST['ResultDate'];
$registrationLink=$_POST['registrationLink'];


$conn = new mysqli('localhost', 'root', '', 'sipna_clubs');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{

$sql = "INSERT INTO activity(club_name, activity_name, activity_details, last_date, result_date,Llink) VALUES ('$ClubName', '$activityName', '$details', '$LastDate', '$ResultDate','$registrationLink');";



if ($conn->query($sql) === TRUE) {
  header('location:Home.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

    
    echo "Registration successful";
    $conn ->close();
}
    
?>