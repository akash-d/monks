<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="css/style.css" media="screen,projection" />
    <link href="plugins/fancybox/css/jquery.fancybox.css" rel="stylesheet">
    <link href="font/proxima/stylesheet.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.png" type="image/gif" sizes="32x32">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <script src="/c-panel/js/custom.js"></script>

    <title>Monks On Wheels</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    <a class="navbar-brand hidden-xs hidden-sm" href="index.php"><img src="images/logo.png" alt="logo" /></a>
                    <a class="navbar-brand hidden-md hidden-lg" href="index.php"><img src="images/logo-mobile.png" alt="logo mobile" /></a>
                    <a class="hidden-sm hidden-md hidden-lg float-right-image blue-btn" href="">Book now</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://monksonwheels.com/about.php">About Us</a></li>
                        <li><a href="http://monksonwheels.com/#getHere">Events</a></li>
                        <li><a href="http://monksonwheels.com/#testimonials">Testimonials</a></li>
                        <!--<li><a href="#">Team</a></li>-->
                        <li><a href="contact.php">Contact Us</a></li>
                        <li class="hidden-xs"><a class="blue-btn" href="https://www.eventshigh.com/bangalore/monks+on+wheels">Book now</a></li>
                        <!--<li class="call-li hidden-xs" style="position: relative;">
                            <a class="call-btn" href="tel:080123456"><span class="sprite call"></span></a>
                            <div class="pos-abs" id="call-div">
                                <div class="dialogue-box">
                                    <div class="triangle-holder">
                                        <div class="triangle"></div>
                                    </div>
                                    <p class="doubt">Have a doubt about something on our website?</p>
                                    <p class="bold">Call us at : <span><a class="call-btn" href="tel:080123456">080 - 123456</a></span></p>
                                </div>
                            </div>
                        </li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="section-sixth no-bg contact">
        <div class="container">
            <div class="content-holder">
                <h2 class="headings">Contact us</h2>
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                        <div class="contact-us-div">
                            <form>
                                <h4>Send us a mail</h4>
                                <div class="form-group">
                                    <label for="p1">Name</label>
                                    <input type="text" id="name" name="name" class="form-control input-fields">
                                    <div id="error-name"></div>
                                </div>
                                <div class="form-group">
                                    <label for="pass2">Email</label>
                                    <input type="email" name="email" id="email" class="form-control input-fields">
                                    <div id="error-email"></div>
                                </div>
                                <div class="form-group">
                                    <label for="pass3">Contact number </label>
                                    <input type="number" class="form-control input-fields" id="mobile" name="mobile">
                                    <div id="error-mobile"></div>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control input-fields" rows="4" name="message" id="message"></textarea>
                                    <div id="error-message"></div>
                                </div>
                                <div style="padding-top: 10px;">
                                    <button type="button" class="blue-small-btn" style="min-width: 150px;" id="submit" name="submit" onclick="contact_validate()">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <div class="contact-us-div less-padding">
                            <h4>Address</h4>
                            <address>
                                    Monks Technologies Pvt. Ltd. <br> <br class="hidden-sm hidden-xs">                          
                                    #186/4, JC Complex annexe, Room 102, ground floor,<br>
                                    Sirur Park road, Seshadripuram,<br>
                                    Bengaluru, 560020<br>
                                     
                                </address>
                            <div class="row mail-phone">
                                <div class="col-md-4 col-lg-4 col-xs-12">
                                    <h4>Mail</h4>
                                    <a href="mailto:monksonwheels@gmail.com">monksonwheels@gmail.com</a>
                                </div>
                                <div class="col-md-8 col-lg-8 col-xs-12">
                                    <h4>Phone</h4>
                                    <a href="tel:+919036104829">9538157494, 9663157075, 9036104829, 8892108981, 8904433063</a>
                                </div>
                            </div>
                            <h4>Locate us</h4>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15551.962028920805!2d77.6375459!3d12.9724588!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfb6ca575d2c8875c!2sKoovs+Marketing+Consulting+Pvt+Ltd!5e0!3m2!1sen!2sin!4v1495288334237" height="250"
                            frameborder="0" style="border:0;width: 100%" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <ul class="footer-links">
                <li class="wow fadeIn" data-wow-delay=".1s"><a href="about.php">ABOUT US</a></li>
                <li class="wow fadeIn" data-wow-delay=".3s"><a href="terms.php">TERMS & CONDITIONS</a></li>
                <li class="wow fadeIn" data-wow-delay=".5s"><a href="privacy.php">PRIVACY POLICY</a></li>
                <li class="wow fadeIn" data-wow-delay=".7s"><a href="contact.php">CONTACT US</a></li>
                <li class="floatr wow fadeIn" data-wow-delay=".9s">Copyright &copy; MOW.</li>
            </ul>
        </div>
    </footer>
    <script type="text/javascript" src="plugins/jquery/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/css/assets/javascripts/bootstrap.min.js"></script>
    <script src="plugins/fancybox/js/jquery.fancybox.js" /></script>
    <script type="text/javascript">
        $('.fancybox').fancybox();
        $(document).ready(function() {
            $(".featured-img-holder").hover(function() {
                $('.news-text').hide();
                var p = $(this).data('ele');
                var q = 'd' + p;
                $('.' + q).show();
                $('img').removeClass('no-opacity');
                $(this).children('img').addClass('no-opacity');
            });
            $("#e1").click(function() {
                $(this).hide();
                $('#l1').fadeIn();
            });
            $("#e2").click(function() {
                $(this).hide();
                $('.hideon').hide();
                $('#l2').fadeIn();
                $('.f1').css('border', 'none');
                $('.f1').css('padding-bottom', '0px');
            });
            $('.new-user-login').click(function() {
                $('#apply-save-text').php('To apply for scholarships');
            });
        });
    </script>
</body>

</html>
