<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Hanawell Limited</title>
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
        <section id="contact" class="section-bg fadeInUp contact-page"> -->
            <section class="contact-page">
                <div class="container-fluid">
                    <div class="section-header">
                        <h3>Contact Us</h3>
                    </div>

                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-8 mx-auto">
                            <div class="title text-center">
                                <h2>How can we assist you?</h2>
                                <p>Have any question? Get in touch with us.</p>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center align-items-start">
                        <div class="col-md-6">
                            <form name="contact" action="test.php" method="POST" enctype="multipart/form-data"
                                class="form" onsubmit="return validate()" autocomplete="off">
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
                                            <input type="text" class="form-control" name="phone"
                                                placeholder="0777XXXXXX" />
                                            <div class="errormessage" id="phoneerror"></div>
                                        </div>
                                    </div>
                                    <div class="contact-item">
                                        <span class="icon icon-default icon-sm"><i
                                                class="fa fa-question-circle"></i></span>
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
                                        <input type="submit" name="submit" value="Send"
                                            class="btn btn-primary button" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 mb-5">
                            <div class="contact-box h-100  px-3 py-4">
                                <h3>Contact Details</h3>
                                <div class="contact-info ">
                                    <div class="contact-box-icon"><i class="fa fa-map-marker"></i></div>
                                    <h5 class="mb-2">Address</h5>
                                    <p>First Floor, Rehema Place, Kindaruma Road, Opposite Prestige Plaza, Ngong Rd,
                                        Nairobi<br>P. O. Box 14625 -
                                        00800,<br>Nairobi.</p>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-box-icon"><i class="fa fa-envelope-o"></i></div>
                                    <h5 class="mb-2">E-mail</h5>
                                    <p>info@bespokecreditfinance.com</p>
                                </div>
                                <div class="contact-info">
                                    <div class="contact-box-icon"><i class="fa fa-phone"></i></div>
                                    <h5 class="mb-2">Phone</h5>
                                    <p>(+254) 777-657555</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d543.5245160515618!2d37.23631079212137!3d-0.4757162442990184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMjgnMzIuOCJTIDM3wrAxNCcxMi40IkU!5e0!3m2!1sen!2ske!4v1606810727759!5m2!1sen!2ske"
                                width="1100" height="500" frameborder="0" style="border:0;" allowfullscreen=""
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