<!doctype html>
<html lang="en">

<?php include 'bits/_head.php' ?>

  <body > <!-- class="bg-dark text-light" -->
  <?php require 'bits/_connectdb.php' ?>
    <?php require 'bits/_navbar.php' ?>


    <div class="contact">
        <h1> Contact Me </h1>
        <p> If you have any queries, you can contact me at <a href="mailto:mnk17arts@gmail.com"> mnk17arts@gmail.com </a> </p>

        <p> You can also contact me on : </p>
        <ul>
            <li> <a href="https://www.instagram.com/nitish.kumar.m/"> Instagram </a> </li>
            <li> <a href="https://www.facebook.com/mnk17arts/"> Facebook </a> </li>
            <li> <a href="https://www.linkedin.com/in/mnk17arts/"> LinkedIn </a> </li>
        </ul>
    </div>
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .contact {
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

    <script>
        document.getElementById("nb-contact").classList.add("active");
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
