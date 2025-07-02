<?php
/**
 * The main template file
 * Template Name: Commercial Real Estate
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
            <h1 class="display-3 text-white animated slideInRight">Commercial Real Estate Solutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Commercial Real Estate Solutions</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">MEPF Systems for Offices, Malls & Business Parks</li>
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
                    <h2 class="text-primary mb-3">Commercial Real Estate Solutions</h2>
                    <p class="lead text-muted">
                        From high-rise office towers to shopping malls and mixed-use business complexes, VCS ThermalAlliance provides end-to-end MEPF systems designed for comfort, efficiency, and long-term ROI. We work with developers, PMC teams, and architects to deliver HVAC, electrical, plumbing, and fire protection systems that align with RERA, NBC, and IGBC requirements.
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
                    <!-- Tab 1: HVAC Systems -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fas fa-snowflake fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Cooling</small>
                                <h6 class="mt-n1 mb-0">HVAC & VRF Systems</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 2: Electrical Systems -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Power</small>
                                <h6 class="mt-n1 mb-0">Electrical & Lighting</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 3: Plumbing & Drainage -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fas fa-tint fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Water</small>
                                <h6 class="mt-n1 mb-0">Plumbing & STP/WTP</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 4: Fire Safety -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <i class="fas fa-fire-extinguisher fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Safety</small>
                                <h6 class="mt-n1 mb-0">Fire Protection Systems</h6>
                            </div>
                        </a>
                    </li>

                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- Tab 1: HVAC & VRF Systems -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/HVAC & VRF Systems/Central HVAC Systems.jpg"
                                        alt="Central HVAC Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Central HVAC Systems</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Efficient chilled water systems for multi-zone control</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/HVAC & VRF Systems/VRF VRV Systems.jpg"
                                        alt="VRF/VRV Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>VRF/VRV Systems</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Variable refrigerant flow for energy-efficient zoning</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/HVAC & VRF Systems/Air Handling Units (AHUs).jpg"
                                        alt="Air Handling Units"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Air Handling Units (AHUs)</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Reliable air circulation for large volume spaces</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/HVAC & VRF Systems/Ducting & Insulation.jpg"
                                        alt="Ducting & Insulation"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Ducting & Insulation</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">GI ducts, insulation for thermal and acoustic control</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/HVAC & VRF Systems/Exhaust & Fresh Air Systems.jpg"
                                        alt="Exhaust & Fresh Air Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Exhaust & Fresh Air Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Ventilation for basements, toilets & food courts</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/HVAC & VRF Systems/Cooling Towers.jpg"
                                        alt="Cooling Towers"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cooling Towers</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Induced draft towers for heat rejection in chillers</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/HVAC & VRF Systems/Energy Recovery Units.jpg"
                                        alt="Energy Recovery Units"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Energy Recovery Units</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Improve HVAC efficiency through waste heat recovery</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/HVAC & VRF Systems/Smart HVAC Controls.jpg"
                                        alt="Smart HVAC Controls"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smart HVAC Controls</span>
                                            <span class="text-primary">Smart BMS</span>
                                        </h5>
                                        <small class="fst-italic">BMS and IoT integrated climate control systems</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Fire Protection Systems -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Electrical & Lighting/Main LT Panels.jpg"
                                        alt="Main LT Panels"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Main LT Panels</span>
                                            <span class="text-primary">Power</span>
                                        </h5>
                                        <small class="fst-italic">Reliable power distribution for large facilities</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Electrical & Lighting/Sub-Distribution Boards.jpg"
                                        alt="Sub-Distribution Boards"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sub-Distribution Boards</span>
                                            <span class="text-primary">Efficiency</span>
                                        </h5>
                                        <small class="fst-italic">Optimized zoning for tenant-level control</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Electrical & Lighting/Smart Lighting Systems.jpg"
                                        alt="Smart Lighting Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smart Lighting Systems</span>
                                            <span class="text-primary">IoT LED</span>
                                        </h5>
                                        <small class="fst-italic">Motion sensors, daylight harvesting and control</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Electrical & Lighting/UPS & Inverters.jpg"
                                        alt="UPS & Inverters"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>UPS & Inverters</span>
                                            <span class="text-primary">Backup</span>
                                        </h5>
                                        <small class="fst-italic">Backup power for lifts, data centers & billing counters</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Electrical & Lighting/Transformer Yard Setup.jpg"
                                        alt="Transformer Yard Setup"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Transformer Yard Setup</span>
                                            <span class="text-primary">HT to LT</span>
                                        </h5>
                                        <small class="fst-italic">Complete transformer-to-panel design & installation</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Electrical & Lighting/Cable Routing & Trays.jpg"
                                        alt="Cable Routing"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cable Routing & Trays</span>
                                            <span class="text-primary">Neat & Safe</span>
                                        </h5>
                                        <small class="fst-italic">Optimized cable paths with safety and labeling</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Electrical & Lighting/DG Set Installation.jpg"
                                        alt="DG Set Installation"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>DG Set Installation</span>
                                            <span class="text-primary">Backup</span>
                                        </h5>
                                        <small class="fst-italic">Reliable diesel genset solutions with AMF panels</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Electrical & Lighting/Earthing & Lightning Protection.jpg"
                                        alt="Earthing & Lightning"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Earthing & Lightning Protection</span>
                                            <span class="text-primary">Safety</span>
                                        </h5>
                                        <small class="fst-italic">Safe dissipation of fault and lightning currents</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Plumbing & Drainage -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Plumbing & STP WTP/Water Supply Network.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Water Supply Network">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Water Supply Network</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Optimized piping layout for domestic and flushing water</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Plumbing & STP WTP/Drainage Systems.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Drainage System">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Drainage Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Gravity and pumped systems for basement and terrace drainage</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Plumbing & STP WTP/Rainwater Harvesting.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Rainwater Harvesting">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Rainwater Harvesting</span>
                                            <span class="text-primary">Sustainable</span>
                                        </h5>
                                        <small class="fst-italic">Collection and recharge systems per local regulations</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Plumbing & STP WTP/Sewage Treatment Plant (STP).jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Sewage Treatment Plant">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sewage Treatment Plant (STP)</span>
                                            <span class="text-primary">Environmental</span>
                                        </h5>
                                        <small class="fst-italic">Treated water reuse for landscaping and flushing</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Plumbing & STP WTP/Water Treatment Plant (WTP).jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Water Treatment Plant">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Water Treatment Plant (WTP)</span>
                                            <span class="text-primary">Purity</span>
                                        </h5>
                                        <small class="fst-italic">Filtration and chlorination for safe potable use</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Plumbing & STP WTP/Plumbing Fixtures.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Plumbing Fixtures">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Plumbing Fixtures</span>
                                            <span class="text-primary">Efficiency</span>
                                        </h5>
                                        <small class="fst-italic">Water-saving fittings for malls, offices and washrooms</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Plumbing & STP WTP/Pumping Systems.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Pumping Systems">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pumping Systems</span>
                                            <span class="text-primary">Reliable</span>
                                        </h5>
                                        <small class="fst-italic">Hydropneumatic, sump and overhead tank pump solutions</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Plumbing & STP WTP/Utility Piping.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Utility Piping">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Utility Piping</span>
                                            <span class="text-primary">Occupant Needs</span>
                                        </h5>
                                        <small class="fst-italic">Compressed air, grey water, and other service piping</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Fire Safety -->
                     <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Fire Protection Systems/Fire Alarm Systems.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Fire Alarm Systems">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Alarm Systems</span>
                                            <span class="text-primary">NFPA 72</span>
                                        </h5>
                                        <small class="fst-italic">Zoned, addressable alarms with centralized control panels</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Fire Protection Systems/Sprinkler Networks.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Sprinkler Networks">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sprinkler Networks</span>
                                            <span class="text-primary">NFPA 13</span>
                                        </h5>
                                        <small class="fst-italic">Wet riser and sprinkler systems for multi-floor safety</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Fire Protection Systems/Hydrant Systems.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Hydrant Systems">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hydrant Systems</span>
                                            <span class="text-primary">NBC Compliant</span>
                                        </h5>
                                        <small class="fst-italic">Outdoor and internal hydrant systems for large premises</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Fire Protection Systems/Fire Suppression Systems.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Fire Suppression Systems">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Suppression Systems</span>
                                            <span class="text-primary">FM200 / NOVEC</span>
                                        </h5>
                                        <small class="fst-italic">Clean agent protection for server rooms and control panels</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Fire Protection Systems/Fire Exit Signage & Lighting.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Fire Exit Signage">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Exit Signage & Lighting</span>
                                            <span class="text-primary">IS 1646</span>
                                        </h5>
                                        <small class="fst-italic">Photoluminescent signs and battery backup lighting</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Fire Protection Systems/Fire Pump Room Setup.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Fire Pump Room Setup">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Pump Room Setup</span>
                                            <span class="text-primary">IS/NBC Compliant</span>
                                        </h5>
                                        <small class="fst-italic">Jockey, electric, and diesel pump arrangements</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Fire Protection Systems/Emergency Control Panels.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Emergency Control Panels">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Emergency Control Panels</span>
                                            <span class="text-primary">Fail-Safe</span>
                                        </h5>
                                        <small class="fst-italic">Redundant control for manual override and alarms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Fire Protection Systems/Smoke Management Systems.jpg" style="width: 80px;" class="flex-shrink-0 img-fluid rounded" alt="Smoke Management Systems">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smoke Management Systems</span>
                                            <span class="text-primary">NBC / NFPA 92</span>
                                        </h5>
                                        <small class="fst-italic">Pressurization, exhaust fans and shaft integration</small>
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
                    <h1 class="display-6 mb-4">Your Turnkey MEPF Partner for Commercial Projects</h1>
                    <p class="mb-5">
                        At VCS ThermalAlliance, we bring unmatched expertise in delivering integrated MEPF solutions for commercial real estate—offices, malls, and mixed-use developments. With a commitment to energy efficiency, compliance, and seamless coordination, we help developers execute faster with higher ROI.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Commercial Expertise</h5>
                            </div>
                            <span>Proven success in malls, townships, business parks & SEZs</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Fast-Track Delivery</h5>
                            </div>
                            <span>Agile execution with dedicated on-site teams and project dashboards</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Single Point Responsibility</h5>
                            </div>
                            <span>We take ownership from design to commissioning across all MEPF systems</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">IGBC & NBC Compliance</h5>
                            </div>
                            <span>Green building practices with regulatory adherence & approvals</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Turnkey MEPF Partner for Commercial.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/commercial_real_eastate/Turnkey MEPF Partner for Commercial1.jpg" alt="" style="width: 200px; height: 200px">
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
                    <h1 class="display-4 mb-4">Frequently Asked Questions</h1>
                    <p class="mb-4">
                        Curious about our Commercial MEPF services? Find quick answers to some of the most common questions from developers, architects, and project consultants.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#">Speak to Our MEPF Consultant</a>
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
                                        Q: What MEPF services do you offer for commercial real estate?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We provide integrated HVAC, electrical, plumbing, firefighting, and utility systems for offices, malls, and business parks. All services are compliant with RERA, NBC, and IGBC standards.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Do you support fast-track execution for commercial sites?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we specialize in rapid deployment with dedicated on-site teams and digital tools for tracking, coordination, and approvals.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Can your systems be integrated with Smart BMS?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. We offer BMS integration for HVAC, lighting, and energy monitoring, enabling real-time data and centralized building control.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Are your designs compliant with green building guidelines?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, our solutions align with IGBC and LEED criteria—incorporating energy-efficient equipment, VFDs, EC fans, and sustainable design strategies.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: Do you handle government approvals and NOCs?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, our team manages coordination for electrical safety approvals, fire NOCs, pollution board clearances, and other statutory documentation.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Q: What is your experience with large-scale commercial projects?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We’ve executed MEPF scopes for projects like ACE Business Center, Shivram Tower, and EXL Corporate Tower covering 900+ TR HVAC, electrical, and fire systems.
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