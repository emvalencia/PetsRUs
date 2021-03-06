<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <title>About Us</title>
  </head>
  <body>

  <!-- navigation bar -->
  <div class="navbar2">
      <?php
          include 'src_nav.php';
      ?>
  </div>

      <!-- container -->
      <div class="container-fluid">

        <!-- row #1 -->
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-8 purple-header">
                <h3>About Us</h3>
            </div>
            <div class="col-2"></div>
        </div>

        <!-- row #2 -->
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-8">
                <!-- carousel -->
                <div id="carouselExampleIndicators" class="carousel slide w-100" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img src="../assets/petsrus.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item active">
                            <img src="../assets/store1.jpg" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                        <img src="../assets/petarea1_blog.jpg" class="d-block w-100">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <!-- text under carousel -->
                <div class="text-center pt-4">
                    <p>With more than 50 years of service to pet parents, PetsRUs is a leading pet specialty retailer that obsesses about delivering health and happy experiences for pets and the people who love them. We do this by providing the products, services, advice and experiences that keep pets physically fit, mentally alert, socially engaged and emotionally happy.  
                    </p>
                    <p>Everything we do is guided by our vision:</p>
                            
                    <p><strong>Happier Pets. Happier People. Better World.</strong></p>
                    
                    <p>We employ more than 3000 partners and operate more than 15 PetsRUs locations across the U.S.
                    </p>
                </div>
            </div>

            <div class="col-2"></div>
        </div>
        <!-- end row #2 -->

        <!-- row #3 -->
        <div class="row pt-4">
            <div class="col-2"></div>
            <div class="col-8 purple-header">
                <h3>Our Products</h3>
            </div>
            <div class="col-2"></div>
        </div>
        <!-- end row #3 -->

        <!-- row #4 -->
        <div class="row pt-4">
            <div class="col-2"></div>
            <!-- product cards -->
            <div class="col-4">
                <div class="card mb-3 w-100" >
                    <div class="row no-gutters">
                      <div class="col-md-4 pt-4">
                        <img src="../assets/4-40354_cat-dog-border-collie.png" class="card-img">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">Dog Products</h5>
                          <p class="card-text card-text-sm">PetsRUs is well-stocked to provide you with 
                              all the dog supplies you need to help keep them happy and healthy at every stage. We proudly make sure 
                              that every single one of the many dog products available is carefully selected to ensure that you can 
                              provide your dog with the very best in their daily lives long after they've grown out of their puppy beds, 
                              collars, and accessories.</p>
                          <a href="product-pages/dog.php" class="btn btn-secondary btn-sm">View Dog Products</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
             <!-- product cards -->
            <div class="col-4">
                <div class="card mb-3 w-100" >
                    <div class="row no-gutters">
                        <div class="col-md-4 pt-4">
                        <img src="../assets/istockphoto-628161678-612x612.jpg" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Cat Products</h5>
                                <p class="card-text card-text-sm">Find the healthiest food for your kitten or cat, be it Blue Buffalo Cat Food, 
                                    Friskies, or even a grain-free food. Keep your kitty’s coat and nails looking and feeling great 
                                    with cat-friendly grooming tools to help reduce shedding and easy-to-use nail clippers. 
                                    With our selection of 
                                    catnip toys, remote control toys, teasers, and stuffed cat toys you’re sure to find the perfect fit 
                                    and hours of fun and games.
                                </p>

                                <a href="product-pages/cat.php" class="btn btn-secondary btn-sm">View Cat Products</a>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
         <!-- end row #4 -->
         
         <!-- row #5 -->
        <div class="row pt-2">
            <div class="col-2"></div>
            <div class="col-4">
                <!-- product cards -->
                <div class="card mb-3 w-100" >
                    <div class="row no-gutters">
                        <div class="col-md-4 pt-5">
                        <img src="../assets/bigstockphoto_Bearded_Dragon_388371.jpg" class="card-img">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Reptile Products</h5>
                                <p class="card-text card-text-sm">Shop the pet reptile store at PetsRUs for all your cold-blooded companion’s needs. 
                                    PetsRUs' reptile supplies are made to help ensure anything that crawls, climbs, creeps, leaps, or 
                                    slithers lives a happy and healthy life at home with you. From bearded dragons and bouncing toads, 
                                    to ball pythons and burrowing turtles, you’ll find the healthcare and habitat supplies and 
                                    accessories your herp needs at our reptile store.
                                </p>
                                <a href="product-pages/reptile.php" class="btn btn-secondary btn-sm">View Reptile Products</a>                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-4">
                    <!-- product cards -->
                    <div class="card mb-3 w-100" >
                        <div class="row no-gutters">
                            <div class="col-md-4 pt-5">
                            <img src="../assets/pets.png" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">All Products</h5>
                                    <p class="card-text card-text-sm">Can't get enough of our products? Why not view them all! Here at PetsRUs we provide
                                        ourselves on the quality of all our products. Click below to view all our products.
                                    </p>
                                    <a href="product-pages/allproducts.php" class="btn btn-secondary btn-sm">View All Products</a>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-2"></div>
        </div>
        <!-- end row #5 -->

        <!-- row #6 -->
        <div class="row pt-4">
            <div class="col-2"></div>
            <div class="col-8 purple-header">
                <h3>Management Team</h3>
            </div>
            <div class="col-2"></div>
        </div>
        <!-- end row #6 -->

        <!-- row #7 -->
        <div class="row pt-4 pb-5">
            <div class="col-2"></div>

            <!-- management team cards -->
            <div class="col-2">
                <!-- manager -->
                <div class="card card-flip h-100">
                        <div class="card-front bg-white">
                            <div class="card-body text-center">
                                <img src="../assets/619-06937501en_Masterfile.jpg" class="card-img-top" >
                                <p class="card-tile my-0 pt-3"><strong>Joe Mathis</strong></p>
                                <p class="card-text">Store Manager</p>
                            </div>
                        </div>
                        <div class="card-back text-white bg-dark">
                            <div class="card-body text-center">
                                <h3 class="card-title pt-3"><strong>About Joe</strong></h3>
                                <p class="card-text pt-3">Joe was hired in June 2005 as a team member and since then has risen to 
                                    Store Manager. He owns three dogs: Lizzy, Rex and Maya, and he loves to hike in his free time.
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-2">
                <div class="card card-flip h-100">
                        <div class="card-front bg-white">
                            <div class="card-body text-center">
                                <img src="../assets/assistant_manager.jpg" class="card-img-top" >
                                <p class="card-tile my-0 pt-3"><strong>Jane Cruise</strong></p>
                                <p class="card-text">Asst. Manager</p>
                            </div>
                        </div>
                        <div class="card-back text-white bg-dark">
                            <div class="card-body text-center">
                                <h3 class="card-title pt-3"><strong>About Jane</strong></h3>
                                <p class="card-text pt-3">Jane was hired in April 2016 as a team member and in 2018 was promoted to 
                                    Assistant Manager. She loves cats and has one of her own named Whiskers.</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-2">
                <div class="card card-flip h-100">
                        <div class="card-front bg-white">
                            <div class="card-body text-center">
                                <img src="../assets/lead.png" class="card-img-top" >
                                <p class="card-tile my-0 pt-3"><strong>Amy Pierce</strong></p>
                                <p class="card-text">Team Leader</p>
                            </div>
                        </div>
                        <div class="card-back text-white bg-dark">
                            <div class="card-body text-center">
                                <h3 class="card-title pt-3"><strong>About Amy</strong></h3>
                                <p class="card-text pt-3">Amy was hired in September 2018 as a Team Leader having previous leadership 
                                    experience from other pet stores. She owns one dog named JoJo and a pet snake named Bella.
                                </p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-2">
                <div class="card card-flip h-100">
                    <div class="card-front bg-white">
                        <div class="card-body text-center">
                            <img src="../assets/employee.jpg" class="card-img-top" >
                            <p class="card-tile my-0 pt-3"><strong>Jaime Capriati</strong></p>
                            <p class="card-text">Team Member</p>
                        </div>
                    </div>
                    <div class="card-back text-white bg-dark">
                        <div class="card-body text-center">
                            <h3 class="card-title pt-3"><strong>About Jaime </strong></h3>
                            <p class="card-text pt-3">Jaime is our newest team member, hired in March 2019. He loves all animals
                                unfortunately he doesn't own any at this time. In his free time Jaime loves to cook and dance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- end row #7 -->
            
        <div class="col-2"></div>
      </div>

    <!-- end container -->

    <!-- footer -->
    <div class="footer">
        <div>Designed and created by Kevin Florio, Emery Valencia, and Jose Vargas.</div>
        <div>Copyright © 2019 PetsRUs, Inc. All Rights Reserved.</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>