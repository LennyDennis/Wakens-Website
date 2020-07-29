<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Hanawell Limited</title>
    <?php include_once("header.php") ?>
    <link href="css/contact.css" rel="stylesheet">
</head>

<body>
    <?php include_once("navigationbar.php") ?>
    <main id="main">
        <section id="contact" class="section-bg fadeInUp contact-page">
            <div class="container">
                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>
                <div class="row">
                    <div class="form col-md-5">
                        <form id="contact-form" name="contact" action="sendmail.php" method="post" role="form"
                            class="contactForm" enctype="multipart/form-data" onsubmit="return validate()"
                            autocomplete="off">

                            <div class="form-group">
                                <input type="text" name="fullname" class="form-control" id="name"
                                    placeholder="Your Name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />
                                <small class="errormessage" id="fullnameerror"></small>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <small class="errormessage" id="emailerror"></small>
                            </div>

                            <div class="form-group">
                                <input type="phone" class="form-control" name="phone" id="phone"
                                    placeholder="Your phone number" data-rule="phone"
                                    data-msg="Please enter a valid phone number" />
                                <small class="errormessage" id="phoneerror"></small>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="company" id="company"
                                    placeholder="Your Company" data-rule="minlen:1"
                                    data-msg="Please enter a your company name" />
                                <small class="errormessage" id="companyerror"></small>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" data-rule="minlen:4"
                                    data-msg="Please enter at least 8 chars of subject" />
                                <small class="errormessage" id="subjecterror"></small>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Please write something for us" placeholder="Message"></textarea>
                                <small class="errormessage" id="messageerror"></small>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="submit">Send Message</button>
                            </div>
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
                                            <strong>Phone: </strong><br>
                                            <a href="tel: +44(0)78 24520 535">+44(0)78 24520 535</a>
                                            <br>
                                            <strong>Email:</strong><br>
                                            <a href="operations@hanawell.net">operations@hanawell.net</a>
                                        </p>
                                    </div>

                                    <div class="col-md-6 map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39992.469722264665!2d-0.8230044505383969!3d51.2093233742175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48742c02125a0e93%3A0x875c1ded7715bf26!2sFarnham%2C%20UK!5e0!3m2!1sen!2ske!4v1593153552747!5m2!1sen!2ske"
                                            width="400" height="180" frameborder="0" style="border:0;"
                                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
                                            <strong>Phone: </strong><br>
                                            <a href="tel: +44(0)78 24520 535">+44(0)78 24520 535</a>
                                            <br>
                                            <strong>Email:</strong><br>
                                            <a href="operations@hanawell.net">emea@hanawell.net</a>
                                        </p>
                                    </div>

                                    <div class="col-md-6 map">
                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d510564.6498664422!2d36.56720029142611!3d-1.3031933719272915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1172d84d49a7%3A0xf7cf0254b297924c!2sNairobi!5e0!3m2!1sen!2ske!4v1593153606607!5m2!1sen!2ske"
                                            width="400" height="180" frameborder="0" style="border:0;"
                                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("footer.php") ?>
    <script src="./js/validate.js"></script>
</body>

</html>