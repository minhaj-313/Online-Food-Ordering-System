<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <title>Home</title>

  <!-- Favicon -->
  <link rel="icon" href="img/favicon.jpg" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

       <!-- ===================================================== -->
       <!-- -------- @author : Shaikh Minhaj (minhaj-313) ------- -->
       <!-- ===================================================== -->

</head>

<body>
  <?php include 'partials/_dbconnect.php'; ?>
  <?php require 'partials/_nav.php' ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="assets/img/slide/slide-1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Fantasy Feed</span></h2>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Order Now</a>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Our Mission</h2>
                <p class="animate__animated animate__fadeInUp">To be number one</p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">Get Started</a>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="assets/img/slide/slide-3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown mb-0">Minhaj, Maaz, Zaid.</h2>
                <p> <a href="https://github.com/minhaj-313" target="_blank" style="color: white;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                      <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg> minhaj-313</a></p>
                <a href="index.php" class="btn-get-started animate__animated animate__fadeInUp scrollto">See Code</a>
              </div>
            </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Offers Section ======= -->


  <!-- ======= end Offers Section ======= -->

  <!-- Category container starts here -->
  <div class="container my-3 mb-5" 0>
    <div class="col-lg-2 text-center text-light my-3" style="margin:auto;border-top: 1px groove #FFC107;border-bottom: 2px groove #FFC107;">
      <h2 class="text-center">Menu </h2>
    </div>
    <div class="row">
      <!-- Fetch all the categories and use a loop to iterate through categories -->
      <?php
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['categorieId'];
        $cat = $row['categorieName'];
        $desc = $row['categorieDesc'];
        echo '<div class="col-xs-3 col-sm-4 col-md-4 ">
                  <div class="card" style="width: 18rem;  margin: 20px; box-shadow: 0.5px 0.5px 6px 4px #FFC107; border-radius: 10px;
                  border-radius: 10px">
                    <img src="img/card-' . $id . '.jpg" class="card-img-top img-fluid" alt="image for this category" width="249px" height="249px" style="border-radius: 10px";>
                    <div class="card-body">
                      <h5 class="card-title"><a href="viewPizzaList.php?catid=' . $id . '">' . $cat . '</a></h5>
                      <p class="card-text">' . substr($desc, 0, 28) . '... </p>
                      <a href="viewPizzaList.php?catid=' . $id . '" class="btn custom-btn btn-1">View All</a>
                    </div>
                  </div>
                </div>';
      }
      ?>
    </div>
  </div>

  <!--=========== Order-Now ========= -->
  <!-- <div class="container col-xxl-8 px-4 py-5" id="order">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6" data-aos="fade-out-down">
        <img src="img/logo.jpg" class="d-block mx-lg-auto img-fluid" alt="" width="400" height="400" loading="lazy">
      </div>
      <div class="col-lg-6" data-aos="fade-out-up">
        <h2 class="display-5  lh-1 mb-3">Order with<b style="color:#fff"><i>"Fantasy Feed"</i></b> Now...</h2>
        <p class="lead text-white " style="text-align: justify;">Hey Guys, Get your <i>Fantasy Feed</i> Favorites delivered right to your doorstep with <i>Fantasy Feed</i>. we are here to provide you Halal and fresh food.
          We use only the best ingredients to cook delicious meals for you. In our menu you will find a wide variety of
          dishes, deserts and drinks. Why are you waiting, order now.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="index.php"> <button type="button" class="btn custom-btn btn-1">Order Now</button>
          </a>
        </div>
      </div>
    </div>
  </div> -->
  <!-- end order now section -->



  <!-- ========== Counter Section ========== -->
  <div class="count-border">
    <section class="count-s">
      <div class="counter-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" fill="currentColor" class="bi bi-eyeglasses" viewBox="0 0 16 16">
          <path d="M4 6a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm2.625.547a3 3 0 0 0-5.584.953H.5a.5.5 0 0 0 0 1h.541A3 3 0 0 0 7 8a1 1 0 0 1 2 0 3 3 0 0 0 5.959.5h.541a.5.5 0 0 0 0-1h-.541a3 3 0 0 0-5.584-.953A1.993 1.993 0 0 0 8 6c-.532 0-1.016.208-1.375.547zM14 8a2 2 0 1 1-4 0 2 2 0 0 1 4 0z" />
        </svg>
        <div class="counter" data-target="1200"></div>
        <span>Visitors</span>
      </div>
      <div class="counter-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
          <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z" />
        </svg>
        <div class="counter" data-target="500"></div>
        <span>Users</span>
      </div>
      <div class="counter-container">
        <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
          <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
        </svg>
        <div class="counter" data-target="480"></div>
        <span>Reviws</span>
      </div>
    </section>
  </div>
  <!-- ========= counter section close ========= -->



  <!-- ======== Features ========= -->


  <section class="py-5" data-aos="slide-up" style="padding-bottom:-40px ;" id="features">

    <div class="col-md-6 offset-md-3">

      <div class="faq-title text-center pb-3">
        <h2>Features</h2>
      </div>
    </div>
    <div class="footer-wave"></div>
    </header>
    <div class="pset">
      <div class="container">
        <div class="row listar-feature-items">

          <div class="col-xs-12 col-sm-6 col-md-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
            <div class="listar-feature-item listar-feature-has-link">

              <a href="index.php" target="_blank"></a>

              <div class="listar-feature-item-inner">

                <div class="listar-feature-right-border"></div>

                <div class="listar-feature-block-content-wrapper">
                  <div class="listar-feature-icon-wrapper">
                    <div class="listar-feature-icon-inner">
                      <div>
                        <img alt="Customers" class="listar-image-icon" src="https://cdn.icon-icons.com/icons2/3560/PNG/512/express_delivery_transport_shipping_fast_truck_icon_225192.png">
                      </div>
                    </div>
                  </div>

                  <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                    <div class="listar-feature-item-title listar-feature-counter-added">
                      <span><span>01</span>
                        Fast Deliver </span>
                    </div>

                    <div class="listar-feature-item-excerpt">
                      Everything you order at Fantasy Feed will be quickly delivered to your door </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
            <div class="listar-feature-item listar-feature-has-link">

              <a href="index.php" target="_blank"></a>

              <div class="listar-feature-item-inner">

                <div class="listar-feature-right-border"></div>

                <div class="listar-feature-block-content-wrapper">
                  <div class="listar-feature-icon-wrapper">
                    <div class="listar-feature-icon-inner">
                      <div>
                        <img alt="Customers" class="listar-image-icon" src="https://cdn.icon-icons.com/icons2/3276/PNG/512/pizza_food_fast_food_italian_food_icon_207990.png">
                      </div>
                    </div>
                  </div>

                  <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                    <div class="listar-feature-item-title listar-feature-counter-added">
                      <span><span>02</span>
                        Fresh Food </span>
                    </div>

                    <div class="listar-feature-item-excerpt">
                      We use only the best ingredients to cook the tasty fresh and halaal food for you. </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
          </div>

          <div class="col-xs-12 col-sm-6 col-md-4 listar-feature-item-wrapper listar-feature-with-image listar-height-changed" data-aos="fade-zoom-in" data-aos-group="features" data-line-height="25.2px">
            <div class="listar-feature-item listar-feature-has-link">

              <a href="index.php" target="_blank"></a>

              <div class="listar-feature-item-inner">

                <div class="listar-feature-right-border"></div>

                <div class="listar-feature-block-content-wrapper">
                  <div class="listar-feature-icon-wrapper">
                    <div class="listar-feature-icon-inner">
                      <div>
                        <img alt="Feedback" class="listar-image-icon" src="https://cdn.icon-icons.com/icons2/3151/PNG/512/delivery_location_track_navigation_destination_icon_192850.png">
                      </div>
                    </div>
                  </div>

                  <div class="listar-feature-content-wrapper" style="padding-top: 0px;">

                    <div class="listar-feature-item-title listar-feature-counter-added">
                      <span><span>03</span>
                        Track Your Order</span>
                    </div>

                    <div class="listar-feature-item-excerpt">
                      Know where your order is at all times, Check Order Status Online.</div>

                  </div>
                </div>
              </div>
            </div>
            <div class="listar-feature-fix-bottom-padding listar-fix-feature-arrow-button-height"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ======= end about our services ======== -->

  <!-- ===== Faq ====== -->
  <section class="faq-section" id="faq">
    <div class="container">
      <div class="row">

        <div class="col-md-6 offset-md-3">

          <div class="faq-title text-center pb-3">
            <h2>FAQ</h2>
          </div>
        </div>
        <div class="col-md-6 offset-md-3">
          <div class="faq" id="accordion">
            <div class="card">
              <div class="card-header" id="faqHeading-1">
                <div class="mb-0">
                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                    <span class="badge">1</span> Cities We Deliver To
                  </h5>
                </div>
              </div>
              <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                <div class="card-body">
                  <ul class="ms-5">
                    <li>Nanded</li>
                    <li>Hyderabad</li>
                    <li>Pune</li>
                    <li>Mumbai</li>
                    <li>Delhi</li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="faqHeading-2">
                <div class="mb-0">
                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                    <span class="badge">2</span> What are your delivery hours?
                  </h5>
                </div>
              </div>
              <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                <div class="card-body">
                  <b>Answer</b>: Our delivery hour is 24 / 7.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="faqHeading-3">
                <div class="mb-0">
                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                    <span class="badge">3</span> How much time it takes to deliver the order?
                  </h5>
                </div>
              </div>
              <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                <div class="card-body">
                  <b>Answer</b>:Generally it takes between 20 minutes to 1 hour time to deliver the order. Due to long distance or heavy traffic, delivery
                  might take few extra minutes.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="faqHeading-4">
                <div class="mb-0">
                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                    <span class="badge">4</span> How do I make a payment for my order?
                  </h5>
                </div>
              </div>
              <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                <div class="card-body"> <b>Answer</b>:We currently provide the Cash on Delivery.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="faqHeading-5">
                <div class="mb-0">
                  <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-5" data-aria-expanded="false" data-aria-controls="faqCollapse-5">
                    <span class="badge">5</span> I am unable to login
                  </h5>
                </div>
              </div>
              <div id="faqCollapse-5" class="collapse" aria-labelledby="faqHeading-5" data-parent="#accordion">
                <div class="card-body">
                  You may have entered incorrect login details. Please enter the correct information & try again. In case the issue persists, please write to us at minhajtimesbusiness@gmail.com
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== end faq ====== -->


  <?php require 'partials/_footer.php' ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>