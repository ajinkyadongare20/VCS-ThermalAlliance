<?php
/**
 * The main template file
 * Template Name: HVAC Solutions
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
        <h1 class="display-3 text-white animated slideInRight">HVAC Solutions</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb animated slideInRight mb-0">
                <li class="breadcrumb-item"><a href="#">Services</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">HVAC Turnkey Projects & Solutions</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<div class="container-fluid bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-primary mb-3">HVAC Turnkey Projects & Solutionss</h2>
                <p class="lead text-muted">
                    VCS ThermalAlliance, we provide advanced HVAC turnkey solutions for commercial, industrial,
                    pharmaceutical, and institutional projects. From smart system design to final commissioning, our
                    processes are built for energy efficiency, air quality, and regulatory compliance. Our expert team
                    ensures tailored environmental control, sustainable operations, and reliable performance to meet the
                    highest standards across sectors. With a focus on smart automation, remote monitoring, and
                    predictive maintenance.<br><br> we help clients minimize downtime and maximize lifecycle value. Whether it's
                    cleanroom validation, thermal comfort optimization, or green building compliance, our comprehensive
                    solutions are engineered for long-term success and superior indoor environments.
                </p>
            </div>
        </div>
    </div>
</div>


<!-- Projects Start -->
<div class="container-fluid projects bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">HVAC Turnkey Projects & Solutions</h4>
                    <h1 class="display-6 mb-4">Engineered Comfort. Delivered with Precision.</h1>
                    <p class="mb-5">
                        Discover how VCS ThermalAlliance brings expertise and innovation to MEPF projects. From planning
                        to execution, our solutions ensure performance, safety, and long-term efficiency for every
                        industrial and commercial need.
                        We integrate smart technologies and sustainable methods tailored for healthcare, pharma, IT, and
                        cleanroom environments.
                    </p>
                    <ul class="nav">
                        <li class="nav-item bg-white mb-4 w-100">
                            <a class="d-flex align-items-center h4 mb-0 p-3 active" data-bs-toggle="pill"
                                href="#ProjectsTab-1">
                                <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-wind small"></span>
                                </div>
                                <span>Cleanroom HVAC Installations</span>
                            </a>
                        </li>
                        <li class="nav-item bg-white mb-4 w-100">
                            <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                href="#ProjectsTab-2">
                                <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-plug small"></span>
                                </div>
                                <span>Turnkey Electrical Systems</span>
                            </a>
                        </li>
                        <li class="nav-item bg-white mb-4 w-100">
                            <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                href="#ProjectsTab-3">
                                <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-fire-extinguisher small"></span>
                                </div>
                                <span>Fire Safety Implementations</span>
                            </a>
                        </li>
                        <li class="nav-item bg-white mb-4 w-100">
                            <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                href="#ProjectsTab-4">
                                <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                    <span class="fas fa-industry small"></span>
                                </div>
                                <span>HVAC Systems for Industries</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                <div class="tab-content">
                    <div id="ProjectsTab-1" class="tab-pane fade show p-0 active">
                        <div class="projects-item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/service-2.jpg"
                                class="img-fluid about-img-fluid" alt="">
                            <div class="projects-content bg-white p-4">
                                <h4 class="mb-3">Cleanroom HVAC Installations</h4>
                                <p class="mb-4">
                                    VCS ThermalAlliance delivers ultra-clean HVAC systems tailored for pharmaceutical
                                    and semiconductor cleanrooms. Our systems maintain strict temperature, humidity, and
                                    air quality control to ensure contamination-free environments compliant with
                                    international standards and industry protocols.
                                    We also offer chilled water systems, VRF units, fresh air ventilation, ductable
                                    splits, HEPA filtration, and BMS-integrated smart controls for hospitals,
                                    laboratories, ICUs, and other sterile environments requiring precision-engineered
                                    air quality.
                                </p>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div id="ProjectsTab-2" class="tab-pane fade show p-0">
                        <div class="projects-item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg"
                                class="img-fluid about-img-fluid" alt="">
                            <div class="projects-content bg-white p-4">
                                <h4 class="mb-3">Turnkey Electrical Systems</h4>
                                <p class="mb-4">
                                    We offer end-to-end electrical solutions for commercial buildings and industrial
                                    plants. From designing the layout to final installation, our turnkey approach
                                    ensures safe, scalable, and efficient electrical distribution systems tailored to
                                    your project requirements.
                                    Our capabilities include HVAC design with HAP & Revit, OEM coordination, ducting
                                    fabrication, insulation, commissioning, system retrofits, energy audits, AMC
                                    services, remote support, and comprehensive training to maintain system longevity
                                    and compliance.
                                </p>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div id="ProjectsTab-3" class="tab-pane fade show p-0">
                        <div class="projects-item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg"
                                class="img-fluid about-img-fluid" alt="">
                            <div class="projects-content bg-white p-4">
                                <h4 class="mb-3">Fire Safety Implementations</h4>
                                <p class="mb-4">
                                    We engineer and install comprehensive fire protection systems including smoke
                                    detection, sprinklers, alarms, and suppression setups. Our fire safety designs
                                    comply with all safety codes to secure assets and ensure human safety in critical
                                    environments.
                                </p>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div id="ProjectsTab-4" class="tab-pane fade show p-0">
                        <div class="projects-item">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-4.jpg"
                                class="img-fluid about-img-fluid" alt="">
                            <div class="projects-content bg-white p-4">
                                <h4 class="mb-4">HVAC Systems for Industries</h4>
                                <p class="mb-4">
                                    VCS ThermalAlliance specializes in large-scale HVAC systems that regulate air
                                    quality, ventilation, and temperature for manufacturing units. Our solutions are
                                    energy-efficient, sustainable, and designed to support continuous operation with
                                    minimal downtime.
                                </p>
                                <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->






<?php
// get_sidebar();
get_footer();