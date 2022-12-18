<?php
session_start();
require '../config/koneksi.php';

$query = "SELECT * FROM user";
$login = mysqli_query($koneksi, $query);
$data = mysqli_fetch_assoc($login);


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
     <title>GFUEL: Best Gaming And Esport Drink</title>
</head>

<body>
     <!-- NAVBAR -->
     <section class="navbar2" id="navbar">
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
                                   <a class="nav-link" href="#">Home</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="./storeuser.php">Store Location</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="./shoppage.php">Shop Now</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="./paymentuser.php">List Payment</a>
                              </li>
                         </ul>
                         <div class="login">
                              <a href="../config/logout.php" class="btn btn-inline-dark" name="login" role="button" style="color:crimson">Logout</a>
                         </div>
                    </div>
               </div>
          </nav>
     </section>
     <section class="carousel2" id="carousel">
          <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
               <div class="carousel-inner">
                    <div class="carousel-item active">
                         <img src="https://wallpapercave.com/wp/wp7640074.png" class="d-block w-100" alt="showcone">
                         <div class="carousel-caption d-none d-md-block" id="firstCarousel">
                         </div>
                    </div>
                    <div class="carousel-item">
                         <img src="https://m.media-amazon.com/images/I/71b4+O6kSwL.jpg" class="d-block w-100" alt="gfish">
                         <div class="carousel-caption d-none d-md-block" id="firstCarousel">
                         </div>
                    </div>
                    <div class="carousel-item">
                         <img src="https://preview.redd.it/4qzznom4iqm71.jpg?auto=webp&s=c4a83b96633cac70f78ad93f0f56f441cfada24a" class="d-block w-100" alt="snexus">
                         <div class="carousel-caption d-none d-md-block" id="firstCarousel">
                         </div>
                    </div>

               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
               </button>
          </div>
     </section>
     <!-- ABOUT -->
     <section class="about2" id="about">
          <br>
          <h1 style="color:crimson" class="text-center">ABOUT US</h1>
          <br>
          <div class="d-grid gap-2 col-2 mx-auto">
               <a href=https://gfuel.com/pages/reviews-gallery class="btn btn-danger" type="button">Review Gallery</a>
          </div>
          <br>
          <br>
          <div class="container">
               <div id="shopify-section-template--14273091829835__1654613845975a83eb" class="shopify-section index-section--hero">

                    <!-- iFRAME STYLING -->
                    <style data-shopify="">
                         .hero--template--14273091829835__1654613845975a83eb .hero__title {
                              font-size: 20.0px;
                         }

                         @media only screen and (min-width: 769px) {
                              .hero--template--14273091829835__1654613845975a83eb .hero__title {
                                   font-size: 40px;
                              }
                         }

                         .hero--template--14273091829835__1654613845975a83eb .btn {
                              background: #6404bc !important;
                              border-color: #6404bc !important;
                         }
                    </style>


                    <!-- iFRAME -->
                    <div data-section-id="template--14273091829835__1654613845975a83eb" data-section-type="video-section" class="video-parent-section hero hero--template--14273091829835__1654613845975a83eb hero--650px hero--mobile--auto aos-init aos-animate loaded" data-mobile-natural="false" data-aos="hero__animation">

                         <div class="hero__media hero__media--template--14273091829835__1654613845975a83eb">
                              <div class="hero__media-container"><iframe id="YouTubeVideo-template--14273091829835__1654613845975a83eb" class="video-div" data-type="youtube" data-video-id="JAnEtpOgFIQ" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="G FUEL 2022" width="1280" height="720" src="https://www.youtube.com/embed/JAnEtpOgFIQ?autohide=0&amp;cc_load_policy=0&amp;controls=0&amp;fs=0&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fgfuel.com&amp;widgetid=1" tabindex="-1"></iframe></div>
                         </div>
                         <div class="hero__text-wrap">
                              <div class="page-width">
                                   <div class="hero__text-content vertical-bottom horizontal-left">
                                        <div class="hero__text-shadow">
                                             <div class="hero__link">
                                                  <div class="animation-cropper">
                                                       <div class="animation-contents">
                                                            </a>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <!-- ABOUT -->
                    <div id="shopify-section-template--14273091829835__165461082339a53659" class="shopify-section index-section">
                         <div class="text-center page-width">
                              <div class="theme-block">
                                   <br>
                                   <h2 style="color:crimson;">Our Story</h2>
                                   <br>
                              </div>
                              <div class="theme-block">
                                   <div class="rte">
                                        <div class="enlarge-text">
                                             <p><strong>In 2012, we had a vision:</strong>To create the healthiest, most effective Energy Formula
                                                  for gamers. And with what started as just 3 Tub flavors - Blue Ice, Fruit Punch and Lemon Lime -
                                                  Quickly evolved into something much more...A movement. A culture. A Community.<br><br>Over the
                                                  course of the last decade, we have become The<strong> Official Energy Drink of Esports® </strong>-
                                                  Maintaining the industry's largest, most passionate, and most diverse community of fans,
                                                  customers, creators and partners alike.</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="theme-block">
                                   <div class="rte">
                                        <div class="enlarge-text">
                                             <p><strong>Whether you’re a casual gamer, a content creator, an everyday Joe, or an esports
                                                       pro,</strong> G FUEL’s sugar-free, antioxidant and vitamin-fortified, focus-enhancing, and
                                                  high-performance energy products will give you the edge you need to fuel your grind.<br><br>And
                                                  with over 200,000 verified 5-star ratings on Shopper Approved, the G FUEL name is a cut above
                                                  the rest. No sugar. No gluten. No crash. Just natural, clean, vitamin and antioxidant-fortified
                                                  energy, available in over 40 lip-smacking energizing flavors.<br><br><strong> Welcome to The G
                                                       FUEL Family.</strong></p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>

               <!-- iFRAME LOCATION -->
               <div class="theme-block">
                    <br>
                    <h2 style="color:crimson; text-align: center;">Our Headquarter</h2>
                    <br>
                    <div class="page-selection text-center">
                         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.383951223751!2d-73.39461828746785!3d40.73157629036194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e82b152b6dc851%3A0x868c92e7e1ce0bcf!2s113%20Alder%20St%2C%20West%20Babylon%2C%20NY%2011704%2C%20USA!5e0!3m2!1sen!2sid!4v1666334108229!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
               </div>
     </section>
     <!-- FOOTER -->
     <section class="footer2" id="footer">
          <br>
          <div class="container-fluid text-center p-4" style="background-color: rgba(0, 0, 0, 0.800);">
               <footer class="py-6">
                    <div class="row">
                         <div class="col-6 col-md-2 mb-3">
                              <h5 style="color:crimson;">GFUEL®</h5>
                              <ul class="nav flex-column">
                                   <li class="nav-item mb-2">
                                        <a href="index.html" class="nav-link p-0 text-white">Home</a>
                                   </li>
                                   <li class="nav-item mb-2">
                                        <a href="#about" class="nav-link p-0 text-white">About Us</a>
                                   </li>
                                   <li class="nav-item mb-2">
                                        <a href="contact.html" class="nav-link p-0 text-white">Contact Us</a>
                                   </li>
                                   <li class="nav-item mb-2">
                                        <a href="cards.html" class="nav-link p-0 text-white">Shop Now</a>
                                   </li>
                                   <li class="nav-item mb-2">
                                        <a href="shoploc.html" class="nav-link p-0 text-white">Store Location</a>
                                   </li>
                              </ul>
                         </div>
                         <div class="col-md-5 offset-md-1 mb-3">
                              <form>
                                   <div class="col align-self-center">
                                        <h5 style="color:crimson;">GFUEL SCOOP NEWSLETTER</h5>
                                        <p style="color:white;">Get The Latest News Of Our Product</p>
                                   </div>
                                   <div class="col align-self-center">
                                        <label for="newsletter1" class="visually-hidden">Email address</label>
                                        <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                        <br>
                                        <div class="d-grid gap-2">
                                             <button class="btn btn-danger" type="button">Subscribe</button>
                                        </div>
                                   </div>
                              </form>
                         </div>
                         <div class="col-4" id="photos">
                              <h2 style="color:crimson;">GFUEL Powered By :</h2>
                              <br>
                              <img src="https://p.kindpng.com/picc/s/202-2020299_gamma-labs-logo-png-transparent-png.png" width="200" height="90" alt="GLlogo">
                         </div>
               </footer>
          </div>

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