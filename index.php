<?php
// index.php
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- ========== Meta Tags ========== -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- ======== Page title ============ -->
  <title>Sanleva Prime Solutions</title>
  <!--<< Favcion >>-->
  <link rel="shortcut icon" href="assets/img/logo-a.png" />
  <!--<< Bootstrap min.css >>-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <!--<< All Min Css >>-->
  <link rel="stylesheet" href="assets/css/all.min.css" />
  <!--<< Animate.css >>-->
  <link rel="stylesheet" href="assets/css/animate.css" />
  <!--<< MeanMenu.css >>-->
  <link rel="stylesheet" href="assets/css/meanmenu.css" />
  <!--<< Swiper Bundle.css >>-->
  <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
  <!--<< Main.css >>-->
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <!-- Preloader Start -->
  <div id="preloader" class="preloader">
    <div class="animation-preloader">
      <div class="spinner"></div>
      <div class="txt-loading">
        <span data-text-preloader="S" class="letters-loading"> S </span>
        <span data-text-preloader="A" class="letters-loading"> A </span>
        <span data-text-preloader="N" class="letters-loading"> N </span>
        <span data-text-preloader="L" class="letters-loading"> L </span>
        <span data-text-preloader="E" class="letters-loading"> E </span>
        <span data-text-preloader="V" class="letters-loading"> V </span>
        <span data-text-preloader="A" class="letters-loading"> A </span>
      </div>
      <p class="text-center">Loading</p>
    </div>
    <div class="loader">
      <div class="row">
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
      </div>
    </div>
  </div>

  <!--<< Mouse Cursor Start >>-->
  <div class="mouse-cursor cursor-outer"></div>
  <div class="mouse-cursor cursor-inner"></div>



  <!-- Offcanvas Area Start -->
  <div class="fix-area">
    <div class="offcanvas__info">
      <div class="offcanvas__wrapper">
        <div class="offcanvas__content">
          <div class="offcanvas__top mb-2 d-flex justify-content-between align-items-center">
            <div class="offcanvas__logo">
              <a href="index.php">
                <img src="assets/img/logo.png" alt="logo-img">
              </a>
            </div>
            <div class="offcanvas__close">
              <button>
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="mobile-menu fix mb-3"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="offcanvas__overlay"></div>

  <!-- Header Section Start -->
  <header>
    <div id="header-sticky" class="header-3">
      <div class="plane-shape">
        <img src="assets/img/logo.png" alt="shape-img">
      </div>
      <div class="container">
        <div class="mega-menu-wrapper">
          <div class="header-main">
            <div class="header-left">
              <div class="logo">
                <a href="index.php" class="header-logo">
                  <img src="assets/img/logo.png" alt="logo-img">
                </a>
              </div>
            </div>
            <div class="header-right d-flex justify-content-end align-items-center">
              <div class="mean__menu-wrapper">
                <div class="main-menu">
                  <nav id="mobile-menu">
                    <ul>
                      <li class="has-dropdown active menu-thumb">
                        <a href="index.php"> Home </a>
                      </li>

                      <li>
                        <a href="index.php#about">About</a>
                      </li>
                      <li >
                        <a href="service.html"> Services </a>
                      </li>
                      <li>
                        <a href="index_iot.html"> IoT Experiment </a>
                      </li>
                      <li>
                        <a href="contact.html">Contact</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="header__hamburger d-lg-none my-auto">
                <div class="sidebar__toggle">
                  <i class="fas fa-bars"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>



  <!-- Header Section Start -->
  <!-- <header>
    <div id="header-sticky" style="box-shadow: 0px 1px 15px 15px rgba(133, 133, 133, 0.61)">
      <div class="container">
        <div class="mega-menu-wrapper">
          <div class="header-main">
            <div class="header-left">
              <div class="logo">
                <a href="index.html" class="header-logo">
                  <img src="assets/img/logo.png" alt="logo-img" />
                </a>
              </div>
            </div>
            <div class="header-right d-flex justify-content-end align-items-center">
              <div class="mean__menu-wrapper">
                <div class="main-menu">
                  <nav id="mobile-menu">
                    <ul>
                      <li class="has-dropdown active menu-thumb">
                        <a href="index.html"> Home </a>
                      </li>

                      <li>
                        <a href="#about">About</a>
                      </li>
                      <li>
                        <a href="service.html"> Services </a>
                      </li>
                      <li>
                        <a href="index_iot.html"> IoT Experiment </a>
                      </li>
                      <li>
                        <a href="contact.html">Contact</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
              <div class="header-button">
                <a href="tel:917904405051" class="theme-btn bg-white">
                  <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                </a>
              </div>
              <div class="header__hamburger d-block d-xl-none my-auto">
                <div class="sidebar__toggle">
                  <i class="fas fa-bars"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mobile-menu-overlay"></div>

<div class="mobile-menu">
  <div class="mobile-menu-header">
    <img src="assets/img/logo.png" alt="logo" />
    <button class="mobile-close">&times;</button>
  </div>

  <ul>
    <li><a href="index.html">Home</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="service.html">Services</a></li>
    <li><a href="index_iot.html">IoT Experiment</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
</div>
  </header> -->

  <!-- Hero Section Start -->
  <section class="hero-section fix hero-3">
    <div class="bottom-shape">
      <img src="assets/img/bottom-shape.png" alt="shape-img" />
    </div>
    <div class="array-button">
      <button class="array-prev"><i class="fal fa-arrow-right"></i></button>
      <button class="array-next"><i class="fal fa-arrow-left"></i></button>
    </div>
    <div class="swiper hero-slider">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="slider-image bg-cover" style="background-image: url('assets/img/hero-2.jpg')">
            <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
              <img src="assets/img/mask-shape-2.png" alt="shape-img" />
            </div>
            <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/border-shape.png" alt="shape-img" />
            </div>
            <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
              <img src="assets/img/circle.png" alt="shape-img" />
            </div>
            <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/frame.png" alt="shape-img" />
            </div>
          </div>
          <div class="container">
            <div class="row g-4 align-items-center">
              <div class="col-lg-8">
                <div class="hero-content">
                  <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">
                    IoT Services
                  </h5>
                  <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                    Smarter Connectivity. Seamless Control.
                  </h1>

                  <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                    End-to-end IoT solutions to digitize assets, automate
                    monitoring, and optimize operations in real time.
                  </p>
                  <div class="hero-button">
                    <a href="service.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn hover-white">
                      Explore More
                    </a>
                    <a href="student-form.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn border-white">
                      Student Session
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image bg-cover" style="background-image: url('assets/img/banner.jpg')">
            <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
              <img src="assets/img/mask-shape-2.png" alt="shape-img" />
            </div>
            <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/border-shape.png" alt="shape-img" />
            </div>
            <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
              <img src="assets/img/circle.png" alt="shape-img" />
            </div>
            <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/frame.png" alt="shape-img" />
            </div>
          </div>
          <div class="container">
            <div class="row g-4 align-items-center">
              <div class="col-lg-8">
                <div class="hero-content">
                  <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">
                    Industrial IoT (IIoT) Services
                  </h5>
                  <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                    Transform Your Industry with Real-Time Intelligence
                  </h1>

                  <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                    Enable predictive maintenance, energy efficiency, and
                    factory automation with our robust IIoT platforms.
                  </p>
                  <div class="hero-button">
                    <a href="#" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn hover-white">
                      Explore More
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                    <a href="student-form.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn border-white">
                      Student Session
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image bg-cover" style="background-image: url('assets/img/bannerimg.jpg')">
            <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
              <img src="assets/img/mask-shape-2.png" alt="shape-img" />
            </div>
            <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/border-shape.png" alt="shape-img" />
            </div>
            <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
              <img src="assets/img/circle.png" alt="shape-img" />
            </div>
            <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/frame.png" alt="shape-img" />
            </div>
          </div>
          <div class="container">
            <div class="row g-4 align-items-center">
              <div class="col-lg-8">
                <div class="hero-content">
                  <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">
                    Computer Vision Automations
                  </h5>
                  <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                    Machines That See, Understand, and Decide
                  </h1>

                  <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                    Automate visual inspection, defect detection, and process
                    verification using AI-powered computer vision.
                  </p>
                  <div class="hero-button">
                    <a href="#" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn hover-white">
                      Explore More
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                    <a href="student-form.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn border-white">
                      Student Session
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image bg-cover" style="background-image: url('assets/img/bannerimg.jpg')">
            <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
              <img src="assets/img/mask-shape-2.png" alt="shape-img" />
            </div>
            <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/border-shape.png" alt="shape-img" />
            </div>
            <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
              <img src="assets/img/circle.png" alt="shape-img" />
            </div>
            <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/frame.png" alt="shape-img" />
            </div>
          </div>
          <div class="container">
            <div class="row g-4 align-items-center">
              <div class="col-lg-8">
                <div class="hero-content">
                  <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">
                    Process Automation
                  </h5>
                  <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                    Automate What Slows You Down
                  </h1>

                  <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                    Streamline workflows, reduce human error, and boost
                    productivity with intelligent process automation.
                  </p>
                  <div class="hero-button">
                    <a href="#" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn hover-white">
                      Explore More
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                    <a href="student-form.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn border-white">
                      Student Session
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image bg-cover" style="background-image: url('assets/img/bannerimg.jpg')">
            <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
              <img src="assets/img/mask-shape-2.png" alt="shape-img" />
            </div>
            <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/border-shape.png" alt="shape-img" />
            </div>
            <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
              <img src="assets/img/circle.png" alt="shape-img" />
            </div>
            <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/frame.png" alt="shape-img" />
            </div>
          </div>
          <div class="container">
            <div class="row g-4 align-items-center">
              <div class="col-lg-8">
                <div class="hero-content">
                  <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">
                    Autonomous AI Agents for Business
                  </h5>
                  <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                    Deploy AI That Works Like a Team Member
                  </h1>

                  <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                    Integrate AI agents that learn, adapt, and operate
                    autonomously — across your business processes and
                    interfaces.
                  </p>
                  <div class="hero-button">
                    <a href="#" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn hover-white">
                      Explore More
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                    <a href="student-form.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn border-white">
                      Student Session
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="slider-image bg-cover" style="background-image: url('assets/img/bannerimg.jpg')">
            <div class="mask-shape" data-animation="slideInDown" data-duration="3s" data-delay="2s">
              <img src="assets/img/mask-shape-2.png" alt="shape-img" />
            </div>
            <div class="border-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/border-shape.png" alt="shape-img" />
            </div>
            <div class="circle-shape" data-animation="slideInRight" data-duration="3s" data-delay="2.1s">
              <img src="assets/img/circle.png" alt="shape-img" />
            </div>
            <div class="frame" data-animation="slideInLeft" data-duration="3s" data-delay="2.2s">
              <img src="assets/img/frame.png" alt="shape-img" />
            </div>
          </div>
          <div class="container">
            <div class="row g-4 align-items-center">
              <div class="col-lg-8">
                <div class="hero-content">
                  <h5 data-animation="slideInRight" data-duration="2s" data-delay=".3s">
                    Mobile Application Development
                  </h5>
                  <h1 data-animation="slideInRight" data-duration="2s" data-delay=".5s">
                    Build Mobile Experiences That Drive Results
                  </h1>

                  <p data-animation="slideInRight" data-duration="2s" data-delay=".9s">
                    From idea to launch — we craft high-performance Android &
                    iOS apps tailored to your business needs.
                  </p>
                  <div class="hero-button">
                    <a href="#" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn hover-white">
                      Explore More
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                    <a href="student-form.html" data-animation="slideInRight" data-duration="2s" data-delay=".9s"
                      class="theme-btn border-white">
                      Student Session
                      <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section Start -->
  <section class="about-section section-padding fix bg-cover" id="about">
    <div class="container">
      <div class="about-wrapper-2">
        <div class="row">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
            <div class="about-image">
              <div class="shape-image">
                <img src="assets/img/shape.png" alt="shape-img" />
              </div>
              <div class="circle-shape">
                <img src="assets/img/circle-01.png" alt="shape-img" />
              </div>
              <img src="assets/img/05.png" class="about-bg" alt="about-img" />
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="about-content">
              <div class="section-title mb-3 mxw-650">
                <div class="subtitle">
                  <img src="assets/img/arrowLeft-colored.png" alt="icon" />
                  <span>ABOUT SANLEVA </span><img src="assets/img/arrowRight-colored.png" alt="icon" />
                </div>
                <h2 class="title">
                  Innovating Smart Solutions for a Smarter World
                </h2>
              </div>
              <p class="wow fadeInUp" data-wow-delay=".5s">
                At Sanleva Prime Solutions, we are dedicated to transforming
                the way businesses and communities connect, operate, and
                thrive through innovative technology. Headquartered in
                Chennai, India, our mission is to harness the power of the
                Internet of Things (IoT), IT services, and mobile application
                development to deliver intelligent, scalable, and future-ready
                solutions.
              </p>
              <div class="vision">
                <h4>Our Vision</h4>
                <p class="list">
                  We envision a world where every device—from home appliances
                  to industrial machinery—is interconnected and intelligent.
                  Our goal is to lead this transformation by creating smart
                  ecosystems that enhance efficiency, sustainability, and
                  quality of life.
                </p>
              </div>
              <div class="icon-area wow fadeInUp" data-wow-delay=".7s">
                <div class="icon-items">
                  <div class="icon">
                    <h4>Why Choose Us</h4>
                    <ul class="list home-li">
                      <li>
                        <i class="fa-solid fa-check"></i>
                        <strong>Expertise:</strong> Our team comprises
                        experienced professionals with a proven track record
                        in IoT development and implementation.
                      </li>
                      <li>
                        <i class="fa-solid fa-check"></i>
                        <strong>Innovation:</strong> We stay at the forefront
                        of technological advancements, continuously innovating
                        to deliver cutting-edge solutions.
                      </li>
                      <li>
                        <i class="fa-solid fa-check"></i>
                        <strong>Customization:</strong> We understand that
                        each business has unique needs. Our solutions are
                        tailored to meet specific requirements, ensuring
                        optimal results. We understand that each business has
                        unique needs. Our solutions are tailored to meet
                        specific requirements, ensuring optimal results.
                      </li>
                      <li>
                        <i class="fa-solid fa-check"></i>
                        <strong>End-to-End Support:</strong> From initial
                        consultation to deployment and maintenance, we provide
                        comprehensive support to ensure seamless integration
                        and operation.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Service Section Start -->
  <section class="service-section-3 pb-0 fix section-padding bg-cover"
    style="background-image: url('assets/img/service-bg-3.jpg')" id="services">
    <div class="container">
      <div class="row align-items-center justify-content-between mb-20">

        <div class="col-xl-9 col-lg-8">
          <div class="section-title">
            <div class="subtitle">
              <img src="assets/img/arrowLeft-colored.png" alt="icon" />
              <span> Our Services </span>
              <img src="assets/img/arrowRight-colored.png" alt="icon" />
            </div>

            <h2 class="title">
              We deliver end-to-end digital transformation solutions that help businesses become smarter, more
              connected, and future-ready. Our expertise spans IoT, Industry 4.0, cloud, AI, automation, mobility, and
              enterprise IT, ensuring robust, scalable, and real-world systems.
            </h2>
          </div>
        </div>

        <div class="col-xl-3 col-lg-4 text-lg-end mt-4 mt-lg-0">
          <div class="btn-wrapper">
            <a href="service.html" class="theme-btn-1">More Services </a>
          </div>
        </div>

      </div>


      <div class="swiper service-slider-2">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/iot.jpg" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/technology.png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/technology.png" alt="img">
                </div>
                <h4>
                  IoT & Smart System Solutions
                </h4>
                <p>
                  Smart Garden Water Monitoring and Management System.
                </p>
                <!-- <a href="#" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/iiot3.jpg" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/cloud.png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/cloud.png" alt="img">
                </div>
                <h4>
                  Industrial IoT & Industry 4.0
                </h4>
                <p>
                  IIoT Implementation and Integration
                </p>
                <!-- <a href="service-details.html" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/it.jpg" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/information-technology.png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/information-technology.png" alt="img">
                </div>
                <h4>
                  Enterprise IT & Software Engineering
                </h4>
                <p>
                  Systems Integration and Implementation
                </p>
                <!-- <a href="#" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/mobile2.jpg" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/native.png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/native.png" alt="img">
                </div>
                <h4>
                  Mobile Application Development
                </h4>
                <p>
                  Cross-Platform Mobile App Development
                </p>
                <!-- <a href="#" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/vision.jpg" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/technology (1).png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/technology (1).png" alt="img">
                </div>
                <h4>
                  AI, Computer Vision & Intelligent Automation
                </h4>
                <p>
                  Object Recognition and Tracking
                </p>
                <!-- <a href="#" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/process (2).jpg" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/robotic-process-automation.png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/robotic-process-automation.png" alt="img">
                </div>
                <h4>
                  Process Automation & RPA
                </h4>
                <p>
                  Robotic Process Automation (RPA)
                </p>
                <!-- <a href="#" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/documentsys.png" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/dms.png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/dms.png" alt="img">
                </div>
                <h4>
                  Document & Content Management Systems
                </h4>
                <p>
                  Document Storage and Retrieval
                </p>
                <!-- <a href="#" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/cloudimg.png" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/server.png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/server.png" alt="img">
                </div>
                <h4>
                  Cloud Engineering & DevOps
                </h4>
                <p>
                  Cloud Architecture & Infrastructure Deployment
                </p>
                <!-- <a href="#" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="service-card-items mt-0">
              <div class="service-image">
                <img src="assets/img/health.png" alt="service-img">
              </div>
              <div class="icon-2">
                <img src="assets/img/healthcare.png" alt="img">
              </div>
              <div class="service-content">
                <div class="icon">
                  <img src="assets/img/healthcare.png" alt="img">
                </div>
                <h4>
                  Healthcare Technology Solutions
                </h4>
                <p>
                  Medical Workflow Automation (Lab, Pharmacy, Billing, IP/OP)
                </p>
                <!-- <a href="#" class="theme-btn-2 mt-3">
                  read More
                  <i class="fa-solid fa-arrow-right-long"></i>
                </a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-dot-2">
          <div class="dot-2"></div>
        </div>
      </div>
    </div>
    <div class="cta-banner-2 section-padding">
      <div class="container">
        <div class="cta-wrapper-2 border-radius">
          <h3>
            Stay Connected With <br />
            Cutting Edge IT
          </h3>
          <div class="author-icon">
            <div class="icon">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="content">
              <span>Call Us Now</span>
              <h4>
                <a href="tel:
                                917904405051">
                  +91 79044 05051</a>
              </h4>
            </div>
          </div>
          <a href="#contact" class="theme-btn bg-white">
            get A Quote
            <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="service-section-3 pb-0 fix section-padding bg-cover"
    style="background-image: url('assets/img/service-bg-3.jpg')" id="services">
    <div class="container">
      <div class="row d-flex align-items-end justify-content-between mb-20">
        <div class="col-xl-9">
          <div class="section-title">
            <div class="subtitle">
              <img src="assets/img/arrowLeft-colored.png" alt="icon" />
              <span> Our Services </span><img src="assets/img/arrowRight-colored.png" alt="icon" />
            </div>
            <h2 class="title">
              We deliver end-to-end digital transformation solutions that help businesses become smarter, more
              connected, and future-ready. Our expertise spans IoT, Industry 4.0, Cloud, AI, Automation, Mobility, and
              Enterprise IT, ensuring robust, scalable, and real-world systems.
            </h2>
          </div>
        </div>

        <div class="col-xl-3 d-flex align-items-end justify-content-end">
          <div class="btn-wrapper" data-wow-delay=".9s">
            <a href="917904405051" class="theme-btn">Contact Us <i class="fa-solid fa-arrow-right-long"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="service-card-items">
            <div class="service-image">
              <img src="assets/img/iot.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/technology.png" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/technology.png" alt="img" />
              </div>
              <h4>
                <a class="dlink" href="#">IOT Services</a>
              </h4>
              <ul class="myList">
                <li>
                  <i class="fa-solid fa-check"></i> Smart Garden Water
                  Monitoring and Management System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Oil Flow Monitoring and
                  Management System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> pH Monitoring and
                  Management System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Material Preservation,
                  Temperature Monitoring and Management System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Power Saving, Monitoring
                  and Management System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Smart Lighting and Control
                  System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> People Count via Camera
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Asset Management System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Smart School Management
                  System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Air Pressure Monitoring
                  and Management System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Visitor Management System
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Action Monitoring and
                  Management System
                </li>
              </ul>
              <button onclick="toggleList(this, 'myList')">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="service-card-items">
            <div class="service-image">
              <img src="assets/img/iiot3.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/cloud.png" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/cloud.png" alt="img" />
              </div>
              <h4>
                <a class="dlink" href="#">Industrial IoT (IIoT) Services</a>
              </h4>
              <ul class="myList">
                <li>
                  <i class="fa-solid fa-check"></i> IIoT Implementation and
                  Integration
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Consultation Services for
                  Industrial IoT
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Industry Process
                  Automation
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Conversion of Existing PLC
                  Automation to IoT -based Automation (Lightweight)
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Computer Vision-based QA
                  and Manufacturing Automation
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Manufacturing Optimization
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Supply Chain Management
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Quality Control and
                  Assurance
                </li>
              </ul>
              <button onclick="toggleList(this, 'myList')">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="service-card-items">
            <div class="service-image">
              <img src="assets/img/it.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/information-technology.png" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/information-technology.png" alt="img" />
              </div>
              <h4>
                <a class="dlink" href="#">IT Services</a>
              </h4>
              <ul class="myList">
                <li>
                  <i class="fa-solid fa-check"></i> IT Infrastructure
                  Consulting
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Systems Integration and
                  Implementation
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Custom Software
                  Development
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Database to Database
                  Migration
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Legacy to Monolith
                  Migration
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Monolith to Microservices
                  Migration
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Web Service Implementation
                </li>
                <li><i class="fa-solid fa-check"></i> WPF Implementation</li>
                <li><i class="fa-solid fa-check"></i> Microservices Build</li>
              </ul>
              <button onclick="toggleList(this, 'myList')">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="service-card-items">
            <div class="service-image">
              <img src="assets/img/mobile2.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/native.png" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/native.png" alt="img" />
              </div>
              <h4>
                <a class="dlink" href="#">Mobile Application Development</a>
              </h4>
              <ul class="myList">
                <li>
                  <i class="fa-solid fa-check"></i> iOS Application Devlopment
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Android Apllication
                  Development
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Cross-Platform Mobile App
                  Development
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Mobile App UI/UX Design
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Mobile App Testing and QA
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Mobile App Maintenance and
                  Support
                </li>
              </ul>
              <button onclick="toggleList(this, 'myList')">Read More</button>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="service-card-items">
            <div class="service-image">
              <img src="assets/img/vision.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/technology (1).png" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/technology (1).png" alt="img" />
              </div>
              <h4>
                <a class="dlink" href="#">Computer Vision Automations</a>
              </h4>
              <ul class="bmylist">
                <li>
                  <i class="fa-solid fa-check"></i> Image and Video Analysis
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Object Recognition and
                  Tracking
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Computer Vision Consulting
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="service-card-items">
            <div class="service-image">
              <img src="assets/img/process (2).jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/robotic-process-automation.png" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/robotic-process-automation.png" alt="img" />
              </div>
              <h4>
                <a class="dlink" href="#">Process Automation</a>
              </h4>
              <ul class="bmylist">
                <li>
                  <i class="fa-solid fa-check"></i> Workflow Analysis and
                  Optimization
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Robotic Process Automation
                  (RPA)
                </li>
                <li><i class="fa-solid fa-check"></i> Task Automation</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="service-card-items">
            <div class="service-image">
              <img src="assets/img/documentsys.png" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/dms.png" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/dms.png" alt="img" />
              </div>
              <h4>
                <a class="dlink" href="#">DMS (Document Management System)</a>
              </h4>
              <ul class="bmylist">
                <li>
                  <i class="fa-solid fa-check"></i> Document Storage and
                  Retrieval
                </li>
                <li><i class="fa-solid fa-check"></i> Version Control</li>
                <li><i class="fa-solid fa-check"></i> Collaboration Tools</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="service-card-items">
            <div class="service-image">
              <img src="assets/img/cms.jpg" alt="service-img" />
            </div>
            <div class="icon-2">
              <img src="assets/img/cms.png" alt="img" />
            </div>
            <div class="service-content">
              <div class="icon">
                <img src="assets/img/cms.png" alt="img" />
              </div>
              <h4>
                <a class="dlink" href="#">CMS (Content Management System)</a>
              </h4>
              <ul class="bmylist">
                <li>
                  <i class="fa-solid fa-check"></i> CMS Implementation and
                  Customization
                </li>
                <li>
                  <i class="fa-solid fa-check"></i> Content Strategy and
                  Optimization
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cta-banner-2 section-padding">
      <div class="container">
        <div class="cta-wrapper-2 border-radius">
          <h3>
            Stay Connected With <br />
            Cutting Edge IT
          </h3>
          <div class="author-icon">
            <div class="icon">
              <i class="fa-solid fa-phone"></i>
            </div>
            <div class="content">
              <span>Call Us Now</span>
              <h4>
                <a href="tel:
                                917904405051">
                  +91 79044 05051</a>
              </h4>
            </div>
          </div>
          <a href="#contact" class="theme-btn bg-white">
            get A Quote
            <i class="fa-solid fa-arrow-right-long"></i>
          </a>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Work Process Section Start -->
  <section class="work-process-section fix section-padding pt-0">
    <div class="container">
      <div class="section-title title-area mx-auto mb-25">
        <div class="subtitle d-flex justify-content-center">
          <img src="assets/img/arrowLeft-colored.png" alt="icon" />
          <span> How IT work </span><img src="assets/img/arrowRight-colored.png" alt="icon" />
        </div>
        <h2 class="title text-center">Standard Work Process</h2>
      </div>

      <div class="process-work-wrapper">
        <div class="line-shape">
          <img src="assets/img/linepng.png" alt="" />
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="work-process-items text-center">
              <div class="icon">
                <img src="assets/img/01.svg" alt="img" />
                <h6 class="number">1</h6>
              </div>
              <div class="content">
                <h4>Choose A Service</h4>
                <p>Enhance customer experiences, and drive innovation.</p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="work-process-items text-center">
              <div class="content style-2">
                <h4>Define Requirements</h4>
                <p>
                  Supported by a dedicated budget for scalability and
                  long-term success.
                </p>
              </div>
              <div class="icon">
                <img src="assets/img/02.svg" alt="img" />
                <h6 class="number">2</h6>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="work-process-items text-center">
              <div class="icon">
                <img src="assets/img/03.svg" alt="img" />
                <h6 class="number">3</h6>
              </div>
              <div class="content">
                <h4>Request A Meeting</h4>
                <p>
                  Address any questions, and identify tailored solutions to
                  meet your needs.
                </p>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="work-process-items text-center">
              <div class="content style-2">
                <h4>Final Solution</h4>
                <p>
                  Connect, communicate, and thrive in a digital landscape.
                </p>
              </div>
              <div class="icon">
                <img src="assets/img/04.svg" alt="img" />
                <h6 class="number">4</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Achievement Section Start -->
  <section class="achievement-section-3 fix section-bg-2">
    <div class="shape-image">
      <img src="assets/img/achiv-shape.png" alt="shape-img" />
    </div>
    <div class="container">
      <div class="achievement-wrapper style-2">
        <div class="section-title mxw-560">
          <div class="subtitle text-white wow fadeInUp" data-wow-delay=".3s">
            <img src="assets/img/arrowLeftWhite.svg" alt="icon" />
            <span class="text-white"> achievement </span><img src="assets/img/arrowRightWhite.svg" alt="icon" />
          </div>
          <h2 class="title text-white wow fadeInUp" data-wow-delay=".6s">
            We Are Increasing Business Success
          </h2>
        </div>

        <div class="counter-area">
          <div class="counter-items wow fadeInUp" data-wow-delay=".3s">
            <div class="icon">
              <img src="assets/img/a01.svg" alt="icon-img" />
            </div>
            <div class="content">
              <h2><span class="counter-number">35</span>+</h2>
              <p>Satisfied Clients</p>
            </div>
          </div>
          <div class="counter-items wow fadeInUp" data-wow-delay=".5s">
            <div class="icon">
              <img src="assets/img/a02.svg" alt="icon-img" />
            </div>
            <div class="content">
              <h2><span class="counter-number">46</span>+</h2>
              <p>Finished Projects</p>
            </div>
          </div>
          <div class="counter-items wow fadeInUp" data-wow-delay=".7s">
            <div class="icon">
              <img src="assets/img/a03.svg" alt="icon-img" />
            </div>
            <div class="content">
              <h2><span class="counter-number">15</span>+</h2>
              <p>Skilled Experts</p>
            </div>
          </div>
          <div class="counter-items wow fadeInUp" data-wow-delay=".9s">
            <div class="icon">
              <img class="collob" src="assets/img/people.png" alt="icon-img" />
            </div>
            <div class="content">
              <h2><span class="counter-number">20</span>+</h2>
              <p>Ongoing Collaborations</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--<< Testimonial Section Start >>-->
  <!-- <section class="tesimonial-section-3 section-padding bg-cover">
    <div class="line-shape">
      <img src="assets/img/line-shape.png" alt="shape-img" />
    </div>
    <div class="mask-shape">
      <img src="assets/img/mask-shape.png" alt="shape-img" />
    </div>
    <div class="array-button">
      <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
      <button class="array-next"><i class="fal fa-arrow-right"></i></button>
    </div>
    <div class="container">
      <div class="section-title title-area mx-auto mb-20">
        <div class="subtitle d-flex justify-content-center">
          <img src="assets/img/arrowLeft-colored.png" alt="icon" />
          <span> Testimonials </span><img src="assets/img/arrowRight-colored.png" alt="icon" />
        </div>
        <h2 class="title text-center">
          People Who Already Love Us
        </h2>
      </div>
    

      <div class="swiper testimonial-slider-2 ">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-box-items">
              <div class="icon">
                <img src="assets/img/icon.png" alt="icon-img" />
              </div>
              <div class="client-items">
                <div class="client-content">
                  <h4>Manikandan</h4>
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
              </div>
              <p>
                We’ve seen significant improvements in efficiency and
                decision-making, thanks to the actionable insights provided by
                the system. The predictive maintenance feature has reduced our
                downtime dramatically, saving us both time and costs.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-box-items">
              <div class="icon">
                <img src="assets/img/icon.png" alt="icon-img" />
              </div>
              <div class="client-items">
                <div class="client-content">
                  <h4>Swetha</h4>
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star color-text"></i>
                  </div>
                </div>
              </div>
              <p>
                Sanleva’s team has been incredibly supportive throughout the
                process, ensuring a smooth transition and ongoing assistance.
                I highly recommend Sanleva to any business looking to enhance
                its operational capabilities.
              </p>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="testimonial-box-items">
              <div class="icon">
                <img src="assets/img/icon.png" alt="icon-img" />
              </div>
              <div class="client-items">
                <div class="client-content">
                  <h4>Kumar</h4>
                  <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star color-text"></i>
                  </div>
                </div>
              </div>
              <p>
                The platform’s seamless integration has transformed how we
                monitor our operations. We’ve seen significant improvements in
                efficiency and decision-making, thanks to the actionable
                insights provided by the system.
              </p>
            </div>
          </div>
    </div>
        </div>
      </div>
       <div class="btn-wrapper">
            <a href="https://www.google.com/search?q=sanleva&oq=sanleva&gs_lcrp=EgZjaHJvbWUqBggAEEUYOzIGCAAQRRg7MgYIARBFGDwyBggCEEUYPDIGCAMQRRg80gEINzAyMGowajSoAgCwAgA&sourceid=chrome&ie=UTF-8" class="theme-btn-1" target="_blank">Share a Google Review</a>
          </div>
    </div>
  </section> -->
  <!-- ══════════════════════════════════
     TESTIMONIAL SECTION
══════════════════════════════════ -->
<section class="testimonial-section tesimonial-section-3 section-padding bg-cover">
  <div class="section-inner">

    <div class="line-shape">
      <img src="assets/img/line-shape.png" alt="shape-img" />
    </div>
    <div class="mask-shape">
      <img src="assets/img/mask-shape.png" alt="shape-img" />
    </div>
    <div class="array-button">
           <button class="array-prev swiper-button-prev" id="prevBtn"><i class="fal fa-arrow-left"></i></button>
      <button class="array-next swiper-button-next" id="nextBtn"><i class="fal fa-arrow-right"></i></button>
    </div>
    <div class="container">
      <div class="section-title title-area mx-auto mb-20">
        <div class="subtitle d-flex justify-content-center">
          <img src="assets/img/arrowLeft-colored.png" alt="icon" />
          <span> Testimonials </span><img src="assets/img/arrowRight-colored.png" alt="icon" />
        </div>
        <h2 class="title text-center">
          People Who Already Love Us
        </h2>
      </div>
      
    <!-- Slider -->
    <div class="swiper-wrap">
      <div class="swiper testimonial-slider">
        <div class="swiper-wrapper" id="testimonialWrapper"></div>
         <!-- <div class="swiper-pagination"></div> -->
          
      </div>
    </div>
    <!-- CTA -->
    <div class="btn-wrapper">
      <button id="googleReviewBtn" onclick="openModal()">
        Share a Google Review
      </button>
    </div>

  </div>
</section>
<!-- ══════════════════════════════════
     ADD REVIEW MODAL
══════════════════════════════════ -->
<div class="overlay" id="addModal">
  <div class="modal-box">
    <button class="modal-close" id="addClose"  onclick="closeModal()">&#x2715;</button>
    <div class="modal-title">✍️ Share Your Review</div>

    <div class="form-group">
      <label class="form-label">Your Name *</label>
      <input id="grName" type="text" class="form-input" placeholder="e.g. Manikandan"/>
      <div class="err-msg" id="nameErr">Please enter your name</div>
    </div>

 
    <div class="form-group">
      <label class="form-label">Rating *</label>
      <div class="star-picker" id="starPicker">
        <span data-v="1">★</span>
        <span data-v="2">★</span>
        <span data-v="3">★</span>
        <span data-v="4">★</span>
        <span data-v="5">★</span>
      </div>
      <div class="err-msg" id="starErr">Please select a rating</div>
    </div>

    <div class="form-group">
      <label class="form-label">Your Review *</label>
      <textarea id="grText" class="form-textarea" rows="4" placeholder="Write your experience..."></textarea>
      <div class="err-msg" id="textErr">Please write your review</div>
    </div>

    <div class="modal-actions">
      <button class="btn-cancel" id="addCancel"  onclick="closeModal()">Cancel</button>
      <button class="btn-submit" id="addPost" onclick="addReview()">Post Review</button>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════
     CONFIRM DELETE MODAL
══════════════════════════════════ -->
<div class="overlay" id="delModal">
  <div class="confirm-box">
    <div class="confirm-icon">🗑️</div>
    <h3>Delete this Review?</h3>
    <p class="confirm-desc">This will be permanently removed and cannot be restored.</p>
    <div class="confirm-preview">
      <strong id="delName"></strong>
      <em id="delText"></em>
    </div>
    <div class="confirm-actions">
      <button class="btn-keep" id="delKeep">Keep It</button>
      <button class="btn-del"  id="delConfirm">Yes, Delete</button>
    </div>
  </div>
</div>

<!-- Toast -->
<div id="toast"></div>


  


  <div class="whatsappfooter">
    <a class="whats-app-icon" href="https://wa.me/917904405051?text=Hi%20Team" target="_blank" rel="noopener"><img
        src="assets/img/whatsapp.png" alt="WhatsApp" /></a>
  </div>

  <!--<< Footer Section Start >>-->
  <footer class="footer-section pt-100 footer-bg" id="contact">
    <div class="container">
      <div class="contact-info-area">
        <div class="contact-info-items wow fadeInUp" data-wow-delay=".7s">
          <div class="icon">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16 1.6665C11.036 1.6665 7 5.7385 7 10.7612C7 12.4625 7.74933 14.5732 8.84 16.6785C11.2413 21.3145 15.2413 25.9838 15.2413 25.9838C15.3352 26.0932 15.4516 26.1809 15.5826 26.2411C15.7135 26.3012 15.8559 26.3324 16 26.3324C16.1441 26.3324 16.2865 26.3012 16.4174 26.2411C16.5484 26.1809 16.6648 26.0932 16.7587 25.9838C16.7587 25.9838 20.7587 21.3145 23.16 16.6785C24.2507 14.5732 25 12.4625 25 10.7612C25 5.7385 20.964 1.6665 16 1.6665ZM16 6.99984C15.0447 7.0256 14.1371 7.42322 13.4705 8.10804C12.8039 8.79286 12.4309 9.71081 12.4309 10.6665C12.4309 11.6222 12.8039 12.5401 13.4705 13.225C14.1371 13.9098 15.0447 14.3074 16 14.3332C16.9553 14.3074 17.8629 13.9098 18.5295 13.225C19.1961 12.5401 19.5691 11.6222 19.5691 10.6665C19.5691 9.71081 19.1961 8.79286 18.5295 8.10804C17.8629 7.42322 16.9553 7.0256 16 6.99984Z"
                fill="#3C72FC" />
              <path fill-rule="evenodd" clip-rule="evenodd"
                d="M22.3788 23.1693C23.4628 23.4946 24.3562 23.8973 24.9735 24.3693C25.3735 24.6733 25.6668 24.9706 25.6668 25.3333C25.6668 25.5466 25.5455 25.74 25.3748 25.9333C25.0922 26.252 24.6722 26.5386 24.1522 26.8053C22.3148 27.7453 19.3442 28.3333 16.0002 28.3333C12.6562 28.3333 9.6855 27.7453 7.84816 26.8053C7.32816 26.5386 6.90816 26.252 6.6255 25.9333C6.45483 25.74 6.3335 25.5466 6.3335 25.3333C6.3335 24.9706 6.62683 24.6733 7.02683 24.3693C7.64416 23.8973 8.5375 23.4946 9.6215 23.1693C9.87557 23.0929 10.0889 22.9187 10.2146 22.6851C10.3402 22.4514 10.3679 22.1774 10.2915 21.9233C10.2151 21.6692 10.0409 21.4559 9.80726 21.3302C9.57359 21.2046 9.29957 21.1769 9.0455 21.2533C7.39483 21.7506 6.11216 22.432 5.3415 23.1853C4.66416 23.8453 4.3335 24.584 4.3335 25.3333C4.3335 26.2693 4.86283 27.2026 5.93883 27.9813C7.82683 29.3466 11.6188 30.3333 16.0002 30.3333C20.3815 30.3333 24.1735 29.3466 26.0615 27.9813C27.1375 27.2026 27.6668 26.2693 27.6668 25.3333C27.6668 24.584 27.3362 23.8453 26.6588 23.1853C25.8882 22.432 24.6055 21.7506 22.9548 21.2533C22.829 21.2155 22.697 21.2028 22.5663 21.216C22.4356 21.2292 22.3088 21.268 22.1931 21.3302C22.0774 21.3925 21.9751 21.4769 21.892 21.5786C21.8089 21.6804 21.7467 21.7975 21.7088 21.9233C21.671 22.0491 21.6583 22.1811 21.6715 22.3118C21.6847 22.4425 21.7236 22.5694 21.7858 22.6851C21.848 22.8008 21.9324 22.9031 22.0341 22.9862C22.1359 23.0692 22.253 23.1315 22.3788 23.1693Z"
                fill="#3C72FC" />
            </svg>
          </div>
          <div class="content">
            <p>Address</p>
            <h3>Chennai</h3>
          </div>
        </div>
        <div class="contact-info-items wow fadeInUp" data-wow-delay=".5s">
          <div class="icon">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M12.6498 10.8272C12.8023 10.914 12.976 10.9569 13.1514 10.9509C13.3312 10.9344 13.5053 10.8798 13.6623 10.7906L24.9217 4.22062C24.677 3.79416 24.3245 3.43955 23.8994 3.19239C23.4744 2.94523 22.9918 2.81422 22.5001 2.8125H3.75014C3.2583 2.81406 2.77554 2.94499 2.35032 3.19216C1.9251 3.43932 1.5724 3.79402 1.32764 4.22062L12.6498 10.8272Z"
                fill="#3C72FC" />
              <path
                d="M25.3125 6.15918V12.6748C24.4104 12.3501 23.4587 12.1852 22.5 12.1873C20.2633 12.1908 18.1192 13.0808 16.5376 14.6624C14.956 16.244 14.066 18.3881 14.0625 20.6248C14.0623 20.9382 14.0811 21.2512 14.1188 21.5623H3.75C3.00476 21.5601 2.29069 21.263 1.76372 20.7361C1.23676 20.2091 0.939726 19.495 0.9375 18.7498V6.15918L11.7094 12.4498C12.1434 12.6872 12.6303 12.8116 13.125 12.8116C13.6197 12.8116 14.1066 12.6872 14.5406 12.4498L25.3125 6.15918Z"
                fill="#3C72FC" />
              <path
                d="M22.5 14.0625C20.7595 14.0625 19.0903 14.7539 17.8596 15.9846C16.6289 17.2153 15.9375 18.8845 15.9375 20.625C15.9375 22.3655 16.6289 24.0347 17.8596 25.2654C19.0903 26.4961 20.7595 27.1875 22.5 27.1875C22.7486 27.1875 22.9871 27.0887 23.1629 26.9129C23.3387 26.7371 23.4375 26.4986 23.4375 26.25C23.4375 26.0014 23.3387 25.7629 23.1629 25.5871C22.9871 25.4113 22.7486 25.3125 22.5 25.3125C21.5729 25.3125 20.6666 25.0376 19.8958 24.5225C19.1249 24.0074 18.5241 23.2754 18.1693 22.4188C17.8145 21.5623 17.7217 20.6198 17.9026 19.7105C18.0834 18.8012 18.5299 17.966 19.1854 17.3104C19.841 16.6549 20.6762 16.2084 21.5855 16.0276C22.4948 15.8467 23.4373 15.9395 24.2938 16.2943C25.1504 16.6491 25.8824 17.2499 26.3975 18.0208C26.9126 18.7916 27.1875 19.6979 27.1875 20.625V21.5625C27.1875 21.8111 27.0887 22.0496 26.9129 22.2254C26.7371 22.4012 26.4986 22.5 26.25 22.5C26.0014 22.5 25.7629 22.4012 25.5871 22.2254C25.4113 22.0496 25.3125 21.8111 25.3125 21.5625V20.625C25.3125 20.0687 25.1476 19.525 24.8385 19.0625C24.5295 18.5999 24.0902 18.2395 23.5763 18.0266C23.0624 17.8137 22.4969 17.758 21.9513 17.8665C21.4057 17.9751 20.9046 18.2429 20.5113 18.6363C20.1179 19.0296 19.8501 19.5307 19.7415 20.0763C19.633 20.6219 19.6887 21.1874 19.9016 21.7013C20.1145 22.2152 20.4749 22.6545 20.9375 22.9635C21.4 23.2726 21.9437 23.4375 22.5 23.4375C22.9843 23.4344 23.4594 23.3048 23.8781 23.0616C24.2022 23.578 24.6856 23.9748 25.2552 24.1921C25.8248 24.4094 26.4496 24.4353 27.0353 24.266C27.621 24.0967 28.1356 23.7412 28.5013 23.2535C28.867 22.7657 29.064 22.1721 29.0625 21.5625V20.625C29.0605 18.8851 28.3685 17.2171 27.1382 15.9868C25.9079 14.7565 24.2399 14.0645 22.5 14.0625ZM22.5 21.5625C22.3146 21.5625 22.1333 21.5075 21.9792 21.4045C21.825 21.3015 21.7048 21.1551 21.6339 20.9838C21.5629 20.8125 21.5443 20.624 21.5805 20.4421C21.6167 20.2602 21.706 20.0932 21.8371 19.9621C21.9682 19.831 22.1352 19.7417 22.3171 19.7055C22.499 19.6693 22.6875 19.6879 22.8588 19.7589C23.0301 19.8298 23.1765 19.95 23.2795 20.1042C23.3825 20.2583 23.4375 20.4396 23.4375 20.625C23.4375 20.8736 23.3387 21.1121 23.1629 21.2879C22.9871 21.4637 22.7486 21.5625 22.5 21.5625Z"
                fill="#3C72FC" />
            </svg>
          </div>
          <div class="content">
            <p>Send Email</p>
            <h3>
              <a href="mailto:support@sanleva.com"> support@sanleva.com</a>
            </h3>
          </div>
        </div>
        <div class="contact-info-items wow fadeInUp" data-wow-delay=".3s">
          <div class="icon">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M23.7891 1.81641H16.7578C13.3658 1.81641 10.6055 4.5767 10.6055 7.96875C10.6055 11.063 12.9015 13.631 15.8789 14.0585V16.7578C15.8788 16.9317 15.9303 17.1016 16.0268 17.2462C16.1234 17.3907 16.2607 17.5033 16.4214 17.5697C16.7456 17.705 17.1258 17.6325 17.3793 17.3792L20.6374 14.1211H23.7891C27.1811 14.1211 30 11.3608 30 7.96875C30 4.5767 27.1811 1.81641 23.7891 1.81641ZM16.7578 8.84754C16.2723 8.84754 15.8789 8.45402 15.8789 7.96863C15.8789 7.48324 16.2723 7.08973 16.7578 7.08973C17.2432 7.08973 17.6367 7.48324 17.6367 7.96863C17.6367 8.45402 17.2432 8.84754 16.7578 8.84754ZM20.2734 8.84754C19.7879 8.84754 19.3945 8.45402 19.3945 7.96863C19.3945 7.48324 19.7879 7.08973 20.2734 7.08973C20.7588 7.08973 21.1523 7.48324 21.1523 7.96863C21.1523 8.45402 20.7588 8.84754 20.2734 8.84754ZM23.7891 8.84754C23.3036 8.84754 22.9102 8.45402 22.9102 7.96863C22.9102 7.48324 23.3036 7.08973 23.7891 7.08973C24.2745 7.08973 24.668 7.48324 24.668 7.96863C24.668 8.45402 24.2745 8.84754 23.7891 8.84754Z"
                fill="#3C72FC" />
              <path
                d="M19.7461 28.1836C21.2 28.1836 22.3828 27.0008 22.3828 25.5469V22.0312C22.3828 21.6527 22.1408 21.3171 21.782 21.1978L16.5209 19.44C16.2634 19.3533 15.9819 19.3928 15.7553 19.5421L13.5186 21.033C11.1496 19.9035 8.33871 17.0925 7.20914 14.7236L8.7 12.4868C8.77415 12.3754 8.82189 12.2485 8.83958 12.1158C8.85728 11.9831 8.84447 11.8482 8.80213 11.7212L7.04432 6.46014C6.98611 6.28516 6.87428 6.13295 6.72469 6.02512C6.5751 5.91728 6.39534 5.85929 6.21094 5.85938H2.63672C1.18277 5.85938 0 7.02979 0 8.48373C0 18.61 9.6198 28.1836 19.7461 28.1836Z"
                fill="#3C72FC" />
            </svg>
          </div>
          <div class="content">
            <p>Call Emergency</p>
            <h3>
              <a href="tel:917904405051"> +91 79044 05051</a>
            </h3>
          </div>
        </div>
      </div>
    </div>
    <div class="widget-area style1 footer-bg pb-80">
      <div class="container">
        <div class="footer-layout style1">
          <div class="row">
            <div class="col-xl-4 col-md-6 col-12">
              <div class="widget footer-widget wow fadeInUp" data-wow-delay=".6s">
                <div class="gt-widget-about">
                  <div class="about-logo">
                    <a href="index.php"><img src="assets/img/logo.png" alt="Sanleva Prime Solutions" /></a>
                  </div>
                  <p class="about-text">
                    We specialize in harnessing the power of the Internet of
                    Things (IoT) to transform businesses and enhance daily
                    lives.
                  </p>
                  <div class="gt-social style2">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1s">
                <h3 class="widget_title">Quick Links</h3>
                <div class="menu-all-pages-container">
                  <ul class="menu">
                    <li class="active">
                      <a href="index.php"><i class="fa-solid fa-chevrons-right"></i>Home</a>
                    </li>
                    <li>
                      <a href="#about"><i class="fa-solid fa-chevrons-right"></i>About</a>
                    </li>
                    <li>
                      <a href="service.html"><i class="fa-solid fa-chevrons-right"></i>Services</a>
                    </li>
                    <li>
                      <a href="contact.html"><i class="fa-solid fa-chevrons-right"></i>Contact
                        Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-xl-4 col-md-6 col-12">
              <div class="widget widget_nav_menu footer-widget wow fadeInUp" data-wow-delay="1.6s">
                <h3 class="widget_title">Contact Us</h3>
                <div class="checklist style2">
                  <ul class="ps-0">
                    <li class="text-white">
                      <i class="fa-solid fa-envelope"></i>
                    </li>
                    <li class="text-white">support@sanleva.com</li>
                  </ul>
                  <ul class="ps-0">
                    <li class="text-white">
                      <i class="fa-solid fa-phone"></i>
                    </li>
                    <li class="text-white">+91 79044 05051</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-wrap bg-theme">
      <div class="container">
        <div class="copyright-layout">
          <div class="layout-text wow fadeInUp" data-wow-delay=".3s">
            <p class="copyright">
              <i class="fal fa-copyright"></i> Copyright 2026 by
              <a href="index.php">Sanleva</a>
            </p>
          </div>
          <div class="layout-link wow fadeInUp" data-wow-delay=".6s">
            <div class="link-wrapper">Site by <a href="https://chennaiwebsitedeveloper.com/" target="_blank"> CWD </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!--<< All JS Plugins >>-->
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <!--<< Viewport Js >>-->
  <script src="assets/js/viewport.jquery.js"></script>
  <!--<< Bootstrap Js >>-->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <!--<< Swiper Slider Js >>-->
  <script src="assets/js/swiper-bundle.min.js"></script>
  <!--<< MeanMenu Js >>-->
  <script src="assets/js/jquery.meanmenu.min.js"></script>
  <!--<< Wow Animation Js >>-->
  <script src="assets/js/wow.min.js"></script>
  <!--<< Main.js >>-->
  <script src="assets/js/main.js"></script>
  <script>
    function toggleList(btn, listClass) {
      var listItems = btn.previousElementSibling.querySelectorAll("li");
      var elements = document.getElementsByClassName("service-content");

      // Toggle between showing first 4 or all list items
      if (btn.innerHTML === "Read More") {
        listItems.forEach((li) => (li.style.display = "list-item"));
        btn.innerHTML = "Read Less";

        // Add class to all elements with the class 'service-content'
        Array.from(elements).forEach((element) => {
          element.classList.add("new-class");
        });
      } else {
        listItems.forEach(
          (li, index) => (li.style.display = index < 3 ? "list-item" : "none")
        );
        btn.innerHTML = "Read More";

        // Remove class from all elements with the class 'service-content'
        Array.from(elements).forEach((element) => {
          element.classList.remove("new-class");
        });
      }
    }
  </script>

</body>

</html>