<?php
include "connection.php";
$id=$_POST['sno'];
$name=$_POST['name'];
$email=$_POST['fmail'];
$contact=$_POST['fcontact'];

$sql="update signuptable set name='{$name}',email='{$email}',mobile='{$contact}' where sno='{$id}'";

$res=mysqli_query($conn,$sql);

if($res){
    header("location: crud.php");
}else{
    echo "failed";
}



?>