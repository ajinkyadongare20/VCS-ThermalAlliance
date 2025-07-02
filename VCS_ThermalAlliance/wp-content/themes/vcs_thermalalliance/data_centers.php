<?php
/**
 * The main template file
 * Template Name: Data Centers
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
            <h1 class="display-3 text-white animated slideInRight">Data Center Solutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Data Center Solutions</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Precision MEPF Systems for Data Centers & Server Rooms</li>
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
                    <h2 class="text-primary mb-3">Data Center Solutions</h2>
                    <p class="lead text-muted">
                        Downtime is not an option for data centers. At VCS ThermalAlliance, we specialize in designing and delivering highly reliable HVAC, electrical, fire safety, and plumbing systems for mission-critical data infrastructure. Our solutions are tailored to support uptime, scalability, and thermal precision across Tier I to Tier IV environments—ensuring your servers stay cool, secure, and continuously powered.
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

                    <!-- Tab 1: Precision HVAC -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fas fa-temperature-low fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Climate</small>
                                <h6 class="mt-n1 mb-0">Precision HVAC</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 2: Fire Suppression -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fas fa-fire-extinguisher fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Safety</small>
                                <h6 class="mt-n1 mb-0">Fire Suppression</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 3: Electrical Infrastructure -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Power</small>
                                <h6 class="mt-n1 mb-0">Electrical Infrastructure</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Tab 4: Data Center Utilities -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <i class="fas fa-tint fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Utility</small>
                                <h6 class="mt-n1 mb-0">DC Utilities</h6>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                   <!-- Tab 1: Precision HVAC for Data Centers -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <!-- Precision CCUs -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Precision HVAC/1.jpg"
                                        alt="Close Control Units"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Close Control Units (CCUs)</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Precision temperature and humidity control for server environments</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Redundant HVAC Systems -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Precision HVAC/2.jpg"
                                        alt="Redundant HVAC"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Redundant HVAC Systems</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">N+1 or 2N cooling configurations to ensure uptime</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Hot/Cold Aisle -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Precision HVAC/3.jpg"
                                        alt="Hot/Cold Aisle"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hot/Cold Aisle Containment</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Energy-efficient airflow management</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Airflow Management -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Precision HVAC/4.jpg"
                                        alt="Air Balancing"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Server Room Air Balancing</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Optimized distribution for heat-sensitive zones</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Raised Floor HVAC -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Precision HVAC/5.jpg"
                                        alt="Raised Floor HVAC"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Underfloor HVAC</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Cooling via raised flooring and cable tray routing</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Smart HVAC Controls -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Precision HVAC/6.jpg"
                                        alt="Smart BMS"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smart BMS HVAC Controls</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Real-time monitoring and automation</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Energy Recovery Units -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Precision HVAC/7.jpg"
                                        alt="Energy Recovery Units"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Energy Recovery Units</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Efficient energy usage and thermal optimization</small>
                                    </div>
                                </div>
                            </div>

                            <!-- CFD Modeled Air Design -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Precision HVAC/8.jpg"
                                        alt="CFD Air Design"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>CFD-Modeled Cooling</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Computational Fluid Dynamics for airflow simulation</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Fire Suppression Systems -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Fire Alarm System -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Fire Suppression/1.jpg"
                                        alt="Fire Alarm"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Addressable Fire Alarm</span>
                                            <span class="text-primary">NFPA 72</span>
                                        </h5>
                                        <small class="fst-italic">Intelligent panel-based detection systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Clean Agent Suppression -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Fire Suppression/2.jpg"
                                        alt="Clean Agent"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Clean Agent Systems</span>
                                            <span class="text-primary">FM-200 / Novec</span>
                                        </h5>
                                        <small class="fst-italic">Non-water-based suppression for sensitive electronics</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Smoke Detection -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Fire Suppression/3.jpg"
                                        alt="Smoke Detection"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Early Smoke Detection</span>
                                            <span class="text-primary">VESDA</span>
                                        </h5>
                                        <small class="fst-italic">Very early warning aspirating smoke detection systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Gas Leak Detection -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Fire Suppression/4.jpg"
                                        alt="Gas Leak Detection"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Gas Leak Detection</span>
                                            <span class="text-primary">NFPA Compliant</span>
                                        </h5>
                                        <small class="fst-italic">Detection of leaks from suppression gas lines or systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Fire Doors -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Fire Suppression/5.jpg"
                                        alt="Fire Doors"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Rated Doors</span>
                                            <span class="text-primary">NBC</span>
                                        </h5>
                                        <small class="fst-italic">Compartmentalization and containment for safety</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Sprinkler Systems -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Fire Suppression/6.jpg"
                                        alt="Sprinkler"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pre-Action Sprinkler Systems</span>
                                            <span class="text-primary">Double Interlock</span>
                                        </h5>
                                        <small class="fst-italic">Water discharge only upon dual detection—ideal for server rooms</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Electrical Infrastructure -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- UPS Systems -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Electrical Infrastructure/1.jpg"
                                        alt="UPS Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>UPS Systems</span>
                                            <span class="text-primary">Online/Modular</span>
                                        </h5>
                                        <small class="fst-italic">Uninterrupted power supply for critical IT loads</small>
                                    </div>
                                </div>
                            </div>

                            <!-- LT Panels & PDUs -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Electrical Infrastructure/2.jpg"
                                        alt="LT Panels & PDUs"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>LT Panels & PDUs</span>
                                            <span class="text-primary">Custom Built</span>
                                        </h5>
                                        <small class="fst-italic">Safe and redundant power distribution systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Cable Management -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Electrical Infrastructure/3.jpg"
                                        alt="Cable Management"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cable Trays & Raceway</span>
                                            <span class="text-primary">Structured</span>
                                        </h5>
                                        <small class="fst-italic">Organized routing for electrical and data cables</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Redundant Power Paths -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Electrical Infrastructure/4.jpg"
                                        alt="Redundant Power"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Dual Power Feeds</span>
                                            <span class="text-primary">2N/2N+1</span>
                                        </h5>
                                        <small class="fst-italic">Independent power lines to ensure failover support</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Earth Pits & Earthing -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Electrical Infrastructure/5.jpg"
                                        alt="Earthing Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Earthing & Bonding</span>
                                            <span class="text-primary">IEEE/IS</span>
                                        </h5>
                                        <small class="fst-italic">High-resistance grounding and safety systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Intelligent Metering -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/Electrical Infrastructure/6.jpg"
                                        alt="Power Monitoring"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smart Energy Monitoring</span>
                                            <span class="text-primary">IoT/BMS</span>
                                        </h5>
                                        <small class="fst-italic">Real-time power analytics and usage dashboards</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Data Center Utilities -->
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Water Leak Detection -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/DC Utilities/1.jpg"
                                        alt="Water Leak Detection"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Water Leak Detection</span>
                                            <span class="text-primary">Sensor-Based</span>
                                        </h5>
                                        <small class="fst-italic">Sensor cables and alert systems for floor leaks</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Plumbing & Drainage -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/DC Utilities/2.jpg"
                                        alt="Drainage Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Drainage Systems</span>
                                            <span class="text-primary">PVC/SWR</span>
                                        </h5>
                                        <small class="fst-italic">Efficient water disposal for HVAC and utilities</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Utility Piping -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/DC Utilities/3.jpg"
                                        alt="Utility Piping"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chilled Water Piping</span>
                                            <span class="text-primary">HDPE/GI</span>
                                        </h5>
                                        <small class="fst-italic">Insulated pipework for precision cooling loops</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Pumps & Motors -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/DC Utilities/4.jpg"
                                        alt="Pumping Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Utility Pumps</span>
                                            <span class="text-primary">Vertical/Inline</span>
                                        </h5>
                                        <small class="fst-italic">Chilled water, sump and booster pumping systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Condensate Drain Systems -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/DC Utilities/5.jpg"
                                        alt="Condensate Drainage"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Condensate Drainage</span>
                                            <span class="text-primary">PVC/SWR</span>
                                        </h5>
                                        <small class="fst-italic">For indoor units, CRACs and AHUs</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Utility BMS -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded"
                                        src="<?php bloginfo('template_directory'); ?>/img/data_centers/DC Utilities/6.jpg"
                                        alt="BMS Integration"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>BMS Utility Integration</span>
                                            <span class="text-primary">IoT-Based</span>
                                        </h5>
                                        <small class="fst-italic">Centralized monitoring of all plumbing and utility systems</small>
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
                    <h6 class="text-primary text-uppercase mb-2">Why Choose VCS?</h6>
                    <h1 class="display-6 mb-4">Mission-Critical Expertise for High-Availability Systems</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance brings end-to-end MEPF integration for data centers, engineered to meet uptime, redundancy, and energy efficiency goals. From edge sites to Tier IV facilities, our systems are trusted by IT leaders for secure, scalable performance.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Tier-Ready Design</h5>
                            </div>
                            <span>Uptime Institute-aligned engineering for Tier I to Tier IV reliability.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Integrated MEPF</h5>
                            </div>
                            <span>One partner for HVAC, Electrical, Fire & Utility Systems with centralized accountability.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">CFD & Thermal Modeling</h5>
                            </div>
                            <span>Advanced airflow simulations for hotspot prevention and cooling optimization.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Smart Monitoring</h5>
                            </div>
                            <span>BMS/SCADA integration for real-time alerts, performance trends, and 24x7 visibility.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/data_centers/Mission-Critical Expertise1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/data_centers/Mission-Critical Expertise.jpg" alt="" style="width: 200px; height: 200px">
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
                    <h4 class="text-primary">Frequently Asked Questions</h4>
                    <h1 class="display-5 mb-4">Data Center MEPF FAQs</h1>
                    <p class="mb-4">
                        Got questions about building or upgrading your data center infrastructure? Here are the most common queries we answer from IT heads, facility managers, and project consultants.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#contact">Talk to an Expert</a>
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
                                        Q: Do you support Tier certification requirements?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we offer MEPF design aligned with Uptime Institute’s Tier I-IV guidelines and assist with documentation for Tier Certification audits.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: How do you ensure zero downtime in HVAC design?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We deploy N+1 or 2N redundancy in chillers and Close Control Units (CCUs), supported by real-time monitoring through BMS integration.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Can your systems handle high-density rack cooling?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. We design precision cooling with hot aisle/cold aisle containment, in-row cooling, and CFD-validated airflow control.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: What fire protection systems are recommended for server rooms?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: For mission-critical areas, we use clean agent systems like FM-200 and Novec 1230 along with smoke detection, alarm, and fire-rated construction in line with NFPA standards.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: Do you provide maintenance and support after installation?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we offer AMC and on-call support models with 24x7 remote monitoring for critical infrastructure across HVAC, electrical, and fire systems.
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Accordion -->
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