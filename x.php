
<?php
session_start();
include "connection.php";

if(isset($_POST['submit'])){


    $email=$_POST['fmail'];
    $pass=$_POST['pass'];



    $sql="select * from signuptable where email='$email' and status='inactive'";

    $res=mysqli_query($conn,$sql);

    // $out=mysqli_num_rows($res);

    // echo $out;

    // die();


    if(mysqli_num_rows($res)>0){

    $row=mysqli_fetch_assoc($res);

    // print_r($row) ."<br>";

     $passwd=$row['password'];

    //  echo $passwd;

    // die();

     $decrypt=password_verify($pass,$passwd);

    //  var_dump($dum);

     if($decrypt){

      if(isset($_POST['remember'])){

        setcookie('emailcookie',$email);
        setcookie('passcookie',$pass);

        $_SESSION['username']=$row['name'];
        header("location: home.php");


      }else{

        $_SESSION['username']=$row['name'];
        header("location: home.php");

      }
      }
     else{
        echo "error";
     }

    
    }else{
        echo '<script>alert("Please wait are sending you a confirmation Mail                          Team Codedarshan")</script>';
    }

    
    }



?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">

    <title>Login/Signup</title>

  </head>
  <body style="font-family: 'Poppins', sans-serif;">
  <script src="https://kit.fontawesome.com/305d530da5.js" crossorigin="anonymous"></script>

    <style>

      .fullbody{
        background-image: url("login.gif");
      }  
 .center {
  background-image: url( "llogin.png");
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width:  100%;
  margin-top: px;
  background-color: 	rgb(204, 204, 0);
  font-family: 'Poppins', sans-serif;
  padding: 5%;
  background-image: not-repat;
 
} 
 .centerc {
  padding-top:50px;
  padding-left:10px;
  padding-right:25px;

  width: 25%;
  margin-top: 10px;
  margin-left: 5px;
  margin-right: 1050px;
  border-radius:10px;
  border: 20px rgb(77, 0, 0); 
  background-color: 	rgb(204, 204, 0);
  font-family: 'Poppins', sans-serif;
} 
.modaal{
  height: 50px;
  width: 499px;
  background-color: 	rgb(204, 204, 0);
  border-radius:5px;
  opacity: 1;

}  
.modalinmodal{
  height: 550px;
  width: 499px;
  background-color: rgb(0, 0, 102);
  padding-left: 30px;
  opacity: 1;

}


img {
  border-radius: 50%;
}
  </style>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
   
    <div class="center">
    <div class="centerc">&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
    &ensp;&ensp;&ensp;&ensp;<img src="logo.gif" alt="Paris" width="70" height="70"><hr> 
      <h2 class="text-primary">Welcome To <h2 class="text-danger">Code</h2><h2 class="text-success">दर्शन</h2></h2>
      <hr>
  <h2>SignUp And Login....</h2>
  &ensp;

<div text-align center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-user-plus fa-bounce"></i>
  Sign Up
</button>&ensp;
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropp"><i class="fa-solid fa-right-to-bracket fa-bounce"></i>
  Log In
</button>&ensp;&ensp;
<hr><p class="text-danger">&ensp;&ensp;
  &ensp;&ensp;&ensp;&ensp;
  &ensp;www.codedarshan.in</p>

</div>
</div>
</body>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modaal">
      
        <h2 class ="text-primary">
        &ensp;&ensp;&ensp;
        &ensp;&ensp;&ensp;
        &ensp;
        SignUp For Free</h2>
        <div class="modalinmodal">
          <p class="text-warning">
          Create a Free codedarshan
           Account to Improve Your &ensp;&ensp;&ensp;&ensp; Learning Experience </p><br><hr>
        </div>
    </div><hr>
      <div class="modal-body">
        <hr>
        

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="">
            
             <div class="form-group">
                <label class="text-warning">Name</label>
                <input type="text" class="form-control"  placeholder="Enter your name" name="fname">
                
              </div>
              <div class="form-group">
                <label class="text-warning">Email address</label>
                <input type="email" class="form-control"  placeholder="Enter email" name="fmail">
                
              </div>
              <div class="form-group">
                <label class="text-warning">Contact</label>
                <input type="text" class="form-control"  placeholder="Enter your mobile no" name="fcontact">
                
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1"class="text-warning">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
              </div>
            
                <div class="form-group">
                <label for="exampleInputPassword1"class="text-warning">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Re-enter Password" name="cpass">
              </div></br>
              <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div> -->
              <button type="submit" class="btn btn-danger" name="submit">
              <i class="fa-solid fa-user-plus fa-bounce"></i>
              &ensp;Sign Up</button>&ensp;

              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropp" data-bs-dismiss="modal">
              <i class="fa-solid fa-right-to-bracket fa-bounce"></i>&ensp; Login Here
  
</button><br>


            </form>
                    </div>
                    
                </div>
                
            </div>
              </main>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal"><i class="fa-regular fa-rectangle-xmark"></i>&ensp; Close</button>
        <a href="forget.php"><button type="button" class="btn btn-warning"><i class="fa-solid fa-key"></i>&ensp;Forget Password</button></a>
        
       
      </div>
    </div>
  </div>
</div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdropp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div style="font-family: 'poppins', sans-serif;">
    <div class="modaal">
      <h2 class=text-success>&ensp; &ensp;  &ensp;&ensp; &ensp;  &ensp;&ensp;&ensp; Login Here...</h2>
  
    </div>
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel"></h5>
      </div>
      <main>
      <form method="post" action="">
                                      <p>
                                      
                                      <?php
                                      
                                          if(isset($_SESSION['alert'])){
                                              echo $_SESSION['alert'];
                                          }else{
                                              echo $_SESSION['message']="";
                                          }
                                      
                                      ?>


                                     </p>

  <div class="form-group">
    <label>&ensp; &ensp;  &ensp; &ensp; &ensp;  &ensp;&ensp; &ensp;  &ensp;&ensp; &ensp;  &ensp;Enter Your Email Address Here</label>
    <input type="email" class="form-control"   placeholder="Enter email" name="fmail"   value="<?php if(isset($_COOKIE['emailcookie'])){
      echo $_COOKIE['emailcookie'];
    }  ?>">
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">&ensp; &ensp;  &ensp; &ensp; &ensp; 
    &ensp; &ensp;  &ensp;
    &ensp; &ensp;  &ensp;&ensp; &ensp;  &ensp; &ensp;&ensp; &ensp;  &ensp;Enter Password</label>
    <input type="password"  class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass" value="<?php if(isset($_COOKIE['passcookie'])) {
      echo $_COOKIE['passcookie'];
    }   ?>">
  </div>
</br>
</br>&ensp; &ensp;  &ensp;
  <button type="submit" class="btn btn-success" name="submit"><i class="fa-solid fa-right-to-bracket fa-bounce"></i>&ensp; Submit</button>&ensp; 

<a href="forget.php"><button type="button" class="btn btn-primary"> <i class="fa-sharp fa-solid fa-key fa-bounce"></i>
  &ensp;  Forget Password</button></a>&ensp; 
<button class="btn btn-danger" data-bs-dismiss="modal" ><i class="fa-solid fa-circle-xmark fa-bounce"></i>&ensp;Close</button>

</form>
</br>
        </div>
    </div>
</div>


  </main>
  

    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="staticBackdroppp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>



  </body>
</html>

<?php
include "connection.php";
if(isset($_POST['submit'])){

  $name=$_POST['fname'];
  $email=$_POST['fmail'];
  $contact=$_POST['fcontact'];
  $pass=$_POST['pass'];
  $cpass=$_POST['cpass'];

  $passwd=password_hash($pass,PASSWORD_DEFAULT);
  
 $key=bin2hex(random_bytes(12));
 //echo $key;
 //die();







  $sql="select * from signuptable where email='$email'";
  $res=mysqli_query($conn,$sql);

  if(mysqli_num_rows($res)>0){
    echo '<script>alert("Please Enter The Correct Password....")</script>';
  }else{




  // echo $output;
  // die();
  if($pass===$cpass){
    $sql1="insert into signuptable(name,email,mobile,password,uniquekey,status)values('$name','$email','$contact','$passwd','$key','inactive')";
    $res1=mysqli_query($conn,$sql1);
    if($res){
      $to=$email;
      $subject=" Welcome To CodeDarshan";
      $body="Hello MR. $name Thank you very much for joining CodeDarshan. You can now login to the login panel by entering your email id and password.";

      $sender="From: visitpatna0@gmail.com";
      if(mail($to,$subject,$body,$sender)){
        echo'<script>alert("Your Account has been created Successfully...")</script>';
      }else{
        echo '<script>alert("The Activation Mail is Not been Sent..")</script>';
      }
    }

}else{
  echo "Password Should be Same...";
}
  }


}




?>