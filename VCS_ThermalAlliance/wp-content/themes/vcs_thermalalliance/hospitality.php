<?php
/**
 * The main template file
 * Template Name: Hospitality
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
            <h1 class="display-3 text-white animated slideInRight">Hospitality Sector Solutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Hospitality Sector Solutions</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Integrated MEPF Services for Hotels, Resorts & Convention Centers</li>
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
                    <h2 class="text-primary mb-3">Hospitality Sector Solutions</h2>
                    <p class="lead text-muted">
                        In the hospitality industry, guest comfort and operational efficiency go hand-in-hand. 
                        VCS ThermalAlliance offers customized MEPF solutions for hotels, resorts, banquet halls, and 
                        convention centers—ensuring 24/7 performance, energy efficiency, and safety without 
                        compromising design aesthetics.
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
                    <!-- HVAC Systems Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fas fa-snowflake fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Comfort</small>
                                <h6 class="mt-n1 mb-0">HVAC Systems</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Air Quality Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fas fa-wind fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Health</small>
                                <h6 class="mt-n1 mb-0">Air Quality</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Electrical Systems Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Efficiency</small>
                                <h6 class="mt-n1 mb-0">Electrical & Controls</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Plumbing & Fire Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <i class="fas fa-fire-extinguisher fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Safety</small>
                                <h6 class="mt-n1 mb-0">Fire & Plumbing</h6>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                    <!-- HVAC Systems for Hospitality -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/hospitality/HVAC Systems/1.jpg" 
                                        alt="VRF/VRV HVAC"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>VRF/VRV HVAC</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Efficient zoned cooling for hotel rooms and lobbies</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/hospitality/HVAC Systems/2.jpg" 
                                        alt="Chilled Water Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chilled Water Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">AHUs and FCUs for large banquet areas and corridors</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/hospitality/HVAC Systems/3.jpg" 
                                        alt="Ductable Split ACs"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Ductable Split ACs</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Economical solutions for back-of-house and kitchen zones</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/hospitality/HVAC Systems/4.jpg" 
                                        alt="AHU and FCU Design"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>AHU and FCU Design</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Zoned temperature control for ballrooms and halls</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/hospitality/HVAC Systems/5.jpg" 
                                        alt="IAQ Systems"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>IAQ Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Fresh air supply with carbon dioxide control for comfort</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/hospitality/HVAC Systems/6.jpg" 
                                        alt="Energy Efficient HVAC"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Energy Efficient HVAC</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Green building certified HVAC technologies</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/hospitality/HVAC Systems/7.jpg" 
                                        alt="Lobby HVAC Design"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Lobby HVAC Design</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Invisible comfort with ceiling-integrated systems</small>
                                    </div>
                                </div>
                            </div>
                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/hospitality/HVAC Systems/8.jpg" 
                                        alt="Smart Thermostats"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smart Thermostats</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Room-wise climate control for guests and staff</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Air Quality Tab -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Air Quality/1.jpg" alt="Fresh Air Units" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fresh Air Units (FAUs)</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Improves indoor air quality in guest rooms and banquet halls</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Air Quality/2.jpg" alt="Dehumidification Units" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Dehumidification Units</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Maintains comfortable RH levels in indoor areas</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Air Quality/3.jpg" alt="Odor Control Systems" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Odor Control Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Advanced filters in kitchens and toilets for freshness</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Air Quality/4.jpg" alt="UVGI Systems" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>UVGI Air Sterilization</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Germicidal treatment inside ducts for clean air circulation</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Air Quality/5.jpg" alt="Carbon Filters" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Activated Carbon Filters</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Removes odors and harmful gases in common spaces</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Air Quality/6.jpg" alt="HEPA Filtration" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>HEPA Filtration Systems</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Captures airborne particles for allergen-free environment</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Air Quality/7.jpg" alt="Air Quality Sensors" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Air Quality Monitoring Sensors</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Real-time indoor AQI display for transparency & action</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Air Quality/8.jpg" alt="IAQ Dashboard" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>IAQ Digital Dashboard</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Centralized display of air quality trends across property</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Electrical Systems Tab -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Electrical & Controls/1.jpg" alt="LT Panels" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>LT Electrical Panels</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Centralized power distribution with safety protections</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Electrical & Controls/2.jpg" alt="Lighting Automation" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Lighting Automation</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Automated control for energy savings & ambience</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Electrical & Controls/3.jpg" alt="Cable Trays & Raceway" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cable Trays & Raceway</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Neat cable routing to support maintenance & upgrades</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Electrical & Controls/4.jpg" alt="UPS Backup" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>UPS & Backup Power</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Uninterrupted power for critical areas & IT zones</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Electrical & Controls/5.jpg" alt="Earthing & Lightning" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Earthing & Lightning Protection</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Electrical safety through advanced grounding systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Electrical & Controls/6.jpg" alt="Energy Metering" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Energy Metering Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Smart meters with load analytics and alerts</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Electrical & Controls/7.jpg" alt="Solar Power Integration" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Solar Power Integration</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Hybrid grid-ready solar systems for sustainability</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Electrical & Controls/8.jpg" alt="Switches & Fixtures" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Switches & Fixtures</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Aesthetic and durable for guest rooms and lounges</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Plumbing & Fire Tab -->
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Fire & Plumbing/1.jpg" alt="Hot & Cold Water Supply" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hot & Cold Water Supply</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Reticulated plumbing networks for guest bathrooms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Fire & Plumbing/2.jpg" alt="Drainage & Sewage" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Drainage & Sewage Networks</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Efficient discharge systems for kitchens & washrooms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Fire & Plumbing/3.jpg" alt="Rainwater Harvesting" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Rainwater Harvesting</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Eco-friendly collection and reuse systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Fire & Plumbing/4.jpg" alt="Overhead/UG Tanks" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Overhead & Underground Tanks</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Water storage solutions with level automation</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Fire & Plumbing/5.jpg" alt="Fire Hydrant" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Hydrant Systems</span>
                                            <span class="text-primary">NFPA/NBC</span>
                                        </h5>
                                        <small class="fst-italic">External and internal hydrants for full facility coverage</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Fire & Plumbing/6.jpg" alt="Sprinkler Network" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Automatic Sprinkler Network</span>
                                            <span class="text-primary">NFPA 13</span>
                                        </h5>
                                        <small class="fst-italic">Overhead and concealed sprinklers for key zones</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Fire & Plumbing/7.jpg" alt="Fire Pump Room" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Pump Room & Controllers</span>
                                            <span class="text-primary">NFPA/NBC</span>
                                        </h5>
                                        <small class="fst-italic">Main, jockey and diesel pumps with automation</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Fire & Plumbing/8.jpg" alt="Fire Alarm System" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Addressable Fire Alarm Panels</span>
                                            <span class="text-primary">NFPA 72</span>
                                        </h5>
                                        <small class="fst-italic">Central fire detection and evacuation interface</small>
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
                    <h1 class="display-6 mb-4">Expert MEPF Execution for Hospitality Ambience</h1>
                    <p class="mb-5">
                        At VCS ThermalAlliance, we bring together comfort engineering, energy management, and fire safety to elevate guest experience. Our hospitality-centric MEPF approach ensures luxurious ambience, safety compliance, and system reliability in every corner of your hotel, resort, or convention facility.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Luxury-Grade HVAC</h5>
                            </div>
                            <span>Silent and zone-wise air conditioning for lobbies, suites, and banquet areas.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Smart Lighting & Power</h5>
                            </div>
                            <span>Energy-efficient controls and mood lighting for premium guest experiences.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Fire Safety Compliance</h5>
                            </div>
                            <span>Compliant sprinkler, detection, and suppression systems with zero false alarms.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Hot Water & Drainage</h5>
                            </div>
                            <span>Reliable hot water systems, pressure boosting, and odor-free drainage networks.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Expert MEPF Execution.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/hospitality/Expert MEPF Execution1.jpg" alt="" style="width: 200px; height: 200px">
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
                    <h1 class="display-6 mb-4">Frequently Asked Questions – Hospitality MEPF</h1>
                    <p class="mb-4">
                        Below are some common questions clients ask when planning HVAC, Electrical, Plumbing, and Fire systems for hotels, resorts, and convention centers. For any specific query, we’re just a click away.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#">Ask Your Question</a>
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
                                        Q: Can VCS work around hotel occupancy without disturbing guests?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. We offer phased retrofitting and low-noise execution to ensure guest experience is not compromised during upgrades or installations.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Do you provide solutions for centralized hot water systems?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. We design and install solar + heat pump hybrid systems, circulation loops, and pressure-regulated hot water supply across all floors.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Are your systems energy-efficient and IGBC/GRIHA compliant?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. All our MEPF designs focus on energy optimization, use green refrigerants, and comply with national green building codes and certifications.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Can VCS handle both new hospitality projects and renovations?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. We offer turnkey MEPF services for new builds as well as fast-track retrofit upgrades—working closely with hotel operations and PMC teams.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: Do you offer maintenance and AMC support after commissioning?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes. We offer annual maintenance contracts (AMCs), breakdown support, and energy audit services to keep your MEPF systems running reliably.
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