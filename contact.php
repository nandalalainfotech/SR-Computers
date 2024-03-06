<?php
ob_start();
?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
    
$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$phone = htmlentities($_POST['phone']);
$message = htmlentities($_POST['message']);
$mail = new PHPMailer();
$mail->IsSMTP();  
$mail->SMTPDebug = 0;
$mail->Mailer = "smtp";
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPAuth = true; 
$mail->Username = "dummymail071@gmail.com"; // From
$mail->Password = "scjvjemhhsjhzrtr"; 
$mail->AddAddress("dummymail071@gmail.com","SRComputers"); // To
$mail->SetFrom($email);
$name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
$senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
$phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
$services = isset($_POST['services']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['services']) : "";
$subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
$address = isset($_POST['address']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['address']) : "";
$website = isset($_POST['website']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['website']) : "";
$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";
$mail->Subject = 'A contact request send by ' . $name;
$mail->Body .= 'Name: ' . $name . "\n";
$mail->Body .= 'Email: ' . $senderEmail . "\n";
$mail->Body .='Phone:' . $phone . "\n";
$mail->Body .= 'Message: ' . "\n" . $message;
$mail->WordWrap = 50;

if(!$mail->Send()) {
echo 'Message was not sent.';
} else {

echo "<script>
alert('Thanks for contacting us. We will contact you ASAP!');
</script>";
}
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> SR Computers || Systems & Networking Services at Trichy || IT Solutions  </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Insur HTML 5 Template " />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/insur-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/insur-two-icon/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/timepicker/timePicker.css" />
    <link rel="stylesheet" href="assets/vendors/ion.rangeSlider/css/ion.rangeSlider.min.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous"
  />

    <!-- template styles -->
    <link rel="stylesheet" id="langLtr" href="assets/css/insur.css" />
    <link rel="stylesheet" href="assets/css/insur-responsive.css" />
    <link rel="stylesheet" href="assets/whatsapp/whatsapp.css" />

    <script
    type="text/javascript"
    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"
  ></script>
  <script type="text/javascript">
    (function () {
      emailjs.init("9JfDxk7Rw4WLI8EcW");
    })();
  </script>

</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <style>
        .green{
            color: green;
        }
        .green:hover{
            color: white;
        }
    </style>


    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->


    <div class="page-wrapper">
        <header class="main-header clearfix">
            <nav class="main-menu clearfix" >
                <div class="main-menu__wrapper clearfix">
                    <div class="container">
                        <div class="main-menu__wrapper-inner clearfix">
                            <div class="main-menu__left">
                                <div class="main-menu__logo" style="margin-left: -30px; margin-top: -10px;">
                                    <a class = "sr_title" href="index.html"><img src="assets/images/computer/logo-1.jpeg" alt=""></a>
                                </div>
                                <div class="main-menu__main-menu-box" style="margin-left: 10px;">
                                    <div class="main-menu__main-menu-box-inner">
                                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                                        <ul class="main-menu__list">
                                            <li >
                                                <a href="index.html">Home </a>
                                            </li>
                                            <li >
                                                <a href="aboutus.html">About Us</a>
                                               
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Solution</a>
                                                <ul>
                                                    <li><a href="networking-solutions.html">Networking Solutions</a></li>
                                                    <li><a href="security-solutions.html">Security Solutions</a></li>
                                                    <li><a href="unified-communications.html">Unified Communications</a></li>
                                                    <li><a href="data-center-solutions.html">Data Center Solutions</a></li>
                                                    <li><a href="mobility-solutions.html">Mobility Solutions</a></li>
                                                 </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#">Services </a>
                                                <ul>
                                                    <li><a href="consulting-services.html">Consulting Services</a></li>
                                                    <li><a href="hosting-services.html">Hosting Services</a></li>
                                                    <li><a href="it-consulting-services.html">IT Consulting Services</a></li>
                                                    <li><a href="it-infrastructure-assesment.html">IT Infrastructure Assesment</a></li>
                                                    <li><a href="network-audit.html">Network Audit</a></li>
                                                    <li><a href="remote-infrastructure-monitoring.html">Remote Infrastructure Monitoring (RIM)</a></li>
                                                </ul>
                                            </li>
                                            <li >
                                                <a href="partners.html">Partners</a>
                                            </li>
                                            <li >
                                                <a href="clients.html">Clients</a>
                                            </li>
                                            <li class = "contact_web" >
                                                <a href="contact.php">Contact Us</a>
                                            </li>
                                         
                                        </ul>
                                    </div>
                                    <div class="main-menu__main-menu-box-search-get-quote-btn">
                                        <!-- <div class="main-menu__main-menu-box-search">
                                            <a href="#"
                                                class="main-menu__search search-toggler icon-magnifying-glass"></a>
                                            <a href="cart.html"
                                                class="main-menu__cart insur-two-icon-shopping-cart"></a>
                                        </div> -->
                                        <div class="main-menu__main-menu-box-get-quote-btn-box">
                                            <a href="contact.php"
                                                class="thm-btn main-menu__main-menu-box-get-quote-btn">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__right">
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon">
                                        <a href="https://wa.me/8637455464" target="_blank"><i class="fab fa-whatsapp green"></i></a>
                                    </div>
                                    <div class="main-menu__call-content">
                                        <a href="tel:9442723025">+91 9442723025</a>
                                        <p>Call to Our Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!--Page Header Start-->
        <section class="page-header" style="padding: 150px;">
            <div class="page-header-bg" style="background-image: url(assets/images/computer/contact-banner.jpg)">
            </div>
 
        </section>
        <!--Page Header End-->
        <a href="https://wa.me/9442723025" target="_blank" class="wppBtn pulse"></a>
        <!--Contact Page Start-->
        <section class="contact-page">
            <div class="container">
                <div class="row" style = "margin-top: -60px">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-page__left">
                            <div class="section-title text-left">
                            <div class="services-two-shape-1"
        style="background-image: url(assets/images/shapes/services-two-shape-1.png);"></div>
                                <div class="section-sub-title-box">
                           
                                    <p class="section-sub-title" >Contact </p>
                           
                               
                                <div class="section-title-shape-1">
                                    <img src="assets/images/shapes/section-title-shape-5.png" alt="">
                                </div>
                                <div class="section-title-shape-2">
                                    <img src="assets/images/shapes/section-title-shape-6.png" alt="">
                                </div>
                                </div>
                                <h2 class="section-title__title">Get in touch with our experts</h2>
                            </div>
                            <div class="contact-page__call-email">
                                <!-- <div class="contact-page__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div> -->
                            </div>
                            <div class="contact-page__call-email-content">
                                <h4>
                                    <a href="tel:+918637455464" class="contact-page__call-number">+91 8637455464 </a>
                                    <a href="mailto:srcomputertrichy@gmail.com"
                                        class="contact-page__email">srcomputertrichy@gmail.com</a>
                                </h4>
                            </div>
                            <p class="contact-page__location-text">Flat No.9, Bharath Complete, 
                              First Floor, 
                                Annai Nagar,
                                 Balaji Nagar,
                                  Balaji Nagar Bus Stop,
                                   Tanjai Main Road,
                                    Kattur,Trichy-620019</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7">
                        <div class="contact-page__right">
                            <div class="contact-page__form">
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post"  class="comment-one__form contact-form-validated">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Your Name" id="name"
                                                    name="name" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="comment-form__input-box">
                                                <input type="email" placeholder="Email address" id="email" name="email"
                                                pattern="[^@\s]+@[^@\s]+\.[^@\s]+" autocomplete="off" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box">
                                                <input type="text" placeholder="Phone number" id="phone" name="phone"
                                                pattern="[1-9]{1}[0-9]{9}" autocomplete="off" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="comment-form__input-box text-message-box">
                                                <textarea name="message" placeholder="Write a message"
                                                autocomplete="off" id="message" required></textarea>
                                            </div>
                                                <button type="submit" class="thm-btn comment-form__btn" >
                                                    Send Message
                                                </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Page End-->

        <!--Google Map Start-->
        <section class="google-map-two">
            <!-- <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2831.167704442344!2d-106.9571444488256!3d44.797770778996174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5335fabc2a655555%3A0x884dab5931194ea2!2s30%20N%20Gould%20St%20%233815%2C%20Sheridan%2C%20WY%2082801%2C%20USA!5e0!3m2!1sen!2sin!4v1672938299567!5m2!1sen!2sin"
                class="google-map__two" allowfullscreen></iframe> -->
                <iframe class="google-map__two" allowfullscreen src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1959.581180260874!2d78.747856!3d10.798874!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTDCsDQ3JzU1LjkiTiA3OMKwNDQnNTQuMyJF!5e0!3m2!1sen!2sin!4v1678948979634!5m2!1sen!2sin" ></iframe>
        </section><br>
        <!--Google Map End-->
        <!--CTA One Start-->
        <section class="cta-one cta-three">
            <div class="container">
                <div class="cta-one__content">
                    <div class="cta-one__inner">
                        <div class="cta-one__left">
                            <h3 class="cta-one__title">Feel free to Contact Us</h3>
                        </div>
                        <div class="cta-one__right">
                            <div class="cta-one__call">
                                <div class="cta-one__call-icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="cta-one__call-number">
                                    <a href="tel:+918637455464">+91 8637455464</a>
                                    <p>Call to Our Experts</p>
                                </div>
                            </div>
                            <div class="cta-one__btn-box">
                                <a href="#" class="thm-btn cta-one__btn">Get in Touch</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->


        

       <!--Site Footer Start-->
       <footer class="site-footer">
        <div class="site-footer-bg" style="background-image: url(assets/images/backgrounds/site-footer-bg.png);">
        </div>
        <div class="container">
            <div class="site-footer__top">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-md-6 wow sm-footer_mbl fadeInUp" data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about" style  = "margin-left:15px">
                            <div class="footer-widget__logo">
                                <a href="index.html"><img class = "sr1_title" src="assets/images/resources/footer-logo.png" alt=""></a>
                            </div>
                            <div class="footer-widget__about-text-box">
                                <p class="footer-widget__about-text p-tag">Creating a product or service that fulfills a
                                    consumer need is necessary for a small business to achieve success, but a strong
                                    concept alone is not enough to ensure profitability. Small businesses have to
                                    convince consumers to try a new product and find ways to deliver those products
                                    to consumers to be successful.</p>
                            </div>
                            <div class="site-footer__social site-footer__social_mbl ">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                        <div class="footer-widget__column footer-widget__contact clearfix" style = "margin-left:45px">
                            <h3 class="footer-widget__title contact_mbl footer-widget-title-mbl">Contact</h3>
                            <ul class="footer-widget__contact-list list-unstyled clearfix">
                                <li>
                                    <div class="icon mail_mbl">
                                        <span class="icon-email"></span>
                                    </div>
                                    <div class="text">
                                        <p><a href="mailto:needhelp@company.com">srcomputertrichy@gmail.com</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon mail_mbl">
                                        <span class="icon-pin"></span>
                                    </div>
                                    <div class="text">
                                        <p>Flat No. 9 , Bharath Complete, 
                                            First Floor, 
                                              Annai Nagar,
                                               Balaji Nagar,
                                                Balaji Nagar Bus Stop,
                                                 Tanjai Main Road,
                                                  Kattur,Trichy-620019</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="footer-widget__open-hour">
                                <h3 class="footer-widget__open-hour-title contact_mbl">Open Hours</h3>
                                <h3 class="footer-widget__open-hour-text mail_mbl ">Mon – Sat: 9:00 am to 9:00 pm Sunday:
                                    Closed</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                        <div class="footer-widget__column footer-widget__gallery clearfix" style = "margin-left: 50px;">
                            <!-- <h3 class="footer-widget__title contact_mbl">Widgets</h3> -->
                            <h3 class="footer-widget__title contact_mbl">Solutions</h3>
                            <ul class="footer-widget__gallery-list solution-footer_mbl list-unstyled clearfix" style = "margin-top:-12px">
                                <a class="footer-widget__open-hour-text mail_mbl" href="networking-solutions.html">Networking
                                    Solutions</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="security-solutions.html">Security
                                    Solutions</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="unified-communications.html">Unified
                                    Communications</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="data-center-solutions.html">Data
                                    Center Solutions</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="mobility-solutions.html">Mobility
                                    Solutions</a>
                                <!-- <li>
                                    <div class="footer-widget__gallery-img footer_widgets">
                                        <img  src="assets/images/resources/footer-widget-gallery-img-1.jpg" alt="">
                                        <a href="#"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__gallery-img footer_widgets">
                                        <img src="assets/images/resources/footer-widget-gallery-img-2.jpg" alt="">
                                        <a href="#"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__gallery-img footer_widgets">
                                        <img src="assets/images/resources/footer-widget-gallery-img-3.jpg" alt="">
                                        <a href="#"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__gallery-img footer_widgets">
                                        <img src="assets/images/resources/footer-widget-gallery-img-4.jpg" alt="">
                                        <a href="#"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__gallery-img footer_widgets">
                                        <img src="assets/images/resources/footer-widget-gallery-img-5.jpg" alt="">
                                        <a href="#"><span class="fa fa-link"></span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-widget__gallery-img footer_widgets">
                                        <img src="assets/images/resources/footer-widget-gallery-img-6.jpg" alt="">
                                        <a href="#"><span class="fa fa-link"></span></a>
                                    </div>
                                </li> -->
                            </ul><br>
                            <div class="footer-widget__column footer-widget__newsletter">
                                <div class="footer-widget__phone icon_mbl ">
                                    <div class="footer-widget__phone-icon ">
                                        <span class="icon-telephone tel_icon_mbl  style = "margin-left:-15px"></span>
                                    </div>
                                    <div class="footer-widget__phone-text">
                                        <a href="tel:8637455464">+91 8637455464</a>
                                        <p>Call to Our Experts</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="footer-widget__column service-footer_mbl footer-widget__gallery clearfix">
                            <h3 class="footer-widget__title contact_mbl service_mbl service2-footer_mbl">Services</h3>
                            <div class="footer-widget__open-hour  style = "margin-top:-12px">
                                <a class="footer-widget__open-hour-text mail_mbl" href="consulting-services.html">Consulting
                                    Services</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="hosting-services.html">Hosting
                                    Services</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="it-consulting-services.html">IT
                                    Consulting Services</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="it-infrastructure-assesment.html">IT
                                    Infrastructure Assesment</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="network-audit.html">Network Audit</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="remote-infrastructure-monitoring.html">Remote Infrastructure Monitoring</a>
                            </div>
                            <!-- <div class="footer-widget__open-hour">
                                <h3 class="footer-widget__open-hour-title contact_mbl service_mbl">Solution</h3>
                                <a class="footer-widget__open-hour-text mail_mbl" href="networking-solutions.html">Networking
                                    Solutions</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="security-solutions.html">Security
                                    Solutions</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="unified-communications.html">Unified
                                    Communications</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="data-center-solutions.html">Data
                                    Center Solutions</a><br>
                                <a class="footer-widget__open-hour-text mail_mbl" href="mobility-solutions.html">Mobility
                                    Solutions</a>
                            </div> -->
                        </div>

                    </div>
                </div>
            </div>

            <div class="site-footer__bottom">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner " class = "footer_text" style = "text-align:inherit">
                                   <span  class = "copy_right copy_right_web">
                    © All Copyright 2024 by
                    <a href="#" style = "color: var(--insur-white);">SR Computers</a>
                </span>
                <span class = "designed_mobile designed_web">Designed by</span>
                <a target="_blank" href="https://nandalalainfotech.com/">
                    <img src="assets/images/computer/Nanda_logo.png"
                    class = "width_web width_mbl"></a>
                        </div>
                    </div>
                </div>
            </div>
      
            
        </div>
</div>
</footer>
    <!--Site Footer End-->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/computer/sr_computer2.png" width="143"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">srcomputertrichy@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:9442723025">+91 9442723025</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/odometer/odometer.min.js"></script>
    <script src="assets/vendors/swiper/swiper.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.min.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/vendors/bxslider/jquery.bxslider.min.js"></script>
    <script src="assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="assets/vendors/vegas/vegas.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/timepicker/timePicker.js"></script>
    <script src="assets/vendors/circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/circleType/jquery.lettering.min.js"></script>
    <script src="assets/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    
    
    

    <!-- template js -->
    <script src="assets/js/insur.js"></script>
    <script src="assets/whatsapp/whatsapp.js"></script>
    <script src="index.js"></script>
</body>

</html>