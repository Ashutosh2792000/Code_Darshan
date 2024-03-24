<?php

include "connection.php";

$id=$_GET['id'];

//Trying To fetch the Id only...

//echo $id; 

//die();

$sql="delete from signuptable where sno='{$id}'";

$res=mysqli_query($conn,$sql);

if($res){
    echo'<script>
    alert
    ("The Selected Item Is Removed Successfully...")
    location.replace("http://localhost/damodar/crud.php")
    </script>';
    //header("location: read.php");
}else{
    echo"Not Deleted";
}



?>