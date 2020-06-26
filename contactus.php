<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Contact Us | Hanawell Limited</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="hanawell, hanawell limited, sap, sap training, sap consultation" name="keywords">
  <meta content="this the contact uss page for hanawell limited" name="description">

  <!-- Favicons -->
   <link href="images/favIcon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/contact.css" rel="stylesheet">

</head>

<body>


<?php include_once("navigationbar.php")?>


  <main id="main">

    <section id="contact" class="section-bg fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Contact Us</h3>
        </div>

        <div class="row">

        <div class="form col-md-5">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
         
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="phone" class="form-control" name="phone" id="phone" placeholder="Your phone number" data-rule="phone" data-msg="Please enter a valid phone number" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="company" id="company" placeholder="Your Company" data-rule="minlen:1" data-msg="Please enter a your company name" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

        <div class="contact-info col-md-6">

          <div class="contact-offices">
            <h3 class="text-center">Our Offices</h3>
            <div class="global-office">
            <h4>Hanawell Limited Global Headquarters</h4>
            <div class="row">
              <div class="col-md-4 address">
                <p><strong>Address</strong></p>
                <p>
                Hanawell (UK) Limited <br>
                Whitethorns,Farnham,<br>
                SURREY,GU9 9BH,<br>
                United Kingdom<br>
                <strong>Phone: </strong><br> <a href="tel: +44(0)78 24520 535">+44(0)78 24520 535</a>
                <br>
                <strong>Email:</strong><br><a href="operations@hanawell.net">operations@hanawell.net</a>
                </p>
              </div>
              <div class="col-md-6 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39992.469722264665!2d-0.8230044505383969!3d51.2093233742175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48742c02125a0e93%3A0x875c1ded7715bf26!2sFarnham%2C%20UK!5e0!3m2!1sen!2ske!4v1593153552747!5m2!1sen!2ske" width="400" height="180" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
            </div>
            <div class="global-office">
            <h4>Hanawell EMEA Regional Office</h4>
            <div class="row">
              <div class="col-md-4 address">
                <p><strong>Address</strong></p>
                <p>
                P.O BOX 31758 00600<br>
                Nairobi,<br>
                Kenya,<br>
                <strong>Phone: </strong><br> <a href="tel: +44(0)78 24520 535">+44(0)78 24520 535</a>
                <br>
                <strong>Email:</strong><br><a href="operations@hanawell.net">operations@hanawell.net</a>
                </p>
              </div>
              <div class="col-md-6 map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.6498664422!2d36.56720029142611!3d-1.3031933719272915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1593153606607!5m2!1sen!2ske" width="400" height="180" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
            </div>

          </div>
    
          
        </div>
        </div>

      </div>
    </section>

  </main>

  <?php include_once("footer.php")?>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
