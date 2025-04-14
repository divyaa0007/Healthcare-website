<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Welcome to iCoder. A blog for coding enthusiasts">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/maicons.css">

        <link rel="stylesheet" href="../assets/css/bootstrap.css">
      
        <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
      
        <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
      
        <link rel="stylesheet" href="../assets/css/theme.css">
    <title>W2- Wake & Wonder Healthcare Center</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Wake & Wonder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Specialities
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Technology</a>
                        <a class="dropdown-item" href="#">Web Development</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Support</a>
                        <a class="dropdown-item" href="#">Write for us</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Socail Initaitives
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="donor.html">Be a donor</a>
                      <a class="dropdown-item" href="volunteer.html">Be a volunteer</a>
                  </div>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact Us</a>
                </li>


            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="mx-2">
                <button class="btn btn-danger" data-toggle="modal" data-target="#loginModal">Login</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#signupModal">SignUp</button>
            </div>
        </div>
    </nav>

 
  
  <!-- Login Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Login to W2</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="index.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="pass" name="pass">
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        </div>
      </div>
    </div>
  </div>
 <?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     $email = $_POST['email'];
     $pass = $_POST['pass'];
     
   // Connecting to the Database
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "login";

   // Create a connection
   $conn = mysqli_connect($servername, $username, $password, $database);
   // Die if connection was not successful
   if (!$conn){
       die("Sorry we failed to connect: ". mysqli_connect_error());
   }
   else{ 
     // Submit these to a database
     // Sql query to be executed 
     $sql = "INSERT INTO `patient`(`email`, `pass`, `dt`) VALUES ('$email','$pass',current_timestamp())";
     $result = mysqli_query($conn, $sql);

     if($result){
       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
       <strong>Success!</strong> Your entry has been submitted successfully!
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>';
     }
     else{
         // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
       <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
     </div>';
     }

   }

 }
 ?>
  
  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Get an W2 Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                  <label for="cexampleInputPassword1">Confirm Password</label>
                  <input type="password" class="form-control" id="cexampleInputPassword1">
                </div>
                 
                <button type="submit" class="btn btn-primary">Create Account</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
        </div>
      </div>
    </div>
  </div>

    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="1 (1).jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2><font color="Black">Welcome to Wake & Wonder</font></h2>
                    <p>To ensure good health: eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.</p>
                    <button class="btn btn-danger">Medical Equipments</button>
                    <button class="btn btn-primary">Doctors Guidence</button>
                    <button class="btn btn-success" onclick="Animation_Bg/index.html">Mental Relaxation techniques</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2><font color="Black">The Best Fitness professionals advices</font></h2>
                      <p> <font color="Black">Physical fitness is the first requisite of happiness.</font></p>
                    <button class="btn btn-danger">Medical Equipments</a></button>
                    <button class="btn btn-primary">Doctors Guidence</button>
                    <button class="btn btn-success">Mental Relaxation techniques</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Award winning Blog</h2>
                    <p>Technology News, Development and Trends</p>
                    <button class="btn btn-danger">Medical Equipments</button>
                    <button class="btn btn-primary">Doctors Guidence</button>
                    <button class="btn btn-success">Mental Relaxation techniques</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container my-4">
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-primary">World</strong>
                  <h3 class="mb-0">Generic Medicines</h3>
                  <div class="mb-1 text-muted">Dec 24</div>
                  <p class="card-text mb-auto">A generic medicine is a medicine that is developed to be the same as a medicine that has already been authorised. Its authorisation is based on efficacy and safety data from studies on the authorised medicine. A company can only market a generic medicine once the 10-year exclusivity period for the original medicine has expired. </p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="thumb1.jpg" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-success">Painkillers</strong>
                  <h3 class="mb-0">Ayurvedic Painkillers</h3>
                  <div class="mb-1 text-muted">Dec 24</div>
                  <p class="mb-auto">We are acknowledged for offering a flawless assortment of Ayurvedic Pain Killer Tablets. Being purely ayurvedic and prepared from natural ingredients, offered tablets are highly effective. They have longer shelf life and there will be no side effects after consuming them. .</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?medicines, Painkillers" alt="">

                </div>
              </div>
            </div>
          </div>
        <div class="row mb-2">
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-danger">Medical Equipments</strong>
                  <h3 class="mb-0">Requied once</h3>
                  <div class="mb-1 text-muted">Dec 24</div>
                  <p class="card-text mb-auto">Medical equipment and supplies means items used for therapeutic or diagnostic purposes essential for patient care, such as dressings, catheters, or syringes.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                  <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?medical equipments,syringes,dressings, bandages" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <strong class="d-inline-block mb-2 text-warning">Self Relaxation</strong>
                  <h3 class="mb-0">Calm</h3>
                  <div class="mb-1 text-muted">Dec 24</div>
                  <p class="mb-auto">Relaxation isn't only about peace of mind or enjoying a hobby. Relaxation is a process that decreases the effects of stress on your mind and body. Relaxation techniques can help you cope with everyday stress and with stress related to various health problems, such as heart disease and pain.</p>
                  <a href="#" class="stretched-link">Continue reading</a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img class="bd-placeholder-img" width="200" height="250" src="https://source.unsplash.com/500x700/?self Relaxation,meditation" alt="">

                </div>
              </div>
            </div>
          </div>
    </div>
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2020-2021 iCoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://smtpjs.com/v3/smtp.js"></script>
   <!--<script>
      function sendEmail(){
        Email.send({
        Host : "smtp.gmail.com",
        Username : "scarynightmare1920@gmail.com",
        Password : "pass",
        To : "rileyfort1920@gmail.com",
        From : document.getElementById('email').value,
        Subject : "IMPORTANT EMAIL",
        Body : "And this is the body"
}).then(
  message => alert('Check your Email')
);
      }
    </script>onsubmit="sendEmail(); reset(); return false;"-->
</body>

</html>