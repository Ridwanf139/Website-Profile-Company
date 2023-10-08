<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!--font awesome-->
  <link rel="stylesheet" href="css/all.css">
  <script src="js/all.js"></script>

  <link
    href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@200;400;600&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="image/x-icon" href="img/logodk.png">
  <title>CV. DEAS KARYA</title>
</head>

<body>
  <!--nav -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index">
        <img src="img/logodk.png" alt="CV.DEAS" style="width: 80px" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php include "menu.php"; ?>
      </div>
    </div>
  </nav>
  <!--akhir nav-->
  <?php
        include "admin/config/koneksi.php";
        $id_jasa = mysqli_real_escape_string($connection,$_GET['id_jasa']); 
        $query   = "SELECT * FROM tbl_jasa WHERE id_jasa='".$id_jasa."'"; 
        $sql     = mysqli_query($connection, $query); 
        $data    = mysqli_fetch_array($sql);
  ?>
              <div class="row pt-5 mr-5 justify-content-center">
                <div class="col-5">
                  <h1><?php echo $data['judul']; ?></h1>
                  <p style="text-align:justify"><?php echo $data['isi']; ?></p>
                </div>
                <div class="col-3 offset-1">
                  <img src="img/jasa/<?php echo $data['thumbnail']; ?>" alt="">
                </div>
              </div>
              <footer>
                <section
                  class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                </section>
                
                <?php include "footer.php"; ?>
              
                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgb(239, 255, 255);">
                  All Right Reserved by CV Deas Karya Copyright 2022
                  </div>
                <!-- Copyright -->
              </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

