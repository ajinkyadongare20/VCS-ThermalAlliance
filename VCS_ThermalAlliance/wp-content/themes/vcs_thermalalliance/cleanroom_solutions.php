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
            <h1 class="display-3 text-white animated slideInRight">Cleanroom Solutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cleanroom Design & Build Services</li>
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
                    <h2 class="text-primary mb-3">Cleanroom Design & Build Services</h2>
                    <p class="lead text-muted">
                        At VCS ThermalAlliance, we specialize in designing and executing turnkey modular cleanroom solutions for pharmaceutical, biotech, healthcare, electronics, and food industries. Our cleanrooms are engineered to meet international standards like ISO 14644 and cGMP, with precision HVAC systems, HEPA filtration, pressure gradients, and real-time monitoring via BMS. From panel-based modular interiors to air handling systems and protocol validations, we ensure contamination control and regulatory compliance across all classifications—from ISO Class 5 to Class 8. Whether you're building new facilities or retrofitting existing ones, our in-house team provides layout planning, URS documentation, validation protocols, and post-handover maintenance, ensuring a fully integrated and future-ready controlled environment.
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
                        <h4 class="text-primary">Cleanroom Project Expertise</h4>
                        <h1 class="display-6 mb-4">Controlled Environments. Guaranteed Compliance.</h1>
                        <p class="mb-5">
                            VCS ThermalAlliance specializes in end-to-end modular cleanroom services—from architectural layout and ISO classification to HVAC integration and validation protocols. Our projects meet the demands of pharmaceutical, biotech, healthcare, and electronic sectors by achieving particle control, pressure zoning, and hygienic design as per international standards. With BMS integration and sustainable material use, we ensure reliability and compliance at every phase.
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
                                        <span class="fas fa-th-large small"></span>
                                    </div>
                                    <span>Modular Cleanroom Construction</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                    href="#ProjectsTab-3">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-file-alt small"></span>
                                    </div>
                                    <span>Validation & Compliance Support</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                    href="#ProjectsTab-4">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-industry small"></span>
                                    </div>
                                    <span>Industry-Specific Solutions</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="tab-content">
                        <div id="ProjectsTab-1" class="tab-pane fade show p-0 active">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Cleanroom HVAC Installations.jpg"
                                    class="img-fluid about-img-fluid" alt="Cleanroom HVAC">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Cleanroom HVAC Installations</h4>
                                    <p class="mb-4">
                                        VCS ThermalAlliance offers highly efficient HVAC installations tailored specifically for modular cleanroom environments. Our systems are designed to deliver ISO 14644-classified air quality with precise temperature, humidity, and pressure controls. We integrate HEPA filters, terminal boxes, ducted AHUs, and VFD-enabled fans to ensure optimal airflow with minimal contamination risk. From laminar airflow setups to air balancing and AHU zoning, our HVAC systems are engineered for pharmaceutical, biotech, electronics, and healthcare cleanrooms. These systems support Class 100 to Class 100,000 operations and are fully integrated with BMS for real-time performance monitoring and control. We ensure compliance with cGMP, WHO-GMP, and national fire and safety codes. Whether for new builds or retrofit projects, our HVAC installations ensure long-term performance, energy savings, and regulatory confidence.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div id="ProjectsTab-2" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Modular Cleanroom Construction.jpg"
                                    class="img-fluid about-img-fluid" alt="Cleanroom Construction">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Modular Cleanroom Construction</h4>
                                    <p class="mb-4">
                                        Our turnkey modular cleanroom construction services include the design, supply, and installation of PUF, EPS, and Rockwool partition panels, along with cleanroom-grade ceilings, walls, view panels, and doors. We ensure seamless integration of cleanroom architecture with HVAC systems, electrical utilities, lighting, and flooring. From ISO Class 8 down to ISO Class 5, we create clean spaces that meet stringent regulatory standards. Our in-house team uses pre-engineered modular solutions to allow for faster deployment and easy expansion or retrofitting. With a focus on hygiene, particle containment, and ergonomic utility layout, our construction practices are validated and audit-ready. Ideal for pharma, food, medical devices, and microelectronics industries, our cleanrooms offer a balance of functionality, flexibility, and operational compliance across varied applications.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div id="ProjectsTab-3" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Validation & Compliance Support.jpg"
                                    class="img-fluid about-img-fluid" alt="Cleanroom Validation">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Validation & Compliance Support</h4>
                                    <p class="mb-4">
                                        VCS ThermalAlliance ensures your cleanroom project doesn’t just get built—it gets certified. We offer complete validation and documentation support including URS generation, DQ, IQ, OQ, and PQ protocols aligned with ISO 14644 and WHO-GMP guidelines. Our validation scope covers cleanroom envelope testing, HVAC performance checks, HEPA integrity tests, airflow pattern visualizations (smoke test), and pressure differential mapping. Additionally, our systems integrate seamlessly with BMS platforms for real-time monitoring, alerts, and audit trails. With thorough documentation and pre-audit checklists, we prepare your cleanroom for national and international inspections. Whether it’s for new facility qualification or periodic revalidation, our experts guide you through every technical and regulatory milestone to ensure successful commissioning and long-term certification.
                                    </p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div id="ProjectsTab-4" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Industry-Specific Solutions.jpg"
                                    class="img-fluid about-img-fluid" alt="Industry Cleanroom Solutions">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-4">Industry-Specific Solutions</h4>
                                    <p class="mb-4">
                                        VCS designs and delivers cleanroom solutions customized for varied industry requirements—be it sterile pharma production, biotech research, food-grade processing, medical device assembly, or precision electronics manufacturing. Each project begins with a detailed fire load and contamination risk assessment followed by layout optimization, HVAC zoning, and clean utility integration. We address specific industry standards such as FDA, ISO 14644, WHO-GMP, or EU-GMP while designing for energy efficiency, maintainability, and audit-readiness. Our expertise includes high-hygiene environments, pass box integration, biosafety cabinets, cleanroom-compatible MEPF coordination, and differential pressure logic. With an emphasis on sustainability, we also integrate energy recovery units, low-emission materials, and LED sterile lighting to meet performance, compliance, and environmental goals across sectors.
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
                    <h1 class="display-6 mb-4">Trusted Experts in Cleanroom Engineering</h1>
                    <p class="mb-5">
                        At VCS ThermalAlliance, we combine in-house expertise, regulatory knowledge, and precision execution to deliver world-class modular cleanroom solutions. From concept to commissioning, we ensure every cleanroom meets ISO standards and industry-specific guidelines across pharma, biotech, electronics, and food processing sectors. With end-to-end control over HVAC, BMS, panels, lighting, and accessories, we help clients achieve audit-ready facilities with speed, quality, and hygiene built into every phase.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Compliance Expertise</h5>
                            </div>
                            <span>We ensure ISO, cGMP, WHO-GMP, and FDA-compliant cleanroom designs for critical environments.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Integrated HVAC & BMS</h5>
                            </div>
                            <span>Our cleanroom systems include HEPA-filtered HVAC and smart BMS for environment control and monitoring.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Modular Panel Systems</h5>
                            </div>
                            <span>PUF, EPS, and Rockwool partition panels with cleanroom-grade finish and insulation properties.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">One-Stop Delivery</h5>
                            </div>
                            <span>We handle layout, URS, validation (DQ/IQ/OQ/PQ), retrofits, and handover with AMC support.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering1.jpg" alt="" style="width: 200px; height: 200px">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose End -->


    <!-- Success Stories Start -->
    <div class="container-fluid success-stories py-5">
        <div class="container py-5">
            <!-- Heading -->
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                <h4 class="text-primary">Success Stories</h4>
                <h1 class="display-6 mb-4 px-5">Excellence Through Cleanroom Execution</h1>
                <p class="mb-0">
                    Explore how VCS ThermalAlliance has delivered cleanroom solutions across sectors with precision, compliance, and reliability. Our portfolio reflects our expertise in modular construction, HVAC design, and regulatory adherence in critical environments.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Pharma & Biotech</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Food & Beverage</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>Research & Electronics</span>
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
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Wockhardt Biotech Park</h4>
                                        <p class="mb-4">We engineered a compliant cleanroom for Wockhardt’s injectable water plant with advanced HVAC, AHU units, and ducting system. The design adhered to ISO and WHO-GMP norms for biopharmaceutical production zones. Validation protocols ensured accuracy in particulate count, airflow, and temperature control.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">AstraZeneca Pharma</h4>
                                        <p class="mb-4">Delivered ISO 7 cleanroom infrastructure including HEPA filtration, HVAC balancing, and particle monitoring. Integration of URS-compliant modular panels and BMS ensured stability and precision in pharmaceutical manufacturing. Full IQ/OQ/PQ validation supported audit-readiness and process compliance.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">National Institute of Virology</h4>
                                        <p class="mb-4">Executed retrofitting and HVAC upgrade at the Pashan Lab for clean utility containment zones. AHUs and filters were calibrated for bio-containment, and pressure zoning aligned with critical biosafety standards for virology labs handling sensitive research and vaccine protocols.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Real Dairy, Baramati</h4>
                                        <p class="mb-4">Designed and implemented a cleanroom solution for dairy production conforming to ISO 8 standards. Our solution featured laminar airflow, humidity control, cleanroom-grade materials, and HEPA filtration to enable hygienic processing and contamination-free packaging. Regulatory compliance was achieved across all validation stages.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Amul Processing Unit</h4>
                                        <p class="mb-4">Provided a modular cleanroom for Amul’s new line of milk derivatives. The HVAC system ensured temperature and microbial control, while pressure zoning kept critical areas isolated. Full utility integration including clean utilities, air showers, and biosafety compliance added to plant productivity.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Bharat Electronics</h4>
                                        <p class="mb-4">Built a cleanroom for their R&D center to support electronics testing with precise environmental control. Integrated pressure differential monitoring, particulate control, and silent HVAC operation. Our solution supported around-the-clock precision R&D with remote BMS access and reduced downtime.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/cleanroom_solutions/Trusted Experts in Cleanroom Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Advanced Micro Devices</h4>
                                        <p class="mb-4">Executed an ISO 6 cleanroom with complete HVAC zoning, anti-static flooring, and advanced filtration systems. Integrated LAF benches, differential pressure controls, and BMS for real-time monitoring. Delivered a zero-defect environment crucial for chip prototyping and microelectronics handling.</p>
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