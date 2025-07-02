<?php
/**
 * The main template file
 * Template Name: HVAC Solutions
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
            <h1 class="display-3 text-white animated slideInRight">Electrical & Plumbing Solutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Integrated Electrical & Plumbing Services</li>
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
                    <h2 class="text-primary mb-3">Electrical & Plumbing Solutions</h2>
                    <p class="lead text-muted">
                        At VCS ThermalAlliance, we provide integrated electrical and plumbing services tailored for industrial,
                        commercial, institutional, and cleanroom-grade environments. From power distribution to water management,
                        our solutions prioritize safety, energy efficiency, and long-term system durability. We specialize in LT
                        panel design, emergency lighting, earthing, and backup systems, along with plumbing for potable water,
                        process lines, drainage, and utility networks. Our team ensures regulatory compliance, high-performance
                        design, and seamless integration with HVAC, fire safety, and BMS systems. With a turnkey approach that
                        covers load analysis, material procurement, site execution, and commissioning, we help clients build
                        smarter and more resilient infrastructure for critical applications.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->



    <!-- Projects Start -->
    <div class="container-fluid projects bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">Electrical & Plumbing Solutions</h4>
                        <h1 class="display-6 mb-4">Seamless Power & Flow for Every Project</h1>
                        <p class="mb-5">
                            At VCS ThermalAlliance, we deliver fully integrated electrical and plumbing solutions designed for precision, safety, and long-term sustainability. Whether it’s high-voltage paneling or complex piping for cleanrooms, our team combines compliance expertise with advanced installation to meet your project’s every need.
                        </p>
                        <ul class="nav">
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3 active" data-bs-toggle="pill" href="#ProjectsTab-1">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-bolt small"></span>
                                    </div>
                                    <span>Electrical Distribution Systems</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-2">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-water small"></span>
                                    </div>
                                    <span>Process & Sanitary Plumbing</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-3">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-tachometer-alt small"></span>
                                    </div>
                                    <span>Power Backup & Automation</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill" href="#ProjectsTab-4">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-network-wired small"></span>
                                    </div>
                                    <span>Utility & Medical Gas Networks</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="tab-content">
                        <div id="ProjectsTab-1" class="tab-pane fade show p-0 active">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Electrical Distribution Systems.jpg" class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Electrical Distribution Systems</h4>
                                    <p class="mb-4">
                                        VCS ThermalAlliance offers end-to-end electrical infrastructure services, from LT panels, cable trays, and DBs to lighting and surge protection. We specialize in structured and safe installations for commercial, industrial, and institutional projects, aligned with IS/IEC standards. Our turnkey approach includes load analysis, SL diagrams, energy-efficient lighting systems, and power backup setups. Integrated services ensure minimal site downtime, optimized energy flow, and consistent power delivery. We bring additional value with digital monitoring, fast-tracking installation, and AMC services, making your power system reliable, compliant.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div id="ProjectsTab-2" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Process & Sanitary Plumbing.jpg" class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Process & Sanitary Plumbing</h4>
                                    <p class="mb-4">
                                        Our plumbing systems ensure seamless water supply, drainage, and sanitation. We handle piping for potable, grey, and process water along with STP/ETP integration. Whether in hospitals, labs, food processing or factories, we manage everything from isometric layout to pump room execution. Our scope covers RO systems, drainage slope planning, water-saving fixtures, pressure zones, and rainwater harvesting. Backed by quality components and engineering precision, we guarantee long-term leakproof and hygienic operations across cleanroom and commercial infrastructure.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div id="ProjectsTab-3" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Power Backup & Automation.jpg" class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Power Backup & Automation</h4>
                                    <p class="mb-4">
                                        We integrate generators, UPS systems, and AMF/ATS panels into your power framework to ensure 24/7 uptime. Our automated setups offer load sharing, energy tracking, and real-time remote control via BMS. From pharma-grade AHUs to industrial machinery, our systems avoid unplanned shutdowns and maintain workflow continuity. Smart switchgear, metering, and programmable logic controllers (PLCs) offer control and insight into your facility's power dynamics, while our AMC and testing support guarantees peace of mind.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div id="ProjectsTab-4" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Utility & Medical Gas Networks.jpg" class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Utility & Medical Gas Networks</h4>
                                    <p class="mb-4">
                                        VCS designs and installs complete utility lines and gas piping networks for cleanrooms, hospitals, and industrial plants. This includes medical gas pipelines, compressed air, and firewater lines with precise pressure regulation and redundancy. Our team handles SLD creation, testing, flushing, and compliance documentation. From AHU supply to process equipment or lab benches, we ensure contamination-free and reliable service. With pre-insulated piping and smart control systems, our gas infrastructure is scalable, secure, and audit-ready.
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


    <!-- Why Choose Us Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">Integrated Electrical & Plumbing Services</h1>
                    <p class="mb-5">
                        At VCS ThermalAlliance, we provide complete Electrical and Plumbing systems tailored for cleanroom, industrial, and commercial facilities. Our in-house teams ensure high reliability, safety compliance, and fast-track execution through structured coordination across MEPF domains.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">MEPF Coordination</h5>
                            </div>
                            <span>Expertise in harmonizing electrical, plumbing, HVAC, fire, and BMS systems in industrial and cleanroom settings.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Code Compliance</h5>
                            </div>
                            <span>All installations follow IS/IEC standards ensuring safety, durability, and hassle-free regulatory approvals.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Smart Integration</h5>
                            </div>
                            <span>We enable seamless integration of power, water, gas, and automation systems with energy-saving tech.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">End-to-End Delivery</h5>
                            </div>
                            <span>From load analysis, BOQs, procurement to commissioning and AMC — we deliver fully managed systems.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Integrated Electrical & Plumbing Services.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Integrated Electrical & Plumbing Services1.jpg" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us End -->


    <!-- Success Stories Start -->
    <div class="container-fluid success-stories py-5">
        <div class="container py-5">
            <!-- Heading -->
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">Success Stories</h4>
                <h1 class="display-6 mb-4 px-5">Electrical & Plumbing Excellence in Action</h1>
                <p class="mb-0">
                    Discover how VCS ThermalAlliance transforms power and water infrastructure with expert electrical and plumbing services. From high-performance pump rooms to integrated paneling and clean utility systems, our projects reflect precision, reliability, and compliance.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Aarti Drugs Project</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Morade Foods Project</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>NICMAR Campus Project</span>
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
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Integrated Electrical & Plumbing Services.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Aarti Drugs – Pump Room & Drainage</h4>
                                        <p class="mb-4">We engineered a centralized pump room and advanced drainage system for Aarti Drugs’ formulation block. The scope included utility piping, sump management, and water storage integration, ensuring safe and compliant operations aligned with pharma norms and GMP standards.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Integrated Electrical & Plumbing Services.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Morade Foods – Process & Waste Networks</h4>
                                        <p class="mb-4">VCS ThermalAlliance delivered end-to-end plumbing systems for clean water supply, process piping, and waste discharge. The plant benefited from optimized pump layouts, stainless steel piping, and treated water reuse systems ensuring hygiene and environmental compliance in food-grade operations.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/electrical_plumbing/Integrated Electrical & Plumbing Services.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">NICMAR Campus – Power & Plumbing Backbone</h4>
                                        <p class="mb-4">Our team deployed electrical LT panels, cable routing, and plumbing layouts for NICMAR’s academic blocks. Services included internal lighting, earthing systems, stormwater drainage, and sanitary pipelines—ensuring reliable infrastructure and uninterrupted campus operations.</p>
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
    <!-- Success Stories End -->


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