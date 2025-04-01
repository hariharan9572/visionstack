<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Visionstack - Custom Software & SaaS Solutions</title>
    <meta name="description" content="Visionstack provides enterprise-grade custom software development and SaaS solutions to help businesses optimize operations and drive growth.">
    <meta name="keywords" content="SaaS, Software Development, Cloud Solutions, API Integration, Custom Applications, Digital Transformation">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="Visionstack-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Visionstack
    * Template URL: https://bootstrapmade.com/Visionstack-free-multi-purpose-html-template/
    * Updated: Aug 07 2024 with Bootstrap v5.3.3
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
            <img src="assets/VisionStack_Logo(white).png" alt="VISIONSTACK" class="transparent-text logo img">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#team">Team</a></li>
                {{-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> --}}
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="cta-btn" href="{{ url('/#about') }}">Get Started</a>

    </div>
</header>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container d-flex flex-column align-items-center">
            <h2 data-aos="fade-up" data-aos-delay="100"><span class="typed transparent-text" data-typed-items="Visionstack, Enterprise SaaS Solutions, Cloud Applications, Custom Software, Digital Transformation, API Integrations"></span></h2>
            <p data-aos="fade-up" data-aos-delay="200">Transforming businesses with innovative software solutions and SaaS platforms</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                <a href="#about" class="btn-get-started">Get Started</a>
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

        <div class="container">

            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3>Empowering businesses with innovative software solutions and SaaS platforms</h3>
                    <img src="assets/img/douglas-lopes-OQT9s7fHeO0-unsplash.jpg" class="img-fluid rounded-4 mb-4" alt="">
                    <p>At Visionstack, we develop custom software and SaaS applications that help businesses optimize operations, increase productivity, and drive growth. Our solutions are designed to scale with your business needs while maintaining enterprise-grade security and performance.</p>
                    <p>With expertise in cloud technology, API integrations, and microservices architecture, we provide end-to-end software development services from initial consultation to deployment and ongoing support. We're committed to delivering high-quality solutions that address your unique business challenges.</p>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                    <div class="content ps-0 ps-lg-5">
                        <p class="fst-italic">
                            Visionstack specializes in developing scalable, secure, and user-friendly software solutions that drive business innovation and efficiency.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Custom software development focused on your unique business requirements</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Cloud-based SaaS platforms with flexible subscription models</span></li>
                            <li><i class="bi bi-check-circle-fill"></i> <span>Enterprise-grade security and compliance with industry standards to protect your valuable business data while ensuring regulatory compliance</span></li>
                        </ul>
                        <p>
                            Our team of experienced developers, designers, and product specialists work collaboratively to deliver solutions that not only meet your current needs but can also scale with your business growth and adapt to future requirements.
                        </p>

                        <div class="position-relative mt-4">
                            <img src="assets/img/about-2.jpg" class="img-fluid rounded-4" alt="">
                            <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Software Projects</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Support Hours</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Tech Experts</p>
                        </div>
                    </div>
                </div><!-- End Stats Item -->

            </div>

        </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Services</h2>
            <p>Our Software Solutions</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-cloud"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Cloud SaaS Platforms</h3>
                            </a>
                            <p>Enterprise-grade SaaS solutions deployed on secure cloud infrastructure with scalable architecture to accommodate your growing business needs.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-code-square"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>Custom Software Development</h3>
                            </a>
                            <p>Tailor-made software solutions designed to address your specific business challenges and streamline your operations with intuitive user interfaces.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="service-item">
                        <div class="img">
                            <img src="assets/img/blog-3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="details position-relative">
                            <div class="icon">
                                <i class="bi bi-gear"></i>
                            </div>
                            <a href="service-details.html" class="stretched-link">
                                <h3>API Integration</h3>
                            </a>
                            <p>Seamless integration of third-party APIs and services to enhance your existing software solutions and create powerful connected ecosystems.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section light-background">

        <div class="container" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

                <div class="col-xl-2 col-md-3 col-6 client-logo">
                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div><!-- End Client Item -->

            </div>

        </div>

    </section><!-- /Clients Section -->

    <!-- Features Section -->
    <section id="features" class="features section">

        <div class="container">

            <ul class="nav nav-tabs row d-flex" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                        <i class="bi bi-cloud-check"></i>
                        <h4 class="d-none d-lg-block">Cloud Solutions</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                        <i class="bi bi-shield-check"></i>
                        <h4 class="d-none d-lg-block">Security & Compliance</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                        <i class="bi bi-speedometer2"></i>
                        <h4 class="d-none d-lg-block">Scalable Architecture</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                        <i class="bi bi-phone"></i>
                        <h4 class="d-none d-lg-block">Mobile Solutions</h4>
                    </a>
                </li>
            </ul><!-- End Tab Nav -->

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="features-tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Powerful cloud-based solutions for modern businesses</h3>
                            <p class="fst-italic">
                                Our cloud solutions are designed to provide maximum reliability, security, and scalability for your business applications.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i>
                                    <span>Flexible deployment options on AWS, Azure, or Google Cloud Platform</span>
                                </li>
                                <li><i class="bi bi-check2-all"></i> <span>Microservices architecture for scalability and resilience</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Containerization with Docker and Kubernetes for consistent deployment and management across environments</span></li>
                            </ul>
                            <p>
                                We leverage cloud-native technologies to build applications that scale automatically with your business needs, reducing operational overhead and providing significant cost advantages over traditional on-premise solutions.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/annie-spratt-QckxruozjRg-unsplash.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content Item -->

                <div class="tab-pane fade" id="features-tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Enterprise-grade security and compliance for sensitive data</h3>
                            <p>
                                We implement security best practices at every layer of your application to protect your valuable business data and maintain compliance with industry regulations.
                            </p>
                            <p class="fst-italic">
                                Security is never an afterthought - it's baked into our development process from day one.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Data encryption at rest and in transit</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Role-based access control and multi-factor authentication</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Compliance with GDPR, HIPAA, SOC2, and other industry standards</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Regular security audits and vulnerability assessments to maintain the highest security standards</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/anthony-riera--ZZ7I31c0B8-unsplash.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content Item -->

                <div class="tab-pane fade" id="features-tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Build for growth with scalable, future-proof architecture</h3>
                            <p>
                                Our software solutions are built on scalable architectures that grow with your business, handling increased loads without sacrificing performance.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Microservices architecture for independent scaling of system components</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Database optimization and sharding for high-volume data processing</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Auto-scaling infrastructure that responds to demand in real-time</span></li>
                            </ul>
                            <p class="fst-italic">
                                We design systems that can handle your peak loads today and scale effortlessly as your user base grows tomorrow.
                            </p>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/working-3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content Item -->

                <div class="tab-pane fade" id="features-tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Extend your reach with cross-platform mobile solutions</h3>
                            <p>
                                Deliver exceptional user experiences on mobile devices with our native and cross-platform mobile development expertise.
                            </p>
                            <p class="fst-italic">
                                Our mobile solutions work seamlessly across devices, providing consistent experiences on iOS and Android platforms.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Native iOS and Android development for maximum performance</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Cross-platform frameworks like React Native and Flutter for efficient development</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Progressive Web Apps (PWAs) that combine the best of web and mobile experiences</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="assets/img/farzad-p-xSl33Wxyc-unsplash.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div><!-- End Tab Content Item -->

            </div>

        </div>

    </section><!-- /Features Section -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Solutions</h2>
            <p>OUR COMPREHENSIVE OFFERINGS</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-code-slash icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Custom Software Development</a></h4>
                            <p class="description">Tailor-made software solutions designed to address your specific business challenges and streamline your operations with intuitive user experiences.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-cloud-arrow-up icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">SaaS Platform Development</a></h4>
                            <p class="description">End-to-end development of scalable, secure SaaS platforms from concept to deployment, with ongoing support and maintenance.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-diagram-3 icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">API Development & Integration</a></h4>
                            <p class="description">Creation of robust APIs and seamless integration with third-party services to create powerful connected software ecosystems.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-phone icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Mobile App Development</a></h4>
                            <p class="description">Native and cross-platform mobile applications that provide engaging user experiences across iOS and Android devices.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-database-check icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Database & System Architecture</a></h4>
                            <p class="description">Design and implementation of scalable, high-performance database systems and application architectures that grow with your business.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item d-flex position-relative h-100">
                        <i class="bi bi-headset icon flex-shrink-0"></i>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Maintenance & Support</a></h4>
                            <p class="description">Comprehensive support, regular updates, and proactive maintenance to keep your software running smoothly and securely.</p>
                        </div>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services 2 Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

        <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper">
                <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": "auto",
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      }
                    }
                </script>
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                            <h3>Robert Johnson</h3>
                            <h4>CEO, TechInnovate</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Visionstack delivered an exceptional SaaS platform that transformed our business operations. Their attention to detail and commitment to quality was evident throughout the project. The solution they built has significantly improved our efficiency and customer satisfaction.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                            <h3>Sarah Wilson</h3>
                            <h4>Product Director, CloudSystems</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Working with Visionstack was a game-changer for our company. Their expert developers created a custom CRM system that perfectly aligned with our unique business processes. The solution is intuitive, scalable, and has dramatically improved our customer relationships.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                            <h3>James Peterson</h3>
                            <h4>Operations Manager, RetailNow</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>The inventory management system developed by Visionstack has revolutionized our retail operations. Their team took time to understand our needs and delivered a solution that exceeded our expectations. The system's real-time analytics have been crucial for our business growth.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                            <h3>Michael Thompson</h3>
                            <h4>CTO, FinTech Solutions</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Visionstack's expertise in secure financial applications is impressive. They developed a mobile banking solution for us with enterprise-grade security features. Their development process was transparent, and they delivered on time and within budget. Truly a reliable technology partner.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                            <h3>Jennifer Adams</h3>
                            <h4>Digital Transformation Lead, HealthCare Plus</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Our healthcare management system by Visionstack has transformed patient care at our facilities. The solution seamlessly integrated with our existing systems while meeting all regulatory requirements. Their ongoing support has been exceptional, making them a true partner in our digital transformation journey.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- /Testimonials Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>OUR RECENT PROJECTS</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">Web Apps</li>
                    <li data-filter=".filter-product">SaaS Products</li>
                    <li data-filter=".filter-branding">Mobile Apps</li>
                    <li data-filter=".filter-books">Enterprise Solutions</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>CRM Web App</h4>
                                <p>Custom customer relationship management solution</p>
                                <a href="assets/img/portfolio/app-1.jpg" title="CRM Web App" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>SaaS Product 1</h4>
                                <p>Innovative SaaS solution for business automation</p>
                                <a href="assets/img/portfolio/product-1.jpg" title="SaaS Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Mobile App 1</h4>
                                <p>Cross-platform mobile application for e-commerce</p>
                                <a href="assets/img/portfolio/branding-1.jpg" title="Mobile App 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Enterprise Solution 1</h4>
                                <p>Comprehensive enterprise resource planning system</p>
                                <a href="assets/img/portfolio/books-1.jpg" title="Enterprise Solution 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Inventory Management App</h4>
                                <p>Real-time inventory tracking and management system</p>
                                <a href="assets/img/portfolio/app-2.jpg" title="Inventory Management App" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Analytics Platform</h4>
                                <p>Business intelligence and analytics dashboard solution</p>
                                <a href="assets/img/portfolio/product-2.jpg" title="Analytics Platform" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Mobile Banking App</h4>
                                <p>Secure financial transaction mobile application</p>
                                <a href="assets/img/portfolio/branding-2.jpg" title="Mobile Banking App" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Supply Chain System</h4>
                                <p>End-to-end supply chain management solution</p>
                                <a href="assets/img/portfolio/books-2.jpg" title="Supply Chain System" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Task Management Platform</h4>
                                <p>Collaborative project and task management solution</p>
                                <a href="assets/img/portfolio/app-3.jpg" title="Task Management Platform" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>HR Management System</h4>
                                <p>Comprehensive human resources management platform</p>
                                <a href="assets/img/portfolio/product-3.jpg" title="HR Management System" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Customer Support App</h4>
                                <p>Mobile ticket management and support system</p>
                                <a href="assets/img/portfolio/branding-3.jpg" title="Customer Support App" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Healthcare Management</h4>
                                <p>Electronic health records and patient management system</p>
                                <a href="assets/img/portfolio/books-3.jpg" title="Healthcare Management" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section><!-- /Portfolio Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Team</h2>
            <p>OUR TECH EXPERTS</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Hariharan</h4>
                            <span>Founder & CEO</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="member">
                        <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Johnson</h4>
                            <span>Lead Software Architect</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="member">
                        <div class="pic"><img src="assets/img/team/team-3.jpg" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>DevOps Lead</span>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter-x"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Team Member -->

            </div>

        </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Contact</h2>
            <p>READY TO TRANSFORM YOUR BUSINESS?</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6 ">
                    <div class="row gy-4">

                        <div class="col-lg-12">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Address</h3>
                                <p class="text-center">No. 7/70, Individual,<br>
                                    Mariyamman Koil Street,<br>
                                    Cantonment Pallavaram,<br>
                                    Chennai, Tamil Nadu - 600043</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+91 80563 29572</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@visionstack.in</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="4" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

</main>

<footer id="footer" class="footer dark-background">

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                    <span class="sitename transparent-text">Visionstack</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>No. 7/70, Individual,<br>
                        Mariyamman Koil Street,<br>
                        Cantonment Pallavaram,<br>
                        Chennai, Tamil Nadu - 600043</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>+91 80563 29572</span></p>
                    <p><strong>Email:</strong> <span>info@visionstack.in</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Useful Links</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Our Services</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Custom Software</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">SaaS Development</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">API Integration</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Mobile Development</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Cloud Solutions</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h4>Our Newsletter</h4>
                <p>Subscribe to our newsletter for the latest updates on software development trends and our service offerings.</p>
                <form action="forms/newsletter.php" method="post" class="php-email-form">
                    <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                </form>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Visionstack</strong> <span>All Rights Reserved</span></p>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://Visionstack.in/">Visionstack</a> Distributed by <a href="https://Visionstack.in">Visionstack</a>
        </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</body>

</html>
