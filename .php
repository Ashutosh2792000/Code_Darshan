<?php

include "connection.php";

if(isset($_GET['id'])){
    $key=$_GET['id'];
   // echo $key;
   $sql="update signuptable set status='active' where uniquekey='$key'";

   $res=mysqli_query($conn,$sql);
   if($res){
    header("location: login.php");
   }else{
    echo'<script> alert("Not Activated") </script>';
   }


}

?>