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
   <title>Landsquare Townships | Contact Us</title>
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
        width:100% !important;
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
                     <h2 class="title-animation">Contact Us</h2>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item">
                              <a href="https://landsquaretownships.in/">Home</a>
                           </li>
                           <li class="breadcrumb-item active" aria-current="page">
                              Contact Us
                           </li>
                        </ol>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / banner end ==== -->
      <!-- ==== contact section start ==== -->
      <section class="contact">
         <div class="container">
            <div class="row vertical-column-gap-lg">
               <div class="col-12 col-lg-5">
                  <div class="contact__content">

                     <div class="contact__content-single">
                        <h2 class="title-animation fs-4"> Contact With Us Any Time.</h2>
                        <ul>
                           <li><a href="#" target="_blank"><i class="fa-solid fa-location-dot text-primary"></i> First Floor, Chinhat Height, Chinhat
                                 Tiraha, Lucknow, India, 226028B.
                              </a>
                           </li>
                           <li><a href="tel:2305-587-3407"><i class="fa-solid fa-phone-flip text-primary"> </i>+91
                                 7393070069
                              </a>
                           </li>
                           <li><a href="mailto:landsquaretownships@gmail.com"><i
                                    class="fa-regular fa-envelope text-primary"></i> landsquaretownships@gmail.com
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="contact__social contact__content-single">
                        <h4>Social Media:</h4>
                        <div class="social">
                           <a href="https://www.facebook.com/landsquareofficial" target="_blank" aria-label="share us on facebook"
                              title="facebook">
                              <i class="flaticon-facebook"></i>
                           </a>
                           <a href="https://x.com/Landsquare_" target="_blank" aria-label="share us on twitter"
                              title="twitter">
                              <i class="fa-brands fa-x-twitter"></i>
                           </a>
                           <a href="https://www.instagram.com/landsquaretownships" target="_blank" aria-label="share us on instagram"
                              title="instagram">
                              <i class="flaticon-instagram"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-7">
                  <div class="contact__form">
                     <span class="text-primary text-bold mb-3">Get A Quote</span>
                     <form amethod="POST" action="save_contact.php" id="enquiryForm">
                        <div class="input-group" data-aos="fade-up" data-aos-duration="1200">
                           <div class="input-single">
                              <input type="text" name="name" id="name" placeholder="Name" required >
                           </div>
                           <div class="input-single">
                              <input type="email" name="email" id="email" placeholder="Email" >
                           </div>
                        </div>
                        <div class="input-group" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200" >
                          
                              <input type="number" name="phone" id="phone" placeholder="Number" class="form-control" required>
                           
                        </div>
                        <div class="input-group" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                           <textarea name="message" id="Message" placeholder="Message" ></textarea>
                        </div>
                        <div class="text-center">
                           <button type="submit" class="btn--primary" name="submit">Send Message</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / contact section end ==== -->
      <!-- ==== contact form section start ==== -->
      <section class="contact-form">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-12 col-xl-5 col-xl-12">
                  <div class="contact__map" data-aos="zoom-in" data-aos-duration="1200">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7117.803862631669!2d81.01689287770996!3d26.87485670000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be3ffb81c08b1%3A0xe7f5e84b9d803b69!2sFuture%20Care%20Lab!5e0!3m2!1sen!2sin!4v1731743246012!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- ==== / contact form section end ==== -->
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
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script>
      $(document).ready(function () {
         $('#enquiryForm').submit(function (e) {
            e.preventDefault();

            var formData = $(this).serialize();

            console.log('Form Data:', formData);

            $.ajax({
               url: 'save_contact.php',
               type: 'POST',
               data: formData,
               success: function (response) {
                  console.log('Response:', response);

                  if (response == 'success') {

                     Swal.fire({
                        icon: 'success',
                        title: 'Message Sent!',
                        text: 'Your message has been sent successfully.',
                     }).then(function () {

                        $('#enquiryForm')[0].reset();
                     });
                  } else {

                     Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Please fill in all fields correctly.',
                     });
                  }
               },
               error: function (xhr, status, error) {
                  console.log('Error:', error);
                  Swal.fire({
                     icon: 'error',
                     title: 'Oops...',
                     text: 'There was an error submitting your message.',
                  });
               }
            });
         });
      });
   </script>
</body>

</html>