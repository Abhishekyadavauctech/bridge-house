<!DOCTYPE html>
<html lang="en">

<head>
   <!-- required meta -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- #favicon -->
   <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
   <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">
   <!-- #title -->
   <title>Landsquare Townships | Gallery</title>
   <!-- #keywords -->
   <meta name="keywords" content="">
   <!-- #description -->
   <meta name="description" content="">
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
   <!-- Magnific Popup CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                     <h2 class="title-animation">Our Gallery</h2>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item">
                              <a href="https://landsquaretownships.in/">Home</a>
                           </li>
                           <li class="breadcrumb-item active" aria-current="page">
                              Our Gallery
                           </li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / banner end ==== -->
      <!-- ==== blog section start ==== -->
      <section class="blog blog-main">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-xl-5">
                  <div class="section__header text-center">
                     <span>Our Gallery</span>
                     <h2 class="title-animation">Latest Gallery Images</h2>
                     <div class="icon-thumb justify-content-center">
                        <div class="icon-thumb-single">
                           <span></span>
                           <span></span>
                        </div>
                        <img src="assets/images/sub-icon.png" alt="Image" class="filter-img">
                        <div class="icon-thumb-single">
                           <span></span>
                           <span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery-items-container">

               <div class="gallery-items">
                  <a
                     href="assets/images/property/emg1.jpg">
                     <img
                        src="assets/images/property/emg1.jpg"
                        alt="Image">
                  </a>
               </div>

               <div class="gallery-items">
                  <a
                     href="assets/images/property/emg2.jpg">
                     <img
                        src="assets/images/property/emg2.jpg"
                        alt="Image">
                  </a>
               </div>

               <div class="gallery-items">
                  <a
                     href="assets/images/property/emg3.jpg">
                     <img
                        src="assets/images/property/emg3.jpg"
                        alt="Image">
                  </a>
               </div>

               <div class="gallery-items">
                  <a
                     href="assets/images/property/em-2.jpg">
                     <img
                        src="assets/images/property/em-2.jpg"
                        alt="Image">
                  </a>
               </div>

               <div class="gallery-items">
                  <a
                     href="assets/images/property/em-3.jpg">
                     <img
                        src="assets/images/property/em-3.jpg"
                        alt="Image">
                  </a>
               </div>
               <div class="gallery-items">
                  <a
                     href="assets/images/property/em-4.jpg">
                     <img
                        src="assets/images/property/em-4.jpg"
                        alt="Image">
                  </a>
               </div>
               <div class="gallery-items">
                  <a
                     href="assets/images/property/fe2.jpg">
                     <img
                        src="assets/images/property/fe2.jpg"
                        alt="Image">
                  </a>
               </div>

               <div class="gallery-items">
                  <a
                     href="assets/images/property/fe3.jpg">
                     <img
                        src="assets/images/property/fe3.jpg"
                        alt="Image">
                  </a>
               </div>
               <div class="gallery-items">
                  <a
                     href="assets/images/property/fe4.jpg">
                     <img
                        src="assets/images/property/fe4.jpg"
                        alt="Image">
                  </a>
               </div>
               <div class="gallery-items">
                  <a
                     href="assets/images/property/ff1.jpg">
                     <img
                        src="assets/images/property/ff1.jpg"
                        alt="Image">
                  </a>
               </div>

               <div class="gallery-items">
                  <a
                     href="assets/images/property/ff3.jpg">
                     <img
                        src="assets/images/property/ff3.jpg"
                        alt="Image">
                  </a>
               </div>
               <div class="gallery-items">
                  <a
                     href="assets/images/property/ff4.jpg">
                     <img
                        src="assets/images/property/ff4.jpg"
                        alt="Image">
                  </a>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / blog section end ==== -->

      <!-- ==== footer start ==== -->
      <div id="footer">
         <?php
               include('footer.php');
         ?>
      </div>
      <!-- ==== / footer end ==== -->

      <!-- ==== / color switcher end ==== -->
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
   <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
   <script>
      $(document).ready(function () {
          $('.gallery-items-container').magnificPopup({
              delegate: 'a',
              type: 'image',
              gallery: {
                  enabled: true, 
                  preload: [0, 2], 
                  navigateByImgClick: true,
                  arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', 
                  tPrev: 'Previous (Left arrow key)', 
                  tNext: 'Next (Right arrow key)',
                  tCounter: '<span class="mfp-counter">%curr% of %total%</span>' 
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