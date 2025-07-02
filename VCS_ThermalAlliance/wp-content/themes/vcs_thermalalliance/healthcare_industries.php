<?php
/**
 * The main template file
 * Template Name: Healthcare Industries
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
            <h1 class="display-3 text-white animated slideInRight">Healthcare Industry Solutions </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Healthcare Industry Solutions</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Specialized MEPF Systems for Healthcare Environments </li>
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
                    <h2 class="text-primary mb-3">Healthcare Industry Solutions</h2>
                    <p class="lead text-muted">
                        VCS ThermalAlliance delivers precision-engineered MEPF systems that meet the stringent demands of hospitals, clinics, ICUs, and laboratories. Our integrated HVAC, cleanroom, firefighting, and electrical solutions ensure infection control, patient safety, and regulatory compliance in every healthcare environment we serve.
                    </p>
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
                    <!-- Tab 1: HVAC & Cleanroom -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fas fa-clinic-medical fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Environment</small>
                                <h6 class="mt-n1 mb-0">HVAC & Cleanroom</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 2: Fire Safety -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fas fa-fire-extinguisher fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Protection</small>
                                <h6 class="mt-n1 mb-0">Fire Safety Systems</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 3: Electrical & BMS -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Power & Control</small>
                                <h6 class="mt-n1 mb-0">Electrical & BMS</h6>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Tab 1: HVAC & Cleanroom -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">

                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/hvac_cleanroom/NABH-Compliant HVAC.jpg" 
                                        alt="NABH-Compliant HVAC"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>NABH-Compliant HVAC</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">HEPA filtration and NABH-standard air balancing for healthcare zones</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/hvac_cleanroom/AHU with Pressure Control.jpg" 
                                        alt="AHU with Pressure Control"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>AHU with Pressure Control</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Differential pressure AHUs for OTs, ICUs, and IVF labs</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/hvac_cleanroom/Cleanroom HVAC Solutions.jpg" 
                                        alt="Cleanroom HVAC Solutions"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cleanroom HVAC Solutions</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Sterile air handling systems for labs, pharmacies, and surgical areas</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/hvac_cleanroom/Sterile Lighting & Panels.jpg" 
                                        alt="Sterile Lighting & Panels"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sterile Lighting & Panels</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Cleanroom lighting, anti-microbial panels & sterile ceiling systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/hvac_cleanroom/Airflow & Pressure Zoning.jpg" 
                                        alt="Airflow & Pressure Zoning"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Airflow & Pressure Zoning</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Optimized zoning for infection prevention and occupant safety</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/hvac_cleanroom/Smart HVAC Monitoring.jpg" 
                                        alt="Smart HVAC Monitoring"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smart HVAC Monitoring</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">IoT and BMS integration for real-time performance insights</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/hvac_cleanroom/Validation & Compliance.jpg" 
                                        alt="Validation & Compliance"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Validation & Compliance</span>
                                            <span class="text-primary">NABH/ISO</span>
                                        </h5>
                                        <small class="fst-italic">DQ/IQ/OQ/PQ documentation and cleanroom qualification</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/hvac_cleanroom/Retrofit & Modular OTs.jpg" 
                                        alt="Retrofit & Modular OTs"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Retrofit & Modular OTs</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Custom modular HVAC upgrades for operating theatres</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Tab 2: Fire Safety -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">

                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/fire_safety_system/Fire Detection Systems.jpg" 
                                        alt="Fire Detection Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Detection Systems</span>
                                            <span class="text-primary">NBC/NFPA</span>
                                        </h5>
                                        <small class="fst-italic">Advanced smoke and heat detection for healthcare zones</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/fire_safety_system/Fire Suppression Systems.jpg" 
                                        alt="Fire Suppression Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Suppression Systems</span>
                                            <span class="text-primary">NFPA 13/15</span>
                                        </h5>
                                        <small class="fst-italic">Automatic suppression for ICUs, labs, and data rooms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/fire_safety_system/Smoke Management Systems.jpg" 
                                        alt="Smoke Management"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smoke Management Systems</span>
                                            <span class="text-primary">NFPA 92</span>
                                        </h5>
                                        <small class="fst-italic">Pressurization and extraction for patient-safe evacuation</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/fire_safety_system/Addressable Fire Alarm.jpg" 
                                        alt="Fire Alarm Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Addressable Fire Alarm</span>
                                            <span class="text-primary">NFPA 72</span>
                                        </h5>
                                        <small class="fst-italic">Zoned alarm systems integrated with nurse call & BMS</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/fire_safety_system/Healthcare Sprinkler Systems.jpg" 
                                        alt="Healthcare Sprinkler Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Healthcare Sprinkler Systems</span>
                                            <span class="text-primary">Wet/Dry</span>
                                        </h5>
                                        <small class="fst-italic">Sprinkler networks designed for hospital-grade protection</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/fire_safety_system/Clean Agent Suppression.jpg" 
                                        alt="Clean Agent Fire Suppression"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Clean Agent Suppression</span>
                                            <span class="text-primary">NFPA 2001</span>
                                        </h5>
                                        <small class="fst-italic">Non-residue suppression for imaging rooms and server areas</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/fire_safety_system/Fire Rated Compartmentation.jpg" 
                                        alt="Fire Rated Compartmentation"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Rated Compartmentation</span>
                                            <span class="text-primary">2HR/4HR</span>
                                        </h5>
                                        <small class="fst-italic">Fire barriers to contain and isolate hazardous zones</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/fire_safety_system/Emergency Lighting Systems.jpg" 
                                        alt="Emergency Lighting Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Emergency Lighting Systems</span>
                                            <span class="text-primary">NBC Compliant</span>
                                        </h5>
                                        <small class="fst-italic">Exit signs and battery backup lighting for safe egress</small>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Electrical, Plumbing & BMS Systems -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">

                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/electrical_bms/Hospital Electrical Systems.jpg" 
                                        alt="Hospital Electrical Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hospital Electrical Systems</span>
                                            <span class="text-primary">24/7 Power</span>
                                        </h5>
                                        <small class="fst-italic">Reliable LV & HT infrastructure with redundancy</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/electrical_bms/Medical Gas Pipeline.jpg" 
                                        alt="Medical Gas Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Medical Gas Pipeline</span>
                                            <span class="text-primary">ISO 7396</span>
                                        </h5>
                                        <small class="fst-italic">MGPS, vacuum and alarm systems for patient safety</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/electrical_bms/Nurse Call Systems.jpg" 
                                        alt="Nurse Call System"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Nurse Call Systems</span>
                                            <span class="text-primary">Integrated</span>
                                        </h5>
                                        <small class="fst-italic">Real-time alerting & communication platforms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/electrical_bms/Building Management Systems.jpg" 
                                        alt="Hospital BMS"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Building Management Systems</span>
                                            <span class="text-primary">Smart BMS</span>
                                        </h5>
                                        <small class="fst-italic">Centralized automation for utilities and safety</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/electrical_bms/UPS & Backup Power.jpg" 
                                        alt="Hospital UPS Solutions"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>UPS & Backup Power</span>
                                            <span class="text-primary">Critical Load</span>
                                        </h5>
                                        <small class="fst-italic">Continuous power for OTs, ICUs, and labs</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/electrical_bms/Sterile Lighting Systems.jpg" 
                                        alt="Sterile Lighting"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sterile Lighting Systems</span>
                                            <span class="text-primary">Medical Grade</span>
                                        </h5>
                                        <small class="fst-italic">Shadowless, cleanable lighting for sterile zones</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/electrical_bms/Modular Cleanroom Panels.jpg" 
                                        alt="Modular Wall Panels"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Modular Cleanroom Panels</span>
                                            <span class="text-primary">ISO 14644</span>
                                        </h5>
                                        <small class="fst-italic">Antimicrobial seamless paneling for sterile areas</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/electrical_bms/Medical Plumbing Systems.jpg" 
                                        alt="Medical Plumbing"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Medical Plumbing Systems</span>
                                            <span class="text-primary">Hygienic</span>
                                        </h5>
                                        <small class="fst-italic">Sanitary drainage, RO water, and contamination control</small>
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


    <!-- Why Choose Us Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">Specialized MEPF Systems for Healthcare Excellence</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance delivers integrated MEPF solutions tailored for hospitals, OTs, ICUs, and labs. With advanced design tools, certified engineers, and deep domain knowledge, we ensure high-performance, infection-controlled environments that meet NABH and NBC compliance.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Healthcare Expertise</h5>
                            </div>
                            <span>Proven execution in modular OTs, ICUs, and cleanroom environments.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Compliance-Driven</h5>
                            </div>
                            <span>MEPF systems compliant with NABH, ISO 7396, NFPA, and NBC standards.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Smart Monitoring</h5>
                            </div>
                            <span>IoT-enabled BMS for temperature, humidity, and energy analytics in real time.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Turnkey Delivery</h5>
                            </div>
                            <span>Single-window execution of HVAC, electrical, firefighting, plumbing & cleanroom systems.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/Specialized MEPF Systems for Healthcare1.jpg" alt="Healthcare MEPF Solutions" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/healthcare_industry/Specialized MEPF Systems for Healthcare.jpg" alt="Cleanroom Projects" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us End -->


    <!-- FAQ Start -->
    <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- FAQ Text Column -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <h4 class="text-primary">Healthcare MEPF FAQs</h4>
                    <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                    <p class="mb-4">
                        Have questions about how we deliver specialized HVAC, electrical, plumbing, and fire safety systems for healthcare spaces? Here are answers to some of the most common inquiries.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#contact">Ask Us Directly</a>
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
                                        Q: Are your HVAC systems NABH-compliant?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. Our HVAC designs for hospitals, OTs, and ICUs strictly follow NABH and ISO 14644 cleanroom standards, including HEPA filtration, pressure differentials, and temperature control.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Do you offer turnkey MEPF solutions for hospitals?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. We provide end-to-end execution of HVAC, electrical, firefighting, plumbing, cleanroom panels, BMS, and medical gas systems under a single contract.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: What standards do your fire safety systems comply with?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Our fire protection and alarm systems are compliant with NFPA 13/72, NBC India, and local fire authority guidelines, ensuring maximum patient and facility safety.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Can you integrate smart monitoring systems for OTs and ICUs?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. We implement IoT-enabled Building Management Systems (BMS) that allow real-time monitoring of temperature, humidity, energy usage, and pressure across critical areas.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: Do you support AMC and post-installation service?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we offer annual maintenance contracts (AMCs), performance audits, and technical support to ensure long-term system efficiency and regulatory compliance.
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