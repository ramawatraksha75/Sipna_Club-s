<?php
session_start();
if(!isset($_SESSION['clubId'])){
    header('location:AdminLogIn.php');
    }

if($_SESSION['clubId']=='Carnival123@gmail.com'){
    header('location:AdminCarnival.php');
}else if($_SESSION['clubId']=='ArtCraft123@gmail.com'){
    header('location:AdminArtCraft.php');
}else if($_SESSION['clubId']=='Social123@gmail.com'){
    header('location:AdminSocial.php');
}else if($_SESSION['clubId']=='Readers123@gmail.com'){
    header('location:AdminReaders.php');
}else if($_SESSION['clubId']=='Competitive123@gmail.com'){
    header('location:AdminCompetitive.php');
}else if($_SESSION['clubId']=='Sipnoprenuer123@gmail.com'){
    header('location:AdminSipnoprenuer.php');
}else if($_SESSION['clubId']=='Technovishkar123@gmail.com'){
    header('location:AdminTechnovishkar.php');
}else if($_SESSION['clubId']=='PDA123@gmail.com'){
    header('location:AdminPDA.php');
}else if($_SESSION['clubId']=='Fitness123@gmail.com'){
    header('location:AdminFitness.php');
}else if($_SESSION['clubId']=='Nature123@gmail.com'){
    header('location:AdminNature.php');
}


?>