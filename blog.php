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
        <div class="section">
            <div class="container">
                <div class="page-banner-title">
                    <h2 class="title">Time to write, share & discuss</h2>
                </div>
                <div class="filter-menu">
                    <ul class="menu-list">
                        <li class="active" data-filter="*">all</li>
                        <li data-filter=".news">news</li>
                        <li data-filter=".inspiration">inspiration</li>
                        <li data-filter=".experience">experience</li>
                        <li data-filter=".community">community</li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="blog-section mt-n4">
                    <div class="row grid gx-10">
                        <div class="col-lg-6 news experience">
                            <div class="single-blog wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="blog-images">
                                    <a href="blog-details.php"><img src="assets/images/blog/blog-1.jpg" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">April 25th, 2024</a></li>
                                        <li><a href="#">admin</a></li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.php">Standard article with image format</a></h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...</p>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-6 inspiration community">
                            <!-- Single Blog Start -->
                            <div class="single-blog wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="blog-images">
                                    <a href="blog-details.php"><img src="assets/images/blog/blog-2.jpg" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">April 25th, 2024</a></li>
                                        <li><a href="#">admin</a></li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.php">Standard article with image format</a></h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...</p>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-12 news community">
                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <div class="blog-images">
                                    <a href="blog-details.php"><img src="assets/images/blog/blog-7.jpg" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">April 25th, 2024</a></li>
                                        <li><a href="#">admin</a></li>
                                    </ul>
                                    <h3 class="title"><a href="blog-details.php">Standard article with image format</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate..</p>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-6 experience">
                            <!-- Single Blog Start -->
                            <div class="single-blog wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="blog-images">
                                    <a href="project-details.php"><img src="assets/images/blog/blog-3.jpg" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">April 25th, 2024</a></li>
                                        <li><a href="#">admin</a></li>
                                    </ul>
                                    <h3 class="title"><a href="project-details.php">Standard article with image format</a></h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...</p>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-6 inspiration community">
                            <!-- Single Blog Start -->
                            <div class="single-blog wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="blog-images">
                                    <a href="project-details.php"><img src="assets/images/blog/blog-4.jpg" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">April 25th, 2024</a></li>
                                        <li><a href="#">admin</a></li>
                                    </ul>
                                    <h3 class="title"><a href="project-details.php">Standard article with image format</a></h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...</p>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-6 news inspiration">
                            <!-- Single Blog Start -->
                            <div class="single-blog wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="blog-images">
                                    <a href="project-details.php"><img src="assets/images/blog/blog-5.jpg" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">April 25th, 2024</a></li>
                                        <li><a href="#">admin</a></li>
                                    </ul>
                                    <h3 class="title"><a href="project-details.php">Standard article with image format</a></h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...</p>
                                </div>
                            </div>
                            <!-- Single Blog End -->
                        </div>
                        <div class="col-lg-6 news experience">
                            <!-- Single Blog Start -->
                            <div class="single-blog wow zoomIn" data-wow-delay="0.3s" data-wow-duration="0.5s">
                                <div class="blog-images">
                                    <a href="project-details.php"><img src="assets/images/blog/blog-6.jpg" alt="Blog"></a>
                                </div>
                                <div class="blog-content">
                                    <ul class="meta">
                                        <li><a href="#">news</a></li>
                                        <li><a href="#">April 25th, 2024</a></li>
                                        <li><a href="#">admin</a></li>
                                    </ul>
                                    <h3 class="title"><a href="project-details.php">Standard article with image format</a></h3>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat...</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="load-more text-center section-padding">
                    <a href="#" class="more">load more</a>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php';?>
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