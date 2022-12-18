<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="../style/style.css"> -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
<title>Add</title>
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
                                   <a class="nav-link" href="#">Add Product</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="./paymentadmin.php">Payment</a>
                              </li>
                         </ul>
                         <div class="login">
                              <a href="../config/logoutasadmin.php" class="btn btn-inline-dark" name="login" role="button" style="color:crimson">Logout</a>
                         </div>
                    </div>
               </div>
          </nav>
     </section>
     <section>
          <div class="container">
               <br>
               <h1 style="color:crimson" class="text-center">ADD GFUEL® PRODUCT</h1>
               <br>
               <form action="../config/add.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                         <label for="nama" class="form-label">Name of Product</label>
                         <input type="text" id="nama" name="nama" placeholder="Add a Name" class="form-control" style="background-color: #EAEAEA;">
                    </div>
                    <div class="mb-3">
                         <label for="harga" class="form-label">Price</label>
                         <input type="number" id="harga" name="harga" placeholder="Add a Price" class="form-control" style="background-color: #EAEAEA;">
                    </div>
                    <div class="mb-3">
                         <label for="desc" class="form-label">Description Product</label>
                         <textarea name="desc" id="desc" class="form-control" rows="3" style="background-color: #EAEAEA;"></textarea>
                    </div>
                    <div class="mb-3">
                         <label for="gambar" class="form-label">Add Picture</label>
                         <input type="file" id="gambar" name="gambar" class="form-control" style="background-color: #EAEAEA;">
                    </div>
                    <br>
                    <div class="d-grid">
                         <button class="btn btn-danger" type="submit">Add Product</button>
                    </div>
               </form>
          </div>
     </section>
</body>

</html>