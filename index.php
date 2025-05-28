<?php
      include('db_con.php');

      $result = mysqli_query($con, "SELECT * FROM add_banner");
      
?>
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
      <title>Bridge House | Home</title>
      <!-- #keywords -->
      <meta name="keywords" content="">
      <!-- #description -->
      <meta name="description" content="">
      <!-- google fonts -->
      <link rel="preconnect" href="https://fonts.googleapis.com/">
      <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

      <!-- color themes -->
      <link rel="stylesheet" href="assets/css/blue-theme.css" id="switch-color">
      <!-- <link rel="stylesheet" href="assets/font/flaticon_flaticons.css"> -->
      <!-- main css -->
      <link rel="stylesheet" href="assets/css/main.css">
      <!-- responsive css -->
      <link rel="stylesheet" href="assets/css/responsive.css">
      <script src="assets/js/jquery-3.7.1.min.js"></script>

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
         
         <section class="banner">
            <div class="banner__slider swiper">
               <div class="swiper-wrapper">
                  <?php while($row=mysqli_fetch_assoc($result)) {?>
                  <div class="swiper-slide" style="height: 80vh;">
                     <div class="banner__slider-single" style="height: 100%;">
                       <div class="banner__slider-inner" data-background="admin/<?php echo $row['image_path']; ?>" style="height: 100%; background-position: center; background-size: cover;"></div>
                        <div class="container">
                           <div class="row justify-content-end">
                              <div class="col-12 col-lg-10 col-xl-8">
                                 <div class="banner__slider-content">
                                    <span>Bridge House</span>
                                    <h1><?php echo $row['title']; ?></h1>
                                   
                                    <div class="banner__slider-cta">
                                       <a href="#" class="btn--primary">About Us</a>
                                       <a href="#" class="btn--secondary">Contact Us</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                   <?php } ?>
                
               </div>
               <div class="slider-navigation d-none d-lg-flex">
                  <button type="button" aria-label="next slide" title="next slide" class="next-banner slider-btn">
                  <i class="fa-solid fa-angle-left"></i>
                  </button>
                  <button type="button" aria-label="prev slide" title="prev slide" class="prev-banner slider-btn">
                  <i class="fa-solid fa-angle-right"></i>
                  </button>
               </div>
            </div>
         </section>



         <!-- ==== / banner end ==== -->
         <!-- ==== / search-property end ==== -->
         <!-- ==== about us section start ==== -->
         <section class="about">
            <div class="container">
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-xl-6">
                     <div class="about__content">
                        <div class="section__header mb-3">
                           <span>About Us</span>
                           <h2 class="title-animation">Welcome To Bridge House
                           </h2>
                           <div class="icon-thumb">
                              <div class="icon-thumb-single">
                                 <span></span>
                                 <span></span>
                              </div>
                              <img src="assets/images/sub-icon.png" alt="Image" class="filter-img">
                           </div>
                        </div>
                        <div class="about__content-inner" >
                           <p class="text-justify">
                              Bridgehouse is a performance-driven marketing company that works across a wide range of sectors and services. From real estate to software, consumer products, and professional services, we specialize in helping businesses grow through powerful, result-oriented marketing strategies.
                           </p >
                           <p class="text-justify">
                              Our unique model involves running our own ads for different vendors and delivering qualified leads that turn into customers. We believe in performance, not just promises.
                           </p>
                           <div class="about__content-single mt-4" data-aos="fade-up" data-aos-duration="1200">
                              <div class="thumb">
                               <i > <img width="100" height="100" src="https://img.icons8.com/comic/100/1A1A1A/goal.png" alt="goal"/></i>
                              </div>
                              <div class="content">
                                 <h5>Marketing That Delivers</h5>
                                 <p>We run high-converting campaigns that bring in real, ready-to-buy leads.</p>
                              </div>
                           </div>
                           <div class="about__content-single mt-4" data-aos="fade-up" data-aos-duration="1200">
                              <div class="thumb">
                                <i><img width="100" height="100" src="https://img.icons8.com/external-others-pike-picture/100/1A1A1A/external-Universal-Expert-expert-others-pike-picture-2.png" alt=""/></i>     
                              </div>
                              <div class="content">
                                 <h5>Experts in Every Industry</h5>
                                 <p>Our team understands what works best across real estate, tech, services, and more.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-xl-6">
                     <div class="about__thumb">
                        <div class="about__thumb-single" data-aos="fade-right" data-aos-duration="1200">
                           <img src="assets/images/thumb/about/About-Us-1.png" alt="Image">
                           <div class="thumb">
                              <img src="assets/images/thumb/about/path-one.png" alt="Image">
                           </div>
                        </div>
                        <div class="about__thumb-single" data-aos="fade-left" data-aos-duration="1200">
                           <img src="assets/images/thumb/about/About-Us-3.png" alt="Image">
                           <div class="thumb">
                              <img src="assets/images/thumb/about/path-two.png" alt="Image" class="filter-img">
                           </div>
                        </div>
                        <div class="about__thumb-single" data-aos="fade-up" data-aos-duration="1200">
                           <img src="assets/images/thumb/about/About-Us-2.png" alt="Image">
                           <div class="thumb">
                              <img src="assets/images/thumb/about/path-three.png" alt="Image">
                           </div>
                        </div>
                        <!-- <div class="video-btn-wrapper">
                           <a href="https://www.youtube.com/watch?v=RvreULjnzFo" target="_blank"
                              title="video Player" class="open-video-popup">
                           <i class="fa-solid fa-play"></i>
                           </a>
                        </div> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / about us section end ==== -->
           <!-- ==== procedure section start ==== -->
         <section class="procedure">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12">
                     <div class="section__header text-center">
                        <!-- <span>Steps of Procedure</span> -->
                        <h2 class="title-animation">Why Choose Bridge House</h2>
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
               <div class="row">
                  <div class="col-12">
                     <div class="procedure__inner">
                        <div class="row vertical-column-gap-lg">
                           <div class="col-12 col-md-6 col-xl-3">
                              <div class="procedure__single" data-aos="fade-up" data-aos-duration="1200">
                                 <div class="thumb">
                                    
                                     <i ><img width="80" height="80" src="https://img.icons8.com/dotty/80/1A1A1A/stocks-growth.png" alt=""/></i>
                                 </div>
                                 <div class="content">
                                    <h4> Strong Sales Strategy</h4>
                                    <p>We know how to turn marketing into real, measurable sales.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xl-3">
                              <div class="procedure__single procedure__single-alter" data-aos="fade-up"
                                 data-aos-duration="1200" data-aos-delay="200">
                                 <div class="thumb">
                                    <i ><img width="80" height="80"  src="https://img.icons8.com/ios/1A1A1A/development-skill.png" alt=""/></i>
                                 </div>
                                 <div class="content">
                                    <h4>Multi-Industry Expertise</h4>
                                    <p>We market products and services across various sectors with proven success.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xl-3">
                              <div class="procedure__single procedure__single-alter" data-aos="fade-up"
                                 data-aos-duration="1200" data-aos-delay="400">
                                 <div class="thumb">
                                    <i ><img width="80" height="80" src="https://img.icons8.com/ios-filled/1A1A1A/conference.png" alt=""/></i>
                                 </div>
                                 <div class="content">
                                    <h4> Lead-Driven Results</h4>
                                    <p>Our campaigns focus on generating quality leads that help you grow.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-md-6 col-xl-3">
                              <div class="procedure__single" data-aos="fade-up" data-aos-duration="1200"
                                 data-aos-delay="600">
                                 <div class="thumb">
                                   <i > <img width="80" height="80" src="https://img.icons8.com/external-anggara-basic-outline-anggara-putra/1A1A1A/external-shield-user-interface-anggara-basic-outline-anggara-putra-3.png" alt=""/></i>
                                 </div>
                                 <div class="content">
                                    <h4>Trusted by Vendors</h4>
                                    <p>Vendors rely on us to boost visibility and drive performance.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="line">
                           <img src="assets/images/icon/line.png" alt="Image" class="filter-img">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / procedure section end ==== -->

         <!-- ==== service section start ==== -->
         <section class="service" data-background="assets/images/background/service-bg.png">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     <div class="section__header text-center">
                        <span>Bridge House</span>
                        <h2 class="title-animation">End-to-End Solutions Across Industries</h2>
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
               <div class="row vertical-column-gap-sm justify-content-center">
                  
                  <div class="col-12 col-lg-4 col-xl-4 order-3 order-lg-2">
                     <div class="service__single service__single-active" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="thumb">
                           <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <h4><a href="#">Transforming Property Marketing</a></h4>
                           <p>We help showcase properties online to attract more serious buyers quickly.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 col-xl-4 order-2 order-lg-3">
                     <div class="service__single service__single-active" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                           <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <h4><a href="#">Driving Online Sales Growth</a></h4>
                           <p>Creating smooth shopping experiences that turn visitors into loyal customers.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 col-xl-4 order-2 order-lg-3">
                     <div class="service__single service__single-active" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                           <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <h4><a href="#">Empowering Tech Solutions</a></h4>
                           <p>Promoting software products to grow users and boost your brand presence.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 col-xl-4 order-2 order-lg-3">
                     <div class="service__single service__single-active" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                           <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <h4><a href="#">Connecting Communities Locally</a></h4>
                           <p>Helping local services get noticed and attract more nearby customers daily.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-4 col-xl-4">
                     <div class="service__single service__single-active" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb">
                            <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <h4><a href="#"> Fueling Entrepreneurial Success</a></h4>
                           <p>Providing marketing plans that help startups and small businesses grow fast.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / service section end ==== -->

           <!-- ==== collection section start ==== -->
         <section class="collection">
            <div class="container">
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-xl-7">
                     <div class="collection__thumb">
                        <div class="thumb-one" data-aos="fade-left" data-aos-duration="1200">
                           <img src="assets/images/thumb/collection/one.png" alt="Image">
                        </div>
                        <div class="thumb-two" data-aos="fade-right" data-aos-duration="1200">
                           <img src="assets/images/thumb/collection/two.png" alt="Image">
                        </div>
                        <div class="thumb-three" data-aos="fade-up" data-aos-duration="1200">
                           <img src="assets/images/thumb/collection/three.png" alt="Image">
                        </div>
                        <div class="thumb-four">
                           <img src="assets/images/thumb/collection/four.png" alt="Image">
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-xl-5">
                     <div class="collection__content">
                        <div class="section__header">
                           <h2 class="title-animation">Built to Serve Every Business Model
                           </h2>
                           <div class="icon-thumb">
                              <div class="icon-thumb-single">
                                 <span></span>
                                 <span></span>
                              </div>
                              <img src="assets/images/sub-icon.png" alt="Image" class="filter-img">
                           </div>
                        </div>
                        <div class="inner">
                           <div class="group" data-aos="fade-up" data-aos-duration="1200">
                              <div class="thumb">
                                 <i class="flaticon-house-2"></i>
                              </div>
                              <div class="content">
                                 <h4>Innovation-Led Approach</h4>
                                 <p>Innovation and insight drive our approach in all sectors we touch.</p>
                              </div>
                           </div>
                           <div class="group" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                              <div class="thumb">
                                 <i class="flaticon-shield"></i>
                              </div>
                              <div class="content">
                                 <h4>Audience-Driven Execution</h4>
                                 <p>No matter the field, we help you connect, engage, and convert your audience.</p>
                              </div>
                           </div>
                           <div class="group" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                              <div class="thumb">
                                 <i class="flaticon-location"></i>
                              </div>
                              <div class="content">
                                 <h4>Support for All Business Sizes</h4>
                                 <p>From startups to established firms, we support all with equal expertise.</p> 
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / collection section end ==== -->

         <!-- ==== properties section start ==== -->
       
         <!-- ==== / properties section end ==== -->
         <!-- ==== counter section start ==== -->
         <section class="counter" data-background="assets/images/background/counter-bg.png">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     <div class="section__header-light text-center">
                        <!-- <span>Milestones</span> -->
                        <h2 class="title-animation">How We Can Help</h2>
                        <div class="icon-thumb justify-content-center">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                           <img src="assets/images/sub-icon-light.png" alt="Image">
                           <div class="icon-thumb-single">
                              <span></span>
                              <span></span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row vertical-column-gap-lg">
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb">
                            <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <!-- <h2><span class="odometer" data-odometer-final="20500"></span><span>+</span></h2> -->
                           <p>Build Your Online Presence</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="counter__single counter__single-active" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="thumb">
                             <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <!-- <h2><span class="odometer" data-odometer-final="7600"></span><span>+</span></h2> -->
                           <p style="text-align:center;">Generate Quality Leads</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                            <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <!-- <h2><span class="odometer" data-odometer-final="12300"></span><span>+</span></h2> -->
                           <p>Boost Your Brand Image</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-3">
                     <div class="counter__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600">
                        <div class="thumb">
                            <i class="flaticon-deal"></i>
                        </div>
                        <div class="content">
                           <!-- <h2><span class="odometer" data-odometer-final="15200"></span><span>+</span></h2> -->
                           <p  style="text-align:center;">Scale Your Business Fast</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / counter section end ==== -->
         <!-- ==== testimonial section start ==== -->
         <section class="testimonial" style=" margin-bottom:100px">
            <div class="testimonial__thumb">
               <img src="assets/images/testimonial/thumbnail.png" alt="Image" class="w-100 mh-400 parallax-image">
            </div>
            <div class="container">
               <div class="row ">
                  <div class="col-12">
                     <div class="testimonial__wrapper"
                        data-background="assets/images/testimonial/background.png, assets/images/testimonial/icon.png">
                        <div class="row vertical-column-gap-lg">
                           <div class="col-12 col-xl-3">
                              <div class="testimonial__single">
                                 <div class="section__header">
                                    <span>Testimonial</span>
                                    <h2 class="title-animation">Reviews Of
                                       Our Clients
                                    </h2>
                                    <div class="icon-thumb">
                                       <div class="icon-thumb-single">
                                          <span></span>
                                          <span></span>
                                       </div>
                                       <img src="assets/images/sub-icon-light.png" alt="Image">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-lg-10 col-xl-7">
                              <div class="testimonial-slider swiper testimonial-alt">
                                 <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                       <div class="testimonial-slider__single">
                                          <div class="author">
                                             <div class="author-thumb">
                                                <img src="assets/images/testimonial/client.png" alt="Image">
                                             </div>
                                             <div class="author-meta">
                                                <div class="review">
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                </div>
                                                <p>Real Estate Developer</p>
                                                <h5>Amit Kapoor</h5>
                                             </div>
                                          </div>
                                          <div class="content">
                                             <blockquote>Bridgehouse helped us double our leads in just two months — they truly understand how to market and sell.
                                             </blockquote>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="testimonial-slider__single">
                                          <div class="author">
                                             <div class="author-thumb">
                                                <img src="assets/images/testimonial/client.png" alt="Image">
                                             </div>
                                             <div class="author-meta">
                                                <div class="review">
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                </div>
                                                <p>SaaS Product Manager</p>
                                                <h5>Neha Sharma</h5>
                                             </div>
                                          </div>
                                          <div class="content">
                                             <blockquote>Their strategies are sharp, creative, and always results-driven. Highly recommend them!
                                             </blockquote>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="swiper-slide">
                                       <div class="testimonial-slider__single">
                                          <div class="author">
                                             <div class="author-thumb">
                                                <img src="assets/images/testimonial/client.png" alt="Image">
                                             </div>
                                             <div class="author-meta">
                                                <div class="review">
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                   <i class="fa-regular fa-star"></i>
                                                </div>
                                                <p>Local Service Provider</p>
                                                <h5> Sana Qureshi</h5>
                                             </div>
                                          </div>
                                          <div class="content">
                                             <blockquote>Professional, fast, and always on point. Their team knows exactly how to grow a business.
                                             </blockquote>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12 col-xl-2">
                              <div class="testimonial-navigation slider-navigation-two">
                                 <button type="button" aria-label="prev slide" title="prev slide"
                                    class="prev-testimonial">
                                 <i class="fa-solid fa-angles-left"></i><span>Prev</span>
                                 </button>
                                 <button type="button" aria-label="next slide" title="next slide"
                                    class="next-testimonial active">
                                 <span>Next</span><i class="fa-solid fa-angles-right"></i>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- ==== / testimonial section end ==== -->

          <section class="blog" data-background="assets/images/blog/blog-bg.png">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-12 col-xl-5">
                     <div class="section__header text-center">
                     
                        <h2 class="title-animation">Our Latest Blogs</h2>
                       
                     </div>
                  </div>
               </div>
               <div class="row vertical-column-gap">
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="blog__single" data-aos="fade-up" data-aos-duration="1200">
                        <div class="thumb">
                           <a href="#">
                           <img src="assets/images/blog/one.png" alt="Image">
                           </a>
                        </div>
                        <div class="content">
                           <div class="blog-meta">
                              <p><i class="flaticon-person"></i>Bridge House</p>
                              <p><i class="flaticon-calendar"></i>22 / 05 / 2025</p>
                           </div>
                           <h4><a href="#">Including Animation in
                              Your Design System</a>
                           </h4>
                           <a href="#" class="cta">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="blog__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="thumb">
                           <a href="#">
                           <img src="assets/images/blog/two.png" alt="Image">
                           </a>
                        </div>
                        <div class="content">
                           <div class="blog-meta">
                              <p><i class="flaticon-person"></i>Bridge House</p>
                               <p><i class="flaticon-calendar"></i>22 / 05 / 2025</p>
                           </div>
                           <h4><a href="#">Startups Business ideas to grow</a>
                           </h4>
                           <a href="#" class="cta">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4">
                     <div class="blog__single" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                        <div class="thumb">
                           <a href="#">
                           <img src="assets/images/blog/three.png" alt="Image">
                           </a>
                        </div>
                        <div class="content">
                           <div class="blog-meta">
                              <p><i class="flaticon-person"></i>Bridge House</p>
                              <p><i class="flaticon-calendar"></i>22 / 05 / 2025</p>
                           </div>
                           <h4><a href="#">Modern solution for grow your business</a>
                           </h4>
                           <a href="#" class="cta">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         
       
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