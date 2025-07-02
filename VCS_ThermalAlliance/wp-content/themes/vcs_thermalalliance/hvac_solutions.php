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
                    <h2 class="text-primary mb-3">HVAC Turnkey Projects & Solutions</h2>
                    <p class="lead text-muted">
                         VCS ThermalAlliance, we specialize in delivering end-to-end HVAC turnkey solutions designed for commercial, industrial, pharmaceutical, and institutional environments. Our services cover every stage—from precise system design to final commissioning—ensuring optimal energy efficiency, superior indoor air quality, and strict regulatory compliance. With a commitment to innovation and excellence, our expert team integrates advanced technologies to create sustainable, high-performance climate control systems that meet the most demanding operational and environmental standards.
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
                            At VCS ThermalAlliance, we provide end-to-end HVAC solutions tailored for pharmaceutical, industrial, commercial, and institutional environments. From detailed system design to commissioning, we integrate smart controls, cleanroom engineering, and energy-efficient technologies. Whether you're building a new facility or upgrading an existing one, our turnkey services ensure regulatory compliance, indoor air quality, and operational excellence.
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
                                    <span>Central Plant & VRF Systems</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                    href="#ProjectsTab-3">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-fire-extinguisher small"></span>
                                    </div>
                                    <span>Smart BMS & IoT Integration</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                    href="#ProjectsTab-4">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-industry small"></span>
                                    </div>
                                    <span>HVAC Specialized Industries</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="tab-content">
                        <!-- Tab 1 -->
                        <div id="ProjectsTab-1" class="tab-pane fade show p-0 active">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Cleanroom HVAC Installations.jpg"
                                    class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Cleanroom HVAC Installations</h4>
                                    <p class="mb-4">
                                        VCS ThermalAlliance delivers ISO 14644 and NABH-compliant HVAC systems for cleanrooms, laboratories, and medical environments. We design and install complete solutions that include HEPA filtration, differential pressure zones, laminar airflow, chilled water systems, and humidity control. Our systems ensure ultra-clean, contamination-free spaces for pharmaceutical manufacturing, biotech labs, and operating theatres. Integrated BMS and IoT controls offer real-time monitoring and alerts to maintain critical parameters. From design to commissioning, we provide end-to-end execution with precision and regulatory adherence.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 2 -->
                        <div id="ProjectsTab-2" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Central Plant & VRF Systems.jpg"
                                    class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Central Plant & VRF Systems</h4>
                                    <p class="mb-4">
                                        We specialize in the design and execution of chilled water plants and VRF/VRV systems for adaptive cooling in diverse environments. Whether air-cooled or water-cooled, our central plants are optimized for energy efficiency, scalability, and ease of maintenance. VRF systems enable zone-wise temperature control in commercial offices, IT campuses, and institutional spaces. With expert OEM coordination, duct and piping layout, insulation, and commissioning, we deliver solutions that reduce energy costs and ensure comfort across all zones. 
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 3 -->
                        <div id="ProjectsTab-3" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Smart BMS & IoT Integration.jpg"
                                    class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Smart BMS & IoT Integration</h4>
                                    <p class="mb-4">
                                        Our HVAC projects come equipped with smart Building Management Systems (BMS) and IoT integration to enable automation, efficiency, and remote accessibility. These systems allow facility managers to monitor temperature, airflow, equipment performance, and energy usage in real-time. Custom dashboards and analytics tools offer actionable insights for preventive maintenance, while alerts and alarms reduce downtime. We deliver seamless integration with HVAC, lighting, and access control for holistic smart building solutions across hospitals, data centers, and corporate campuses.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 4 -->
                        <div id="ProjectsTab-4" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/HVAC for Specialized Industries.jpg"
                                    class="img-fluid about-img-fluid" alt="">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-4">HVAC for Specialized Industries</h4>
                                    <p class="mb-4">
                                        Our industrial HVAC systems are purpose-built to serve the unique requirements of sectors like pharma, biotech, clean manufacturing, dairy, electronics, and data centers. These solutions ensure controlled temperature, dust-free environments, constant airflow, and low power consumption. With expertise in retrofitting legacy systems, we help modernize existing setups with energy-efficient upgrades. We follow ISO, NABH, and FDA standards where applicable, offering complete support from heat load design to performance validation and annual maintenance contracts for long-term reliability.
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


    <!-- Why Choose US Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                    <h1 class="display-6 mb-4">Trusted Experts in Turnkey HVAC Engineering</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance delivers reliable, energy-efficient HVAC systems tailored for mission-critical environments. From concept to commissioning, our certified team integrates advanced tools, BMS-IoT connectivity, and sustainable practices to ensure superior air quality, operational uptime, and long-term savings across pharmaceutical, industrial, and institutional projects.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Certified Engineering Team</h5>
                            </div>
                            <span>Our team is certified by ISHRAE, ASHRAE, and ICP, ensuring compliance and deep technical capability.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">In-House Digital Tools</h5>
                            </div>
                            <span>We deploy proprietary software for heat load analysis, duct design, and live project dashboards.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Smart BMS Integration</h5>
                            </div>
                            <span>Our cloud-enabled BMS systems allow remote control, real-time analytics, and fault detection.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Sustainable Engineering</h5>
                            </div>
                            <span>We use eco-friendly refrigerants, VFDs, EC fans, and energy recovery units to lower your carbon footprint.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Trusted Experts in Turnkey HVAC Engineering.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose US End -->


    <!-- Success Stories Start -->
    <div class="container-fluid success-stories py-5">
        <div class="container py-5">
            <!-- Heading -->
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">Success Stories</h4>
                <h1 class="display-6 mb-4 px-5">Excellence Through Engineering</h1>
                <p class="mb-0">
                    Explore how VCS ThermalAlliance has empowered industries with precision HVAC solutions—ensuring energy efficiency, compliance, and optimal performance across sectors.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Healthcare & Pharma</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Industrial & Manufacturing</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>Commercial & Institutional</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Tab Content -->
                <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="tab-content">
                        <!-- Tab 1: Healthcare & Pharma -->
                        <div id="SuccessTab-1" class="tab-pane fade show p-0 active">
                            <div class="success-carousel owl-carousel">
                                <!-- Story 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Hospital HVAC Installation">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Apollo Multispecialty Hospital</h4>
                                        <p class="mb-4">Designed and installed a **NABH-compliant HVAC system** for 12 OT suites, ensuring sterility, precise air balancing, and 24/7 redundancy. Achieved 30% energy savings with VFD-driven AHUs and HEPA filtration.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Pharma Cleanroom">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Sun Pharma (Vadodara Unit)</h4>
                                        <p class="mb-4">Deployed an **ISO Class 7 cleanroom HVAC system** with laminar airflow for tablet manufacturing. Integrated BMS for real-time particle monitoring, maintaining <1% deviation in temperature/humidity.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Virology Lab">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">National Virology Institute (Pune)</h4>
                                        <p class="mb-4">Retrofitted **high-CFM AHUs** for BSL-3 labs, ensuring negative pressure containment and 100% air changes/hour. Compliant with WHO biosafety guidelines for airborne pathogen research.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 4 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Biotech Facility">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Biocon Biologics (Bangalore)</h4>
                                        <p class="mb-4">Implemented a **Grade C/D cleanroom HVAC network** for monoclonal antibody production. Features included airlocks, cascade pressure control, and emergency exhaust systems.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2: Industrial & Manufacturing -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <!-- Story 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Chiller Plant">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Tata Steel (Jamshedpur)</h4>
                                        <p class="mb-4">Installed a **500 TR water-cooled chiller plant** for process cooling in rolling mills. Reduced downtime by 22% with predictive maintenance via IoT-enabled BMS.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Automotive Factory">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Mahindra Electric Vehicle Plant</h4>
                                        <p class="mb-4">Designed a **dust-suppression HVAC system** for battery assembly lines, maintaining <50 µg/m³ particulate levels. Used EC fans for 35% energy reduction.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Dairy Processing">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Amul Dairy (Gujarat)</h4>
                                        <p class="mb-4">Created an **ISO 8 hygienic HVAC system** for milk packaging units with humidity control (±2% RH) and antimicrobial duct coatings. Compliant with FSSAI standards.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 4 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Textile Mill">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Arvind Mills (Ahmedabad)</h4>
                                        <p class="mb-4">Upgraded legacy HVAC to a **centralized VRF system** across 200,000 sq. ft. weaving units. Achieved 40% lower energy costs with smart zoning.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3: Commercial & Institutional -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <!-- Story 1 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Data Center">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">CtrlS Hyperscale Data Center</h4>
                                        <p class="mb-4">Engineered a **precision cooling system** with N+1 redundancy for 5 MW server halls. Maintains 22°C±0.5°C with PUE <1.5 using free cooling technology.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 2 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Shopping Mall">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Phoenix Marketcity (Mumbai)</h4>
                                        <p class="mb-4">Deployed a **2,000 TR district cooling system** for the mall’s retail spaces. Uses AI-driven load optimization, cutting peak demand charges by 18%.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 3 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="Corporate Office">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">HDFC Bank Headquarters</h4>
                                        <p class="mb-4">Implemented **VRF systems with CO2 sensors** across 15 floors. Achieved IGBC Platinum certification through energy recovery ventilators (ERVs).</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <!-- Story 4 -->
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/hvac_solution/Certified Engineering Team.jpg" class="img-fluid success-img-tab" alt="University Campus">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">IIT Bombay (New Lecture Complex)</h4>
                                        <p class="mb-4">Installed **ducted splits with IAQ monitoring** for 50 classrooms. Reduced ventilation noise to <35 dB(A) while ensuring 30% fresh air circulation.</p>
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