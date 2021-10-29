<?php
include '../assets/db/db.php';
$cemail=$_POST['email'];
$q="select * from students where EMAIL='$cemail'";
$query=mysqli_query($con,$q);
$row=mysqli_num_rows($query);
if($row==1){
    echo '1';
}
else{
    echo '2';
}

?>