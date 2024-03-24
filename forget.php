<?php
include "connection.php";

if(isset($_POST['submit'])){

$email=$_POST['fmail'];

$sql="select * from signuptable where email='{$email}'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_assoc($result);

$key=$row['uniquekey'];
$name=$row['name'];

 //echo $key;

 //die();

    $to=$email;
    $subject="Reset Password";
    $body="hi $name click here to reset your password http://localhost/damodar/reset.php?id=$key";
    $sender="From :visitpatna@gmail.com";

    if(mail($to,$subject,$body,$sender)){
      echo '<script>alert("We have sent an email to change Your Password                                   Team CodeDarshan")</script>';
    }else{
        echo '<script>alert("Please Enter Your Email Address First")</script>';
    }




}else{
    echo '<script>alert"Invalid EmailI"<script>';
}






}




?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<style>
.modalinmodal{
  height: 70%;
  width: 100%;
  background-color: rgb(0, 0, 102);
  padding:5%;
  margin-top:12%;
  opacity: 1;
  border-radius: 10px;

}
</style>

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <div class= modalinmodal>
  <main style="font-family: 'Poppins', sans-serif;">
    <div class="container">
        <div class="row">
            <div class="mx-1">
                <form action="" method="post">
                    <div class="form-group">
                      <h1 class=text-warning> Enter Your Email id to Recover Your Password
</h2>                        <label class='text-warning'>Email Address</label>
                        <input type="email" class ="form-control" placeholder="Enter Your Registered Email Address" name="fmail">

</div><br>
</div></br>
<br>
<button style="font-family: 'Poppins', sans-serif;"type="submit" class="btn btn-warning" name="submit">Submit</button>
</form>
</div>
</div>
</div>

  </main><>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>