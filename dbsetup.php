<?php
    $con = mysqli_connect("localhost", "pavani", "pavani");
    mysqli_query($con,"CREATE DATABASE IF NOT EXISTS `connect`;");
    mysqli_query($con,"CREATE TABLE IF NOT EXISTS `connect`.`signup` ( `email` VARCHAR(255) NOT NULL DEFAULT '\"\"' , `pwd` VARCHAR(255) NOT NULL DEFAULT '\"\"' , `secret` VARCHAR(255) NOT NULL DEFAULT '\"\"' , `contact` MEDIUMTEXT NOT NULL DEFAULT 'k' , `name` VARCHAR(60) NOT NULL DEFAULT '\"\"' , `cmail` VARCHAR(30) NOT NULL DEFAULT '\"\"' ) ENGINE = InnoDB;");
    header('location:signin.html');
?>
