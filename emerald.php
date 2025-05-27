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
   <title>Landsquare Townships | Project-Details</title>
   <!-- #keywords -->
   <meta name="keywords" content="s">
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
                     <h2 class="title-animation">Project Details</h2>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item">
                              <a href="https://landsquaretownships.in/">Home</a>
                           </li>
                           <li class="breadcrumb-item active" aria-current="page">
                              Emerald Garden Details
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
      <section class="property-details">
         <div class="container">
            <div class="row vertical-column-gap-lg">
               <div class="col-12 col-xl-8">
                  <div class="property-details__content">
                     <div class="property-details__header mt-0">
                        <div class="left-content mb-5">
                           <span class="sub-title">Emerald Garden</span>
                        </div>
                     </div>
                     <div class="#" data-aos="fade-up" data-aos-duration="1200">
                        <img src="assets/images/property/em1.jpg" alt="Image">
                     </div>
                  </div>
               </div>
               <div class="col-12 col-xl-4">
                  <div class="property-details__sidebar">
                     <div class="property-details__widget widget-alter" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="400">
                        <div class="thumb-wrapper">
                           <span class="sub-title">Contact</span>
                           <div class="thumb">
                              <a href="https://landsquaretownships.in/contact-us.php">
                                 <img src="assets/images/logo-mobile.jpg" alt="Image">
                              </a>
                           </div>
                        </div>
                        <div class="content">
                           <span>Sweet Home</span>
                           <!-- <h4><a href="team-details.html">Polly Matzinger -->
                           </a>
                           </h4>
                           <p><a href="tel:+917393070069"><i class="icon-mobile"></i> Call: +91 7393070069</a>
                           </p>
                           <p class="about-article"> For inquiries, visits, or to schedule a consultation, contact us now.
                           </p>
                           <p class="about-article"> <strong> Location:</strong> Lucknow-Ayodhya Road, Near Devta Factory, Zaidpur, Barabanki.
                           </p>

                           <div class="cta text-center">
                              <a href="https://landsquaretownships.in/contact-us.php" class="btn--primary">Contact Us</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="property-details" style="padding:0px 0px;">
         <div class="container">
            <div class="row vertical-column-gap-lg mt-0">
               <div class="col-12 col-xl-8 mt-0"></div>
               <div class="property-details__article property-details__group" data-aos="fade-up"
                  data-aos-duration="1200">
                  <div class="property-header">
                     <h4 class="title-animation"> Emerald Garden Details</h4>
                  </div>
                  <div class="property-details__content">
                     <p>Are you looking for an ideal investment opportunity in Lucknow’s rapidly growing real estate market? Emerald Garden offers you a chance to own premium residential plots in one of the most promising locations near the state capital region of Lucknow. With immediate registry and possession available, this is your opportunity to invest in affordable prime land at just ₹1499 per sq. ft.
                     </p>
                    
                     <p>Located near Lucknow’s state capital region, Emerald Garden is strategically positioned in one of the city’s most rapidly developing areas. The region is witnessing robust infrastructural growth, making it an ideal place for long-term investments.
                     </p>
                  </div>
                  <div class="property-details__group">
                     <div class="property-header mt-3">
                        <h4 class="title-animation">Location Advantages</h4>
                     </div>
                     <div class="property-details__overview">
                        <div class="overview-single" data-aos="fade-up" data-aos-duration="1200">
                           <div class="thumb">
                              <i class="flaticon-price-tag"></i>
                           </div>
                           <div class="content">
                              <p><span>Lucknow Faizabad Highway:</span> 800m</p>
                           </div>
                        </div>
                        <div class="overview-single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="50">
                           <div class="thumb">
                              <i class="flaticon-office-1"></i>
                           </div>
                           <div class="content">
                              <p><span>Barabanki City:</span> 900m</p>
                           </div>
                        </div>
                        <div class="overview-single" data-aos="fade-up" data-aos-duration="1200"
                           data-aos-delay="200">
                           <div class="thumb">
                              <i class="flaticon-home"></i>
                           </div>
                           <div class="content">
                              <p><span>Sqft:</span> ₹1499</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- <div class="property-details__group">
                     <div class="property-header">
                        <h4 class="title-animation">Amenities</h4>
                     </div>
                     <div class="property-details__content">
                        <ul class="property-feature">
                           <li><i class="fa-solid fa-circle-dot"></i>CCTV Cameras</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Security Personnel</li>
                           <li><i class="fa-solid fa-circle-dot"></i>ated Community</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Wide, Smooth Roads</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Street Lighting</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Continuous Water Flow</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Water Management System</li>
                           <li><i class="fa-solid fa-circle-dot"></i>24/7 Power Supply</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Power Backup</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Underground Drainage System</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Clean Environment</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Safe Playgrounds</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Modern Play Equipment</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Multipurpose Sports Courts</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Walking and Jogging Tracks</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Lush Green Parks</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Open Spaces for Socializing</li>
                           <li><i class="fa-solid fa-circle-dot"></i>Multi-Purpose Hall</li>
                        </ul>
                     </div>
                  </div> -->
                  <div class="property-details__group mb-5">
                    <div class="row justify-content-center mb-3">
                       <div class="col-12 col-xl-5 mt-5">
                          <div class="section__header text-center">
                             <!-- <span>Our Gallery</span> -->
                             <h2 class="title-animation">Project Images</h2>
                             <div class="icon-thumb justify-content-center">
                                <div class="icon-thumb-single">
                                   <span></span>
                                   <span></span>
                                </div>
                                <!-- <img src="assets/images/sub-icon.png" alt="Image" class="filter-img"> -->
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
                             href="assets/images/property/emg1.jpg">
                             <img
                                src="assets/images/property/emg1.jpg"
                                alt="Image">
                          </a>
                       </div>
                    </div>
                 </div>
               </div>
            </div>
      </section>
      <!-- ==== / property details end ==== -->
       <!-- ==== partner slider start ==== -->
       <!-- <div class="partner">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="partner-slider swiper">
                     <div class="swiper-wrapper">
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/one.png" alt="Image" class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/two.png" alt="Image" class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#>
                              <img src="assets/images/partners/three.png" alt="Image"
                                 class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/four.png" alt="Image" class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/five.png" alt="Image" class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/one.png" alt="Image" class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/two.png" alt="Image" class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/three.png" alt="Image"
                                 class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/four.png" alt="Image" class="filter-black">
                              </a>
                           </div>
                        </div>
                        <div class="swiper-slide">
                           <div class="partner-single">
                              <a href="#">
                              <img src="assets/images/partners/five.png" alt="Image" class="filter-black">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <!-- ==== / partner slider end ==== -->

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
   <!-- jquery -->
   <script src="assets/js/jquery-3.7.1.min.js"></script>
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