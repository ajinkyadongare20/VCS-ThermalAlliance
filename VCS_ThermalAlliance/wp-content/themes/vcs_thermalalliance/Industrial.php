<?php
/**
 * The main template file
 * Template Name: Industrial
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
            <h1 class="display-3 text-white animated slideInRight">Industrial MEPF Solutions </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Projects</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">End-to-End MEPF Solutions for Industrial Facilities</li>
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
                    <h2 class="text-primary mb-3">Industrial MEPF Solutions</h2>
                    <p class="lead text-muted">
                        Industrial projects require systems that are durable, high-performing, and aligned with specific process demands. At VCS ThermalAlliance, we design and deliver customized MEPF systems to support manufacturing, food processing, packaging, and heavy engineering facilities.

                        Our solutions include process-specific HVAC systems, utility piping networks, advanced fire protection systems, and robust electrical infrastructure — all engineered for operational continuity and safety. From chilled water plants and compressed air to RO/ETP/STP integration and HT/LT distribution, we provide turnkey services with seamless execution and post-handover support tailored to industrial needs.
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
                    <h4 class="text-primary">Industrial MEPF Solutions</h4>
                    <h1 class="display-6 mb-4">End-to-End MEPF Solutions for Industrial Facilities</h1>
                    <p class="mb-5">
                        At VCS ThermalAlliance, we deliver integrated MEPF systems engineered for industrial reliability, safety, and efficiency. Our turnkey services cover HVAC, utility piping, fire protection, and electrical distribution tailored to your plant’s process and operational requirements.
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
                                <span>Process HVAC Systems</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-2" data-bs-toggle="pill" data-bs-target="#VCSTab-2" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-tools small"></span>
                                </div>
                                <span>Utility Piping Networks</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-3" data-bs-toggle="pill" data-bs-target="#VCSTab-3" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-bolt small"></span>
                                </div>
                                <span>Industrial Electrical Systems</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-4" data-bs-toggle="pill" data-bs-target="#VCSTab-4" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-fire-extinguisher small"></span>
                                </div>
                                <span>Fire & Safety Systems</span>
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
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-snowflake text-white"></i>
                                            </div>
                                            <h4>Process Cooling & Ventilation</h4>
                                            <p class="mb-0">Design and installation of HVAC systems tailored to machine rooms, warehousing zones, and high-heat process areas.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-sync-alt text-white"></i>
                                            </div>
                                            <h4>Energy Recovery Systems</h4>
                                            <p class="mb-0">Incorporation of AHUs, exhausts, and economizers to optimize thermal energy use in industrial environments.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/industrial/Process HVAC System.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-cogs text-white"></i>
                                            </div>
                                            <h4>Precision Controls</h4>
                                            <p class="mb-0">Advanced BMS integration for regulating temperatures and pressure in sensitive process areas.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-clock text-white"></i>
                                            </div>
                                            <h4>24x7 Support</h4>
                                            <p class="mb-0">Round-the-clock assistance during commissioning and plant operational phases.</p>
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
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-water text-white"></i>
                                            </div>
                                            <h4>Utility Piping</h4>
                                            <p class="mb-0">RO, ETP, STP, and hot water lines integrated with pump room designs for smooth operations.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-compress-arrows-alt text-white"></i>
                                            </div>
                                            <h4>Compressed Air & Steam</h4>
                                            <p class="mb-0">Network design for steam boilers and compressed air systems with durability and insulation.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/industrial/Utility Piping Networks.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-sitemap text-white"></i>
                                            </div>
                                            <h4>P&ID Engineering</h4>
                                            <p class="mb-0">Development of piping diagrams, isometrics, and layout integration for all fluid utilities.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-tools text-white"></i>
                                            </div>
                                            <h4>On-Site Coordination</h4>
                                            <p class="mb-0">Effective interfacing with civil and mechanical teams for streamlined execution.</p>
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
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-bolt text-white"></i>
                                            </div>
                                            <h4>HT/LT Distribution</h4>
                                            <p class="mb-0">Setup of high-tension and low-tension electrical systems with transformer yards and PCC/MCC panels.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-charging-station text-white"></i>
                                            </div>
                                            <h4>Power Cabling</h4>
                                            <p class="mb-0">Concealed and armored cable routing for machine floors, control rooms, and safety-critical zones.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/industrial/Industrial Electrical System.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-project-diagram text-white"></i>
                                            </div>
                                            <h4>Engineering Drawings</h4>
                                            <p class="mb-0">Single line diagrams, load sheets, and cable tray layouts for execution accuracy.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-hands-helping text-white"></i>
                                            </div>
                                            <h4>Maintenance Ready</h4>
                                            <p class="mb-0">Panel and cable labeling for AMC support and post-handover auditing.</p>
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
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-fire-extinguisher text-white"></i>
                                            </div>
                                            <h4>Fire Detection & Alarm</h4>
                                            <p class="mb-0">Installation of addressable detection systems, smoke sensors, and fire control panels.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-shower text-white"></i>
                                            </div>
                                            <h4>Sprinkler & Hydrant Systems</h4>
                                            <p class="mb-0">Design and implementation as per NFPA and local factory inspectorate norms.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/industrial/Fire and Safety Systems.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-hard-hat text-white"></i>
                                            </div>
                                            <h4>Compliance & Certification</h4>
                                            <p class="mb-0">Support for fire NOCs, testing reports, and system handover documents.</p>
                                        </div>
                                        <div class="col-12">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fas fa-shield-alt text-white"></i>
                                            </div>
                                            <h4>AMC & Emergency Response</h4>
                                            <p class="mb-0">Annual Maintenance Contracts and training for plant fire marshals and staff.</p>
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
                <!-- Text Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">Proven MEPF Partner for Industrial Excellence</h1>
                    <p class="mb-5">
                        From precision HVAC to power distribution and process utilities, VCS ThermalAlliance provides integrated engineering services tailored to industrial manufacturing needs. Our expertise ensures safe, compliant, and energy-efficient operations across complex plant environments.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Process Expertise</h5>
                            </div>
                            <span>Decades of experience in sectors like automotive, FMCG, food processing, and chemicals.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Fast Track Execution</h5>
                            </div>
                            <span>Parallel task planning with 24x7 site deployment for accelerated project delivery.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">End-to-End Coordination</h5>
                            </div>
                            <span>Collaboration with architects, OEMs, and civil teams for seamless utility integration.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Post-Handover Support</h5>
                            </div>
                            <span>O&M manuals, energy audits, AMCs, and operational training for long-term reliability.</span>
                        </div>
                    </div>
                </div>

                <!-- Image Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" alt="" style="width: 200px; height: 200px">
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
                <h1 class="display-6 mb-4 px-5">Engineering Success in Industrial MEPF</h1>
                <p class="mb-0">
                    VCS ThermalAlliance has successfully executed cutting-edge MEPF installations across various industrial sectors. Our portfolio showcases innovation, reliability, and compliance with international engineering standards.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Cleanroom & Pharma</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Automotive</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>Food & Beverage</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-4">
                                <span>Heavy Manufacturing</span>
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
                                    <img src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Sun Pharma R&D Facility</h4>
                                        <p class="mb-4">Executed a cleanroom HVAC and utility piping setup adhering to cGMP standards. Included laminar airflow units, HEPA filtration, and differential pressure controls in formulation labs.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Zydus Biotech Campus</h4>
                                        <p class="mb-4">Developed HVAC, electrical, and fire systems for a WHO-GMP compliant biopharma facility with multiple classified zones and BMS-integrated temperature mapping.</p>
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
                                    <img src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Tata Motors Facility</h4>
                                        <p class="mb-4">Installed HVAC and exhaust systems in engine test labs and assembly lines. Scope included AHUs, chilled water piping, and smoke extraction with automation panels.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Volkswagen Paint Shop</h4>
                                        <p class="mb-4">Executed humidity-controlled HVAC and ventilation systems across the paint booth line. Ensured VOC compliance, energy recovery, and efficient airflow zoning.</p>
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
                                    <img src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Nestlé Chilled Products</h4>
                                        <p class="mb-4">Delivered chilled water HVAC, steam lines, and positive pressure zoning for hygienic food processing zones. All installations followed HACCP and ISO 22000 protocols.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Parle Agro Facility</h4>
                                        <p class="mb-4">Engineered ventilation and dehumidification systems in bottling and packaging zones to preserve product integrity and reduce spoilage in high-humidity regions.</p>
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
                                    <img src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">L&T Engineering Campus</h4>
                                        <p class="mb-4">Implemented a campus-wide HT-LT electrical system, HVAC network, and fire suppression solutions with SCADA monitoring. Designed for industrial-grade reliability and scalability.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/industrial/Proven MEPF Partner for Industrial Excellence1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">BHEL Heavy Equipment Zone</h4>
                                        <p class="mb-4">Delivered robust HVAC, fire, and electrical systems in large fabrication bays. Systems designed to operate under intense heat, vibration, and dust environments.</p>
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
                    <h1 class="display-4 mb-4">FAQs – Industrial MEPF Services</h1>
                    <p class="mb-4">
                        We understand that industrial MEPF projects require precise execution, seamless coordination, and long-term reliability. Below are some frequently asked questions about our industrial offerings.
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
                                        Q: What types of HVAC systems do you offer for industrial plants?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We provide process-specific HVAC systems including chilled water plants, AHUs, ventilation, and dust/fume extraction systems—designed to match your plant layout and process load.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Do you handle utility piping like steam, compressed air, and water?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we design and execute steam, hot water, compressed air, chilled water, and RO/ETP/STP lines with proper slope, insulation, and pressure rating as per industry best practices.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Can you support electrical distribution along with MEP?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. Our team executes HT/LT panels, cabling, transformer rooms, and emergency power systems as part of integrated MEPF solutions with safety and uptime as top priorities.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Do you offer AMC and system audits after project handover?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. We provide annual maintenance contracts, energy audits, and operational training for sustained plant efficiency and compliance. Remote monitoring via BMS is also available.
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