<!--This is the landing page for the Entreconnect application-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>EntreConnect</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


</head>
<body>

 <?php include ("./header/header.php") ?>

  <!-- ======= Hero ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Welcome to <span>EntreConnect</span></h1>
      <h2>EntreConnect connects all Entrepreneurship stakeholders in Ashesi.</h2>
  
    </div>
  </section>

  <main id="main">
<!-- ======= Services ======= -->
    <section id="about" class="featured-services">
      <div class="container" data-aos="fade-up">


        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-dollar circle"></i></div>
              <h4 class="title"><a style="text-decoration: none !important;" href="user_login/investor_login.php">Investors</a></h4>
              <p class="description">Signup as an investor here!<br> you get to access available businesses and incubators on the platform and can message them for collaboration.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4 class="title"><a style="text-decoration: none !important;" href="user_login/incubator_login.php">Incubators</a></h4>
              <p class="description">Signup as an incubator here!<br> you get to access available businesses and investors on the platform and can message them for collaboration.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-bulb"></i></div>
              <h4 class="title"><a style="text-decoration: none !important;" href="user_login/business_login.php">Businesses</a></h4>
              <p class="description">Signup as a businesss here!<br> you get to upload your products for Ecommerce. You can also access available investors and incubators on the platform.</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-cart"></i></div>
              <h4 class="title"><a style="text-decoration: none !important;" href="view/public.php">Buyers</a></h4>
              <p class="description">Signup as public here!<br> you get to view available products and can purchase and pay for the desired items.</p>
            </div>
          </div>

        </div>

      </div>
     
    </section>
    <br>
  </main>

  <?php include ("./header/footer.php") ?>

</body>
</html>