<?php
$con=mysqli_connect('localhost','root','');
if($con)
{
    mysqli_select_db($con,'sms');
}
else{
    echo 'connection failed';
}
?>