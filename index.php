<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Home | Hanawell Limited</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="hanawell, hanawell limited, sap, sap training, sap consultation" name="keywords">
  <meta content="this the index page for hanawell limited" name="description">

  <link href="images/favIcon.png" rel="icon">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/split.css" rel="stylesheet">
  <link href="css/feature.css" rel="stylesheet">
  <link href="css/home.css" rel="stylesheet">

</head>

<body>


<?php include_once("navigationbar.php")?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">

      <div class="container">
      <div class="row landing-cards">

        <div class="col-md-4 col-sm-8 mt-30">
          <div class="landing-card">
            <div class="landing-img ">
              <img width="100%" src="./images/SAP.jpg" alt="">
            </div>
            <div class="landing-desc">
              <h3>SAP Training</h3>
              <p>
                Hanawell employs a blended training approach to accommodate all participates in the training programs.
              </p>
              <a href="training.php" class="btn-get-started btn-training">Get Started</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-sm-8 mt-30">
          <div class="landing-card">
            <div class="landing-img ">
              <img width="100%" src="./images/training3.jpg" alt="">
            </div>
            <div class="landing-desc">
              <h3>SAP Consultation</h3>
              <p>
                At Hanawell, we offer consulting services that focus on selecting the most appropriate solution for every need. 
              </p>
              <a href="consultation.php" class="btn-get-started btn-consultation">Read More</a>
            </div>
          </div>
        </div>

      </div>      
    </div>
    <div class="scrollDown">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </section>

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Culture and Behaviour</a></h4>
            <p class="description">
              <ul>
                <li>Create an enterprise culture of change capability.</li>
                <li>Create solution showcases and improvement initiatives.</li>
                <li>Implement continuous education and coaching.</li>
                <li>Connect directly to business users throughout the enterprise to assist with their transition in their daily work.</li>
              </ul>
            </p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Leadership and Governance</a></h4>
            <p class="description">
              <ul>
                <li>Engage and train leadership first.</li>
                <li>Involve leadership as sponsors and advocates and co-owners of change, keeping in mind the overall business transformation journey of the state enterprise.</li>
              </ul>
            </p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-people-outline"></i>
            <h4 class="title"><a href="">Collaboration</a></h4>
            <p class="description">
              <ul>
                <li>Build cross-trained roles, dissolve any existing “silos “and co- create material with a high-level of business involvement. </li>
                <li>Work with the business users to develop solutions and training programs fit for the business underpinning and promoting a sense of pride and ownership of such products within the institution.</li>
              </ul>
            </p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

   <!--==========================
      About Section
    ============================-->

    <section id="About">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>About Us</h3>
          <p>
            Hanawell Limited is a trusted partner that manages both data and processes. Our catalogue of SAP services begins with consulting services that focus on selecting the most appropriate solution for every need, in the design of the optimal implementation strategy and training. 
          </p>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-eye-outline"></i></div>
            <h4 class="title"><a href="">VISION</a></h4>
            <p class="description">
              Our vision and values drive our behaviour. We care not just about what we do, but the way and why we do it. 
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Mission</a></h4>
            <p class="description">
              To empower businesses to successfully transition past their business transformation phase and work with them to ensure business continuity during the transformation phase and beyond.
            </p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-list-outline"></i></div>
            <h4 class="title"><a href="">Plan</a></h4>
            <p class="description">
              Our plan and purpose is to help the world run better and improve people’s lives.
            </p>
          </div>
          </div>

          <div class="row justify-content-center">
            <a href="about.php" class="btn-get-started ">Learn More</a>
          </div>

      </div>
    </section><!-- #services -->

  </main>

  <?php include_once("footer.php")?>

</body>
</html>
