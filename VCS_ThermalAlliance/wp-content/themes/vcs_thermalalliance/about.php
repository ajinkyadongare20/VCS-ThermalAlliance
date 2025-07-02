<?php
/**
 * The main template file
 * Template Name: About
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
            <h1 class="display-3 text-white animated slideInRight">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-fluid about py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Left Column: Text Content -->
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="text-primary">About VCS ThermalAlliance</h4>
                        <h1 class="display-6 mb-4">Delivering Excellence in MEPF Solutions</h1>

                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <a href="#" class="d-flex">
                                    <span class="fas fa-bolt fa-3x me-3"></span>
                                    <h4 class="mb-0">HVAC & Power Systems</h4>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="d-flex">
                                    <span class="fas fa-broadcast-tower fa-3x me-3"></span>
                                    <h4 class="mb-0">Fire Safety & Cleanrooms</h4>
                                </a>
                            </div>
                        </div>

                        <p class="mb-4">
                            VCS ThermalAlliance, we specialize in delivering comprehensive MEPF services tailored for industrial and commercial spaces. Our focus on quality, precision, and safety sets us apart in the industry.
                        </p>

                        <div class="text-dark mb-4">
                            <p class="fs-5">
                                <span class="fa fa-check text-primary me-2"></span>
                                Expert HVAC installation and maintenance.
                            </p>
                            <p class="fs-5">
                                <span class="fa fa-check text-primary me-2"></span>
                                End-to-end MEPF project execution.
                            </p>
                            <p class="fs-5">
                                <span class="fa fa-check text-primary me-2"></span>
                                Safe, reliable, and energy-efficient solutions.
                            </p>
                        </div>

                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#">Contact VCS</a>
                    </div>
                </div>

                <!-- Right Column: Image Content -->
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="position-relative h-100">
                        <img src="<?php bloginfo('template_directory'); ?>/img/about/about_main1.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">

                        <div class="bg-white">
                            <div class="position-absolute pt-3 bg-white" style="width: 50%; left: 0; bottom: 0;">
                                <div class="bg-primary p-4">
                                    <h4 class="display-2 mb-0">25+</h4>
                                    <p class="text-white fs-5 mb-0">Years of Expertise</p>
                                </div>
                            </div>
                            <div class="position-absolute p-3 bg-white pb-0 pe-0" style="width: 50%; bottom: 0; right: 0;">
                                <img src="<?php bloginfo('template_directory'); ?>/img/about/about_main2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


	<!-- Projects Start -->
    <div class="container-fluid projects bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Our Projects</h4>
                        <h1 class="display-6 mb-4">How VCS ThermalAlliance Delivers Excellence</h1>
                        <p class="mb-5">
                            Discover how VCS ThermalAlliance brings expertise and innovation to MEPF projects. From planning to execution, our solutions ensure performance, safety, and long-term efficiency for every industrial and commercial need.
                        </p>
                       <ul class="nav">
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3 active" data-bs-toggle="pill" href="#ProjectsTab-1">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-wind small"></span>
                                    </div>
                                    <span>Cleanroom HVAC Installations</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-2">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-plug small"></span>
                                    </div>
                                    <span>Turnkey Electrical Systems</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-3">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-fire-extinguisher small"></span>
                                    </div>
                                    <span>Fire Safety Implementations</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-4">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-industry small"></span>
                                    </div>
                                    <span>HVAC Systems for Industries</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="tab-content">
                        <div id="ProjectsTab-1" class="tab-pane fade show p-0 active">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/about/Cleanroom HVAC Installations.jpg" class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Cleanroom HVAC Installations</h4>
                                    <p class="mb-4">
                                        VCS ThermalAlliance delivers ultra-clean HVAC systems tailored for pharmaceutical and semiconductor cleanrooms. Our systems maintain strict temperature, humidity, and air quality control to ensure contamination-free environments compliant with international standards and industry protocols.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div id="ProjectsTab-2" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/about/Turnkey Electrical Systems.jpg" class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Turnkey Electrical Systems</h4>
                                    <p class="mb-4">
                                        We offer end-to-end electrical solutions for commercial buildings and industrial plants. From designing the layout to final installation, our turnkey approach ensures safe, scalable, and efficient electrical distribution systems tailored to your project requirements.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div id="ProjectsTab-3" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/about/Fire Safety Implementations.jpg" class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Fire Safety Implementations</h4>
                                    <p class="mb-4">
                                        We engineer and install comprehensive fire protection systems including smoke detection, sprinklers, alarms, and suppression setups. Our fire safety designs comply with all safety codes to secure assets and ensure human safety in critical environments.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div id="ProjectsTab-4" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/about/HVAC Systems for Industries.jpg" class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-4">HVAC Systems for Industries</h4>
                                    <p class="mb-4">
                                        VCS ThermalAlliance specializes in large-scale HVAC systems that regulate air quality, ventilation, and temperature for manufacturing units. Our solutions are energy-efficient, sustainable, and designed to support continuous operation with minimal downtime.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects End -->
    

    <!-- Management Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Management Team</p>
                <h1 class="display-6 mb-5">Dedicated Management Team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/index/1.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Mr.Subodh Murkewar</h5>
                                <span class="text-primary">Co-Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-linkedin"></i></a>
                                </div>                                                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/index/2.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Mr.Chetan Thakur</h5>
                                <span class="text-primary">Co-Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/index/3.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Mr.Virendra Borhade</h5>
                                <span class="text-primary">Co-Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Management Team End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Team</h4>
                <h1 class="display-6 mb-4">Dedicated Our Team</h1>
                <p class="mb-0">
                    VCS Thermal Alliance, our dedicated team brings expertise in HVAC, cleanroom design, fire safety, electrical, plumbing, and project execution—delivering high-quality, performance-driven industrial solutions with precision and professionalism.
                </p>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item about-team-item">
                        <div class="team-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Radhika Jadhav</h4>
                            <p class="mb-0">Accountant</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item about-team-item">
                        <div class="team-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Tejus Kamble</h4>
                            <p class="mb-0">Design and Planning</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item about-team-item">
                        <div class="team-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/team-3.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Aakash Shityalkar</h4>
                            <p class="mb-0">Design and Planning</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item about-team-item">
                        <div class="team-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/team-3.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Sudhir Borade</h4>
                            <p class="mb-0">Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item about-team-item">
                        <div class="team-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/team-2.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Roshan Dhumane</h4>
                            <p class="mb-0">Projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item about-team-item">
                        <div class="team-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/team-1.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Abhijit Ippar</h4>
                            <p class="mb-0">Projects</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Mission, Vision & Core Values Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Who We Are</h5>
                <h1 class="display-6 mb-0">Our Mission, Vision & Core Values</h1>
            </div>
            <div class="row g-4 py-3">
                <!-- Mission -->
                <div class="col-lg-4">
                    <div class="bg-light h-100 p-4 shadow-sm border-top border-5 border-primary rounded">
                        <h4 class="mb-3 text-primary">Our Mission</h4>
                        <p class="text-muted mb-0">
                            At VCS ThermalAlliance, our mission is to deliver reliable, high-performance MEPF solutions that support sustainability, energy efficiency, and long-term value. We’re not just service providers—we are solution engineers, offering end-to-end expertise in HVAC, firefighting, cleanroom, and electrical systems. Through detailed design, safety-first execution, and innovative thinking, we help industries transform their infrastructure into smart, resilient environments. We are driven by client satisfaction, technical precision, and environmental stewardship—ensuring every system we create contributes positively to performance, compliance, and operational excellence in a rapidly evolving industrial landscape.
                        </p>
                    </div>
                </div>
                <!-- Vision -->
                <div class="col-lg-4">
                    <div class="bg-light h-100 p-4 shadow-sm border-top border-5 border-success rounded">
                        <h4 class="mb-3 text-success">Our Vision</h4>
                        <p class="text-muted mb-0">
                            Our vision is to be a globally recognized name in the MEPF sector—setting benchmarks in engineering excellence, digital innovation, and sustainable building practices. We aim to revolutionize how infrastructure breathes, performs, and lasts. With a future-forward mindset, we commit to advancing net-zero buildings, smart energy use, and ethical operations. We envision VCS ThermalAlliance becoming a trusted force in transforming traditional engineering into intelligent, adaptive, and eco-conscious systems—empowering clients with transparent processes, elevated performance, and future-ready environments that respond to technological, environmental, and human needs alike.
                        </p>
                    </div>
                </div>
                <!-- Core Values -->
                <div class="col-lg-4">
                    <div class="bg-light h-100 p-4 shadow-sm border-top border-5 border-primary rounded">
                        <h4 class="mb-3 text-primary">Core Values</h4>
                        <p class="text-muted mb-0">
                            Our core values are the foundation of our identity and guide every aspect of how we operate, collaborate, and innovate:
                        </p>
                        <ul class="text-muted ps-3 pt-3 mb-0">
                            <li><strong class="text-dark">Integrity:</strong> Honesty and ethical practices in every decision.</li>
                            <li><strong class="text-dark">Innovation:</strong> Embracing change and emerging technologies.</li>
                            <li><strong class="text-dark">Customer Centricity:</strong> Putting clients’ success at the center.</li>
                            <li><strong class="text-dark">Sustainability:</strong> Designing with a greener future in mind.</li>
                            <li><strong class="text-dark">Teamwork:</strong> Collaborative spirit across teams and partners.</li>
                            <li><strong class="text-dark">Excellence:</strong> Relentless focus on quality and precision.</li>
                            <li><strong class="text-dark">Adaptability:</strong> Responding swiftly to dynamic industry needs.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission, Vision & Core Values End -->


    <!-- Service Start -->
    <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h5 class="fw-bold text-primary">Innovation & Technology</h5>
                <h1 class="display-6 mb-5">Innovative MEPF Engineering Solutions</h1>
            </div>
           <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h5 class="m-0" style="font-size: 19px;"><i class="fa fa-bars text-primary me-3"></i>Smart Building Integration</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h5 class="m-0" style="font-size: 19px;"><i class="fa fa-bars text-primary me-3"></i>Digital Design & BIM</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h5 class="m-0" style="font-size: 19px;"><i class="fa fa-bars text-primary me-3"></i>Custom Software</h5>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start border p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h5 class="m-0" style="font-size: 19px;"><i class="fa fa-bars text-primary me-3"></i>Energy & Sustainability</h5>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <!-- Tab 1 -->
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/about/Smart Building Integration.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Smart Building Integration</h3>
                                    <p class="mb-4">Our IoT-enabled BMS platforms provide central control for HVAC, lighting, energy, and safety systems, enhancing operational efficiency and occupant comfort.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Remote Monitoring</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Predictive Maintenance</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Occupancy-Based Control</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Energy Usage Analytics</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Explore More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 2 -->
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/about/Digital Design & BIM Integration.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Digital Design & BIM Integration</h3>
                                    <p class="mb-4">We use AutoCAD MEP, Revit, and Navisworks to enable 3D visualization, clash detection, and multi-disciplinary coordination via BIM technology.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>3D Visualization</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Clash Detection</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Integrated Project Coordination</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Explore More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 3 -->
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/about/Custom Software Solutions.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Custom Software Solutions</h3>
                                    <p class="mb-4">Our proprietary software tools optimize precision and offer real-time visibility throughout project lifecycles.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Heat Load Calculators</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Validation Trackers</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Compliance Dashboards</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Explore More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 4 -->
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute rounded w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/about/Energy Optimization & Sustainability.jpg" style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-4">Energy Optimization & Sustainability</h3>
                                    <p class="mb-4">Using AI, green technologies, and energy recovery systems, we optimize performance while complying with global sustainability standards.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>AI-Driven Energy Modeling</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Load Simulation & Optimization</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Compliance with IGBC, GRIHA, GEM</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Working with VCS ThermalAlliance was a great experience. Their attention to detail and certified approach made our industrial setup seamless and future-ready.</p>
                        <h5 class="mb-1">Rahul Deshmukh</h5>
                        <span class="fst-italic">Project Engineer</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="<?php bloginfo('template_directory'); ?>/img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>The team was professional, on time, and technically sound. Their energy-efficient MEPF design helped us reduce costs without compromising on quality.</p>
                        <h5 class="mb-1">Sneha Iyer</h5>
                        <span class="fst-italic">Facility Manager</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="<?php bloginfo('template_directory'); ?>/img/testimonial-3.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>I highly recommend their services for any industrial project. Their certified staff, transparent communication, and smart tracking tools are a huge plus.</p>
                        <h5 class="mb-1">Vikram Patil</h5>
                        <span class="fst-italic">Operations Head</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Let’s Start Your Project—Request a Personalized Quote</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Response within 24 business hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-headset text-primary me-3"></i>Dedicated Technical Support</h5>
                        </div>
                    </div>
                    <p class="mb-4">
                        Looking to get started with HVAC, Cleanroom, MEPF, or Fire Safety projects? Our team at VCS ThermalAlliance is here to assist with tailored quotes, project consultations, and end-to-end solution planning.
                        Fill out the form and our experts will connect with you promptly.
                    </p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Need immediate assistance?</h5>
                            <h4 class="text-primary mb-0">+91 7709237117</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name *" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Company Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Email Address *" style="height: 55px;" required>
                                </div>
                                <div class="col-12">
                                    <input type="tel" class="form-control bg-light border-0" placeholder="Phone Number" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;" required>
                                        <option selected disabled>Type of Inquiry *</option>
                                        <option value="new-project">New Project</option>
                                        <option value="tech-support">Technical Support</option>
                                        <option value="career">Career</option>
                                        <option value="vendor">Vendor</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Submit Your Inquiry</button>
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