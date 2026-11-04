<!DOCTYPE html>
<html lang="en">

@extends('landing.layouts.head')

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--Start Preloader-->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--End Preloader-->



    <div class="chat-icon"><button type="button" class="chat-toggler"><i class="fa fa-comment"></i></button></div>
    <!--Chat Popup-->
    <div id="chat-popup" class="chat-popup">
        <div class="popup-inner">
            <div class="close-chat"><i class="fa fa-times"></i></div>
            <div class="chat-form">
                <p>Please fill out the form below and we will get back to you as soon as possible.</p>
                <form action="assets/inc/sendemail.php" method="POST" class="contact-form-validated">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="Your Text" required></textarea>
                    </div>
                    <div class="form-group message-btn">
                        <button type="submit" class="thm-btn"> Submit Now
                            <span class="fas fa-arrow-right"></span>
                        </button>
                    </div>
                    <div class="result"></div>
                </form>
            </div>
        </div>
    </div>



    <!-- Start sidebar widget content -->
   @extends('landing.layouts.sidebar')
    <!-- End sidebar widget content -->


    <div class="page-wrapper">
        <header class="main-header">
            <div class="main-menu__top">
                <div class="main-menu__top-inner">
                    <ul class="list-unstyled main-menu__contact-list">
                        <li>
                            <div class="icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:info@Pureglow24.com">info@Pureglow25.com</a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="far fa-map-marker-alt"></i>
                            </div>
                            <div class="text">
                                <p>4124 Cimmaron Road, CA 92806</p>
                            </div>
                        </li>
                    </ul>
                    <p class="main-menu__top-welcome-text">Welcome to Pureglow
                        HTML5 Template</p>
                    <div class="main-menu__top-right">
                        <p class="main-menu__social-title">Follow Us On:</p>
                        <div class="main-menu__social">
                            <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.pinterest.com/"><i class="fab fa-pinterest-p"></i></a>
                            <a href="https://www.instagram.com/?hl=en"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="main-menu">
                <div class="main-menu__wrapper">
                    <div class="main-menu__wrapper-inner">
                        <div class="main-menu__left">
                            <div class="main-menu__logo">
                                <a href="index.html"><img src="assets/images/resources/logo-1.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="dropdown megamenu">
                                    <a href="#">Home </a>
                                    <ul>
                                        <li>
                                            <section class="home-showcase">
                                                <div class="container">
                                                    <div class="home-showcase__inner">
                                                        <div class="row">
                                                            <div class="col-lg-3">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-1-1.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="index-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        01</h3>
                                                                    <!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-1-2.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index2.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="index2-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        02
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-1-3.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index3.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Multi Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                            <a href="index3-one-page.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                One Page
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Home
                                                                        Page
                                                                        03
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                            <div class="col-lg-3">
                                                                <div class="home-showcase__item">
                                                                    <div class="home-showcase__image">
                                                                        <img src="assets/images/home-showcase/home-showcase-1-4.jpg"
                                                                            alt="">
                                                                        <div class="home-showcase__buttons">
                                                                            <a href="index-dark.html"
                                                                                class="thm-btn home-showcase__buttons__item">
                                                                                Dark Home
                                                                                <span class="fas fa-arrow-right"></span>
                                                                            </a>
                                                                        </div>
                                                                        <!-- /.home-showcase__buttons -->
                                                                    </div><!-- /.home-showcase__image -->
                                                                    <h3 class="home-showcase__title">Dark Home
                                                                    </h3><!-- /.home-showcase__title -->
                                                                </div><!-- /.home-showcase__item -->
                                                            </div><!-- /.col-lg-3 -->
                                                        </div><!-- /.row -->
                                                    </div><!-- /.home-showcase__inner -->

                                                </div><!-- /.container -->
                                            </section>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="about.html">About</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#">services</a>
                                    <ul class="shadow-box">
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="cleansing-facial.html">Deep Cleansing Facial</a></li>
                                        <li><a href="facial-treatment.html">Basic Facial Treatment</a></li>
                                        <li><a href="detox-therapy.html">Skin Detox Therapy</a></li>
                                        <li><a href="hydrating-facial-treatment.html">Hydrating Facial Treatment</a>
                                        </li>
                                        <li><a href="sensitive-skin-care.html">Sensitive Skin Care</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="shadow-box">
                                        <li><a href="doctors.html">Doctors</a></li>
                                        <li><a href="doctor-details.html">Doctors Details</a></li>
                                        <li><a href="testimonials.html">Testimonials</a></li>
                                        <li><a href="appoinment.html">Appoinment</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Shop</a>
                                    <ul class="shadow-box">
                                        <li><a href="products.html">Products</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="sign-up.html">Sign Up</a></li>
                                        <li><a href="login.html">Login</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#">Blog</a>
                                    <ul class="shadow-box">
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-standard.html">Blog Standard</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="main-menu__right">
                            <div class="main-menu__call">
                                <div class="main-menu__call-icon">
                                    <i class="icon-telephone"></i>
                                </div>
                                <div class="main-menu__call-content">
                                    <p class="main-menu__call-sub-title">Call Anytime</p>
                                    <h5 class="main-menu__call-number"><a href="tel:9288006780">+92 ( 8800 ) -
                                            6780</a></h5>
                                </div>
                            </div>
                            <div class="main-menu__search-cart-box">
                                <div class="main-menu__search-cart-box">
                                    <div class="main-menu__search-box">
                                        <a href="#" class="main-menu__search searcher-toggler-box fal fa-search"></a>
                                    </div>
                                    <div class="main-menu__cart-box">
                                        <a href="cart.html" class="main-menu__cart">
                                            <span class="fal fa-shopping-cart"></span>
                                            <span class="main-menu__cart-count">02</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__nav-sidebar-icon">
                                <a class="navSidebar-button" href="#">
                                    <span class="icon-dots-menu-one"></span>
                                    <span class="icon-dots-menu-two"></span>
                                    <span class="icon-dots-menu-three"></span>
                                </a>
                            </div>
                            <div class="main-menu__btn-box">
                                <a class="thm-btn" href="contact.html">Get A Quote
                                    <span class="fas fa-arrow-right"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->


      @yield('content')

        <!--Site Footer Start-->
        @extends('landing.layouts.footer')
        <!--Site Footer End-->



    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="150"
                        alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@Pureglow.com</a>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
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

    <!-- Search Popup -->
    <div class="search-popup">
        <div class="color-layer"></div>
        <button class="close-search"><span class="far fa-times fa-fw"></span></button>
        <form method="post" action="blog.html">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Search Popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">
        <span class="scroll-to-top__wrapper"><span class="scroll-to-top__inner"></span></span>
        <span class="scroll-to-top__text"> Go Back Top</span>
    </a>

@extends('landing.layouts.script')
    
</body>

</html>