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
                        Manufacturing units require robust, compliant, and cost-effective MEPF systems to support production continuity and safety. VCS ThermalAlliance offers specialized HVAC, electrical, plumbing, utility, and fire protection systems for light and heavy manufacturing industries, ensuring optimized plant performance.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->


    <!-- Manufacturing Solutions Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Solutions We Provide</h1>
            </div>

            <!-- Tab Navigation -->
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    <!-- Process Cooling Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                            <i class="fas fa-snowflake fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Cooling</small>
                                <h6 class="mt-n1 mb-0">Process Cooling</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Fire Safety Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                            <i class="fas fa-fire-extinguisher fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Safety</small>
                                <h6 class="mt-n1 mb-0">Fire Safety</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Electrical Systems Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-3">
                            <i class="fas fa-bolt fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Power</small>
                                <h6 class="mt-n1 mb-0">Electrical Systems</h6>
                            </div>
                        </a>
                    </li>

                    <!-- Utility Piping Tab -->
                    <li class="nav-item">
                        <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                            <i class="fas fa-tint fa-2x text-primary"></i>
                            <div class="ps-3">
                                <small class="text-body">Utilities</small>
                                <h6 class="mt-n1 mb-0">Utility Piping</h6>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content">
                   <!-- Tab 1: Process Cooling Tab -->
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Process Cooling/1.jpg" alt="Chilled Water Systems" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Chilled Water Systems</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Centralized cooling for production environments</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Process Cooling/2.jpg" alt="AHU Units" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Industrial AHU Units</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Heavy-duty AHUs for clean and controlled airflow</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Process Cooling/3.jpg" alt="Exhaust Ventilation" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Exhaust Ventilation</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">High-capacity systems for fume and heat removal</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Process Cooling/4.jpg" alt="Cooling Towers" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Cooling Towers</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Open and closed loop systems for industrial use</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Process Cooling/5.jpg" alt="Evaporative Cooling" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Evaporative Cooling Units</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Low-energy air cooling for large industrial halls</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Process Cooling/6.jpg" alt="Hydronic Piping" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hydronic Piping</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Efficient chilled water distribution piping networks</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Process Cooling/7.jpg" alt="DX Systems" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Direct Expansion (DX) Systems</span>
                                            <span class="text-primary">★★★★☆</span>
                                        </h5>
                                        <small class="fst-italic">Compact air conditioning systems for control rooms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Process Cooling/8.jpg" alt="VFD Fans" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>VFD Controlled Fans</span>
                                            <span class="text-primary">★★★★★</span>
                                        </h5>
                                        <small class="fst-italic">Energy-efficient fan speed control in large ducts</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 2: Fire Safety Tab -->
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Fire & Safety/1.jpg" alt="Hydrant System" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Hydrant System</span>
                                            <span class="text-primary">NBC/NFPA</span>
                                        </h5>
                                        <small class="fst-italic">Ring main system with wall & yard hydrants</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Fire & Safety/2.jpg" alt="Fire Alarm" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Alarm Systems</span>
                                            <span class="text-primary">NFPA 72</span>
                                        </h5>
                                        <small class="fst-italic">Addressable fire detection with audio-visual alerts</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Fire & Safety/3.jpg" alt="Sprinkler Network" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Sprinkler Network</span>
                                            <span class="text-primary">NFPA 13</span>
                                        </h5>
                                        <small class="fst-italic">Automatic sprinkler coverage for process areas</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Fire & Safety/4.jpg" alt="Fire Pumps" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Pumps</span>
                                            <span class="text-primary">UL/FM Certified</span>
                                        </h5>
                                        <small class="fst-italic">Diesel & electric pump sets with jockey backup</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Fire & Safety/5.jpg" alt="Suppression Systems" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Suppression Systems</span>
                                            <span class="text-primary">Clean Agent / CO2</span>
                                        </h5>
                                        <small class="fst-italic">For transformer yards and server rooms</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Fire & Safety/6.jpg" alt="Emergency Lighting" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Emergency Lighting</span>
                                            <span class="text-primary">NBC Compliant</span>
                                        </h5>
                                        <small class="fst-italic">Auto-illuminated exit path systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Fire & Safety/7.jpg" alt="Smoke Control Systems" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Smoke Control Systems</span>
                                            <span class="text-primary">NFPA 92</span>
                                        </h5>
                                        <small class="fst-italic">Mechanical exhaust and stairwell pressurization</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Fire & Safety/8.jpg" alt="Fire Doors" style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Fire Rated Doors</span>
                                            <span class="text-primary">2-Hour Rated</span>
                                        </h5>
                                        <small class="fst-italic">Compartmentation with certified fire resistance</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 3: Electrical Systems -->
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Electrical Systems/1.jpg" 
                                        alt="HT & LT Panels"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>HT & LT Panels</span>
                                            <span class="text-primary">IS/IEC</span>
                                        </h5>
                                        <small class="fst-italic">Power distribution for plant operations</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Electrical Systems/2.jpg" 
                                        alt="Busbar Trunking"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Busbar Trunking</span>
                                            <span class="text-primary">IS 8623</span>
                                        </h5>
                                        <small class="fst-italic">Compact & efficient power transport</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Electrical Systems/3.jpg" 
                                        alt="Transformer Yard"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Transformer Yard</span>
                                            <span class="text-primary">IS/IEC 60076</span>
                                        </h5>
                                        <small class="fst-italic">Outdoor and indoor transformer setup</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Electrical Systems/4.jpg" 
                                        alt="Cable Management"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Industrial Cabling</span>
                                            <span class="text-primary">IS 7098</span>
                                        </h5>
                                        <small class="fst-italic">LV/MV power cable laying with tray & ducting</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Electrical Systems/5.jpg" 
                                        alt="Lighting & Fixtures"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Factory Lighting</span>
                                            <span class="text-primary">IS 3646</span>
                                        </h5>
                                        <small class="fst-italic">Energy-efficient LED and emergency lighting</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Electrical Systems/6.jpg" 
                                        alt="UPS & Inverters"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>UPS Systems</span>
                                            <span class="text-primary">IEC 62040</span>
                                        </h5>
                                        <small class="fst-italic">Power backup for automation and labs</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Electrical Systems/7.jpg" 
                                        alt="Load Management"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Load Management Systems</span>
                                            <span class="text-primary">IEEE 519</span>
                                        </h5>
                                        <small class="fst-italic">Energy audit and load balancing systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Electrical Systems/8.jpg" 
                                        alt="Earthing & Lightning"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Earthing & Lightning</span>
                                            <span class="text-primary">IS 3043</span>
                                        </h5>
                                        <small class="fst-italic">Plant-wide protection from surges and faults</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tab 4: Utility Systems -->
                    <div id="tab-4" class="tab-pane fade show p-0">
                        <div class="row g-4">
                            <!-- Item 1 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Utility Piping/1.jpg" 
                                        alt="Utility Piping"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Utility Piping</span>
                                            <span class="text-primary">ISO 9001</span>
                                        </h5>
                                        <small class="fst-italic">Steam, RO, DM water and compressed air lines</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Utility Piping/2.jpg" 
                                        alt="Effluent Treatment"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Effluent Treatment Systems</span>
                                            <span class="text-primary">CPCB Norms</span>
                                        </h5>
                                        <small class="fst-italic">ETPs, STPs and Zero Liquid Discharge systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Utility Piping/3.jpg" 
                                        alt="Industrial Drainage"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Industrial Drainage</span>
                                            <span class="text-primary">NBC</span>
                                        </h5>
                                        <small class="fst-italic">Drainage layout for process and storm water</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Utility Piping/4.jpg" 
                                        alt="Water Pumping"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Pumping Systems</span>
                                            <span class="text-primary">IS 9079</span>
                                        </h5>
                                        <small class="fst-italic">Booster and utility pumps for plant demands</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Utility Piping/5.jpg" 
                                        alt="Compressed Air"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Compressed Air Systems</span>
                                            <span class="text-primary">ISO 1217</span>
                                        </h5>
                                        <small class="fst-italic">Oil-free and lubricated systems for production lines</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Utility Piping/6.jpg" 
                                        alt="Steam Distribution"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Steam Distribution</span>
                                            <span class="text-primary">IBR</span>
                                        </h5>
                                        <small class="fst-italic">Piping and traps for industrial steam lines</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Utility Piping/7.jpg" 
                                        alt="Water Filtration"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Water Filtration</span>
                                            <span class="text-primary">ISO 14001</span>
                                        </h5>
                                        <small class="fst-italic">Sand, carbon and RO filtration systems</small>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="col-lg-6">
                                <div class="d-flex align-items-center">
                                    <img class="flex-shrink-0 img-fluid rounded" 
                                        src="<?php bloginfo('template_directory'); ?>/img/manufacturing/Utility Piping/8.jpg" 
                                        alt="Utility BMS"
                                        style="width: 80px;">
                                    <div class="w-100 d-flex flex-column text-start ps-4">
                                        <h5 class="d-flex justify-content-between border-bottom pb-2">
                                            <span>Utility Monitoring BMS</span>
                                            <span class="text-primary">IoT Enabled</span>
                                        </h5>
                                        <small class="fst-italic">Smart dashboards for water, air & energy utilities</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Manufacturing Solutions End -->


    <!-- Why Choose US Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">Smart MEPF Integration for Industrial Excellence</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance brings deep expertise in delivering high-performance MEPF systems customized for the manufacturing sector. From heavy engineering units to clean assembly lines, our solutions ensure safety, energy-efficiency, uptime, and regulatory compliance.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Multi-Disciplinary Team</h5>
                            </div>
                            <span>Engineers skilled in HVAC, Fire, Electrical, Utility, and Control Systems.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Plant-Centric Design</h5>
                            </div>
                            <span>Layout-optimized MEPF planning that aligns with production machinery and safety paths.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Zero Downtime Execution</h5>
                            </div>
                            <span>We specialize in greenfield setups as well as live factory upgrades with phased cutovers.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Standards Compliant</h5>
                            </div>
                            <span>ISO, NBC, IGBC & safety codes implemented across all engineering disciplines.</span>
                        </div>
                    </div>
                </div>
               <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/MEPF Integration for Industrial Excellence.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/manufacturing/MEPF Integration for Industrial Excellence1.jpg" alt="" style="width: 200px; height: 200px">
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
                    <h4 class="text-primary">Frequently Asked</h4>
                    <h1 class="display-4 mb-4">MEPF Questions for Manufacturing Facilities</h1>
                    <p class="mb-4">
                        Explore answers to common queries related to our manufacturing-specific HVAC, electrical, fire, and utility services. Have a unique requirement? Reach out to our engineering team.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#">Submit a Custom Query</a>
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
                                        Q: Do you handle both greenfield and brownfield projects?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we specialize in both new factory setups (greenfield) and phased retrofits/upgrades in live manufacturing environments.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: Are your MEPF systems compliant with ISO, IGBC, or NBC standards?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. All systems are designed to meet applicable ISO standards, National Building Codes, and Green Building norms (IGBC/LEED) where required.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Can you provide FAT and documentation support?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we provide Factory Acceptance Testing (FAT), commissioning protocols, and complete as-built documentation for regulatory and internal use.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Do you integrate your systems with existing plant SCADA/BMS?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, our systems can be integrated with plant-level SCADA, EMS, or Building Management Systems for unified monitoring and control.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: How do you minimize downtime during upgrades?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We plan phased cutovers during shift-offs or holidays, and offer temporary bypass systems to maintain uptime during MEPF retrofits.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Q: Can you help with energy audits and process optimization?
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we offer post-installation energy audits and MEPF performance tuning to improve operational efficiency and reduce costs.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 7 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingSeven">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Q: Do you offer Annual Maintenance Contracts (AMC)?
                                    </button>
                                </h2>
                                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, our AMCs cover preventive maintenance, breakdown response, and condition monitoring for HVAC, electrical, and utility systems.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 8 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingEight">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        Q: What industries do you serve under manufacturing?
                                    </button>
                                </h2>
                                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We serve automotive, food processing, heavy machinery, textiles, packaging, chemical, pharma, and electronic manufacturing units.
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