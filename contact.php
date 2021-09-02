<!doctype html>
<html lang="en">

<?php include 'bits/_head.php' ?>

  <body > <!-- class="bg-dark text-light" -->
  <?php require 'bits/_connectdb.php' ?>
    <?php require 'bits/_navbar.php' ?>


    <h1> LOADING... </h1>

    <?php require 'bits/_footer.php' ?>

    <script>
        document.getElementById("nb-contact").classList.add("active");
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
