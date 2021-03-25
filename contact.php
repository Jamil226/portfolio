<?php include 'lib/variables.php';?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo SiteTitle; ?></title>
    <meta name="description" content="<?php echo Description; ?>">
    <meta name="keywords" content="<?php echo Keywords; ?>">
    <meta name="author" content="<?php echo Author; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/plugins/line-awesome.min.css">
    <link rel="stylesheet" href="assets/css/plugins/icofont.min.css">
    <link rel="stylesheet" href="assets/css/plugins/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/plugins/odometer.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="main-wrapper">
     <?php include 'include/header.php';?>
     <div class="overlay"></div>
     <div class="section contact-section bg-dark">
        <div class="contact-bg" style="background-image: url(assets/images/contact-bg.jpg);"></div>

        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-7">
                    <div class="contact-section-wrapper wow fadeInRight" data-wow-delay="0.3s" data-wow-duration="1.5s">
                        <div class="contact-info">
                            <span class="mail"><a href="mailto:<?php echo Email; ?>"><?php echo Email; ?></a></span>
                            <span class="number"><a href="tel:<?php echo Phone; ?>"><?php echo Phone; ?></a></span>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" action="andy-contact.php" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="name" placeholder="Enter your name..." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" name="email" placeholder="youemail@domain.com" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <input type="text" name="subject" placeholder="Subject (optional)" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea name="message" placeholder="Here goes your message"></textarea>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="form-btn">
                                            <button type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="contact-social">
                            <ul>
                                <li><a class="dribbble" href="#">Dribbble</a></li>
                                <li><a class="behance" href="#">Behance</a></li>
                                <li><a class="twitter" href="#">Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#" class="back-to-top">
    <i class="ion-android-arrow-up"></i>
</a>
<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
<script src="assets/js/plugins/popper.min.js"></script>
<script src="assets/js/plugins/bootstrap.min.js"></script>
<script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/appear.js"></script>
<script src="assets/js/plugins/validate.js"></script>
<script src="assets/js/plugins/odometer.min.js"></script>
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
<script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/plugins/wow.js"></script>
<script src="assets/js/plugins/ajax-contact.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>