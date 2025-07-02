<?php
/**
 * The main template file
 * Template Name: Commercial
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
            <h1 class="display-3 text-white animated slideInRight">Commercial MEPF Solutions </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Projects</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">HVAC, Electrical & Fire Systems for Commercial Spaces</li>
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
                    <h2 class="text-primary mb-3">Commercial MEPF Solutions</h2>
                    <p class="lead text-muted">
                        Modern commercial environments demand seamless comfort, safety, and energy efficiency. At VCS ThermalAlliance, we offer integrated HVAC, firefighting, electrical, and plumbing systems tailored for a wide range of spaces—including corporate offices, malls, multiplexes, co-working hubs, hotels, and business parks.<br><br>

                        Our offerings include VRF/VRV systems, ductable and split AC units, smart lighting with automation, centralized power distribution, and fire alarm and sprinkler systems—all aligned with local regulations and sustainability goals. From energy modeling to site retrofits, we ensure high-performance delivery across all phases of your project with minimal disruption to active operations.
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
                    <h4 class="text-primary">Commercial MEPF Projects & Solutions</h4>
                    <h1 class="display-6 mb-4">HVAC, Electrical & Fire Systems for Commercial Spaces</h1>
                    <p class="mb-5">
                        At VCS ThermalAlliance, we provide end-to-end HVAC, firefighting, electrical, and plumbing systems tailored for commercial buildings, malls, co-working spaces, and hospitality venues. Our smart, energy-efficient solutions ensure comfort, compliance, and operational excellence.
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
                                    <span class="fas fa-building small"></span>
                                </div>
                                <span>ACE Business Center</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-2" data-bs-toggle="pill" data-bs-target="#VCSTab-2" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-laptop-code small"></span>
                                </div>
                                <span>EXL Service India</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-3" data-bs-toggle="pill" data-bs-target="#VCSTab-3" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-city small"></span>
                                </div>
                                <span>Shivram Group Site</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-4" data-bs-toggle="pill" data-bs-target="#VCSTab-4" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-hotel small"></span>
                                </div>
                                <span>Metro Mall HVAC</span>
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
                                                <i class="fa fa-snowflake text-white"></i>
                                            </div>
                                            <h4>900 TR HVAC Retrofit</h4>
                                            <p class="mb-0">Designed and installed a chilled water HVAC system across the ACE Business Center, replacing outdated infrastructure and enhancing energy efficiency with zoned temperature control.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-fire text-white"></i>
                                            </div>
                                            <h4>Fire System Upgrade</h4>
                                            <p class="mb-0">Integrated fire alarm and hydrant systems meeting NBC and local authority regulations across all floors.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.1s" src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" style="object-fit: cover;">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="row g-5">
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-cogs text-white"></i>
                                            </div>
                                            <h4>BMS Integration</h4>
                                            <p class="mb-0">All systems connected to Building Management System for remote monitoring, alerts, and scheduling.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-bolt text-white"></i>
                                            </div>
                                            <h4>Power Backup</h4>
                                            <p class="mb-0">Emergency generator and panel board wiring executed to ensure business continuity.</p>
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
                                                <i class="fa fa-fan text-white"></i>
                                            </div>
                                            <h4>Office HVAC Upgrade</h4>
                                            <p class="mb-0">Installed new ductable AC units and VRV systems with energy monitoring for EXL Service India’s Pune office floors.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-tools text-white"></i>
                                            </div>
                                            <h4>Spares Management</h4>
                                            <p class="mb-0">Annual spares inventory and preventive maintenance schedule established under AMC contract.</p>
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
                                                <i class="fa fa-clipboard-check text-white"></i>
                                            </div>
                                            <h4>ISO Compliance</h4>
                                            <p class="mb-0">Systems designed and installed in accordance with ISO workplace safety and indoor comfort norms.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-chart-line text-white"></i>
                                            </div>
                                            <h4>Energy Savings</h4>
                                            <p class="mb-0">Achieved over 22% energy savings post-upgrade through optimized zoning and airflow distribution.</p>
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
                                            <h4>Full Electrical Setup</h4>
                                            <p class="mb-0">Delivered complete electrical and lighting infrastructure for Shivram Group’s commercial site including LT panels and bus ducts.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-water text-white"></i>
                                            </div>
                                            <h4>Public Health Engineering</h4>
                                            <p class="mb-0">Implemented water supply, drainage, and STP connections ensuring NBC & PHED standards.</p>
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
                                                <i class="fa fa-fire-extinguisher text-white"></i>
                                            </div>
                                            <h4>Fire Safety Network</h4>
                                            <p class="mb-0">Installed sprinkler, hydrant, alarm, and detection systems integrated to central fire panel.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-shield-alt text-white"></i>
                                            </div>
                                            <h4>Compliance & Handover</h4>
                                            <p class="mb-0">All systems tested and certified for use, with fire NOC facilitation and post-handover support.</p>
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
                                                <i class="fa fa-store-alt text-white"></i>
                                            </div>
                                            <h4>Mall-Wide HVAC</h4>
                                            <p class="mb-0">Delivered centralized HVAC system across food court, retail outlets, multiplex zones, and back-end areas of a metro mall.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-recycle text-white"></i>
                                            </div>
                                            <h4>Energy Recovery</h4>
                                            <p class="mb-0">Installed ERV units and economizers to optimize indoor air while lowering HVAC load by 18%.</p>
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
                                                <i class="fa fa-network-wired text-white"></i>
                                            </div>
                                            <h4>Smart Automation</h4>
                                            <p class="mb-0">BMS system integration for AC scheduling, lighting control, and fault alerts in public areas.</p>
                                        </div>
                                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                                <i class="fa fa-handshake text-white"></i>
                                            </div>
                                            <h4>PMC Coordination</h4>
                                            <p class="mb-0">Worked in sync with multiple contractors, consultants, and mall operations for seamless execution in active premises.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Tabs -->
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
                <!-- Left Content -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">MEPF Partner for Modern Commercial Infrastructure</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance brings deep expertise in delivering smart, code-compliant MEPF systems for commercial spaces—from malls and multiplexes to office parks and hospitality developments. We blend precision design, advanced controls, and seamless execution under one roof.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-building text-white"></i>
                                </div>
                                <h5 class="mb-0">Turnkey Delivery</h5>
                            </div>
                            <span>Complete HVAC, electrical, firefighting & plumbing from design to commissioning.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-code-branch text-white"></i>
                                </div>
                                <h5 class="mb-0">Smart System Integration</h5>
                            </div>
                            <span>Seamless BMS integration for lighting, HVAC, and fire alarm systems with remote control.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-leaf text-white"></i>
                                </div>
                                <h5 class="mb-0">Green Building Focus</h5>
                            </div>
                            <span>Designs aligned with IGBC & LEED for sustainability, energy savings, and wellness.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-user-shield text-white"></i>
                                </div>
                                <h5 class="mb-0">Regulatory Compliance</h5>
                            </div>
                            <span>Executed per NBC, NFPA, IEC standards & fire NOC norms for hassle-free approvals.</span>
                        </div>
                    </div>
                </div>
                <!-- Right Image -->
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
                    Discover how VCS ThermalAlliance has delivered end-to-end MEPF solutions for top commercial spaces. Our success stories span business parks, malls, hotels, and offices—ensuring performance, safety, and sustainability in every build.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Business Parks</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Retail Spaces</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>Hospitality</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-4">
                                <span>Mixed Use</span>
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
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">ACE Business Center</h4>
                                        <p class="mb-4">900 TR chilled water HVAC system with intelligent fire retrofit executed with minimal business disruption. The solution improved energy performance while aligning with local compliance standards.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">EXL Service India</h4>
                                        <p class="mb-4">Office HVAC upgrades including duct layout modification and spare management program. BMS controls allow energy usage monitoring and temperature zoning for optimized workforce comfort.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Phoenix Mall</h4>
                                        <p class="mb-4">Designed a 24/7 operational HVAC and ventilation system including AHUs, VRFs and exhaust ducts for a multi-level shopping complex, ensuring compliance with NBC codes and optimal indoor air quality.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Shivram Group Commercial Site</h4>
                                        <p class="mb-4">Full-service MEPF implementation including intelligent lighting, fire suppression system, and power panels across their flagship commercial showroom and office zone.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Hotel Elite Crown</h4>
                                        <p class="mb-4">Deployed silent-operation HVAC units with guest room zoning and energy-saving automation. Integrated with emergency lighting and firefighting systems as per hospitality safety codes.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 4 -->
                        <div id="SuccessTab-4" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Metro Square</h4>
                                        <p class="mb-4">Mixed-use development with co-working, retail, and hospitality zones—VCS delivered full-scope HVAC, firefighting and electrical services with phasing aligned to interior fit-outs and occupancy timelines.</p>
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
                    <h4 class="text-primary">Commercial MEPF FAQ</h4>
                    <h1 class="display-4 mb-4">Answers to Your Common Queries</h1>
                    <p class="mb-4">
                        Find quick answers to the most frequently asked questions about our HVAC, Electrical, Fire & Plumbing services for offices, retail, and hospitality spaces. We’re here to help simplify your decision-making.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#">Talk to an MEPF Expert</a>
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
                                        Q: What types of HVAC systems are best suited for commercial spaces?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: VRF/VRV systems, ductable splits, and centralized chillers are commonly used for commercial applications. We assess your building’s layout and energy needs to recommend the optimal solution.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Are your electrical systems compatible with automation and smart controls?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. We integrate smart lighting, occupancy sensors, and BMS-enabled electrical panels to enhance energy efficiency and user control in real-time.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: What fire safety measures do you implement in offices and malls?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We provide turnkey fire alarm, smoke detection, sprinkler, and hydrant systems aligned with NBC and NFPA norms. System design ensures swift evacuation and fire response.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Can you work around operating businesses during retrofits?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. We specialize in phased execution and occupied site coordination, ensuring minimal disruption to your business operations during upgrades.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 (Optional) -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: Do you provide maintenance after project handover?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we offer post-handover Annual Maintenance Contracts (AMCs) for high uptime, preventive servicing, and emergency support—ensuring long-term system performance.
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