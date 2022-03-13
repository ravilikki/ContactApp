<?php
    $con = mysqli_connect('localhost','pavani','pavani');
    mysqli_select_db($con,'connect');
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $sec = $_POST['sec'];
    mysqli_query($con,"INSERT INTO `signup`(`email`,`pwd`,`secret`) VALUES ('$email','$pwd','$sec');");
    header('location:index.html')
?>