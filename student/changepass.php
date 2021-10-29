<?php
include '../assets/db/db.php';
$email=$_POST['email'];
$cpass1=$_POST['npass'];
$cpass2=$_POST['cnpass'];

if($cpass2!=$cpass1){

echo '1';


}
else{
    $q="update students set PASS='$cpass2' where EMAIL='$email'";
    $query=mysqli_query($con,$q);
    echo '2';

}









?>