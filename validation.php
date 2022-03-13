<?php
$con=mysqli_connect('localhost','pavani','pavani');
mysqli_select_db($con,'connect');
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$result=mysqli_query($con,"select email,pwd from signup where email='$email' and pwd='$pwd';");
$num=mysqli_num_rows($result);
if($num==1){
    header('location:add.php');
}
else{
    header('location:signup.html');
}
?>