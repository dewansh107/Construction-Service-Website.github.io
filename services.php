<?php
session_start();
if (!isset($_SESSION['sess_password'])) {
    header("location:pages-login.php?direct_access");
     exit; // Ensure no further code is executed
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UpConstruction Bootstrap Template - Services</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>JAYPEE CONSTRUCTION<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html" class="active">Services</a></li>
          <li><a href="projects.html">Projects</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li class="dropdown"><a href="#"><span>QUICK LINKS</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">CAREER</a></li>
              <li><a href="#"><span>PRESS RELEASE</span></a>

              </li>
              <li><a href="#">FINANCIAL REPORTS</a></li>
              <li><a href="#">REPORTS</a></li>
              <li><a href="#">PRODUCTS</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Services</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p>"Your Vision, Our Mission Delivering Comprehensive Construction Services Tailored to Your Project's Unique
            Needs."</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">

                <i class="fa-solid fa-landmark"></i>
              </div>
              <h3>Choosing land</h3>
              <p>"Building on Solid Foundations: Our Expert Land Selection Enhances Projects by Identifying Ideal
                Locations for Construction Success."</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Budget</h3>
              <p>"Empowering Projects through Smart Financial Strategy: Our Budget Management Ensures Efficient Resource
                Allocation and Successful Constructions."</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-compass-drafting"></i>
              </div>
              <h3>Design and Planning</h3>
              <p>"Transforming Vision into Blueprint: Our Design and Planning Expertise Paves the Way for Construction
                Excellence, Merging Creativity with Precision."</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-trowel-bricks"></i>
              </div>
              <h3>Selecting material</h3>
              <p>"Crafting with Precision: Our Material Selection Expertise Elevates Construction by Choosing the
                Perfect Elements for Lasting Quality."</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-helmet-safety"></i>
              </div>
              <h3>Supervising Work</h3>
              <p>"Guiding Excellence from Blueprint to Reality: Our Expert Supervision Ensures Flawless Execution,
                Turning Construction Visions into Remarkable Structures."</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-regular fa-map"></i>
              </div>
              <h3>Map Designing</h3>
              <p>"Crafting Blueprints of Success: Our Map Designing Expertise Transforms Concepts into Visual Roadmaps
                for Seamless Construction."</p>
              <a href="service-details.html" class="readmore stretched-link">Learn more <i
                  class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Developing Hard working Skills</h3>
            <p>"Cultivating a strong work ethic through persistent effort and dedication, our training programs empower
              individuals to excel in their roles and contribute effectively to their teams."</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Enhanced Productivity</a></h4>
                <p>
                  Hard-working skilled workers drive increased productivity, consistently delivering quality results
                  within set timelines, thus elevating project efficiency.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Reliable Performance:</a></h4>
                <p>
                  Through their commitment to putting in the effort, skilled workers ensure dependable and consistent
                  performance, contributing to a culture of reliability and excellence.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Adaptability and Growth</a></h4>
                <p>
                  Hard-working individuals possess the resilience to adapt to changing circumstances, fostering an
                  environment of continuous learning and personal development.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Team Morale Boost</a></h4>
                <p>
                  The dedication and enthusiasm of hard-working skilled workers inspire and uplift team spirits,
                  cultivating a positive atmosphere that encourages collaborative success.
                </p>
              </div>
            </div><!-- End Icon Box -->
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services-2.jpg);" data-aos="zoom-in"
            data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in"
            data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Experts Engineers Transforming World</h3>
            <p>"Engineered Excellence Shaping Tomorrow: Our Expert Engineers Transform Ideas into Reality, Building a
              Better World One Project at a Time."</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Innovative Solutions</a></h4>
                <p>Our seasoned engineers bring innovation to life, devising cutting-edge solutions that reshape
                  industries and communities.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Global Impact</a></h4>
                <p> With a worldwide perspective, our experts engineer projects that transcend borders, leaving a
                  lasting positive impact on a global scale.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Sustainability Champions</a></h4>
                <p>Committed to sustainability, we integrate eco-friendly practices into every design, driving a greener
                  and more sustainable world.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Empowering Progress</a></h4>
                <p> Through expertise and dedication, we empower progress, building a transformative world where
                  engineering excellence reigns supreme.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>
      </div>
    </section><!-- End Alt Services Section -->
    <section>
      <div class="section-header">
        <h2>New Launced Products</h2>
        <p>"Unveil the Latest, Embrace the Greatest"</p>
      </div>
      <div><h2 class="section-header">Product Description</h2></div>

      <div class="container">
        <table class="table table-bordered">
          <tr>
          <th>S.NO.</th>
            <th>Product Name</th>
            <th>Product ID</th>
            <th>Liscence Number</th>
            <th>Product description</th>
            <th>Manufacturing Location</th>
            <th>Product description</th>
          </tr>
          <?php
          $con=mysqli_connect("localhost","root","","php2");
          $q="select * from addproduct";
          $r=mysqli_query($con,$q);
          //to get a data
          while ($key=mysqli_fetch_assoc($r) ) {
          ?>
          <tr>
            <td><?php  echo $key['sid']; ?></td>
            <td><?php  echo $key['pname']; ?></td>
            <td><?php  echo $key['pid']; ?></td>
            <td><?php  echo $key['ino']; ?></td>
            <td><?php  echo $key['pdes']; ?></td>
            <td><?php  echo $key['ms']; ?></td>
            <td><?php  echo $key['zip']; ?></td>
            
          <!-- <td><a href="">update</a><a href="">Delete</a></td> -->
          </tr>
          <?php
          }
          ?>
        </table>
      </div>
    </section>

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>"Hear from Our Satisfied Clients: Testimonials that Showcase Our Dedication to Delivering Quality
            Construction Services and Exceeding Expectations."</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/men.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    "Jaypee Construction exceeded my expectations with their attention to detail and on-time project
                    completion."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/women.jpeg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    "Reliable, professional, and top-notch quality – Jaypee Construction truly delivers."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/women.jpeg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    "Choosing Jaypee Construction was the best decision; their expertise transformed our vision into
                    reality."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/men.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    "Impressed by their seamless coordination and exceptional workmanship. Highly recommended."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/men.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <div class="stars">
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                      class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                  </div>
                  <p>
                    <i class="bi bi-quote quote-icon-left"></i>
                    "A trustworthy partner for construction projects Jaypee Construction's results speak for
                    themselves."
                    <i class="bi bi-quote quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>JAYPEE CONSTRUCTION</h3>
              <p>
                A108 Adam Street <br>
                MUMBAI , INDIA<br><br>
                <strong>Phone:</strong> +91 9558955488 <br>
                <strong>Email:</strong> jaypeeconstruction@gmail.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Planning</a></li>
              <li><a href="#">Desing Mapping</a></li>
              <li><a href="#">Supervising Work</a></li>
              <li><a href="#">Select Material</a></li>
              <li><a href="#">Choose land</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Products</h4>
            <ul>
              <li><a href="#">Jaypee Cement</a></li>
              <li><a href="#">Jaypee steels</a></li>
              <li><a href="#">Jaypee Concrete</a></li>
              <li><a href="#">Jaypee Aluminium</a></li>
              <li><a href="#">Jaypee Equipment</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Social Links</h4>
            <ul>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Instagram</a></li>
              <li><a href="#">linkedin</a></li>
              <li><a href="#">Facebook</a></li>

            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>JAYPEE CONSTRUCTION</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a href="https://bootstrapmade.com/">DEWANSH KUMAR THAKUR</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>