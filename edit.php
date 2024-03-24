<?php

include "connection.php";

$id=$_GET['id'];

$sql="select * from signuptable where sno='{$id}'";

$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){



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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
.modalinmodal{
  height: 70%;
  width: 100%;
  background-color: rgb(0, 0, 102);
  padding:13%;
  margin-top:16%;
  margin-left:50%;
  opacity: 1;
  border-radius: 10px;

}
</style>

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

  <div class="container">
    <div class="row">
        <div class="col-6">
            <form method="post" action="update.php">
<div class=modalinmodal>
<main style="font-family: 'Poppins', sans-serif;">
 <div class="form-group">
    <h4 class="text-warning text-center">Update User Details</h4>
    <input type="text" class="form-control"  placeholder="Enter Serial Number" name="sno"
    value= "<?php echo $row['sno'] ?>" hidden >
    

    <div class="form-group">
    <label class="text-warning">Name</label><br>
    <input type="text" class="form-control"  placeholder="Enter Serial Number" name="name"
    value= "<?php echo $row['name'] ?>"><br>
    


  </div>
  <div class="form-group">
    <label class="text-warning">Email address</label><br>
    <input type="email" class="form-control"  placeholder="Enter email" name="fmail"
    value= "<?php echo $row['email'] ?>"><br>
    
  </div>
  <div class="form-group">
    <label class="text-warning">Contact</label><br>
    <input type="text" class="form-control"  placeholder="Enter your mobile no" name="fcontact"
    value= "<?php echo $row['mobile'] ?>"><br><br>

  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> --><br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>&ensp;
  <button type="submit" class="btn btn-warning" name="submit">Go Back</button>
</form>
<?php }


}?>





        </div>
    </div>
</div>

  </main>
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