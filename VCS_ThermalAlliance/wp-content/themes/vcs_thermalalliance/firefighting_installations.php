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
            <h1 class="display-3 text-white animated slideInRight">Firefighting Solutions</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Services</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Firefighting Systems & Safety Solutions</li>
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
                    <h2 class="text-primary mb-3">Turnkey Firefighting Solutions</h2>
                    <p class="lead text-muted">
                        At VCS ThermalAlliance, we engineer <strong>code-compliant fire safety systems</strong> that defend lives, assets, and operations. Specializing in <strong>industrial, commercial, and healthcare</strong> environments, our turnkey solutions cover <strong>fire detection, suppression, and evacuation</strong>—all designed to meet <strong>NFPA, NBC, and TAC standards</strong>. From hydraulic calculations to emergency response planning, we deliver <strong>resilient systems</strong> with seamless integration into your infrastructure. Trust our <strong>IS-certified team</strong> for precision-driven fire safety that balances compliance with operational continuity.
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
                        <h4 class="text-primary">Firefighting Systems & Safety Solutions</h4>
                        <h1 class="display-6 mb-4">Safeguarding Life and Infrastructure</h1>
                        <p class="mb-5">
                            Fire safety isn’t an option—it’s a necessity. At VCS ThermalAlliance, we offer turnkey firefighting solutions tailored to industrial, commercial, healthcare, and high-risk environments. From fire detection to suppression, we ensure code-compliant, responsive, and resilient systems that protect both life and property.
                        </p>
                        <ul class="nav">
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3 active" data-bs-toggle="pill"
                                    href="#ProjectsTab-1">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-fire-extinguisher small"></span>
                                    </div>
                                    <span>Fire Detection & Alarms</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                    href="#ProjectsTab-2">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-shower small"></span>
                                    </div>
                                    <span>Sprinklers & Suppression Systems</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                    href="#ProjectsTab-3">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-tools small"></span>
                                    </div>
                                    <span>Pump Rooms & Hydrants</span>
                                </a>
                            </li>
                            <li class="nav-item bg-white mb-4 w-100">
                                <a class="d-flex align-items-center h4 mb-0 p-3" data-bs-toggle="pill"
                                    href="#ProjectsTab-4">
                                    <div class="projects-icon btn-md-square bg-primary text-white me-3">
                                        <span class="fas fa-briefcase-medical small"></span>
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
                                <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Fire Detection & Alarm Systems.jpg" class="img-fluid about-img-fluid" alt="Fire Alarms">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Fire Detection & Alarm Systems</h4>
                                    <p class="mb-4">
                                        We implement advanced fire detection solutions including smoke detectors, flame sensors, multi-sensor alarms, and addressable fire alarm control panels. Integrated voice evacuation ensures that occupants are guided clearly during emergencies. Each system is designed to be responsive, reliable, and fully integrated with building management systems (BMS) and electrical safety protocols. Whether it’s a hospital, high-rise building, data center, or pharmaceutical lab, our alarms provide early detection and immediate alert to prevent escalation. We ensure all fire safety installations are in full compliance with NFPA 72, NBC 2016.</p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div id="ProjectsTab-2" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Sprinklers & Suppression Systems.jpg" class="img-fluid about-img-fluid" alt="Sprinklers">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Sprinklers & Suppression Systems</h4>
                                    <p class="mb-4">
                                        Our suppression systems include wet pipe, dry pipe, pre-action, and deluge sprinklers tailored to suit varied building types and fire risks. For areas housing sensitive equipment like data centers or pharmaceutical storage, we deploy clean agent gas systems such as FM-200, NOVEC 1230, and CO₂-based suppression. Designed with a focus on minimizing collateral damage, our systems adhere to global codes like NFPA 13 and IS standards. We also offer low-water-use systems for sustainable operation and support IGBC green building certification. VCS ensures seamless integration with fire alarms, BMS, and emergency response protocols for comprehensive fire safety.</p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div id="ProjectsTab-3" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Fire Pump Rooms & Hydrant Networks.jpg" class="img-fluid about-img-fluid" alt="Pump Room">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-3">Fire Pump Rooms & Hydrant Networks</h4>
                                    <p class="mb-4">
                                        VCS provides end-to-end solutions for fire pump rooms, hydrant lines, and water storage tanks designed to ensure consistent pressure, flow rate, and operational readiness. Our scope includes fire water network design, jockey pumps, diesel/electric-driven main pumps, control panels, and plumbing aligned with hydraulic calculations and NFPA 20/NBC standards. Systems are coordinated with civil, mechanical, and electrical teams during design and execution for zero conflict and high system reliability. From high-rise towers to industrial plants, our fire hydrant solutions ensure first responders have immediate access to critical fire-fighting resources.</p>
                                    <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div id="ProjectsTab-4" class="tab-pane fade show p-0">
                            <div class="projects-item">
                                <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Industry-Specific Fire Safety.jpg" class="img-fluid about-img-fluid" alt="Industry Fire Solutions">
                                <div class="projects-content bg-white p-4">
                                    <h4 class="mb-4">Industry-Specific Fire Safety</h4>
                                    <p class="mb-4">
                                        We engineer fire safety solutions tailored to specific industries such as pharmaceuticals, hospitals, cleanrooms, commercial offices, and large-scale manufacturing. Our systems are designed after careful evaluation of fire load, hazard classification, occupancy type, and regulatory norms. Whether it’s integrating dampers with AHUs, gas suppression in sterile labs, or high-risk containment in data centers, we ensure compliance with NFPA, NBC, IS 2189, and local fire authority mandates. Each system includes fire alarm integration, access control interfaces, and customized maintenance plans to ensure 24/7 protection without downtime. Our fast-track delivery model ensures both speed and safety.</p>
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
                    <h1 class="display-6 mb-4">Reliable & Code-Compliant Fire Safety Expertise</h1>
                    <p class="mb-5">
                        VCS ThermalAlliance offers turnkey firefighting systems engineered for accuracy, compliance, and rapid deployment. From planning to AMC support, our solutions are backed by certified professionals, advanced design tools, and OEM-grade materials—ensuring protection of life and infrastructure in the most critical environments.
                    </p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Certified Fire Engineers</h5>
                            </div>
                            <span>Team trained in NFPA, IS 2189, and NBC 2016 standards with Fire NOC documentation support.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Hydraulic Design Tools</h5>
                            </div>
                            <span>We use advanced software for fire load calculations, system layout, and pressure loss simulation.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">End-to-End Delivery</h5>
                            </div>
                            <span>Design, supply, installation, testing, commissioning, and AMC—handled by a single expert team.</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-primary me-3">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <h5 class="mb-0">Trusted OEM Components</h5>
                            </div>
                            <span>We partner with OEMs like Agni, Ravel, Honeywell & NewAge for proven system performance.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering1.jpg" alt="" style="width: 200px; height: 200px">
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
                <h1 class="display-6 mb-4 px-5">Safeguarding Assets with Proven Fire Protection</h1>
                <p class="mb-0">
                    Discover how VCS ThermalAlliance has delivered high-performance firefighting and safety systems to mission-critical facilities across industries. From healthcare to pharma and manufacturing, our installations exemplify safety, compliance, and resilience.
                </p>
            </div>

            <!-- Tabs + Content -->
            <div class="row g-5 align-items-center">
                <!-- Tabs -->
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3 active" data-bs-toggle="pill" href="#SuccessTab-1">
                                <span>Commercial & Office</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-2">
                                <span>Pharma & Labs</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                            <a class="py-3 px-3" data-bs-toggle="pill" href="#SuccessTab-3">
                                <span>Industrial Facilities</span>
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
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">ACE Business Center</h4>
                                        <p class="mb-4">Full retrofit of fire alarm and sprinkler systems in a 900 TR HVAC-enabled office facility. Integrated voice evacuation and addressable panels ensure occupant safety and code compliance.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Phoenix Mall Pune</h4>
                                        <p class="mb-4">Executed high-capacity fire water storage tanks, pump rooms, and FM-compliant hydrant systems across retail and parking zones. Installation delivered with zero operational downtime.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">IT Park Hinjewadi</h4>
                                        <p class="mb-4">Designed and installed smoke detection with networked alarm systems for 4 IT towers, including fire curtains and compartmentalized zones for enhanced response management.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Cosmos Commercial Complex</h4>
                                        <p class="mb-4">Supplied & commissioned fire alarm, hydrant, and stairwell pressurization systems for a multi-tenant commercial complex. Ensured NBC compliance and tenant fire NOC readiness.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 2 -->
                        <div id="SuccessTab-2" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">FDC Pharma</h4>
                                        <p class="mb-4">Installed complete fire detection, AHU fire damper automation, and alarm systems across multiple cleanroom areas to meet GMP and fire compliance audits.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Serum Institute India</h4>
                                        <p class="mb-4">Designed high-sensitivity smoke and flame detection with integrated BMS controls for their R&D block and critical storage zones.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">AstraZeneca India</h4>
                                        <p class="mb-4">Executed clean agent suppression systems (NOVEC 1230) for production areas, ensuring zero water usage and pharma-grade compliance.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering1.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">NIV – National Institute of Virology</h4>
                                        <p class="mb-4">Fire zoning, smoke evacuation, and high-sensitivity alarms deployed in BSL-3 compliant research areas without disturbing sensitive operations.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tab 3 -->
                        <div id="SuccessTab-3" class="tab-pane fade show p-0">
                            <div class="success-carousel owl-carousel">
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Huhtamaki PPL</h4>
                                        <p class="mb-4">Installed deluge sprinkler systems, hydrants, and fire pumps in packaging units prone to flammable vapor risks. Project was certified by local fire authorities.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Tata AutoComp Systems</h4>
                                        <p class="mb-4">Designed custom fire compartmentalization and smoke management systems for their high-density production floor to meet automotive safety protocols.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">JSW Steel Pune</h4>
                                        <p class="mb-4">Commissioned an FM-compliant fire pump house and hydrant system for steel processing areas. Coordinated civil, mechanical, and electrical works for fast-track delivery.</p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Read More</a>
                                    </div>
                                </div>
                                <div class="success-item">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/firefighting_installations/Trusted Experts in Turnkey HVAC Engineering.jpg" class="img-fluid success-img-tab" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Kirloskar Brothers</h4>
                                        <p class="mb-4">Deployed an integrated system including fire alarms, hydrants, and VESDA smoke detection for their machinery division. Delivered with post-commissioning maintenance contract.</p>
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