<!DOCTYPE html>
<html lang="en">


<head>
    <!-- required meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- #favicon -->
    <link rel="shortcut icon" href="assets\images\bridge house.svg" type="image/x-icon">
    <link rel="icon" href="assets\images\bridge house.svg" type="image/x-icon">
    <!-- #title -->
    <title>Bridge House | Blogs</title>
    <!-- #keywords -->
    <meta name="keywords" content="">
    <!-- #description -->
    <meta name="description">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- color themes -->
    <link rel="stylesheet" href="assets/css/blue-theme.css" id="switch-color">
    <!-- main css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- jquery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <style>
        .form-control {
            width: 100% !important;
        }

        .input-group input,
        .input-group textarea {
            border-radius: 10px;
        }

        .contact .contact__content-single ul a {
            font-size: 15px;
            color: var(--quaternary-color);
        }

        .input-group textarea {
            min-height: 180px;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">
        <!-- preloader start -->
        <div class="preloader"></div>
        <!-- / preloader start -->

        <!-- ==== header start ==== -->
        <div id="header">
            <?php
            include('header.php');
            ?>
        </div>
        <!-- ==== / header end ==== -->
        <!-- ==== banner start ==== -->
        <section class="common-banner" data-background="assets/images/background/project-background-image.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="common-banner__inner">
                            <h2 class="title-animation">Blogs</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Blogs
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== / banner end ==== -->
        <section class="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-5">
                        <div class="section__header text-center">

                            <h2 class="title-animation">Our Latest Blogs</h2>

                        </div>
                    </div>
                </div>
                <div class="row vertical-column-gap">
                    <?php
                        include('db_con.php');

                            $sql = "SELECT blogs.blog_heading AS heading, 
                                        blogs_images.image, 
                                        blogs.blog_desc_second, 
                                        blogs.blog_url,
                                        blogs.created_at
                                FROM blogs
                                INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
                                GROUP BY blogs.id"; 

                            $result = $con->query($sql);

                            while ($row = $result->fetch_assoc()) {
                            $heading = $row['heading'];
                            $image = $row['image'];
                            $blog_desc_second = $row['blog_desc_second'];
                            $blog_url = $row['blog_url'];
                            $created_at = $row['created_at'];
                            $formatted_date = date("j F Y", strtotime($created_at));

                    ?>
                        <div class="col-12 col-md-6 col-xl-4">
                            <div class="blog__single" data-aos="fade-up" data-aos-duration="1200">
                                <div class="thumb">
                                    <a href="blog/<?php echo $blog_url; ?>">
                                        <img src="blog/blog_uploads/<?php echo $image; ?>" alt="Image">
                                    </a>
                                </div>
                                <div class="content">
                                    <div class="blog-meta">
                                        <p><i class="flaticon-person"></i>Bridge House</p>
                                        <p><i class="flaticon-calendar"></i><?php echo $formatted_date; ?></p>
                                    </div>
                                    <h4><a href="blog/<?php echo $blog_url; ?>"><?php echo $heading; ?></a>
                                    </h4>
                                    <a href="blog/<?php echo $blog_url; ?>" class="cta">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
       
        <!-- ==== footer start ==== -->
        <div id="footer">
            <?php
            include('footer.php');
            ?>
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

    <!-- bootstrap five js -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- nice select js -->
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <!-- magnific popup js -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- swiper slider js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- viewport js -->
    <script src="assets/js/viewport.jquery.js"></script>
    <!-- odometer js -->
    <script src="assets/js/odometer.min.js"></script>
    <!-- aos js -->
    <script src="assets/js/aos.js"></script>
    <!-- lenis smooth scroll -->
    <script src="assets/js/lenis.min.js"></script>
    <!-- splittext js -->
    <script src="assets/js/SplitText.min.js"></script>
    <!-- scrollto js -->
    <script src="assets/js/ScrollToPlugin.min.js"></script>
    <!-- scrolltrigger js -->
    <script src="assets/js/ScrollTrigger.min.js"></script>
    <!-- gsap js -->
    <script src="assets/js/gsap.min.js"></script>
    <!-- ==== / js dependencies end ==== -->
    <!-- colour settings js -->
    <script src="assets/js/color-settings.js"></script>
    <!-- main js -->
    <script src="assets/js/custom.js"></script>

</body>

</html>