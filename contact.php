<?php
$con=mysqli_connect('localhost','pavani','pavani');
mysqli_select_db($con,'connect');
$name = $_POST['name'];
$num = $_POST['no'];
$email = $_POST['email'];
$umail=$_POST['umail'];
$temp=mysqli_query($con,"SELECT `contact`, `name`, `cmail` FROM `signup` WHERE email='$umail';");
$row=mysqli_fetch_array($temp); 
if($row[0]=="k")
{
mysqli_query($con,"UPDATE `signup` SET `contact`='$num',`name`='$name',`cmail`='$email' WHERE email='$umail';");
}
else
{
    $row[0]=$row[0].",".$num;
    $row[1]=$row[1].",".$name;
    $row[2]=$row[2].",".$email;
    mysqli_query($con,"UPDATE `signup` SET `contact`='$row[0]',`name`='$row[1]',`cmail`='$row[2]' WHERE `email`='$umail';");
}
header('location:add.php');
?>
