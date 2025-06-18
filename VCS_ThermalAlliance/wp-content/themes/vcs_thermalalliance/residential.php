<?php
/**
 * The main template file
 * Template Name: Residential
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package vcs_thermalalliance
 */

get_header();
?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Healthcare HVAC & MEPF Solutions </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Projects</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">HVAC, Fire & Cleanroom Solutions for Hospitals and OTs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Introduction Start -->
    <div class="container-fluid bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-primary mb-3">Healthcare MEPF Solutions</h2>
                    <p class="lead text-muted">
                        In healthcare, performance is critical—and compliance is non-negotiable. At VCS ThermalAlliance, we design and deliver precision-engineered HVAC, cleanroom, electrical, and fire safety systems tailored for hospitals, ICUs, diagnostic labs, operating theatres, and sterile zones. Our solutions combine medical-grade engineering with smart automation to ensure optimal indoor air quality, infection control, and patient safety.<br><br>
                        
                        From NABH-compliant OT ventilation systems to ISO-certified cleanrooms and emergency power infrastructure, we implement turnkey solutions that meet stringent healthcare regulations. Our expertise spans HEPA filtration systems, laminar airflow designs, medical gas pipelines, and fire-rated compartmentation - all integrated through intelligent building management systems for seamless operation and monitoring.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->


    <!-- VCS Projects Start -->
    <div class="container-fluid vcs-projects bg-light py-5">
        <div class="container py-5">
            <!-- Title Section -->
            <div class="row mb-5">
                <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h4 class="text-primary">Fire Safety Turnkey Projects & Solutions</h4>
                    <h1 class="display-6 mb-4">Protecting Lives. Powering Compliance.</h1>
                    <p class="mb-5">
                        At VCS ThermalAlliance, we offer end-to-end fire protection solutions across commercial, industrial,
                        pharmaceutical, and institutional sectors. From fire load calculations and system layouts to installation,
                        testing, and AMC support — our services are aligned with international safety codes and local authority guidelines.
                        We specialize in modern, intelligent fire safety systems designed to minimize risk and ensure operational continuity.
                    </p>
                </div>
            </div>

            <!-- Horizontal Navigation Tabs -->
            <div class="row mb-5">
                <div class="col-12">
                    <ul class="nav vcs-pills justify-content-center" id="vcsProjectsTab" role="tablist">
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link active d-flex align-items-center py-3 px-4" id="vcs-tab-1" data-bs-toggle="pill" data-bs-target="#VCSTab-1" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-wind small"></span>
                                </div>
                                <span>Cleanroom HVAC Installations</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-2" data-bs-toggle="pill" data-bs-target="#VCSTab-2" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-plug small"></span>
                                </div>
                                <span>Turnkey Electrical Systems</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-3" data-bs-toggle="pill" data-bs-target="#VCSTab-3" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-fire-extinguisher small"></span>
                                </div>
                                <span>Fire Safety Implementations</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-4" data-bs-toggle="pill" data-bs-target="#VCSTab-4" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-industry small"></span>
                                </div>
                                <span>HVAC Systems for Industries</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="vcsProjectsContent">
                        <!-- Tab 1 Content -->
                        <div class="tab-pane fade show active" id="VCSTab-1" role="tabpanel" aria-labelledby="vcs-tab-1">
                            <div class="row g-5">
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-cubes text-white"></i>
                                            </div>
                                            <h4>Best In Industry</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-award text-white"></i>
                                            </div>
                                            <h4>Award Winning</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.1s" src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-users-cog text-white"></i>
                                            </div>
                                            <h4>Professional Staff</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </div>
                                            <h4>24/7 Support</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 Content -->
                        <div class="tab-pane fade" id="VCSTab-2" role="tabpanel" aria-labelledby="vcs-tab-2">
                            <div class="row g-5">
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-cubes text-white"></i>
                                            </div>
                                            <h4>Best In Industry</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-award text-white"></i>
                                            </div>
                                            <h4>Award Winning</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.1s" src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-users-cog text-white"></i>
                                            </div>
                                            <h4>Professional Staff</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </div>
                                            <h4>24/7 Support</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 Content -->
                        <div class="tab-pane fade show" id="VCSTab-3" role="tabpanel" aria-labelledby="vcs-tab-3">
                            <div class="row g-5">
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-cubes text-white"></i>
                                            </div>
                                            <h4>Best In Industry</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-award text-white"></i>
                                            </div>
                                            <h4>Award Winning</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.1s" src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-users-cog text-white"></i>
                                            </div>
                                            <h4>Professional Staff</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </div>
                                            <h4>24/7 Support</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 4 Content -->
                        <div class="tab-pane fade" id="VCSTab-4" role="tabpanel" aria-labelledby="vcs-tab-4">
                            <div class="row g-5">
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-cubes text-white"></i>
                                            </div>
                                            <h4>Best In Industry</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-award text-white"></i>
                                            </div>
                                            <h4>Award Winning</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.1s" src="<?php bloginfo('template_directory'); ?>/img/project-4.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-users-cog text-white"></i>
                                            </div>
                                            <h4>Professional Staff</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-phone-alt text-white"></i>
                                            </div>
                                            <h4>24/7 Support</h4>
                                            <p class="mb-0">Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- VCS Projects End -->


    <!-- Why Choose US Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">Reliable & Smart HVAC Engineering Solutions</h1>
                    <p class="mb-5">
                        At VCS ThermalAlliance, we deliver comprehensive, future-ready MEPF systems backed by digital tools, certified expertise, and sustainable design practices—ensuring smarter infrastructure across commercial, industrial, and pharma sectors.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Certified Team</h5>
                            </div>
                            <span>Accredited by ICP, ISHRAE, and ASHRAE, our team brings deep technical knowledge.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Digital Tools</h5>
                            </div>
                            <span>Proprietary calculators for heat load, duct sizing, and live project dashboards.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Smart BMS</h5>
                            </div>
                            <span>Cloud-based Building Management Systems with remote control and real-time analytics.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Sustainable Design</h5>
                            </div>
                            <span>Eco-friendly systems featuring green refrigerants, VFDs, EC fans, and energy recovery units.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/feature.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/about-1.jpg" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose US End -->


    <!-- Success Projects Start -->
    <div class="container-fluid success-stories py-5">
        <div class="container py-5">
            <!-- Heading -->
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">Our Projects</h4>
                <h1 class="display-6 mb-4 px-5">Excellence Through Engineering</h1>
                <p class="mb-0">
                    Explore how VCS ThermalAlliance has empowered leading organizations with smart MEPF solutions. Our work reflects precision, performance, and sustainability across healthcare, commercial, industrial, and residential projects.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Healthcare</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Commercial</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>Industrial</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-4">
                                <span>Residential</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="tab-content">
                        <!-- Tab 1 -->
                        <div id="SuccessTab-1" class="tab-pane fade show p-0 active">
                            <div class="success-carousel owl-carousel">
                                <!-- Item 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Apollo Hospitals</h4>
                                        <p class="mb-4">Implemented a complete HVAC system with HEPA filtration for critical care units, ensuring sterile environments and precise temperature control for patient comfort and medical equipment performance. The system meets all healthcare compliance standards.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Fortis Healthcare</h4>
                                        <p class="mb-4">Designed and installed a specialized HVAC system for operation theaters with laminar airflow, maintaining ISO Class 5 cleanliness standards. The solution includes humidity control and air change rates as per medical requirements.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">AIIMS Research Center</h4>
                                        <p class="mb-4">Developed a custom HVAC solution for biomedical research laboratories, featuring precise environmental control for sensitive experiments while maintaining energy efficiency and silent operation in patient areas.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <!-- Item 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Infinity IT Park</h4>
                                        <p class="mb-4">Implemented a VRF-based HVAC system across 15 floors of the IT park, providing zoned temperature control with 30% energy savings. The project included smart controls for after-hours operation and maintenance optimization.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Phoenix Marketcity</h4>
                                        <p class="mb-4">Designed and executed a complete MEPF solution for this large retail complex, including centralized air conditioning, ventilation systems, and energy recovery units to handle high foot traffic while maintaining air quality.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Taj Hotels</h4>
                                        <p class="mb-4">Retrofitted the HVAC systems across guest rooms and public areas with silent operation units featuring individual climate control. The solution improved guest comfort while reducing energy consumption by 25%.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <!-- Item 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Mahindra Vehicle Manufacturing</h4>
                                        <p class="mb-4">Installed a heavy-duty ventilation and cooling system for the paint shop and assembly areas, designed to handle industrial contaminants while maintaining precise temperature control for manufacturing processes.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">JSW Steel Plant</h4>
                                        <p class="mb-4">Developed a specialized cooling system for control rooms and critical equipment areas that withstands high ambient temperatures while protecting sensitive electronics from dust and heat-related failures.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">PepsiCo Beverage Facility</h4>
                                        <p class="mb-4">Implemented a hygienic HVAC solution for the production floor meeting food-grade standards, with special attention to condensation control and air filtration to maintain product quality and safety.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 4 -->
                        <div id="SuccessTab-4" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <!-- Item 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Lodha Luxury Towers</h4>
                                        <p class="mb-4">Designed and installed a centralized HVAC system for this high-rise residential complex featuring individual apartment controls, energy recovery ventilation, and silent operation for premium living comfort.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Godrej Greens Township</h4>
                                        <p class="mb-4">Implemented a sustainable HVAC solution for this eco-friendly residential development, incorporating geothermal cooling elements and smart zoning to reduce energy consumption while maintaining comfort.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Prestige Villas</h4>
                                        <p class="mb-4">Custom-designed HVAC systems for luxury villas featuring smart home integration, allowing residents to control climate settings remotely while optimizing energy usage based on occupancy patterns.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Success Projects End -->


    <!-- FAQ Start -->
    <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- FAQ Text Column -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <h4 class="text-primary">Some Important FAQ's</h4>
                    <h1 class="display-4 mb-4">Common Frequently Asked Questions?</h1>
                    <p class="mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet pariatur sapiente, modi perspiciatis
                        earum ab inventore vitae consequatur tempore quibusdam?
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#">Have Any Questions</a>
                </div>

                <!-- Accordion Column -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="h-100">
                        <div class="accordion" id="accordionExample">
                            <!-- Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Q: How Do I Sign Up For Your Electricity Services?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Leverage agile frameworks to provide a robust synopsis for high-level overviews.
                                        Iterative approaches to corporate strategy foster collaborative thinking to further
                                        the overall value proposition.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: What Types Of Electricity Plans Do You Offer?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Leverage agile frameworks to provide a robust synopsis for high-level overviews.
                                        Iterative approaches to corporate strategy foster collaborative thinking to further
                                        the overall value proposition.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: What Are Your Billing And Payment Options?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Leverage agile frameworks to provide a robust synopsis for high-level overviews.
                                        Iterative approaches to corporate strategy foster collaborative thinking to further
                                        the overall value proposition.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: How Can I Track My Energy Usage With Your Services?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Leverage agile frameworks to provide a robust synopsis for high-level overviews.
                                        Iterative approaches to corporate strategy foster collaborative thinking to further
                                        the overall value proposition.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->
    


<?php
// get_sidebar();
get_footer();