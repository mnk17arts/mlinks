<!doctype html>
<html lang="en">

<?php include 'bits/_head.php' ?>

<body>
    <?php require 'bits/_connectdb.php' ?>
    <?php require 'bits/_navbar.php' ?>

    <div class="about">
        <h1> About </h1>
        <p> This is a simple links management website. </p>
        <p> This website is made by <a href="https://mnk17arts.github.io">Mnk17arts</a> </p>
    </div>
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .about {
            margin: 0 auto;
            width: 50%;
            height: 90vh;
            padding: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
    </style>


    <?php require 'bits/_footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById("nb-about").classList.add("active");
    </script>

</body>

</html>
