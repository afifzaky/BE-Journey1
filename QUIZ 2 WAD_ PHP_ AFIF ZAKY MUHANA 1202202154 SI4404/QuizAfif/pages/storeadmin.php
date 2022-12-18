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
     <title>Store GFuel Admin</title>
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
                                   <a class="nav-link" href="#">Store Location</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="./addproduct.php">Add Product</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="./listproduct.php">Payment</a>
                              </li>
                         </ul>
                         <div class="login">
                              <a href="../config/logoutasadmin.php" class="btn btn-inline-dark" name="login" role="button" style="color:crimson">Logout</a>
                         </div>
                    </div>
               </div>
          </nav>
     </section>
     <section class="cardstore">
          <div class="container">
               <br>
               <h1 style="color:crimson" class="text-center">GFUEL® ONLINE STORE</h1>
               <br>
               <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.amazon.com/gfuel/s?k=gfuel"><img src="http://media.corporate-ir.net/media_files/IROL/17/176060/Oct18/Amazon%20logo.PNG" class="card-img-top"></a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.gopuff.com/c/gfuel/c941?redirected_to_novus=true"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/7/73/GoPuff_logo.svg/1200px-GoPuff_logo.svg.png" class="card-img-top">
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.walmart.com/search?q=gfuel"><img src="https://cdn.corporate.walmart.com/dims4/WMT/b334feb/2147483647/strip/true/crop/855x305+0+0/resize/980x350!/quality/90/?url=https%3A%2F%2Fcdn.corporate.walmart.com%2F98%2F28%2F342ccbff478ab025592645fafcfc%2Fwalmart-logo.png" class="card-img-top">
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.fye.com/search?q=gfuel&lang=default"><img src="https://searchlogovector.com/wp-content/uploads/2018/09/fye-logo-vector.png" class="card-img-top">
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.target.com/">
                                   <img src="https://1000logos.net/wp-content/uploads/2017/06/Target-logo-1.png" class="card-img-top">
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.riteaid.com/">
                                   <img src="https://cloudfront-us-east-1.images.arcpublishing.com/advancelocal/B7NQKWV5SZD3TP63FIZITMPVZY.jpg" class="card-img-top">
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.sheetz.com/">
                                   <img src="https://vectorlogoseek.com/wp-content/uploads/2020/01/sheetz-vector-logo.png" class="card-img-top">
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.microcenter.com/">
                                   <img src="https://cdn.freebiesupply.com/logos/thumbs/2x/micro-center-1-logo.png" class="card-img-top">
                              </a>
                         </div>
                    </div>
                    <div class="col">
                         <div class="card h-100">
                              <a href="https://www.gvgrocery.com/">
                                   <img src="https://media.glassdoor.com/companyupdate/w900/780532/green-valley-grocery-companyupdate-1644035178702.png?signature=d5121386f532bd42b8e1773b4284bfa4820f77eb56b880a4417cd35d5ec9fd89" class="card-img-top">
                              </a>
                         </div>
                    </div>
               </div>
          </div>
     </section>
     <br>
     <br>
     <!-- COPYRIGHTS -->
     <div class="container-fluid text-center p-4" style="background-color: rgb(0, 0, 0);" id="copyright">
          <p style="font-size: large;" class="text-white">© 2022 Gamma Labs Company, Inc. All rights reserved.</p>
          <p class="text-white">The statements contained in this website have not been evaluated by the Food and Drug Administration (FDA). No
               statements shall be construed as a claim or representation of a diagnosis, treatment, cure, or prevention of any
               disease. No product listed in this website is intended to diagnose, treat, cure, or prevent any disease. Products
               are not intended for those with a medical condition, pregnant or nursing.</p>
     </div>
     </section>
</body>

</html>