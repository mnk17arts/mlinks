<!doctype html>
<html lang="en">

<?php include 'bits/_head.php' ?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@1,500&display=swap');
</style>
<style>
body {
background-color: #272727;
color: #fff;
}

.main-container, .false-container{
    min-height: 90vh;
}

.false-container .box,.main-container .box {
display: -webkit-box;
display: -ms-flexbox;
display: flex;
-ms-flex-wrap: wrap;
    flex-wrap: wrap;
-webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
}
.main-container .box {
-webkit-box-direction: reverse;
    -ms-flex-direction: row-reverse;
        flex-direction: row-reverse;
}
.false-container .box .left, .false-container .box .right,.main-container .box .left, .main-container .box .right  {
  /* min-width: 270px; */
max-width: 500px;
width: 50%;
color: red;
font-weight: 700;
padding: 20px;
}

.false-container .box .right, .main-container .box .right {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
        justify-content: center;
-webkit-box-align: center;
    -ms-flex-align: center;
        align-items: center;
        -webkit-box-orient: horizontal;

/* text-align: center; */
letter-spacing: 2px;
padding-left: 10%;
padding-top: 10%;

}

.false-container .box .right p, .main-container .box .right p {
font-size: 3rem;
font-family: 'Orbitron', sans-serif;
}

.false-container .box img, .main-container .box .img {
width: 100%;
}

@media screen and (max-width: 620px) {
.false-container .box .left, .false-container .box .right {
width: 70%;
padding: 10px;
}
.false-container .box .right p {
font-size: 2rem;
}
.false-container .box .left{
margin-top: 70px;
}
.main-container .box .left, .main-container .box .right {
width: 70%;
padding: 10px;
}
.main-container .box .right p {
font-size: 2rem;
}
.main-container .box .left{
margin-top: 70px;
}
}
</style>
<body>
    <!-- class="bg-dark text-light" -->
    <?php require 'bits/_connectdb.php' ?>
    <?php require 'bits/_navbar.php' ?>

    <?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $uname = explode(' ',trim($_SESSION['name']))[0] ;
echo '   
<!-- Category Container -->
<div class="container main-container">
    <div class="box">
        <div class="left">
            <img class="img" src="bits/i3.png" alt="i1"></img>
        </div>
        <div class="right">
            <p> Welcome '. $uname .' </p>
            <div class="buttons" style="display:flex;justify-content:space-between;">
                <a class="btn btn-outline-light" href="mylinks.php" >MyLinks</a>
                <a class="btn btn-outline-light" " data-bs-toggle="modal" data-bs-target="#addLinkModal" >AddLink</a>
            </div>
        </div>
    </div>
</div>';

}
else{
    echo '   
<!-- Category Container -->
    <div class="container false-container">
        <div class="box">
            <div class="left">
                <img class="img" src="bits/i1.svg" alt="i1"></img>
            </div>
            <div class="right">
                <p>Find all <br>your links at<br> one place...</p>
                <div class="buttons" style="display:flex;justify-content:space-between;">
                    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#loginModal" >LogIn</button>
                    <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#signupModal">SignUp</button>
                </div>
            </div>
        </div>
    </div>';
}
        ?>


    <?php require 'bits/_footer.php'?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById("nb-home").classList.add("active");
    </script>
</body>

</html>
