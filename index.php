<?php

$invalid_class_name = "";

if(isset($_POST['name']) && $_POST['email'] != '' ){

    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){

        // submit the form

        $userName = $_POST['name'];

        $userEmail = $_POST['email'];

        $userSubject = $_POST['subject'];

        $userMessage = $_POST['message'];

        $to = 'sohanurrk@gamil.com';

        $body = "";

        $body .= "From: ".$userName."\r\n";

        $body .= "Email: ".$userEmail."\r\n";

        $body .= "Message: ".$userMessage."\r\n";

        $message_sent=mail($to,$userSubject,$body);

	    if($message_sent){$msg="Success";}

	    else{$msg="Failed";}

    }

    else{

      $invalid_class_name = "form-invalid";

    }  

}

?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="utf-8">

  <meta content="width=device-width, initial-scale=1.0" name="viewport">



  <title>Trioco Limited</title>

  <meta content="" name="description">

  <meta content="" name="keywords">



  <!-- Favicons -->

  <link href="assets/img/favicon.png" rel="icon">

  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">



  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">

  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">



  <!-- Template Main CSS File -->

  <link href="assets/css/style.css" rel="stylesheet">



  <!-- =======================================================

  * Template Name: Vesperr - v2.3.0

  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/

  * Author: BootstrapMade.com

  * License: https://bootstrapmade.com/license/

  ======================================================== -->

</head>



<body>



  <!-- ======= Header ======= -->

  <header id="header" class="fixed-top d-flex align-items-center">

    <div class="container d-flex align-items-center">



      <div class="logo mr-auto">

        <h1 class="text-light"><a href="index.php"><span><img src="./assets/img/logo.png" alt=""></span></a></h1>

        <!-- Uncomment below if you prefer to use an image logo -->

        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      </div>



      <nav class="nav-menu d-none d-lg-block">

        <ul>

          <li class="active"><a href="#">Home</a></li>

          <li><a href="#about">About</a></li>

          <li><a href="#services">Services</a></li>

          <li><a href="#features">Fearures</a></li>

          <li><a href="#portfolio">Portfolio</a></li>

          <li><a href="#team">Team</a></li>

          <!--<li><a href="#pricing">Pricing</a></li> -->

          <li class="get-started"><a href="#contact">Contact</a></li>

          <!--<li class="get-started"><a href="#about">Get Started</a></li>-->

        </ul>

      </nav><!-- .nav-menu -->



    </div>

  </header><!-- End Header -->



  <!-- ======= Hero Section ======= -->

  <section id="hero" class="d-flex align-items-center">



    <div class="container">

      <div class="row">

        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">

          <h1 data-aos="fade-up">Grow your business with TRIOCO</h1>

          <h2 data-aos="fade-up" data-aos-delay="400">Building execellent software in an agile way with world-class productive developers for all your business needs.</h2>

          <div data-aos="fade-up" data-aos-delay="800">

            <a href="#about" class="btn-get-started scrollto">Get Started</a>

          </div>

        </div>

        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">

          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">

        </div>

      </div>

    </div>



  </section><!-- End Hero -->



  <main id="main">



    <!-- ======= Clients Section ======= -->

    <section id="clients" class="clients clients">

      <div class="container">



        <div class="row">



          <div class="col-lg-2 col-md-4 col-6">

            <img src="assets/img/clients/client-1.jpg" class="img-fluid" alt="" data-aos="zoom-in">

          </div>



          <div class="col-lg-2 col-md-4 col-6">

            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">

          </div>



          <div class="col-lg-2 col-md-4 col-6">

            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">

          </div>



          <div class="col-lg-2 col-md-4 col-6">

            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">

          </div>



          <div class="col-lg-2 col-md-4 col-6">

            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">

          </div>



          <div class="col-lg-2 col-md-4 col-6">

            <img src="assets/img/clients/client-4.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">

          </div>



        </div>



      </div>

    </section><!-- End Clients Section -->



    <!-- ======= About Us Section ======= -->

    <section id="about" class="about">

      <div class="container">



        <div class="section-title" data-aos="fade-up">

          <h2>About Us</h2>

        </div>



        <div class="row content">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">

            <p>

              Businesses today are facing ever-changing market conditions: changing consumer behaviour, new technology, and more data than ever before. To keep pace, agility and responsiveness are vital and a more dynamic approach to outsourcing is needed.





            </p>

            <ul>

              <li><i class="ri-check-double-line"></i>Trioco Tech offers the resources you need to build your software.</li>

              <li><i class="ri-check-double-line"></i>  We take a tailor-made approach to outsourcing, offering fully-integrated software development teams customized to your specific projects and needs.</li>

              <!-- <li><i class="ri-check-double-line"></i></li> -->

            </ul>

          </div>

          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">

            <p>

              We work as collaborative partners on long-term projects and are trusted by clients around the world, from the USA to Europe and Asia.<br>



              Our innovative Business Framework combines industry experience with a repeatable and scalable methodology, transforming the way global business process outsourcing is delivered.



              We are your business partners.

            </p>

            <a href="#" class="btn-learn-more">Learn More</a>

          </div>

        </div>



      </div>

    </section><!-- End About Us Section -->



    <!-- ======= Counts Section ======= -->

    <section id="counts" class="counts">

      <div class="container">



        <div class="row">

          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">

            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">

          </div>



          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">

            <div class="content d-flex flex-column justify-content-center">

              <div class="row">

                <div class="col-md-6 d-md-flex align-items-md-stretch">

                  <div class="count-box">

                    <i class="icofont-simple-smile"></i>

                    <span data-toggle="counter-up">65</span>

                    <p><strong>Happy Clients</strong> We always priority our clients happienss.</p>

                  </div>

                </div>



                <div class="col-md-6 d-md-flex align-items-md-stretch">

                  <div class="count-box">

                    <i class="icofont-document-folder"></i>

                    <span data-toggle="counter-up">185</span>

                    <p><strong>Projects</strong> We have enough skilled different kind of projects.</p>

                  </div>

                </div>



                <div class="col-md-6 d-md-flex align-items-md-stretch">

                  <div class="count-box">

                    <i class="icofont-clock-time"></i>

                    <span data-toggle="counter-up">7</span>

                    <p><strong>Years of experience</strong> Our experience our achievment. </p>

                  </div>

                </div>



                <!-- <div class="col-md-6 d-md-flex align-items-md-stretch">

                  <div class="count-box">

                    <i class="icofont-award"></i>

                    <span data-toggle="counter-up">15</span>

                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>

                  </div>

                </div> -->

              </div>

            </div><!-- End .content-->

          </div>

        </div>



      </div>

    </section><!-- End Counts Section -->



    <!-- ======= Services Section ======= -->

    <section id="services" class="services">

      <div class="container">



        <div class="section-title" data-aos="fade-up">

          <h2>Services</h2>

          <p>creative and technology skills to solve your complex business needs</p>

        </div>



        <div class="row">

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">

              <div class="icon"><i class="p-1 fas fa-desktop"></i></div>

              <h4 class="title"><a href="">Web Design And Development</a></h4>

              <p class="description">We designing and Developed any Website, Web applications, Mobile app.</p>

            </div>

          </div>



          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">

              <div class="icon"><i class="p-1 fas fa-code"></i></i></div>

              <h4 class="title"><a href="">Software development</a></h4>

              <p class="description">We take pride in our ability to provide specific and unique solutions to our clients. </p>

            </div>

          </div>



          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">

              <div class="icon"><i class="p-1 fas fa-tablet-alt"></i></i></div>

              <h4 class="title"><a href="">App Development</a></h4>

              <p class="description">Our team has a decade-long experience in custom mobile applications development.</p>

            </div>

          </div>



          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">

              <div class="icon"><i class="p-1 fas fa-bullhorn"></i></i></div>

              <h4 class="title"><a href="">Digital Marketing</a></h4>

              <p class="description">Our Services Proven to Increase Leads, Sales, & Revenue.</p>

            </div>

          </div>



        </div>



      </div>

    </section><!-- End Services Section -->



    <!-- ======= More Services Section ======= -->

    <!-- <section id="more-services" class="more-services">

      <div class="container">



        <div class="row">

          <div class="col-md-6 d-flex align-items-stretch">

            <div class="card" style='background-image: url("assets/img/more-services-1.jpg");' data-aos="fade-up" data-aos-delay="100">

              <div class="card-body">

                <h5 class="card-title"><a href="">Lobira Duno</a></h5>

                <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua.</p>

                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>

              </div>

            </div>

          </div>

          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">

            <div class="card" style='background-image: url("assets/img/more-services-2.jpg");' data-aos="fade-up" data-aos-delay="200">

              <div class="card-body">

                <h5 class="card-title"><a href="">Limere Radses</a></h5>

                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem doloremque laudantium, totam rem.</p>

                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>

              </div>

            </div>



          </div>

          <div class="col-md-6 d-flex align-items-stretch mt-4">

            <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">

              <div class="card-body">

                <h5 class="card-title"><a href="">Nive Lodo</a></h5>

                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>

                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>

              </div>

            </div>

          </div>

          <div class="col-md-6 d-flex align-items-stretch mt-4">

            <div class="card" style='background-image: url("assets/img/more-services-4.jpg");' data-aos="fade-up" data-aos-delay="200">

              <div class="card-body">

                <h5 class="card-title"><a href="">Pale Treda</a></h5>

                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>

                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a></div>

              </div>

            </div>

          </div>

        </div>



      </div>

    </section> -->

    

    <!-- End More Services Section -->



    <!-- ======= Features Section ======= -->

    <section id="features" class="features">

      <div class="container">

        <div class="section-title" data-aos="fade-up">

          <h2>Features</h2>

          <p>Our main work area and expertise</p>

        </div>



        <div class="row" data-aos="fade-up" data-aos-delay="300">

          <div class="col-lg-3 col-md-4">

            <div class="icon-box">

              <i class="ri-shopping-cart-line" style="color: #ffbb2c;"></i>

              <h3><a href="">eCommarce Website</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">

            <div class="icon-box">

              <i class="ri-android-line" style="color: #5578ff;"></i>

              <h3><a href="">Mobile App</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">

            <div class="icon-box">

              <i class="ri-mac-line" style="color: #e80368;"></i>

              <h3><a href="">Web Application</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">

            <div class="icon-box">

              <i class="ri-hospital-line" style="color: #e361ff;"></i>

              <h3><a href="">Hospital Management</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">

              <i class="ri-bar-chart-fill" style="color: #47aeff;"></i>

              <h3><a href="">ERM</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">

              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>

              <h3><a href="">FlexiLoad Software</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">

              <i class="ri-store-line" style="color: #11dbcf;"></i>

              <h3><a href="">Shop Management</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">

              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>

              <h3><a href="">School Management</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">

              <i class="ri-hotel-line" style="color: #b2904f;"></i>

              <h3><a href="">Hotel Management</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">

              <i class="ri-file-list-3-line" style="color: #b20969;"></i>

              <h3><a href="">Newspaper</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">

              <i class="ri-database-2-line" style="color: #ff5828;"></i>

              <h3><a href="">Database Mainting</a></h3>

            </div>

          </div>

          <div class="col-lg-3 col-md-4 mt-4">

            <div class="icon-box">

              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>

              <h3><a href="">Bank Management</a></h3>

            </div>

          </div>

        </div>



      </div>

    </section><!-- End Features Section -->



    <!-- ======= Testimonials Section ======= -->

    <!-- <section id="testimonials" class="testimonials section-bg">

      <div class="container">



        <div class="section-title" data-aos="fade-up">

          <h2>Testimonials</h2>

          <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>

        </div>



        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">



          <div class="testimonial-wrap">

            <div class="testimonial-item">

              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">

              <h3>Saul Goodman</h3>

              <h4>Ceo &amp; Founder</h4>

              <p>

                <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.

                <i class="bx bxs-quote-alt-right quote-icon-right"></i>

              </p>

            </div>

          </div>



          <div class="testimonial-wrap">

            <div class="testimonial-item">

              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">

              <h3>Sara Wilsson</h3>

              <h4>Designer</h4>

              <p>

                <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.

                <i class="bx bxs-quote-alt-right quote-icon-right"></i>

              </p>

            </div>

          </div>



          <div class="testimonial-wrap">

            <div class="testimonial-item">

              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">

              <h3>Jena Karlis</h3>

              <h4>Store Owner</h4>

              <p>

                <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.

                <i class="bx bxs-quote-alt-right quote-icon-right"></i>

              </p>

            </div>

          </div>



          <div class="testimonial-wrap">

            <div class="testimonial-item">

              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">

              <h3>Matt Brandon</h3>

              <h4>Freelancer</h4>

              <p>

                <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.

                <i class="bx bxs-quote-alt-right quote-icon-right"></i>

              </p>

            </div>

          </div>



          <div class="testimonial-wrap">

            <div class="testimonial-item">

              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">

              <h3>John Larson</h3>

              <h4>Entrepreneur</h4>

              <p>

                <i class="bx bxs-quote-alt-left quote-icon-left"></i>

                Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.

                <i class="bx bxs-quote-alt-right quote-icon-right"></i>

              </p>

            </div>

          </div>



        </div>



      </div>

    </section> -->

    

    <!-- End Testimonials Section -->



    <!-- ======= Portfolio Section ======= -->

    <section id="portfolio" class="portfolio">

      <div class="container">



        <div class="section-title" data-aos="fade-up">

          <h2>Portfolio</h2>

          <p>Some latest work example from big list</p>

        </div>



        <div class="row" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-12 d-flex justify-content-center">

            <ul id="portfolio-flters">

              <li data-filter="*" class="filter-active">All</li>

              <li data-filter=".filter-app">Software</li>

              <!-- <li data-filter=".filter-card">Card</li> -->

              <li data-filter=".filter-web">Web</li>

            </ul>

          </div>

        </div>



        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-1.png" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Complete ERM</h4>

                <p>Company Management Software</p>

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-1.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Bangladesh Army</h4>

                <p>Website & Internal Software</p>

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Hospital Management Software</h4>

                <p>Full package for Hospital Management</p>

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-app">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>School Management</h4>

                <p>Complete school management software</p>

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Apex</h4>

                <p>Company website</p>

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Corporate website</h4>

                <p>A complete solution</p>

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Marine & DocYard Website</h4>

                <p>Develop Marine and Ship builders company web application</p>

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-card">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Ecommarce</h4>

                <p>Any eCommarce Website and App</p>

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-web">

            <div class="portfolio-wrap">

              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">

              <div class="portfolio-info">

                <h4>Website & App</h4>

                <!-- <p>Web</p> -->

                <div class="portfolio-links">

                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>

                  <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->

                </div>

              </div>

            </div>

          </div>



        </div>



      </div>

    </section><!-- End Portfolio Section -->



    <!-- ======= Team Section ======= -->

    <section id="team" class="team section-bg">

      <div class="container">



        <div class="section-title" data-aos="fade-up">

          <h2>Team</h2>

          <p>This is our dedicated and talented team who work together</p>

        </div>



        <div class="row">



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="100">

              <div class="member-img">

                <img src="assets/img/team/aman.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Aman Ullah</h4>

                <span>Chairman</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="200">

              <div class="member-img">

                <img src="assets/img/team/amirul.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Amirul Islam</h4></h4>

                <span>CEO & MD</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="300">

              <div class="member-img">

                <img src="assets/img/team/momin.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Moksedul Momin</h4>

                <span>CTO & Director</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="400">

              <div class="member-img">

                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Sohanur Rahman</h4>

                <span>Project Manager</span>

              </div>

            </div>

          </div>



        </div>

        <div class="row moretext" style="display: none;">



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="100">

              <div class="member-img">

                <img src="assets/img/team/sharna.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Sharna Islam</h4>

                <span>Software Engineer</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="200">

              <div class="member-img">

                <img src="assets/img/team/jinat.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Jinat Jahan Joty</h4></h4>

                <span>Software Engineer</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="300">

              <div class="member-img">

                <img src="assets/img/team/sajib.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Shazib Hossain Roni</h4>

                <span>Sr. App Developer</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="400">

              <div class="member-img">

                <img src="assets/img/team/sabbir.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Sabbir Ehsan</h4>

                <span>Graphic Designer</span>

              </div>

            </div>

          </div>



        </div>

        <div class="row moretext" style="display: none;">



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="100">

              <div class="member-img">

                <img src="assets/img/team/kamrul.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Md.Kamrul Hasan</h4>

                <span>System Analyst</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="200">

              <div class="member-img">

                <img src="assets/img/team/shakil.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Md.Shakil Ahmed</h4></h4>

                <span>Database Admistrator</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="300">

              <div class="member-img">

                <img src="assets/img/team/jarif.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Jarif Sarder</h4>

                <span>Office Executive</span>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">

            <div class="member" data-aos="fade-up" data-aos-delay="400">

              <div class="member-img">

                <img src="assets/img/team/hossen.jpg" class="img-fluid" alt="">

                <!-- <div class="social">

                  <a href=""><i class="icofont-twitter"></i></a>

                  <a href=""><i class="icofont-facebook"></i></a>

                  <a href=""><i class="icofont-instagram"></i></a>

                  <a href=""><i class="icofont-linkedin"></i></a>

                </div> -->

              </div>

              <div class="member-info">

                <h4>Mohammad Hossain</h4>

                <span>Admin Officer</span>

              </div>

            </div>

          </div>

        </div>

        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
          <button class="moreless-button show-btn" type="submit">Show more  ▼</button>
        </div>



      </div>

    </section><!-- End Team Section -->

    



    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">

      <div class="container">



        <div class="section-title" data-aos="fade-up">

          <h2>Contact Us</h2>

        </div>



        <div class="row">



          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">

            <div class="contact-about">

              <h3><img class="w-50" src="./assets/img/logo2.png" alt=""></h3>

              <p>Businesses today are facing ever-changing market conditions: changing consumer behaviour, new technology, and more data than ever before. To keep pace, agility and responsiveness are vital and a more dynamic approach to outsourcing is needed.</p>

              <div class="social-links">

                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>

                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>

                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>

                <a href="#" class="linkedin"><i class="icofont-linkedin"></i></a>

              </div>

            </div>

          </div>



          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">

            <div class="info">

              <div>

                <i class="ri-map-pin-line"></i>

                <p>963/1, Ground Floor, East Shewrapara<br>Begum Rokeya Sharoni, Mirpur, Dhaka-1216</p>

              </div>



              <div>

                <i class="ri-mail-send-line"></i>

                <p>info@triocolimited.com</p>

              </div>



              <div>

                <i class="ri-phone-line"></i>

                <p>+880 1935 474747</p>

              </div>



            </div>

          </div>



          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">

            <form action="index.php" method="post" role="form" class="php-email-form">

              <div class="form-group">

                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                <div class="validate"></div>

              </div>

              <div class="form-group">

                <input <?=$invalid_class_name?>  type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />

                <div class="validate"></div>

              </div>

              <div class="form-group">

                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                <div class="validate"></div>

              </div>

              <div class="form-group">

                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>

                <div class="validate"></div>

              </div>

              <div class="mb-3">

                <!-- <div class="loading">Loading</div>

                <div class="error-message"></div> -->

                <?php 

				if(isset($msg)){

				if($msg=="Success"){

                 ?>

                <pre class="sent-message">Your message has been sent. Thank you!</pre>

                <?php }else{ ?>

                  <pre class="text-danger">Message send Failed! Try again.</pre>

				<?php }} ?>

              </div>

              <div class="text-center"><button type="submit">Send Message</button></div>

            </form>

          </div>



        </div>



      </div>

    </section><!-- End Contact Section -->



  </main><!-- End #main -->



  <!-- ======= Footer ======= -->

  <footer id="footer">

    <div class="container">

      <div class="row d-flex align-items-center">

        <div class="col-lg-6 text-lg-left text-center">

          <div class="copyright">

            &copy; Copyright <strong>Trioco Limited</strong>. All Rights Reserved

          </div>

        </div>

        <div class="col-lg-6">

          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">

            <a href="#intro" class="scrollto">Home</a>

            <a href="#about" class="scrollto">About</a>

            <a href="#">Privacy Policy</a>

            <a href="#">Terms of Use</a>

          </nav>

        </div>

      </div>

    </div>

  </footer><!-- End Footer -->



  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



  <!-- Vendor JS Files -->

  <script src="assets/vendor/jquery/jquery.min.js"></script>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>

  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="assets/vendor/counterup/counterup.min.js"></script>

  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <script src="assets/vendor/aos/aos.js"></script>



  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>



</body>



</html>