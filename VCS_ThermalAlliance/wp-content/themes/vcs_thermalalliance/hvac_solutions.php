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


    <!-- Introduction Start -->
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
    <!-- Introduction End -->


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


    <!-- Features Start -->
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
    <!-- Features End -->


    <!-- Success Stories Start -->
    <div class="container-fluid success-stories py-5">
        <div class="container py-5">
            <!-- Heading -->
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">Success Stories</h4>
                <h1 class="display-6 mb-4 px-5">Excellence Through Engineering</h1>
                <p class="mb-0">
                    Explore how VCS ThermalAlliance has empowered leading organizations with smart MEPF solutions. Our work reflects precision, performance, and sustainability across industrial, pharmaceutical, research, and commercial projects.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Success Story 1</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Success Story 2</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>Success Story 3</span>
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
                                <!-- Item 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Forbes & Company</h4>
                                        <p class="mb-4">We installed a robust 275 TR air conditioning system and a 180 HP
                                            VRF unit to support the high-demand tooling division, ensuring optimal
                                            temperature control, energy efficiency, and improved working conditions. The
                                            project met industry compliance and enhanced the facility's overall
                                            productivity.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Bridgestone India</h4>
                                        <p class="mb-4">Our team implemented a 200 TR chilled water cooling system
                                            specifically tailored for process cooling applications. This helped stabilize
                                            machinery performance and improved energy efficiency within the plant, meeting
                                            all industrial HVAC performance criteria.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Real Dairy</h4>
                                        <p class="mb-4">We developed an ISO 8 cleanroom HVAC system with laminar airflow and
                                            humidity control, designed for dairy processing. The solution ensured hygienic
                                            operations, energy conservation, and full compliance with food-grade standards.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 4 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">National Institute of Virology</h4>
                                        <p class="mb-4">For the Pashan Lab, we executed retrofitting and commissioning of
                                            high-CFM AHUs. This upgrade enhanced air quality, controlled airflow precision,
                                            and supported sensitive research operations under critical containment
                                            conditions.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <!-- Item 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Thermax Limited</h4>
                                        <p class="mb-4">Executed a full-scale HVAC installation for a clean energy
                                            manufacturing facility. Our scope included air handling systems, ductwork, and
                                            automated controls, all designed for energy efficiency and minimal maintenance
                                            overhead.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Indian Oil Corporation</h4>
                                        <p class="mb-4">We delivered a custom-designed chilled water plant for their testing
                                            laboratory. The system was calibrated to ensure consistent temperatures, reduce
                                            downtime, and improve reliability of oil sample analysis and diagnostics.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">AstraZeneca Pharma</h4>
                                        <p class="mb-4">Installed ISO 7 compliant HVAC systems in production zones of the
                                            pharma plant. The project involved HEPA filtration, cleanroom integration, and
                                            precision control for temperature and particle count.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <!-- Item 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Bharat Electronics</h4>
                                        <p class="mb-4">Delivered a modern HVAC and ducting system for their R&D center.
                                            Designed for precision air control and minimal noise, the installation supported
                                            critical electronic testing operations around the clock.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Tata Power</h4>
                                        <p class="mb-4">Completely revamped their mechanical room with an upgraded HVAC
                                            solution at the thermal power station. Our work boosted energy efficiency and
                                            significantly reduced operational noise levels.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Item 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/feature.jpg"
                                        class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Wockhardt Biotech Park</h4>
                                        <p class="mb-4">Integrated HVAC and BMS for their manufacturing line, achieving
                                            stringent climate control and real-time monitoring. This ensured regulatory
                                            compliance and streamlined biopharma operations.</p>
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
    <!-- Success Stories End -->
    



<?php
// get_sidebar();
get_footer();