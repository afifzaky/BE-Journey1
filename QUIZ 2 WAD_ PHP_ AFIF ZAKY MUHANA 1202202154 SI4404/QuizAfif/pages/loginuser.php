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
     <link rel="stylesheet" href="../style/content.css">
     <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,500i,700,800i" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
     <link rel="stylesheet" href="../style/style.css">
     <title>GFUEL Register</title>
</head>

<body>
     <section class="form" id="form2">
          <div class="register-photo">
               <div class="form-container">
                    <div class="image-holder"></div>
                    <form action="../config/login.php" method="POST">
                         <h2 class="text-center">
                              <strong>Login User</strong>
                         </h2>
                         <div class="mb-3">
                              <h6>E-Mail</h6>
                         </div>
                         <div class="form-group">
                              <input class="form-control" id="email" type="email" name="email" placeholder="Email">
                         </div>
                         <div class="mb-3">
                              <h6>Password</h6>
                         </div>
                         <div class="mb-3">
                              <input class="form-control" id="password" name="password" type="password" placeholder="Password"></input>
                         </div>
                         <div class="form-group">
                              <button class="btn btn-danger btn-block" type="submit" name="login">Login as User</button>
                         </div>
                         <div class="mb-3">
                              <h6>Anda Admin?</h6>
                         </div>
                         <div class="form-group mt-3">
                              <a href="./loginadmin.php" class="btn btn-dark btn-block">Go to Login as Admin</a>
                         </div>
                         <div class="mb-3">
                              <h6>Belum Punya Akun?</h6>
                         </div>
                         <div class="form-group mt-3">
                              <a href="./registerafif.php" class="btn btn-success btn-block">Register Account</a>
                         </div>
                    </form>
               </div>
          </div>
     </section>
</body>

</html>