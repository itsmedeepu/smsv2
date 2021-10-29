<?php
include '../assets/db/db.php';
session_start();
$name=$_POST['username'];
$pass=$_POST['pass'];
$captcha=$_POST['captcha'];

if($captcha==$_SESSION['captcha'])
{
$r="select * from students where EMAIL='$name'";
$query=mysqli_query($con,$r);
$row=mysqli_num_rows($query);
if($row==1){
    echo '1';
}
else{
    $m="insert into students(EMAIL,PASS) values('$name','$pass')";
    $qm=mysqli_query($con,$m);
    echo '2';
}



}

else{

    echo '3';
}

?>