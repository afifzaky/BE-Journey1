<?php
require '../config/koneksi.php';

$mysql = "SELECT * FROM payment";
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
     <title>Payment</title>
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
                              <a class="nav-link" href="./homeasadmin.php">Home</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="./storeadmin.php">Store Location</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="./addproduct.php">Add Product</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link" href="#">Payment</a>
                         </li>
                    </ul>
                    <div class="login">
                         <a href="../config/logout.php" class="btn btn-inline-dark" name="login" role="button" style="color:crimson">Logout</a>
                    </div>
               </div>
          </div>
     </nav>
     <section class="tablelocation" id="tabloc">
          <div class="container mt-3">
               <br>
               <h1 style="color:crimson" class="text-center">PAYMENT</h1>
               <br>
               <table class="table">
                    <thead>
                         <tr>
                              <th>ID Payment</th>
                              <th>Name Drink</th>
                              <th>Price</th>
                              <th>Buyer</th>
                              <th>Address Buyer</th>
                              <th>Payment</th>
                              <th>Status</th>
                              <th>Change</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         if (mysqli_num_rows($execute) > 0) {
                              while ($data = mysqli_fetch_assoc($execute)) {
                                   echo "
                         <tr>
                              <td>" . $data['idpayment'] . "</td>     
                              <td>" . $data['namaminuman'] . "</td>
                              <td>" . $data['hargaminuman'] . "</td>
                              <td>" . $data['pembeli'] . "</td>
                              <td>" . $data['alamatpembeli'] . "</td>
                              <td>" . $data['pembayaran'] . "</td>
                              <td>" . $data['statuspayment'] . "</td>
                              <td>
                                   <div class='d-grid gap-2'>
                                        <a href='updatepayment.php?id=" . $data["idpayment"] . "' class='btn btn-primary'>Edit</a>
                                        <a href='../config/deletepayment.php?id=" . $data["idpayment"] . "' class='btn btn-danger'>Delete</a>
                                   </div>
                              </td>
                         </tr>
                         ";
                              }
                         }
                         ?>
                    </tbody>
               </table>
          </div>
     </section>
</body>

</html>