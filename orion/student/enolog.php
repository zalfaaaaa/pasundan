<?php

session_start();

include('../connect.php');

$nisn = $_POST['nisn'];

$query = $maru->query("SELECT * FROM student WHERE nisn='$nisn' ");
$data = $query->fetch();

if($query->rowCount()>0){
    $_SESSION['nisn'] = $nisn;
    header("location:home.php");
}else {
    header("location:logins.php");
}