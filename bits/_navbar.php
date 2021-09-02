<?php

session_start();

echo '    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="position:fixed;z-index:1000;width:100%;">
<div class="container-fluid">
  <a class="navbar-brand" href="/mlinks"><img src="bits/favicon.ico" height="30" alt="icon" style="border-radius:50%;" ></img> <i style="color:orangered;text-decoration:underline;font-family: \'Montserrat Alternates\', sans-serif;">mlinks</i></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo '
      <li class="nav-item">
      <a class="nav-link" id="nb-home" aria-current="page" href="/mlinks">Home</a>
    </li>      
      <li class="nav-item">
      <a class="nav-link" id="nb-links" aria-current="page" href="/mlinks/mylinks.php">MyLinks</a>
    </li>';
    }
    echo '

      <li class="nav-item">
        <a class="nav-link" id="nb-about" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nb-contact" href="contact.php">Contact</a>
      </li>
    </ul>';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      echo '<div style="display:flex;">
            <a href="bits/_logout.php" class="btn btn-outline-success ml-2 mx-2">LogOut</a>';
    }
    else{
    echo  '<div style="display:flex;">
    <button class="btn btn-outline-success ml-2 mx-2" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
        <button class="btn btn-outline-success " data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>';
    }


        echo '
  </div>
</div>
</nav>';

include 'bits/_login.php' ;
include 'bits/_signup.php' ;
include 'bits/_addlink.php' ;
include 'bits/_editlink.php' ;

if( isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>Success</strong> Your Account has been created and you can login now.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
}

?>
