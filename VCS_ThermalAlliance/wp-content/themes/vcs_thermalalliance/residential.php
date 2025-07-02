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
            <h1 class="display-3 text-white animated slideInRight">Residential HVAC & Fire Solutions </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Projects</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Smart HVAC, Ventilation & Safety for Residential Projects</li>
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
                    <h2 class="text-primary mb-3">Residential HVAC & Fire Solutions</h2>
                    <p class="lead text-muted">
                        Comfort, air quality, and fire safety are foundational to every modern residential project. At VCS ThermalAlliance, we provide HVAC, fire protection, and electrical systems designed for residential towers, townships, villas, and gated societies—with an emphasis on energy efficiency and regulatory compliance.

                        Our expertise includes VRF/VRV systems, kitchen and toilet ventilation, NBC-compliant fire protection, and efficient electrical layouts with smart automation. We collaborate with developers, architects, and PMC teams to ensure optimal system integration and site execution, offering both new and retrofit solutions tailored to every scale of residential.
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
                    <h4 class="text-primary">Residential HVAC & Fire Solutions</h4>
                    <h1 class="display-6 mb-4">Smart HVAC, Ventilation & Safety for Residential Projects</h1>
                    <p class="mb-5">
                        Comfort, air quality, and fire safety are foundational to every modern residential project. At VCS ThermalAlliance, we provide HVAC, fire protection, and electrical systems designed for residential towers, townships, villas, and gated societies—with an emphasis on energy efficiency and regulatory compliance.
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
                                    <span class="fas fa-snowflake small"></span>
                                </div>
                                <span>HVAC & Air Conditioning</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-2" data-bs-toggle="pill" data-bs-target="#VCSTab-2" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-fire-extinguisher small"></span>
                                </div>
                                <span>Fire Protection Systems</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-3" data-bs-toggle="pill" data-bs-target="#VCSTab-3" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-bolt small"></span>
                                </div>
                                <span>Electrical & Lighting</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-4" data-bs-toggle="pill" data-bs-target="#VCSTab-4" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-home small"></span>
                                </div>
                                <span>Water & STP Systems</span>
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
                                                <i class="fa fa-wind text-white"></i>
                                            </div>
                                            <h4>VRF & Split AC Systems</h4>
                                            <p class="mb-0">Energy-efficient VRF/VRV and split AC installations tailored for high-rise towers, villas, and apartments.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-fan text-white"></i>
                                            </div>
                                            <h4>Fresh Air & Exhaust</h4>
                                            <p class="mb-0">Centralized fresh air and exhaust systems for kitchens, washrooms, and basements in residential projects.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/residential/HVAC & Air Conditioning.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-ruler-combined text-white"></i>
                                            </div>
                                            <h4>Architect Coordination</h4>
                                            <p class="mb-0">Harmonized HVAC layout planning with architects and interior designers for aesthetic integration.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-cogs text-white"></i>
                                            </div>
                                            <h4>IoT Climate Control</h4>
                                            <p class="mb-0">Smart HVAC controls and sensors for real-time zone management and energy optimization.</p>
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
                                                <i class="fa fa-burn text-white"></i>
                                            </div>
                                            <h4>Sprinklers & Wet Risers</h4>
                                            <p class="mb-0">Design and implementation of NBC-compliant sprinkler and riser systems for residential buildings.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-bell text-white"></i>
                                            </div>
                                            <h4>Fire Alarm & Smoke Detectors</h4>
                                            <p class="mb-0">Installation of addressable and conventional alarm systems integrated with emergency response protocols.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/residential/Fire Protection Systems.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-project-diagram text-white"></i>
                                            </div>
                                            <h4>Fire Strategy Design</h4>
                                            <p class="mb-0">Customized fire safety plans including evacuation mapping and simulation models for townships.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-shield-alt text-white"></i>
                                            </div>
                                            <h4>Safety Compliance</h4>
                                            <p class="mb-0">Full coordination with local fire departments for NOCs and third-party certifications.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 Content -->
                        <div class="tab-pane fade" id="VCSTab-3" role="tabpanel" aria-labelledby="vcs-tab-3">
                            <div class="row g-5">
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-lightbulb text-white"></i>
                                            </div>
                                            <h4>Lighting Automation</h4>
                                            <p class="mb-0">Energy-saving LED systems and motion-sensor lighting in corridors and parking areas.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-plug text-white"></i>
                                            </div>
                                            <h4>Panel Boards & DBs</h4>
                                            <p class="mb-0">Installation of main LT panels, floor-wise distribution boards and metering infrastructure.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/residential/Electrical & Lighting.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-charging-station text-white"></i>
                                            </div>
                                            <h4>EV Charger Provisions</h4>
                                            <p class="mb-0">Design and installation of EV-ready circuits and charging bays in residential parking zones.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-battery-full text-white"></i>
                                            </div>
                                            <h4>Backup & UPS Integration</h4>
                                            <p class="mb-0">Backup power systems including DG sets and UPS for lifts, security, and common areas.</p>
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
                                                <i class="fa fa-tint text-white"></i>
                                            </div>
                                            <h4>Pumping & Filtration</h4>
                                            <p class="mb-0">Design of water pumping stations, hydro-pneumatic systems, and filtration units for residential buildings.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-recycle text-white"></i>
                                            </div>
                                            <h4>Sewage Treatment Plant</h4>
                                            <p class="mb-0">Installation of compact STPs with treated water reuse provisions for landscaping and flushing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/residential/Water & STP Systems.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-water text-white"></i>
                                            </div>
                                            <h4>Water Metering</h4>
                                            <p class="mb-0">Digital metering systems for accurate consumption tracking across flats and blocks.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-drafting-compass text-white"></i>
                                            </div>
                                            <h4>Retrofit Planning</h4>
                                            <p class="mb-0">Assessment and upgrade of existing plumbing and STP systems in older societies.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab Content -->
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
                    <h1 class="display-6 mb-4">Trusted Residential MEPF Experts</h1>
                    <p class="mb-5">
                        From luxury apartments to large-scale townships, VCS ThermalAlliance delivers integrated HVAC, fire safety, and electrical solutions customized for modern living spaces. Our approach ensures high comfort, safety, and energy efficiency while maintaining compliance with national standards.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">End-to-End Services</h5>
                            </div>
                            <span>Design to commissioning of HVAC, fire, and electrical systems under one roof.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Smart Home Ready</h5>
                            </div>
                            <span>Provision for home automation, IoT-based control, and BMS integration in residential buildings.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">NBC & RERA Compliant</h5>
                            </div>
                            <span>Systems designed as per NBC norms and real estate compliance for occupancy certification.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Retrofit Experts</h5>
                            </div>
                            <span>Solutions for upgradation of HVAC and safety systems in existing residential societies and complexes.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" alt="" style="width: 200px; height: 200px">
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
                    Discover how VCS ThermalAlliance has transformed residential living with smart, sustainable HVAC and fire safety systems. Our residential projects blend engineering expertise with comfort-focused innovation.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Smart Ventilation</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Fire Safety</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>HVAC Systems</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-4">
                                <span>Electrical Fitouts</span>
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
                                    <img src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Skyline Apartments</h4>
                                        <p class="mb-4">Installed energy-efficient ventilation systems in premium towers with CO₂ monitoring and kitchen exhaust automation to ensure continuous fresh air supply without energy loss.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Greenview Residences</h4>
                                        <p class="mb-4">Deployed centralized ventilation systems across multiple buildings, including toilet exhausts and lobby pressurization systems aligned with green building norms.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Harmony Enclave</h4>
                                        <p class="mb-4">Executed a full firefighting system with hydrants, sprinklers, and addressable fire alarm panels for a 20-tower residential society, tested and commissioned per NBC standards.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Parkside Villas</h4>
                                        <p class="mb-4">Installed villa-level fire suppression systems and integrated fire detection with the gated community's central monitoring room for enhanced resident safety.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Natura Towers</h4>
                                        <p class="mb-4">Engineered and deployed VRF systems across 120 units with smart zoning, inverter compressors, and noise-insulated ducts for premium residential comfort.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Tranquil Heights</h4>
                                        <p class="mb-4">Delivered ductable split and cassette AC systems for penthouse floors with digital thermostats, eco-friendly refrigerants, and acoustic treatment.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 4 -->
                        <div id="SuccessTab-4" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Bluebay Residences</h4>
                                        <p class="mb-4">Completed LT panel installation and smart metering for individual flats, plus energy-efficient corridor lighting and automatic generator changeover systems.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/residential/Trusted Residential MEPF Experts1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Orchid Garden</h4>
                                        <p class="mb-4">Executed wiring and DB installation across multiple towers, including CCTV power backup lines, video door phone integration, and EV charging readiness.</p>
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
                    <h4 class="text-primary">Frequently Asked</h4>
                    <h1 class="display-4 mb-4">Residential HVAC & Fire Safety FAQs</h1>
                    <p class="mb-4">
                        Have questions about air conditioning, ventilation, or fire safety systems for your home or society? We've got you covered.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#contact">Ask a Question</a>
                </div>

                <!-- Accordion Column -->
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="h-100">
                        <div class="accordion" id="accordionExample">
                            <!-- Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Q: What is the best HVAC system for apartments or villas?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="faqOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: VRF/VRV systems are ideal for large flats and villas, offering zoned cooling, silent operation, and energy efficiency.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: How are residential fire safety systems installed?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="faqTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Systems like sprinklers, fire alarms, and smoke detectors are planned during early construction or retrofit stages and comply with NBC/IS standards.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Do these systems consume a lot of power?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="faqThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: No. Modern systems use inverter technology, VFDs, and smart controllers to optimize power consumption without compromising comfort.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faqFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Can we monitor and control these systems remotely?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="faqFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. With IoT-enabled BMS systems, you can monitor HVAC, lighting, and fire alarms from your smartphone or building control room.
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