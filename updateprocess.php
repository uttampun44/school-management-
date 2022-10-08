<?php

require('./Database/connection.php');

$up = new Database();

if(isset($_POST['update'])){
    $fullname = $_POST['fullname'];
    $dateofbirth = date('Y-m-d', strtotime($_POST['dateofbirth']));
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $fathers = $_POST['father'];
    $mothers = $_POST['mother'];
    $class = $_POST['class'];
     
   
$up->Update($idupdate, $fullname, $dateofbirth, $gender, $address, $mobile, $fathers, $mothers, $class);
}
?>