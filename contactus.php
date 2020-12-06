<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Waken's Events</title>
    <?php
    include_once("header.php");
    ?>
    <link href="css/contact.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/intl-tel-input/build/css/intlTelInput.css
">
</head>

<body>
    <?php include_once("navigationbar.php") ?>
    <main id="main">
        <section id="contact" class="section-bg fadeInUp contact-page">
            <div class="container-fluid">
                <div class="section-header">
                    <h3>Contact Us</h3>
                </div>

            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto">
                        <div class="title text-center">
                            <h2>Get in touch with us.</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center align-items-start contact-page">
                    <div class="col-md-6">
                        <form name="contact" action="test.php" method="POST" enctype="multipart/form-data" class="form"
                            onsubmit="return validate()" autocomplete="off">
                            <div class="contact-box-content text-left">
                                <!-- Contact Box -->
                                <div class="contact-item">
                                    <span class="icon icon-default icon-sm"><i class="fa fa-user"></i></span>
                                    <div class="contact-item-content">
                                        <span class="title">Name :</span>
                                        <input type="text" class="form-control" name="fullname"
                                            placeholder="your name" />
                                        <div class="errormessage" id="fullnameerror"></div>
                                    </div>
                                </div>
                                <!-- Contact Box -->
                                <div class="contact-item">
                                    <span class="icon icon-default icon-sm"><i class="fa fa-envelope"></i></span>
                                    <div class="contact-item-content">
                                        <span class="title">E-mail :</span>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="you@mail.com" />
                                        <div class="errormessage" id="emailerror"></div>
                                    </div>
                                </div>
                                <!-- Contact Box -->
                                <div class="contact-item">
                                    <span class="icon icon-default icon-sm"><i class="fa fa-phone"></i></span>
                                    <div class="contact-item-content">
                                        <span class="title">Phone :</span>
                                        <input type="text" class="form-control" name="phone" placeholder="0777XXXXXX" />
                                        <div class="errormessage" id="phoneerror"></div>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <span class="icon icon-default icon-sm"><i class="fa fa-question-circle"></i></span>
                                    <div class="contact-item-content">
                                        <span class="title">Subject :</span>
                                        <input type="text" class="form-control" name="subject"
                                            placeholder="the subject" />
                                        <div class="errormessage" id="subjecterror"></div>
                                    </div>
                                </div>
                                <!-- Contact Box -->
                                <div class="contact-item">
                                    <span class="icon icon-default icon-sm"><i class="fa fa-comments"></i></span>
                                    <div class="contact-item-content">
                                        <span class="title">Your Message</span>
                                        <textarea class="form-control" name="message"
                                            placeholder="enter your message here" style="height:90px"></textarea>
                                        <div class="errormessage" id="messageerror"></div>
                                    </div>
                                </div>

                                <div class="text-left" style="padding-top:0px">
                                    <input type="submit" name="submit" value="Send" class="btn btn-primary button" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="contact-box h-100  px-3 py-4">
                            <h3>Contact Details</h3>
                            <div class="contact-info ">
                                <div class="contact-box-icon"><i class="fa fa-map-marker"></i></div>
                                <h5 class="mb-2">Address</h5>
                                <p>
                                    Waken's Events <br>
                                    Mutira House, Ground Floor<br>
                                    Kagumo, Kirinyaga. <br>
                                </p>
                            </div>
                            <div class="contact-info">
                                <div class="contact-box-icon"><i class="fa fa-envelope-o"></i></div>
                                <h5 class="mb-2">E-mail</h5>
                                <p>wakenevents@gmail.com</p>
                            </div>
                            <div class="contact-info">
                                <div class="contact-box-icon"><i class="fa fa-phone"></i></div>
                                <h5 class="mb-2">Phone</h5>
                                <p>(+254) 0724544635,<br> (+254) 0721331851</p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center col-md-12 map">
                        <iframe class="wakens-map"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4201909925646!2d37.23623072915041!3d-0.475776158919517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18287fb04e8bd78b%3A0xe5086a388c45d4f4!2sWaken%20Events%20-%20Decoration%20%26%20Tents!5e0!3m2!1sen!2ske!4v1607234343190!5m2!1sen!2ske"
                            width="auto" height="auto" frameborder="0" style="border:0;" allowfullscreen="true"
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include_once("footer.php") ?>
    <script src="node_modules/intl-tel-input/build/js/intlTelInput.js"></script>
    <script>
    function onlyNumberKey(evt) {
        // Only ASCII charactar in that range allowed
        var ASCIICode = evt.which ? evt.which : evt.keyCode;
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57)) return false;
        return true;
    }
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
        // allowDropdown: false,
        // autoHideDialCode: false,
        // autoPlaceholder: "on",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        // $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        // var countryCode = (resp && resp.country) ? resp.country : "";
        // callback(countryCode);
        // });
        // },
        hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        preferredCountries: ['gb', 'ke'],
        separateDialCode: true,
        utilsScript: "node_modules/intl-tel-input/build/js/utils.js",

    });
    </script>

    <script src="./js/validate.js"></script>
</body>

</html>