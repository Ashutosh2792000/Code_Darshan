<?php
session_start();


if(isset($_SESSION['username'])){

}else{
    header("location: login.php");
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
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>

<body>
      <nav class="navbar navbar-expand-lg  bg-warning" style="font-family: 'Poppins', sans-serif;">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Code दर्शन..</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="upcoming.html">Upcomings...</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="overapi.html">Over API</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Explore More
                        </a>

                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="codedarshan.html">HTML</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="css.html">CSS</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="js.html">JAVASCRIPT</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item , nav-link-disabled " href="#">BOOTSTRAP</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="php.html">PHP</a></li>
                          <li>
                              <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="quiz.html">QUIZES</a></li>
                         

                      </ul>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://localhost/damodar/code-parivartak/">Lets Code
                            <i class="fa-solid fa-code fa-flip fa-xl" style="color: #000000;">
                            </i></a>
                        </button>
                    </li>

                </ul>




                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>&ensp;
                <!-- Button trigger modal -->




                <a href="app.html" class="btn btn-primary position-relative">
                                        Download App
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                         New

  </span>
    </a>&ensp;&ensp;&ensp;


                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cBack"><i class="fa-solid fa-user"></i>
                   </button>&ensp;
            
                <i class="fa-duotone fa-gear-complex-code fa-beat-fade"></i>
            </div>
            <i class="fa-solid fa-circle-half-stroke fa-shake fa-xl" onclick="myFunction()" style="color: #000000;"></i>
        </div>&ensp;      <div id="google_element"><script src="https://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate">

</script>
<script>
    function loadGoogleTranslate(){
        new google.translate.TranslateElement("google_element");
    }
</script></div>

    </nav>
  <header>
    <!-- place navbar here -->
  </header>
  <main style="font-family: 'Poppins', sans-serif;">
    <?php 
    
    include "connection.php";

    $sql="select * from signuptable";

    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){

     

    
    ?><br><h1 class="text-danger text-center">Manage CodeDarshan Users</h1>
    <br><br>
  <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" class="text-warning text-center">Sno</th>
      <th scope="col" class="text-warning text-center">Name</th>
      <th scope="col" class="text-warning text-center">Email</th>
      <th scope="col" class="text-warning text-center">Mobile</th>
      <th scope="col" class="text-warning text-center">Key</th>
      <th scope="col" class="text-warning text-center">Edit</th>
      <th scope="col"class="text-warning text-center">Delete</th>
    </tr>
   
  </thead>
  <tbody>
  <script src="https://kit.fontawesome.com/305d530da5.js" crossorigin="anonymous"></script>
<div class="modal fade" id="cBack" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">About Me</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <?php echo 'Welcome To CodeDarshan'.'<br>'.$_SESSION['username'];  ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="index.php" class="btn btn-danger" role="button" aria-disabled="true">
        <i class="fa-solid fa-arrow-up-left-from-circle fa-bounce"></i>
        </i>&ensp;Logout</a>&ensp;
    </body>

      </div>
    </div>
  </div>
</div>
  <?php
    while($row=mysqli_fetch_assoc($res)){
?>
    <tr>
      <td class="text-center" ><?php echo $row['sno'];  ?></td>
      <td class="text-center" ><?php echo $row['name'];  ?></td>
      <td class="text-center" ><?php echo $row['email'];  ?></td>
      <td class="text-center" ><?php echo $row['mobile'];  ?></td>
      <td class="text-center" ><?php echo $row['uniquekey'];  ?></td>
      <td><a class="btn btn-success text-center" href="edit.php?id=<?php echo $row['sno'];  ?>">Edit</a> </td>
      <td><a class="btn btn-danger text-center" href="delete.php?id=<?php echo $row['sno'];  ?>">Delete</a></td>
    </tr>



    <?php } ?>
  </tbody> 
</table><br><br><br><br>
<?php  } ?>
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
  
            <!-- Footer -->
            <footer class="bg-dark text-center text-white my-4">
                <!-- Grid container -->
                <div class="container p-4">
                    <!-- Section: Social media -->

                    <!-- Section: Social media -->

                    <!-- Section: Form -->
                    <section class="">
                        <form action="">
                            <!--Grid row-->
                            <div class="row d-flex justify-content-center">
                                <!--Grid column-->
                                <div class="col-auto">
                                    <p class="pt-2">
                                        <strong>Sign up for our newsletter :- </strong>
                                    </p>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-5 col-12">
                                    <!-- Email input -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" id="form5Example21" class="form-control" />
                                        <label class="form-label" for="form5Example21">Email address</label>
                                    </div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-auto">
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-outline-danger mb-4">
                                        Subscribe
                                    </button>
                                </div>
                                <!--Grid column-->
                            </div>
                            <!--Grid row-->
                        </form>
                    </section>
                    <!-- Section: Form -->

                    <!-- Section: Text -->
                    <section class="mb-4">
                        <p>
                            Coding is essentially a problem-solving process that helps to
                            analyze a situation or goal and then use problem-solving skills
                            to determine and implement a solution. While the goal or challenge
                            may be the same, the solution itself may look different depending on
                            the strategies taken to achieve the desired result.
                        </p>
                    </section>
                    <!-- Section: Text -->

                    <!-- Section: Links -->
                    <section class="">
                        <!--Grid row-->
                        <div class="row">



                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Useful Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="https://www.w3.org/" class="text-white">W3C</a>
                                    </li>
                                    <li>
                                        <a href="https://instituteofcoding.open.ac.uk/" class="text-white">IoC</a>
                                    </li>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Useful Links</h5>
                                <li>
                                    <a href="https://www.php.net/" class="text-white">PhP</a>
                                </li>
                                <li>
                                    <a href="https://www.mysql.com/" class="text-white">My Sql</a>
                                </li>
                                </ul>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Links</h5>

                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a href="https://www.w3schools.com/" class="text-white">w3schools</a>
                                    </li>
                                    <li>
                                        <a href="https://www.javatpoint.com/" class="text-white">javatpoint</a>
                                    </li>
                            </div>
                            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                                <h5 class="text-uppercase">Useful Links</h5>
                                <li>
                                    <a href="https://www.javascript.com/" class="text-white">javascript</a>
                                </li>
                                <li>
                                    <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/"
                                        class="text-white">Bootstrap5</a>
                                </li>
                                </ul>
                            </div>





                        </div>
                        <!--Grid row-->
                    </section>
                    <!-- Section: Links -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(15, 11, 99, 0.2);">
                    © 2023 Copyright:
                    <a class="text-white" href="index.php">www.coddarshan.com</a>
                </div>
                <p class="text-warning">Total Visitors till Now..</p>
                <a href="https://www.hitwebcounter.com" target="_blank">
                    <img src="https://hitwebcounter.com/counter/counter.php?page=8299016&style=0032&nbdigits=4&type=page&initCount=100"
                        title="Free Counter" Alt="web counter" /></a>
                <!-- Copyright -->
            </footer>
</body>

</html>