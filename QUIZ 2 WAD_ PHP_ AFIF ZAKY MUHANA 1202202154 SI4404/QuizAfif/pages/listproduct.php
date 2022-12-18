<?php
require '../config/koneksi.php';

$mysql = "SELECT * FROM produkgfuel";
$execute = mysqli_query($koneksi, $mysql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <!-- JavaScript Bundle with Popper -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="../style/style.css">
     <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
     <title>List Product</title>
</head>

<body>
     <!-- NAVBAR -->
     <section class="navbar2" id="navbar">
          <nav class="navbar navbar-expand-lg bg-light">
               <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                         <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/G_Fuel_logo.svg/800px-G_Fuel_logo.svg.png" alt="Logo" width="100" height="28">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                              <li class="nav-item">
                                   <a class="nav-link" href="./homeasadmin.php">Home</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="./storeadmin.php">Store Location</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="./addproduct.php">Add Product</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="#">List Product</a>
                              </li>
                         </ul>
                         <div class="login">
                              <a href="../config/logoutasadmin.php" class="btn btn-inline-dark" name="login" role="button" style="color:crimson">Logout</a>
                         </div>
                    </div>
               </div>
          </nav>
     </section>
     <br>
     <br>
     <section class="container" id="cardList">
          <div class="row row-cols-1 row-cols-md-3 g-4">
               <?php
               if (mysqli_num_rows($execute) > 0) {
                    while ($data = mysqli_fetch_assoc($execute)) {
                         echo "
                    <div class='col'>
                         <div class='card'>
                              <img src='../img/" . $data["gambarproduk"] . "' style='max-height: 500px' class='card-img-top'>
                              <div class='card-body'>
                                   <h2 class='card-title' style='text-align: center;'>" . $data["namaproduk"] . "</h2>
                                   <h3 class='card-text' style='text-align: center; color:crimson'>Rp." . $data["hargaproduk"] . "</h3>
                              </div>
                              <p class='card-text text-muted'>" . $data["deskripsi"] . "</p>
                              <br>
                              <div class='card-footer d-flex gap-2 justify-content-center'>
                                   <a class='btn btn-success' href='./updateproduct.php?id=" . $data["idproduk"] . "'>Update</a>
                                   <a class='btn btn-danger' href='../config/delete.php?id=" . $data["idproduk"] . "'>Delete</a>
                              </div>
                         </div>
                    </div>
                    ";
                    }
               }
               ?>
          </div>
     </section>
</body>

</html>