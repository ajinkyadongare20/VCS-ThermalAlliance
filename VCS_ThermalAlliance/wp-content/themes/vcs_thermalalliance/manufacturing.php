<?php
/**
 * The main template file
 * Template Name: Manufacturing
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
            <h1 class="display-3 text-white animated slideInRight">Manufacturing Sector Solutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Manufacturing Sector Solutions</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">End-to-End MEPF Services for Manufacturing Units</li>
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
                    <h2 class="text-primary mb-3">Manufacturing Sector Solutions</h2>
                    <p class="lead text-muted">
                        Hospitals and healthcare facilities demand the highest level of environmental control, sterility, and compliance. At VCS ThermalAlliance, we bring decades of experience in designing and delivering HVAC, cleanroom, firefighting, and electrical systems tailored to healthcare spaces—from outpatient departments to ICUs, OTs, and specialty labs.                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->


    <!-- Healthcare Solutions Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Solutions We Provide</h1>
            </div>

            <!-- Tab Navigation -->
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <!-- HVAC Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fas fa-wind fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Critical</small>
                                <h6 class="mt-n1 mb-0">HVAC Systems</h6>
                            </div>
                        </a>
                    </li>
                    
                    <!-- Safety Systems Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fas fa-fire-extinguisher fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Safety</small>
                                <h6 class="mt-n1 mb-0">Fire Protection</h6>
                            </div>
                        </a>
                    </li>
                    
                    <!-- Electrical Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Power</small>
                                <h6 class="mt-n1 mb-0">Electrical Systems</h6>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- HVAC Solutions -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" 
                                        alt="NABH-Compliant HVAC"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>NABH-Compliant HVAC</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">HEPA filtration and precision air balancing for healthcare facilities</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" 
                                        alt="AHU Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>AHU Systems</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Differential pressure control for OT, ICU, and IVF units</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg" 
                                        alt="Air Balancing"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Precision Air Balancing</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Optimized airflow for infection control and comfort</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-4.jpg" 
                                        alt="Cleanroom HVAC"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cleanroom HVAC</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Specialized systems for sterile environments</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-5.jpg" 
                                        alt="Energy Recovery"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Energy Recovery Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Efficient heat and energy recovery solutions</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-6.jpg" 
                                        alt="VRF Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>VRF Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Variable refrigerant flow for zoned comfort</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" 
                                        alt="Ductwork Solutions"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Medical Grade Ductwork</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Antimicrobial coated ducts for healthcare facilities</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" 
                                        alt="HVAC Controls"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smart HVAC Controls</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">BMS-integrated control systems for healthcare</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Fire Protection Systems -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" 
                                        alt="Fire Detection"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Detection Systems</span>
                                            <span class="text-primary">NFPA/NBC</span>
                                        </h5>
                                        <small class="fst-italic">Compliant detection and alarm systems</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" 
                                        alt="Fire Suppression"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Suppression</span>
                                            <span class="text-primary">NFPA/NBC</span>
                                        </h5>
                                        <small class="fst-italic">Automatic suppression systems for critical areas</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg" 
                                        alt="Smoke Control"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smoke Control Systems</span>
                                            <span class="text-primary">NFPA 92</span>
                                        </h5>
                                        <small class="fst-italic">Pressurization and exhaust systems</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-4.jpg" 
                                        alt="Fire Alarm"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Addressable Fire Alarm</span>
                                            <span class="text-primary">NFPA 72</span>
                                        </h5>
                                        <small class="fst-italic">Zoned alarm systems with central monitoring</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-5.jpg" 
                                        alt="Sprinkler Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sprinkler Systems</span>
                                            <span class="text-primary">NFPA 13</span>
                                        </h5>
                                        <small class="fst-italic">Wet and dry pipe systems for healthcare</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-6.jpg" 
                                        alt="Clean Agent"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Clean Agent Systems</span>
                                            <span class="text-primary">NFPA 2001</span>
                                        </h5>
                                        <small class="fst-italic">For sensitive equipment areas</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" 
                                        alt="Fire Rated"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Rated Construction</span>
                                            <span class="text-primary">NBC Compliant</span>
                                        </h5>
                                        <small class="fst-italic">Compartmentation and fire barriers</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" 
                                        alt="Emergency Lighting"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Emergency Lighting</span>
                                            <span class="text-primary">NBC Compliant</span>
                                        </h5>
                                        <small class="fst-italic">Exit path and safety illumination</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Electrical Systems -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" 
                                        alt="Electrical Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Electrical Systems</span>
                                            <span class="text-primary">24/7</span>
                                        </h5>
                                        <small class="fst-italic">Emergency backup and power distribution</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" 
                                        alt="Medical Gas"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Medical Gas Systems</span>
                                            <span class="text-primary">ISO 7396</span>
                                        </h5>
                                        <small class="fst-italic">Piped medical gas and vacuum systems</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg" 
                                        alt="Nurse Call"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Nurse Call Systems</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Integrated patient-staff communication</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-4.jpg" 
                                        alt="BMS"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Building Management</span>
                                            <span class="text-primary">BMS</span>
                                        </h5>
                                        <small class="fst-italic">Central monitoring and control systems</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-5.jpg" 
                                        alt="UPS"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>UPS Systems</span>
                                            <span class="text-primary">Critical Power</span>
                                        </h5>
                                        <small class="fst-italic">Uninterruptible power for medical equipment</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-6.jpg" 
                                        alt="Sterile Lighting"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sterile Lighting</span>
                                            <span class="text-primary">Medical Grade</span>
                                        </h5>
                                        <small class="fst-italic">Anti-microbial surgical lighting</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" 
                                        alt="Cleanroom Panels"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cleanroom Panels</span>
                                            <span class="text-primary">ISO Class</span>
                                        </h5>
                                        <small class="fst-italic">Seamless antimicrobial wall systems</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" 
                                        alt="Plumbing"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Medical Plumbing</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Specialized drainage and water systems</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Healthcare Solutions End -->


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