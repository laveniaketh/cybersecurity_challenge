<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>inkNote</title>
  <link rel="icon" href="images/logo-light.png" type="image/x-icon" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- CSS Style -->
  <link rel="stylesheet" href="index.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Ubuntu&display=swap" rel="stylesheet">
  <!-- Font Awesome -->

</head>

<body>

  <section class="white-section" id="title">
    <div class="container-fluid">
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
          <img src="images/logo-dark.png" alt="Logo" width="45" height="45" class="d-inline-block align-text-top"> inkNote</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav  ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#title">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#testimonials">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#cta">Explore</a>
            </li>
            <li class="nav-item">
            <a href="login.php"><button type="button" class="btn btn-dark btn-lg rounded-5 register-button1" >Register</button></a>
            </li>
          </ul>
        </div>
      </nav>

      <!-- Title -->
      <div class="row">
        <div class="col-lg-6">
          <h1 class="big-heading">Discover Yourself With A Personalized Digital Journal.</h1>
          <p>Capture Moments, Reflect on Your Journey, and Ignite Personal Growth.</p>
          <!-- <a href="login.php"><button type="button" class="btn btn-outline-dark btn-lg rounded-5 login-button">Login</button></a> -->
          <a href="login.php"><button type="button" class="btn btn-dark btn-lg rounded-5 register-button">Get Started</button></a>
        </div>

        <div class="col-lg-6">
          <img class="title-image" src="images/welcome-img/intro-img.svg">
        </div>

      </div>

    </div>

  </section>


  <!-- Testimonials -->

  <section class="colored-section" id="testimonials">

    <div id="testimonial-carousel" class="carousel slide" data-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="overview-heading">it's a journey of self-discovery and expression.</h1>
              <p class="testimonial-text">inkNote is your go-to digital journaling companion, offering a personalized experience to capture life's moments effortlessly</p>
            </div>
            <div class="col-lg-6">
              <img src="images/dashboard-overview.png" width="450px">
              <img class="overview-image" src="images/Reflecting.svg" width="450px">
            </div>

          </div>

        </div>
        <div class="carousel-item container-fluid">
          <div class="row">
            <div class="col-lg-6">
              <h1 class="overview-heading">a portable digital journal accesible to all devices.</h1>
              <p class="testimonial-text">
                Seamlessly sync your entries across devices, track your mood, and explore reflection prompts for deeper insights</p>
            </div>

            <div class="col-lg-6">
              <img src="images/text-editor-overview.png" width="450px">
              <img class="overview-image1" src="images/Plants.svg" width="450px">

            </div>

          </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </div>





  </section>


  <!-- Features -->

  <section class="white-section" id="features">
    <div class="container-fluid">
      <div class="row">
        <div class="feature-box col-lg-4">
          <img class="feature-icons" src="images/welcome-img/accessibility.svg" alt="accessibility-icon">
          <h3 class="feature-title">Accessibility</h3>
          <p>Access Your Journal On the Go from Any Device, Ensuring Seamless Availability.</p>
        </div>

        <div class="feature-box col-lg-4">
          <img class="feature-icons" src="images/welcome-img/simplicity.svg" alt="simplicity-icon">
          <h3 class="feature-title">Simplicity</h3>
          <p>Effortless, Capture Your Thoughts with Ease in a User-Friendly Interface.</p>
        </div>

        <div class="feature-box col-lg-4">
          <img class="feature-icons" src="images/welcome-img/security.svg" alt="security-icon">
          <h3 class="feature-title">Security</h3>
          <p>Keep Your Digital Journal Entries Confidential.</p>
        </div>

      </div>
    </div>


  </section>


  <!-- Call to Action -->

  <section class="colored-section" id="cta">
    <div class="container-fluid">
      <h1 class="big-heading1">Be Part Of The
        inkNote Community Now.</h1>
      <a href="login-reg.html #sign-up"><button type="button" class="btn btn-outline-light btn-lg rounded-5 getstarted-button">Get Started Now</button></a>
    </div>



  </section>


  <!-- Footer -->

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <i class="social-icon fa-brands fa-twitter"></i>
      <i class="social-icon fa-brands fa-facebook-f"></i>
      <i class="social-icon fa-brands fa-instagram"></i>
      <i class="social-icon fa-solid fa-envelope"></i>
      <p>© Copyright inkNote</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>