<style>
   .text-justify{
      text-align:justify;
   }
   .main-header__topbar .main-header__topbar__content-wrapper::after {
      background:none;
      background-color:none;
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
</style>


<header class="main-header">
   <div class="main-header__topbar d-none d-lg-block">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <div class="main-header__topbar__content">
                  <div class="main-header__topbar__content-wrapper">
                     <ul class="main-header__topbar__list">
                        <li> <a href="https://crm.bridgehouse.in/" target="_blank"><img width="28" height="28" src="https://img.icons8.com/sf-regular/48/FFFFFF/login-rounded-right.png" alt="login-rounded-right"/>Login</a>
                        </li>
                       
                     </ul>
                     
                  </div>
                  <div class="social">
                     <a href="#"
                        aria-label="share us on facebook" title="facebook">
                     <i class="flaticon-facebook"></i>
                     </a>
                     <a href="#" aria-label="share us on twitter"
                        title="twitter">
                        <i class="fa-brands fa-x-twitter"></i>
                     </a>
                     <a href="#"
                        aria-label="share us on instagram" title="instagram">
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
                        <img src="assets\images\bridge house.png" alt="Image" id="logo-mobile" style="height: 45px !important;">
                        </a>
                     </div>
                     <div class="navbar__menu d-none d-xl-block">
                        <ul class="navbar__list">
                           <li class="navbar__item nav-fade">
                              <a href="index.php">Home</a>
                             
                           </li>

                            <li class="navbar__item nav-fade">
                              <a href="about-us.php" >About Us</a>
                           </li>
                           <li class="navbar__item navbar__item--has-children nav-fade">
                              <a href="#" aria-label="dropdown menu"
                                 class="navbar__dropdown-label dropdown-label-alter"><span onclick="window.location.href='#';" class="fw-bold">Industries We Serve</span>
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
                                    <a href="legal.php">Legal</a>
                                 </li>
                              </ul>
                           </li>
                           <li class="navbar__item nav-fade">
                              <a href="#">Work With Us</a>
                           </li>
                           
                           <li class="navbar__item nav-fade">
                              <a href="blog.php">Blog</a>
                             
                           </li>
                           <li class="navbar__item nav-fade">
                              <a href="contact-us.php">Contact</a>
                           </li>
                            <li class="navbar__item nav-fade d-flex d-xl-none">
                              <a target="_blank" href="https://crm.bridgehouse.in/"><img width="28" height="28" src="https://img.icons8.com/sf-regular/48/0000/login-rounded-right.png" alt="login-rounded-right"/> Login</a>
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
                     <img src="assets\images\logo_white.png" alt="Image" id="logo" style="height: 75px !important; ">
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
            <a href="#"  aria-label="share us on facebook"
               title="facebook">
            <i class="flaticon-facebook"></i>
            </a>
            <a href="#"  aria-label="share us on twitter" 
               title="twitter">
            <i class="fa-brands fa-x-twitter"></i>
            </a>
            <a href="#" aria-label="share us on instagram"
               title="instagram">
            <i class="flaticon-instagram"></i>
            </a>
            
         </div>
      </nav>
   </div>
   <div class="mobile-menu__backdrop"></div>
   <!-- ==== / mobile menu end ==== -->
</header>