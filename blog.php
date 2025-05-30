<?php
include 'db_con.php';

if (isset($_GET['page_url']))
{

    $page_url = mysqli_real_escape_string($con, $_GET['page_url']);

    $blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
    $blog_result = mysqli_query($con, $blog_query);

    if ($blog_result && mysqli_num_rows($blog_result) > 0)
    {
        $blog = mysqli_fetch_assoc($blog_result);

        $image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
        $image_result = mysqli_query($con, $image_query);

        ?>


        <?php
    } else
    {

        echo "<p>Product not found.</p>";
    }
} else
{

    echo "<p>No product URL provided.</p>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="..\assets\images\bridge house.svg" type="image/x-icon">
    <link rel="icon" href="..\assets\images\bridge house.svg" type="image/x-icon">
    <!-- #title -->
    <title><?php echo $blog['blog_desc_first'] ?></title>
    <!-- #keywords -->
    <meta name="<?php echo $blog['blog_point_one'] ?>" content="s">
    <!-- #description -->
    <meta name="<?php echo $blog['blog_desc_second'] ?>" content="">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400..700;1,400..700&amp;family=Montserrat:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet">
    <!-- color themes -->
    <link rel="stylesheet" href="../assets/css/blue-theme.css" id="switch-color">
    <!-- main css -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <!-- jquery -->
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .gallery ul {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }

        .gallery ul li {
            list-style: none;
            font-size: 20px;
            font-family: "Roboto", serif;
            background-color: rgb(215, 215, 215);
            margin: 5px;
            padding: 8px 20px;
            cursor: pointer;
            letter-spacing: 1px;
            transition: 0.4s linear;
        }

        .gallery ul li:hover {
            background-color: #FBBB09;
        }

        .gallery ul li.active {
            background-color: rgb(0, 81, 255);
            color: white;
        }

        .gallery-items-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .gallery-items {
            position: relative;
            width: 28%;
            height: 300px;
            margin: 5px;
            border: 3px solid #000000;
            border-radius: 3px;
        }

        .gallery-items img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media screen and (max-width:800px) {
            .gallery-items {
                position: relative;
                width: 38%;
                height: 300px;
                margin: 5px;
                object-fit: cover;
            }
        }

        @media screen and (max-width:450px) {
            .gallery-items {
                position: relative;
                width: 47%;
                height: 180px;
                margin: 5px;
                object-fit: cover;
            }
        }

        .text-justify {
            text-align: justify;
        }

        .main-header__topbar .main-header__topbar__content-wrapper::after {
            background: none;
            background-color: none;
        }

        .main-header__topbar {
            background-color: #004f8a;
        }

        .about .about__content-single {
            padding: 15px 20px 15px 30px;
        }

        @media only screen and (min-width: 1200px) {
            .main-header__menu .container {
                max-width: 1300px;
            }
        }

        @media only screen and (min-width: 992px) {
            .main-header__menu .navbar::after {
                background: linear-gradient(0deg, #ec1e20, #004f8a);
            }

            .main-header__menu .main-header__menu-box {
                padding-left: 275px;
            }
        }


        .sticky-footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 50px;
            border-top: 1px solid #ddd;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .phone-link {
            flex: 1;
            text-decoration: none;
            color: #004f8a;
            font-size: 1rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            height: 100%;
            background-color: white;
        }

        .demo-btn {
            flex: 1;
            height: 100%;
            color: #ffffff;
            font-size: 1rem;
            font-weight: bold;
            border: none;
            cursor: pointer;
            background: linear-gradient(to right, #ec1e20, #004f8a);
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .char-error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }

        @media (max-width: 768px) {

            .phone-link,
            .demo-btn {
                font-size: 0.9rem;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .whatsapp-float {
                bottom: 130px;
            }

            .achievement-wrapper.style3 .achievement-contact-meta {
                margin-top: -195px;
            }
        }

        @media screen and (min-width:500px) {
            .res-dd-none {
                display: none !important;
            }

        }

        .property-details__sidebar .widget-alter .thumb-wrapper img {
            width: 137px;
            min-width: 0px;
            height: 59px;
            border-radius: 0%;
        }

        .property-details__sidebar .widget-alter .content span {
            font-weight: 700;
            color: var(--quaternary-color);
            margin-top: 28px;
        }

        .property-details__sidebar .widget-alter::before {
            height: 342px;
        }

        .property-details__sidebar .widget-alter::after {
            height: 369px;
        }

        .property-details {
            padding: 0px 0px;
            background-color: var(--white);
        }
    </style>
</head>

<body>

    <div class="page-wrapper">
        <!-- preloader start -->
        <div class="preloader"></div>
        <!-- / preloader start -->
        <!-- ==== header start ==== -->
        <header class="main-header">
            <div class="main-header__topbar d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-header__topbar__content">
                                <div class="main-header__topbar__content-wrapper">
                                    <ul class="main-header__topbar__list">
                                        <li> <a href="https://crm.bridgehouse.in/" target="_blank"><img width="28"
                                                    height="28"
                                                    src="https://img.icons8.com/sf-regular/48/FFFFFF/login-rounded-right.png"
                                                    alt="login-rounded-right" />Login</a>
                                        </li>

                                    </ul>

                                </div>
                                <div class="social">
                                    <a href="#" aria-label="share us on facebook" title="facebook">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                    <a href="#" aria-label="share us on twitter" title="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="#" aria-label="share us on instagram" title="instagram">
                                        <i class="flaticon-instagram"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header__menu">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-header__menu-box">
                                <nav class="navbar p-0">
                                    <div class="navbar-logo d-block d-lg-none">
                                        <a href="#">
                                            <img src="..\assets\images\bridge house.png" alt="Image" id="logo-mobile"
                                                style="height: 45px !important;">
                                        </a>
                                    </div>
                                    <div class="navbar__menu d-none d-xl-block">
                                        <ul class="navbar__list">
                                            <li class="navbar__item nav-fade">
                                                <a href="index.php">Home</a>

                                            </li>

                                            <li class="navbar__item nav-fade">
                                                <a href="about-us.php">About Us</a>
                                            </li>
                                            <li class="navbar__item navbar__item--has-children nav-fade">
                                                <a href="#" aria-label="dropdown menu"
                                                    class="navbar__dropdown-label dropdown-label-alter"><span
                                                        onclick="window.location.href='#';" class="fw-bold">Industries
                                                        We Serve</span>
                                                </a>
                                                <ul class="navbar__sub-menu">
                                                    <li>
                                                        <a href="real-estate.php">Real Estate</a>
                                                    </li>
                                                    <li>
                                                        <a href="insurance.php">Insurance</a>
                                                    </li>
                                                    <li>
                                                        <a href="finance.php">Finance</a>
                                                    </li>
                                                    <li>
                                                        <a href="investment.php">Investment</a>
                                                    </li>
                                                    <li>
                                                        <a href="it.php">IT</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Legal</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="navbar__item nav-fade">
                                                <a href="#">Work With Us</a>
                                            </li>

                                            <li class="navbar__item nav-fade">
                                                <a href="blogs.php">Blog</a>

                                            </li>
                                            <li class="navbar__item nav-fade">
                                                <a href="contact-us.php">Contact</a>
                                            </li>
                                            <li class="navbar__item nav-fade d-flex d-xl-none">
                                                <a target="_blank" href="https://crm.bridgehouse.in/"><img width="28"
                                                        height="28"
                                                        src="https://img.icons8.com/sf-regular/48/0000/login-rounded-right.png"
                                                        alt="login-rounded-right" /> Login</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="navbar__options">
                                        <div class="navbar__mobile-options d-none d-xl-block">
                                            <div class="contact-btn">
                                                <div class="contact-icon">
                                                    <i class="flaticon-phone-call"></i>
                                                </div>
                                                <div class="contact-content">
                                                    <p>Call Us Now</p>
                                                    <a href="tel:9919487700">+91 99194 87700</a>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="open-offcanvas-nav d-flex d-xl-none"
                                            aria-label="toggle mobile menu" title="open offcanvas menu">
                                            <span class="icon-bar top-bar"></span>
                                            <span class="icon-bar middle-bar"></span>
                                            <span class="icon-bar bottom-bar"></span>
                                        </button>
                                    </div>
                                </nav>
                                <div class="logo d-none d-lg-flex">
                                    <a href="#">
                                        <img src="..\assets\images\logo_white.png" alt="Image" id="logo"
                                            style="height: 75px !important; ">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==== mobile menu start ==== -->
            <div class="mobile-menu d-block d-xl-none">
                <nav class="mobile-menu__wrapper">
                    <div class="mobile-menu__header nav-fade">
                        <div class="logo">
                            <a href="#" aria-label="home page" title="logo">
                                <img src="assets/images/bridge house.png" alt="Image" id="logo-mobile">
                            </a>
                        </div>
                        <button aria-label="close mobile menu" class="close-mobile-menu">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="mobile-menu__list"></div>
                    <div class="mobile-menu__social social nav-fade">
                        <a href="#" aria-label="share us on facebook" title="facebook">
                            <i class="flaticon-facebook"></i>
                        </a>
                        <a href="#" aria-label="share us on twitter" title="twitter">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" aria-label="share us on instagram" title="instagram">
                            <i class="flaticon-instagram"></i>
                        </a>

                    </div>
                </nav>
            </div>
            <div class="mobile-menu__backdrop"></div>
            <!-- ==== / mobile menu end ==== -->
        </header>
        <!-- ==== / header end ==== -->
        <!-- ==== banner start ==== -->
        <section class="common-banner" data-background="../assets/images/background/project-background-image.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="common-banner__inner">
                            <h2 class="title-animation">Project Details</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Project Details
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== / banner end ==== -->
        <!-- ==== property details start ==== -->
        <section class="property-details mt-5">
            <div class="container">
                <div class="row vertical-column-gap-lg">
                    <div class="col-12 col-xl-8">
                        <div class="property-details__content">

                            <div class="property-details__poster" data-aos="fade-up" data-aos-duration="1200">
                                <?php
                                $image_row = mysqli_fetch_assoc($image_result);
                                if ($image_row)
                                {
                                    echo "<img src='blog_uploads/{$image_row['image']}' alt='Blog Image' style='height:400px;'/> ";
                                } else
                                {
                                    echo "<p>No product images available.</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="property-details__sidebar">
                            <div class="property-details__widget widget-alter" data-aos="fade-up"
                                data-aos-duration="1200" data-aos-delay="400">
                                <div class="thumb-wrapper">
                                    <span class="sub-title">Contact</span>
                                    <div class="thumb">
                                        <a href="contact-us.html">
                                            <img src="..\assets\images\bridge house.png" alt="Image">
                                        </a>
                                    </div>
                                </div>
                                <div class="content">
                                    <span>Sweet Home</span>
                                    <!-- <h4><a href="team-details.html">Polly Matzinger -->
                                    </a>
                                    </h4>
                                    <p><a href="tel:+91 99194 87700"><i class="icon-mobile"></i> Call: +91 99194
                                            87700</a>
                                    </p>
                                    <p class="about-article"> For inquiries, visits, or to schedule a consultation,
                                        contact us now.
                                    </p>
                                    <div class="cta text-center">
                                        <a href="contact-us.html" class="btn--primary">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section style="padding:0px 0px;">
            <div class="container">
                <div class="row vertical-column-gap-lg mt-0">
                    <div class="col-12 col-xl-8 mt-0"></div>
                    <div class="property-details__article property-details__group" data-aos="fade-up"
                        data-aos-duration="1200">
                        <div class="property-header mb-4">
                            <h3 class="title-animation"><?php echo $blog['blog_heading'] ?></h3>
                        </div>
                        <div class="property-details__content">
                            <p>
                                <?php echo $blog['blog_desc_two'] ?>
                            </p>


                        </div>

                        <div class="property-details__group mb-5">
                            <div class="row justify-content-center">
                                <div class="col-12 col-xl-5 mt-5">
                                    <div class="section__header text-center">
                                        <!-- <span>Our Gallery</span> -->
                                        <h2 class="title-animation">Project Images</h2>
                                        <div class="icon-thumb justify-content-center">
                                            <div class="icon-thumb-single">
                                                <span></span>
                                                <span></span>
                                            </div>

                                            <div class="icon-thumb-single">
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="gallery-items-container">
                                <?php

                                mysqli_data_seek($image_result, 0);
                                while ($logo_row = mysqli_fetch_assoc($image_result))
                                {
                                    if (!empty($logo_row['logos']))
                                    {
                                        $imageSrc = 'blog_uploads/' . htmlspecialchars($logo_row['logos']);

                                        ?>
                                        <div class="gallery-items">

                                            <a href="<?php echo $imageSrc; ?>">
                                                <img src="<?php echo $imageSrc; ?>" alt="Image">
                                            </a>

                                        </div>
                                        <?php
                                    }
                                }
                                ?>



                            </div>
                        </div>
                    </div>
                </div>
        </section>


        <!-- ==== footer start ==== -->
        <footer class="footer">
    <div class="container">
        <div class="row vertical-column-gap-lg">
            <div class="col-12 col-md-6 col-xl-4">
                <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200">
                    <div class="footer__logo">
                        <a href="index.php">
                            <img src="..\assets\images\logo_white.png" alt="Image" style="height: 75px;">
                        </a>
                    </div>
                    <div class="footer__widget-content">
                        <p class="text-justify">Bridgehouse is a performance-focused marketing company that helps
                            businesses across industries grow through powerful strategies, lead generation, and smart
                            digital campaigns.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 offset-xl-1">
                <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="footer__widget-header">
                        <img src="../assets/images/sub-icon.png" class="filter-img" alt="Image">
                        <h4 class="title-animation">QUICK LINKS</h4>
                    </div>
                    <div class="footer__widget-content">
                        <ul class="footer__widget-list">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about-us.php">About Us</a></li>
                            <li><a href="#">Work With Us</a></li>
                            <li><a href="blogs.php">Blog</a></li>
                            <li><a href="contact-us.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
                <div class="footer__widget" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                    <div class="footer__widget-header footer__widget-header-alt">
                        <img src="../assets/images/sub-icon.png" class="filter-img" alt="Image">
                        <h4 class="title-animation">Contact Now</h4>
                    </div>
                    <div class="footer__widget-content">
                        <ul class="footer__contact-list">
                            <li><a href="#" target="_blank"><i class="fa-solid fa-location-dot"></i>
                                    1 floor 1/357 Vijayant khand
                                    Gomati nagar 226010
                                </a>
                            </li>
                            <li><a href="tel:9919487700"><i class="fa-solid fa-phone-flip"></i>+91 9919487700</a>
                            </li>
                            <li><a href="mailto:info@bridgehouse.in"><i
                                        class="fa-regular fa-envelope"></i>info@bridgehouse.in</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="footer__bottom-right text-lg-end">
                        <p style="text-align:center">Copyright © 2025 Bridge House, All Rights Reserved.<a href="#"
                                target="_blank"></a></p>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="footer__bottom-left">
                        <ul class="footer__bottom-list  justify-content-lg-start">
                            <li class="text-right"><a href="http://auctech.in/" target="_blank">Design and Developed by
                                    <span class="text-warning" style="font-weight: 600;">Auctech Marcom</span> </a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<div class="sticky-footer res-dd-none">
    <!-- Left Section: Phone Number -->
    <a href="https://wa.me/9919487700" class="phone-link" target="_blank">
        <img width="25" height="25" src="https://img.icons8.com/glyph-neue/004f8a/whatsapp.png" alt="whatsapp" /> +91
        99194 87700
    </a>
    <!-- Right Section: Request a Demo Button -->
    <a class="demo-btn" href="contact-us.php">Contact Us</a>
</div>
        <!-- ==== / footer end ==== -->

        <!-- ==== mouse cursor drag start ==== -->
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>
        <!-- ==== / mouse cursor drag end ==== -->
        <!-- ==== scroll to top start ==== -->
        <button class="progress-wrap" aria-label="scroll indicator" title="back to top">
            <span></span>
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </button>
        <!-- ==== / scroll to top end ==== -->
    </div>
    <!-- ==== js dependencies start ==== -->
    <!-- jquery -->
    <script src="../assets/js/jquery-3.7.1.min.js"></script>
    <!-- bootstrap five js -->
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- nice select js -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup js -->
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <!-- swiper slider js -->
    <script src="../assets/js/swiper-bundle.min.js"></script>
    <!-- viewport js -->
    <script src="../assets/js/viewport.jquery.js"></script>
    <!-- odometer js -->
    <script src="../assets/js/odometer.min.js"></script>
    <!-- aos js -->
    <script src="../assets/js/aos.js"></script>
    <!-- lenis smooth scroll -->
    <script src="../assets/js/lenis.min.js"></script>
    <!-- splittext js -->
    <script src="../assets/js/SplitText.min.js"></script>
    <!-- scrollto js -->
    <script src="../assets/js/ScrollToPlugin.min.js"></script>
    <!-- scrolltrigger js -->
    <script src="../assets/js/ScrollTrigger.min.js"></script>
    <!-- gsap js -->
    <script src="../assets/js/gsap.min.js"></script>
    <!-- ==== / js dependencies end ==== -->
    <!-- colour settings js -->
    <script src="../assets/js/color-settings.js"></script>
    <!-- main js -->
    <script src="../assets/js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.gallery-items-container').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                gallery: {
                    enabled: true,
                    preload: [0, 2],
                    navigateByImgClick: true,
                    arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
                    tPrev: 'Previous (Left arrow key)', // title for left button
                    tNext: 'Next (Right arrow key)', // title for right button
                    tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
                },
                mainClass: 'mfp-with-zoom',
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out',
                    opener: function (openerElement) {
                        return openerElement.is('img') ? openerElement : openerElement.find('img');
                    }
                }
            });
        });
    </script>
</body>

</html>