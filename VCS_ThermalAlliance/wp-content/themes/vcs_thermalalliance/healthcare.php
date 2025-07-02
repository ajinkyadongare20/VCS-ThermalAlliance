<?php
/**
 * The main template file
 * Template Name: Healthcare
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
                        At VCS ThermalAlliance, we engineer MEPF systems that safeguard lives and support healing. From HVAC with HEPA and humidity control to fire-safe electrical and cleanroom infrastructure, our solutions are designed specifically for hospitals, ICUs, OTs, and labs.
                        We ensure every installation meets NABH, WHO-GMP, and ISO 14644 standards—integrating clean air delivery, infection prevention, medical gas piping, smart AHUs, and BMS-ready automation. Whether it’s a new healthcare facility or a critical retrofit, we deliver compliance, sterility, and performance with zero compromise.
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
                    <h4 class="text-primary">Healthcare HVAC & MEPF Solutions</h4>
                    <h1 class="display-6 mb-4">Sterile, Safe & Compliant Hospital Systems</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance delivers precision HVAC, cleanroom, electrical, and fire safety solutions tailored for hospitals,
                        ICUs, diagnostic labs, and sterile environments. We ensure performance with strict compliance for NABH, WHO-GMP, and ISO standards.
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
                                <span>Hospital Cleanroom HVAC</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-2" data-bs-toggle="pill" data-bs-target="#VCSTab-2" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-plug small"></span>
                                </div>
                                <span>Medical Electrical Systems</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-3" data-bs-toggle="pill" data-bs-target="#VCSTab-3" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-fire-extinguisher small"></span>
                                </div>
                                <span>Fire Safety in Hospitals</span>
                            </button>
                        </li>
                        <li class="nav-item me-2 mb-2" role="presentation">
                            <button class="nav-link d-flex align-items-center py-3 px-4" id="vcs-tab-4" data-bs-toggle="pill" data-bs-target="#VCSTab-4" type="button" role="tab">
                                <div class="vcs-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-industry small"></span>
                                </div>
                                <span>Turnkey MEPF Execution</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="vcsProjectsContent">

                <!-- Tab 1: Cleanroom HVAC -->
                <div class="tab-pane fade show active" id="VCSTab-1" role="tabpanel" aria-labelledby="vcs-tab-1">
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h4>HEPA Filtration & Pressure Control</h4>
                                    <p class="mb-0">Cleanroom HVAC systems with air balancing, humidity control, and HEPA filters for ICUs, OTs & IVF labs.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h4>Compliant with NABH & ISO</h4>
                                    <p class="mb-0">Engineered to meet NABH, WHO-GMP, and ISO 14644 standards for healthcare facilities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" data-wow-delay="0.1s" src="<?php bloginfo('template_directory'); ?>/img/healthcare/Hospital Cleanroom HVAC.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users-cog text-white"></i>
                                    </div>
                                    <h4>Medical Gas & Automation</h4>
                                    <p class="mb-0">Medical gas piping, AHU automation, and bed head panel integration for critical environments.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <h4>24/7 Specialist Support</h4>
                                    <p class="mb-0">Round-the-clock support and AMC services to maintain sterile air quality and compliance.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 2: Medical Electrical Systems -->
                <div class="tab-pane fade" id="VCSTab-2" role="tabpanel" aria-labelledby="vcs-tab-2">
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h4>HT/LT Electrical Design</h4>
                                    <p class="mb-0">Customized electrical layouts with clean utility design for healthcare-grade performance and reliability.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h4>Emergency & Smart Systems</h4>
                                    <p class="mb-0">Backup systems, nurse call setups, and smart lighting integrated into hospital infrastructure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/healthcare/Medical Electrical System.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users-cog text-white"></i>
                                    </div>
                                    <h4>BMS Integration</h4>
                                    <p class="mb-0">Seamless Building Management System (BMS) integration for real-time monitoring and control.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <h4>Testing & Validation</h4>
                                    <p class="mb-0">End-to-end support for load design, sterility mapping, and certification readiness.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 3: Fire Safety in Hospitals -->
                <div class="tab-pane fade" id="VCSTab-3" role="tabpanel" aria-labelledby="vcs-tab-3">
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h4>Fire Alarm Systems</h4>
                                    <p class="mb-0">Installation of fire detection, alarms, and suppression systems as per NFPA/NBC standards.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h4>Sprinklers & Hydrants</h4>
                                    <p class="mb-0">Hydrant systems and automated sprinklers integrated across hospital zones for maximum coverage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/healthcare/Fire Safety in Hospitals.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users-cog text-white"></i>
                                    </div>
                                    <h4>Compliance-Ready Execution</h4>
                                    <p class="mb-0">Solutions designed for audit-readiness and aligned with healthcare safety norms.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <h4>Retrofitting Support</h4>
                                    <p class="mb-0">Fire system retrofits and upgrades for operational facilities with minimal disruption.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 4: Turnkey MEPF Execution -->
                <div class="tab-pane fade" id="VCSTab-4" role="tabpanel" aria-labelledby="vcs-tab-4">
                    <div class="row g-5">
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-cubes text-white"></i>
                                    </div>
                                    <h4>Turnkey Healthcare Projects</h4>
                                    <p class="mb-0">One-stop HVAC, cleanroom, fire, and electrical integration for hospitals and labs.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-award text-white"></i>
                                    </div>
                                    <h4>Fast-Track Execution</h4>
                                    <p class="mb-0">Rapid deployment for ICU, COVID wards & sterile zones with zero compromise on quality.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 wow zoomIn" data-wow-delay="0.9s">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="<?php bloginfo('template_directory'); ?>/img/healthcare/Turnkey MEPF Execution.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row g-5">
                                <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-users-cog text-white"></i>
                                    </div>
                                    <h4>Audit Documentation</h4>
                                    <p class="mb-0">We provide all validation protocols and handover documentation to meet compliance checks.</p>
                                </div>
                                <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                                    <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                        <i class="fa fa-phone-alt text-white"></i>
                                    </div>
                                    <h4>24x7 Service & AMC</h4>
                                    <p class="mb-0">Comprehensive maintenance packages to ensure continuity and long-term efficiency.</p>
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
                    <h6 class="text-primary text-uppercase mb-2">Why Healthcare Clients Choose VCS</h6>
                    <h1 class="display-6 mb-4">Trusted MEPF Partner for Hospitals & OTs</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance is a preferred partner for hospitals, diagnostics, and sterile facilities. Our NABH-compliant HVAC, cleanroom, and electrical installations are designed for sterility, safety, and performance—with full validation and audit support.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Proven Experience</h5>
                            </div>
                            <span>Successfully executed NABH-compliant OTs, ICUs, and COVID isolation wards.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Fast Track Execution</h5>
                            </div>
                            <span>Quick project turnaround with zero compromise on compliance or quality.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Audit-Ready Documentation</h5>
                            </div>
                            <span>Comprehensive URS, layouts, validation protocols, and certification support.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">24x7 Support & AMC</h5>
                            </div>
                            <span>Dedicated maintenance team for uninterrupted system operation and sterility assurance.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" alt="" style="width: 200px; height: 200px">
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
                <h1 class="display-6 mb-4 px-5">Healthcare HVAC & MEPF Solutions</h1>
                <p class="mb-0">
                    Discover how VCS ThermalAlliance delivers precise and sustainable HVAC, Fire, and Cleanroom Solutions for hospitals, pharma labs, and critical environments. From NABH-compliant OTs to ISO-grade cleanrooms, our engineering excellence powers safety and compliance.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Hospitals & Labs</span>
                            </a>
                        </li>
                        <li class="nav-item mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Pharma & Diagnostics</span>
                            </a>
                        </li>
                        <li class="nav-item mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>Cleanroom & BMS</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="tab-content">

                        <!-- Hospitals & Labs -->
                        <div id="SuccessTab-1" class="tab-pane fade show p-0 active">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Apollo Hospitals</h4>
                                        <p class="mb-4">NABH-compliant HVAC for critical care and operation theatres, including HEPA filtration, air balancing, and differential pressure control.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Fortis IVF Labs</h4>
                                        <p class="mb-4">Designed HVAC with clean zone pressure mapping and temperature-humidity control for IVF and diagnostic spaces.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Ruby General Hospital</h4>
                                        <p class="mb-4">Integrated Fire Detection, AHU, and Emergency Power with nurse call systems in critical departments and patient blocks.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">AIIMS Labs</h4>
                                        <p class="mb-4">Custom lab HVAC with silent operation, sterile lighting, real-time temperature monitoring, and cloud-based BMS dashboard.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pharma & Diagnostics -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">MJ Biopharma</h4>
                                        <p class="mb-4">ISO 14644 & WHO-GMP HVAC for biotech cleanroom: HEPA filters, pressure zoning, humidity control, and remote monitoring.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Serum Institute</h4>
                                        <p class="mb-4">Specialized sterile manufacturing HVAC with BIBO exhaust, VFDs, and 24x7 live dashboards integrated into plant SCADA.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Aarti Drugs</h4>
                                        <p class="mb-4">Explosion-proof HVAC with solvent exhaust and energy recovery for API blocks with zero contamination flow design.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Metropolis Diagnostics</h4>
                                        <p class="mb-4">Cleanroom-grade HVAC with antimicrobial finishes and pressurization logic for sample handling and automated lab processing.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cleanroom & BMS -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">IPCA Laboratories</h4>
                                        <p class="mb-4">Cleanroom HVAC system with full-scale Smart BMS integration, automated air balancing, and contamination alarms.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Glenmark R&D Center</h4>
                                        <p class="mb-4">Cloud-based BMS for HVAC and lighting with AI-based anomaly alerts, trend reports, and maintenance predictions.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Sun Pharma Sterile Unit</h4>
                                        <p class="mb-4">Integrated cleanroom panels, sterile lighting, and Smart BMS to maintain ISO 7 conditions with minimum energy input.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/healthcare/Trusted MEPF Partner for Hospitals & OTs1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Thermax Innovation Center</h4>
                                        <p class="mb-4">Advanced Building Automation System for temperature, air quality, lighting & energy — all managed through a mobile dashboard.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Tab -->
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
                    <h1 class="display-4 mb-4">Common Frequently Asked Questions</h1>
                    <p class="mb-4">
                        Have questions about our HVAC, Fire, and Cleanroom solutions for healthcare and pharma environments?
                        Here are answers to some of the most frequently asked queries by our clients in hospitals, labs, and cleanrooms.
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
                                        Q: What HVAC standards do you follow for operation theatres?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We design HVAC systems as per NABH, ASHRAE, and ISO Class 5/6 cleanroom guidelines.
                                        Laminar airflow, HEPA filtration, and positive pressure gradients are used to ensure
                                        contamination-free environments.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Do you provide integrated solutions including Fire and Electrical services?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we offer turnkey MEPF solutions including Fire Detection & Suppression,
                                        Nurse Call Systems, Emergency Lighting, and Power Backup for hospitals and laboratories.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Can your HVAC systems be monitored remotely?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. Our systems support IoT-based BMS integration, enabling remote monitoring,
                                        fault detection, and performance analytics via cloud or mobile dashboards.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Do you handle HVAC validation and documentation for pharma cleanrooms?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. We provide complete IQ/OQ documentation, DQ protocols, AHU qualification, and
                                        ISO cleanroom validation services as per WHO-GMP, EU-GMP, and USFDA audit requirements.
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