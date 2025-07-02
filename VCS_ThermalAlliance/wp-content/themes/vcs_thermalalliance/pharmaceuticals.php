<?php
/**
 * The main template file
 * Template Name: Pharmaceuticals
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
            <h1 class="display-3 text-white animated slideInRight">Pharmaceutical Industry Solutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Pharmaceutical Industry Solutions</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">HVAC, Cleanroom & Utility Systems for Pharma Facilities</li>
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
                    <h2 class="text-primary mb-3">Pharmaceutical Industry Solutions</h2>
                    <p class="lead text-muted">
                        The pharmaceutical industry operates in a tightly regulated environment where precision, cleanliness, and validation are critical. VCS ThermalAlliance delivers turnkey HVAC, cleanroom, fire safety, and utility solutions that ensure WHO-GMP, USFDA, and cGMP compliance for both formulation and API facilities.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->


    <!-- Pharmaceutical Solutions Start -->
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
                            <i class="fas fa-wind fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Cleanroom</small>
                                <h6 class="mt-n1 mb-0">HVAC & Environment</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 2: Utility Systems -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fas fa-tools fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Process</small>
                                <h6 class="mt-n1 mb-0">Utility Integration</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 3: Engineering & Validation -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fas fa-file-alt fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">GMP</small>
                                <h6 class="mt-n1 mb-0">Validation & Docs</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 4: Fire Safety & Emergency -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <i class="fas fa-fire-extinguisher fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Compliance</small>
                                <h6 class="mt-n1 mb-0">Fire & Safety</h6>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- HVAC & Cleanroom Systems -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/HVAC & Environment/Classified HVAC Systems.jpg" 
                                        alt="Classified HVAC"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Classified HVAC Systems</span>
                                            <span class="text-primary">Class 100–100,000</span>
                                        </h5>
                                        <small class="fst-italic">GMP-grade air systems with zoning and air change control</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/HVAC & Environment/Modular Cleanroom Panels.jpg" 
                                        alt="Cleanroom Panels"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Modular Cleanroom Panels</span>
                                            <span class="text-primary">ISO Class</span>
                                        </h5>
                                        <small class="fst-italic">Antistatic, non-particle shedding wall and ceiling systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/HVAC & Environment/HEPA Filtration.jpg" 
                                        alt="HEPA Filtration"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>HEPA Filtration</span>
                                            <span class="text-primary">EN 1822</span>
                                        </h5>
                                        <small class="fst-italic">Terminal HEPA filters with validation-grade efficiency</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/HVAC & Environment/Airflow & Pressure Design.jpg" 
                                        alt="Airflow Design"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Airflow & Pressure Design</span>
                                            <span class="text-primary">Validated</span>
                                        </h5>
                                        <small class="fst-italic">Temp, RH & pressure gradient control for critical zones</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/HVAC & Environment/BMS & Monitoring Systems.jpg" 
                                        alt="BMS Integration"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>BMS & Monitoring Systems</span>
                                            <span class="text-primary">21 CFR Part 11</span>
                                        </h5>
                                        <small class="fst-italic">Real-time alarms, trend logging & remote monitoring</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/HVAC & Environment/Zoning & Containment.jpg" 
                                        alt="Zoning Control"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Zoning & Containment</span>
                                            <span class="text-primary">Regulatory</span>
                                        </h5>
                                        <small class="fst-italic">Pressure cascade zoning for product, personnel & material flows</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/HVAC & Environment/AHU Design & Layouts.jpg" 
                                        alt="AHU Design"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>AHU Design & Layouts</span>
                                            <span class="text-primary">GMP Ready</span>
                                        </h5>
                                        <small class="fst-italic">AHU sizing, zoning & duct layout for pharma environments</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/HVAC & Environment/HVAC Validation Support.jpg" 
                                        alt="HVAC Validation"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>HVAC Validation Support</span>
                                            <span class="text-primary">DQ/IQ/OQ/PQ</span>
                                        </h5>
                                        <small class="fst-italic">Smoke study, air pattern test & qualification documents</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Utility Systems -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Utility Integration/RO & DM Water Systems.jpg"
                                        alt="RO & DM Water Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>RO & DM Water Systems</span>
                                            <span class="text-primary">GMP Grade</span>
                                        </h5>
                                        <small class="fst-italic">Purified water generation and distribution for formulation use</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Utility Integration/Compressed Air Systems.jpg"
                                        alt="Compressed Air Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Compressed Air Systems</span>
                                            <span class="text-primary">ISO 8573</span>
                                        </h5>
                                        <small class="fst-italic">Oil-free and dry air supply with dew point control</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Utility Integration/Nitrogen Distribution.jpg"
                                        alt="Nitrogen Distribution"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Nitrogen Distribution</span>
                                            <span class="text-primary">Pharma Grade</span>
                                        </h5>
                                        <small class="fst-italic">Integrated pipelines for nitrogen supply to reactors and filling lines</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Utility Integration/WFI Loops.jpg"
                                        alt="WFI Loops"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>WFI Loops</span>
                                            <span class="text-primary">cGMP</span>
                                        </h5>
                                        <small class="fst-italic">Stainless steel piping systems for Water For Injection loops</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Utility Integration/Clean Steam Systems.jpg"
                                        alt="Steam Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Clean Steam Systems</span>
                                            <span class="text-primary">ASME BPE</span>
                                        </h5>
                                        <small class="fst-italic">Saturated steam generation for sterilization & equipment</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Utility Integration/Effluent Treatment Plant (ETP).jpg"
                                        alt="Effluent Treatment"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Effluent Treatment Plant (ETP)</span>
                                            <span class="text-primary">CPCB Norms</span>
                                        </h5>
                                        <small class="fst-italic">Wastewater treatment systems for pharma process discharge</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Utility Integration/Boiler Integration.jpg"
                                        alt="Boiler Integration"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Boiler Integration</span>
                                            <span class="text-primary">IBR Certified</span>
                                        </h5>
                                        <small class="fst-italic">Steam supply systems integrated with process automation</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Utility Integration/Utility Piping Networks.jpg"
                                        alt="Utility Piping"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Utility Piping Networks</span>
                                            <span class="text-primary">SS316L/PVC-C</span>
                                        </h5>
                                        <small class="fst-italic">Dedicated loops for clean and black utilities</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Engineering & Validation -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Validation & Docs/URS, Layout & BOQ.jpg"
                                        alt="URS & BOQ"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>URS, Layout & BOQ</span>
                                            <span class="text-primary">GMP Docs</span>
                                        </h5>
                                        <small class="fst-italic">Detailed engineering deliverables aligned with validation needs</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Validation & Docs/DQ  IQ  OQ  PQ.jpg"
                                        alt="DQ/IQ/OQ"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>DQ / IQ / OQ / PQ</span>
                                            <span class="text-primary">Validation</span>
                                        </h5>
                                        <small class="fst-italic">End-to-end documentation for regulatory compliance</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Validation & Docs/HVAC Mapping.jpg"
                                        alt="Airflow Mapping"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>HVAC Mapping</span>
                                            <span class="text-primary">ISO 14644</span>
                                        </h5>
                                        <small class="fst-italic">Airflow direction & particle classification testing</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Validation & Docs/Smoke Studies.jpg"
                                        alt="Smoke Studies"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smoke Studies</span>
                                            <span class="text-primary">FDA Aligned</span>
                                        </h5>
                                        <small class="fst-italic">Visualization of laminar flow in sterile areas</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Validation & Docs/HEPA Integrity Testing.jpg"
                                        alt="Filter Testing"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>HEPA Integrity Testing</span>
                                            <span class="text-primary">EN 1822</span>
                                        </h5>
                                        <small class="fst-italic">PAO/DOP testing of terminal HEPA filters</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Validation & Docs/Differential Pressure Monitoring.jpg"
                                        alt="DP Monitoring"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Differential Pressure Monitoring</span>
                                            <span class="text-primary">BMS</span>
                                        </h5>
                                        <small class="fst-italic">Live monitoring with alerts and audit trails</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Validation & Docs/NABL Calibration.jpg"
                                        alt="NABL Calibration"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>NABL Calibration</span>
                                            <span class="text-primary">17025</span>
                                        </h5>
                                        <small class="fst-italic">Certified calibration for validation instruments</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Validation & Docs/Audit & Regulatory Support.jpg"
                                        alt="Audit Support"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Audit & Regulatory Support</span>
                                            <span class="text-primary">USFDA/WHO</span>
                                        </h5>
                                        <small class="fst-italic">End-client support during GMP and regulatory audits</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Fire Safety & Emergency -->
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Fire & Safety/Addressable Fire Alarm Systems.jpg"
                                        alt="Fire Alarm Panels"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Addressable Fire Alarm Systems</span>
                                            <span class="text-primary">NFPA 72</span>
                                        </h5>
                                        <small class="fst-italic">Zoned detection for pharma manufacturing blocks</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Fire & Safety/Hydrant & Sprinkler Systems.jpg"
                                        alt="Fire Hydrant"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hydrant & Sprinkler Systems</span>
                                            <span class="text-primary">NFPA 13</span>
                                        </h5>
                                        <small class="fst-italic">Wet/dry systems for storage, formulation, and utilities</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Fire & Safety/Gas Suppression Systems.jpg"
                                        alt="Gas Suppression"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Gas Suppression Systems</span>
                                            <span class="text-primary">NFPA 2001</span>
                                        </h5>
                                        <small class="fst-italic">Clean agent protection for QA labs & IT rooms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Fire & Safety/Emergency Power Systems.jpg"
                                        alt="Emergency Power"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Emergency Power Systems</span>
                                            <span class="text-primary">24x7</span>
                                        </h5>
                                        <small class="fst-italic">DG, UPS and inverter backup for critical safety loads</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Fire & Safety/Emergency & Evacuation Lighting.jpg"
                                        alt="Evacuation Lighting"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Emergency & Evacuation Lighting</span>
                                            <span class="text-primary">NBC</span>
                                        </h5>
                                        <small class="fst-italic">Guided exit paths and battery-backed signage</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Fire & Safety/Fire-Rated Doors & Compartmentation.jpg"
                                        alt="Fire Doors"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire-Rated Doors & Compartmentation</span>
                                            <span class="text-primary">2 HR</span>
                                        </h5>
                                        <small class="fst-italic">Helps contain fire spread in processing blocks</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Fire & Safety/Integrated Fire Control Panels.jpg"
                                        alt="Control Panel"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Integrated Fire Control Panels</span>
                                            <span class="text-primary">EN Certified</span>
                                        </h5>
                                        <small class="fst-italic">Centralized safety panel for suppression and alarms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Fire & Safety/Fire Drill & Evacuation Planning.jpg"
                                        alt="Evacuation Planning"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Drill & Evacuation Planning</span>
                                            <span class="text-primary">Annual</span>
                                        </h5>
                                        <small class="fst-italic">Staff training and mock drills for pharma safety compliance</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Pharmaceutical Solutions End -->


    <!-- Why Choose US Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Text Column -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Pharma Clients Trust VCS</h6>
                    <h1 class="display-6 mb-4">Compliance-Aligned Execution for Pharma Environments</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance is trusted by leading pharmaceutical manufacturers for our end-to-end HVAC, cleanroom, utility, and fire safety implementations that ensure WHO-GMP, USFDA, and cGMP compliance. Our specialized approach focuses on execution speed, validation readiness, and robust documentation support.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Specialized Pharma Team</h5>
                            </div>
                            <span>In-house engineers experienced in injectables, oral solids, APIs, and biologics.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Fast Track Execution</h5>
                            </div>
                            <span>Proven ability to meet aggressive timelines for brownfield and greenfield projects.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Validation-Ready Documentation</h5>
                            </div>
                            <span>Complete DQ/IQ/OQ/PQ support and calibration documentation for regulatory audits.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">GMP-Compliant Designs</h5>
                            </div>
                            <span>HVAC zoning, pressure mapping, cleanroom layouts, and utility integration as per global pharma standards.</span>
                        </div>
                    </div>
                </div>
                <!-- Image Column -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Compliance-Aligned Execution for Pharma Environments.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/pharmaceuticals/Compliance-Aligned Execution for Pharma Environments1.jpg" alt="" style="width: 200px; height: 200px">
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
                    <h1 class="display-4 mb-4">Frequently Asked Questions for Pharma Clients</h1>
                    <p class="mb-4">
                        Get answers to common questions pharmaceutical manufacturers ask when planning or upgrading their HVAC, cleanroom, and utility infrastructure with VCS ThermalAlliance.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#">Have a Custom Query?</a>
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
                                        Q: Are your cleanroom and HVAC solutions GMP compliant?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. All our HVAC, cleanroom, and utility systems are engineered for full compliance with WHO-GMP, cGMP, USFDA, and EU GMP guidelines. We follow URS-based design and provide validation support documentation.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Can you support both greenfield and brownfield pharma projects?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. We have extensive experience executing both greenfield setups and brownfield facility upgrades with minimal disruption to ongoing operations and fast-track execution models.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Do you provide documentation for validation and audits?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we provide complete DQ, IQ, OQ, PQ documentation, filter integrity reports, air velocity & smoke test reports, and NABL-calibrated instrument records to assist with inspections and regulatory audits.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: What utilities can be integrated with your systems?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We integrate RO/DM water systems, compressed air, nitrogen lines, HVAC with BMS, and emergency power supplies. Our designs ensure seamless compatibility with cleanroom and formulation processes.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: Can you assist with HVAC zoning and pressure mapping?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we provide complete zoning design with pressure differentials, air change calculations, HEPA coverage, and temperature-humidity control—all validated through mapping and smoke studies.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Q: What is your experience across pharma verticals?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We have completed turnkey MEPF projects for oral solid dosages, injectable lines, active pharmaceutical ingredient (API) facilities, biotech labs, and hormone blocks, with several marquee clients across India.
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