<?php
require '../config/koneksi.php';
$id = $_GET['id'];

$mysql = "SELECT * FROM payment WHERE idpayment = $id";
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
     <!-- <link rel="stylesheet" href="../style/style.css"> -->
     <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
     <title>Buy Product</title>
</head>

<body>
     <nav class="navbar navbar-expand-lg bg-light">
          <div class="container-fluid">
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>
               <a class="navbar-brand" href="#">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/G_Fuel_logo.svg/800px-G_Fuel_logo.svg.png" alt="Logo" width="100" height="28">
               </a>
               <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                              <a class="nav-link" href="./homeafifafter.php">Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="./storeuser.php">Store Location</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="#">Shop Now</a>
                         </li>
                    </ul>
                    <div class="login">
                         <a href="../config/logout.php" class="btn btn-inline-dark" name="login" role="button" style="color:crimson">Logout</a>
                    </div>
               </div>
          </div>
     </nav>
     <!-- PRODUCT SNOW CONE DETAILED -->

     <section class="py-5">
          <h2 class="mb-5" style="text-align: center; font-weight:700; color:crimson;">Edit Payment</h2>
          <div class="container px-4 px-lg-5 my-5">
               <div class="row gx-4 gx-lg-5 align-items-center">
                    <?php
                    while ($data = mysqli_fetch_array($execute)) {
                         echo "
                    <div>
                         <form action='../config/updatepaymentadmin.php?id=" . $data["idpayment"] . "' method='POST' enctype='multipart/form-data'>
                              <div class='mb-3'>
                                   <label for='namaminuman' class='form-label'>Drink Name</label>
                                   <input type='text' class='form-control' name='namaminuman' id='namaminuman' value='" . $data["namaminuman"] . "' readonly>
                              </div>
                              <div class='mb-3'>
                                   <label for='hargaminuman' class='form-label'>Price</label>
                                   <input type='number' class='form-control' name='hargaminuman' id='hargaminuman' value='" . $data["hargaminuman"] . "' readonly>
                              </div>
                              <div class='mb-3'>
                                   <label for='pembeli' class='form-label'>Your Name</label>
                                   <input type='text' class='form-control' name='pembeli' id='pembeli' value='" . $data["pembeli"] . "'>
                              </div>
                              <div class='mb-3'>
                                   <label for='alamatpembeli' class='form-label'>Your Address</label>
                                   <input type='text' class='form-control' name='alamatpembeli' id='alamatpembeli' value='" . $data["alamatpembeli"] . "'>
                              </div>
                              <div class='mb-3'>
                                   <label for='pembayaran' class='form-label'>Select Payment</label>
                                   <select name='pembayaran' class='form-select mb-3' aria-label='Pilih Pembayaran'>
                                        <option name='jenispembayaran' id='jenis pembayaran'>" . $data["pembayaran"] . "</option>
                                   </select>
                              </div>
                              <div class='mb-3'>
                                   <label for='pesanan' class='form-label'>Status</label>
                                   <select name='pesanan' class='form-select mb-3' aria-label='Status Pesanan'>
                                        <option name='bayar' id='bayar' value='Membayar'>Membayar</option>
                                        <option name='proses' id='proses' value='Sedang Diproses'>Sedang Diproses</option>
                                        <option name='selesai' id='selesai' value='Selesai'>Selesai</option>
                                   </select>
                              </div>
                              <div class='d-grid gap-2'>
                                   <button type='submit' class='btn btn-danger'>Update</button>
                              </div>
                         </form>
                    </div>
                    ";
                    }
                    ?>
               </div>
          </div>
     </section>
</body>

</html>