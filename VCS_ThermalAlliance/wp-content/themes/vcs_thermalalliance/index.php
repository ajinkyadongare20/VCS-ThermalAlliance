<?php
/**
 * The main template file
 * Template Name: Home
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

    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">18 Years of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Beyond Engineering. Into Excellence</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 text-start">
                                    <p class="fs-5 fw-medium text-primary text-uppercase animated slideInRight">18 Years of Working Experience</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Best Reliable Industry Solution</h1>
                                    <a href="" class="btn btn-primary py-3 px-5 animated slideInRight">Explore Our Services</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


	<!-- About Start -->
	<div class="container-xxl py-5">
		<div class="container">
			<div class="row g-5 align-items-center">
				<!-- Image Section -->
				<div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
							<img class="img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/about-img-1.jpg" alt="VCS Team at Work">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
							<img class="img-fluid rounded" src="<?php bloginfo('template_directory'); ?>/img/about-img-2.jpg" alt="Project Execution">
                        </div>
                    </div>
                </div>

				<!-- Text Section -->
				<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
					<p class="fw-medium text-uppercase text-primary mb-2">About Us</p>
					<h1 class="display-5 mb-3">Why VCS ThermalAlliance?</h1>
					<p class="mb-4">
						VCS ThermalAlliance is a multidisciplinary MEPF contracting company built on innovation, precision, and performance.
						We specialize in delivering turnkey HVAC installations, cleanroom environments, fire protection systems, and utility management for critical infrastructures.
						Our commitment to quality, compliance, and on-time execution makes us a trusted partner across healthcare, pharmaceuticals, commercial, and industrial sectors.
					</p>

					<!-- Highlighted Features -->
					<div class="row mb-4">
						<div class="col-sm-6 mb-3">
							<div class="d-flex">
								<div class="btn-lg-circle bg-primary rounded-circle me-3">
									<i class="fa fa-cogs text-white"></i>
								</div>
								<div>
									<h6 class="mb-0">Turnkey MEPF Projects</h6>
									<small>From planning to execution under one roof.</small>
								</div>
							</div>
						</div>
						<div class="col-sm-6 mb-3">
							<div class="d-flex">
								<div class="btn-lg-circle bg-primary rounded-circle me-3">
									<i class="fa fa-industry text-white"></i>
								</div>
								<div>
									<h6 class="mb-0">Cleanroom Expertise</h6>
									<small>Validated solutions for critical environments.</small>
								</div>
							</div>
						</div>
						<div class="col-sm-6 mb-3">
							<div class="d-flex">
								<div class="btn-lg-circle bg-primary rounded-circle me-3">
									<i class="fa fa-shield-alt text-white"></i>
								</div>
								<div>
									<h6 class="mb-0">Safety & Compliance</h6>
									<small>Strict adherence to industry Make standards</small>
								</div>
							</div>
						</div>
						<div class="col-sm-6 mb-3">
							<div class="d-flex">
								<div class="btn-lg-circle bg-primary rounded-circle me-3">
									<i class="fa fa-shield-alt text-white"></i>
								</div>
								<div>
									<h6 class="mb-0">Efficient Execution</h6>
									<small>Performance-driven, deadline-bound approach.</small>
								</div>
							</div>
						</div>
					</div>
					<!-- Call to Action -->
					<a href="about.html" class="btn btn-primary py-3 px-5">Read More</a>
				</div>
			</div>
		</div>
	</div>
	<!-- About End -->


	<!-- Services Section -->
	<div class="container py-5">
    	<h1 class="text-start text-lg-center display-5 fw-bold mb-3">Popular Services</h1>
		<p class="text-start text-lg-center text-muted mb-5">
			Thermal Alliance delivers expert MEPF services including HVAC, electrical, plumbing, fire safety, and cleanroom solutions. Our turnkey approach ensures quality, safety, and performance across industrial and commercial projects—tailored to meet diverse infrastructure needs across India.
		</p>

		<div class="row g-4">
		<!-- Turnkey MEPF Projects -->
			<div class="col-md-6 col-lg-4">
				<div class="vcs-service-box text-start">
					<div class="btn-lg-circle-services bg-primary rounded-circle mb-3 me-3">
						<i class="fas fa-cogs text-white"></i>
					</div>
					<h3 class="vcs-service-title">Turnkey MEPF Projects</h3>
					<p>Complete Mechanical, Electrical, Plumbing & Firefighting solutions from concept to commissioning under one roof.</p>
				</div>
			</div>

			<!-- Fire Safety Systems -->
			<div class="col-md-6 col-lg-4">
				<div class="vcs-service-box text-start">
					<div class="btn-lg-circle-services bg-primary rounded-circle mb-3 me-3">
						<i class="fas fa-fire-extinguisher text-white"></i>
					</div>
					<h3 class="vcs-service-title">Fire Safety Systems</h3>
					<p>Design and implementation of advanced fire protection systems compliant with local and international standards.</p>
				</div>
			</div>

			<!-- HVAC Solutions -->
			<div class="col-md-6 col-lg-4">
				<div class="vcs-service-box text-start">
					<div class="btn-lg-circle-services bg-primary rounded-circle mb-3 me-3">
						<i class="fas fa-fan text-white"></i>
					</div>
					<h3 class="vcs-service-title">HVAC Solutions</h3>
					<p>Energy-efficient heating, ventilation, and air-conditioning solutions tailored for industrial, commercial, and cleanroom environments.</p>
				</div>
			</div>

			<!-- Electrical Contracting -->
			<div class="col-md-6 col-lg-4">
				<div class="vcs-service-box text-start">
					<div class="btn-lg-circle-services bg-primary rounded-circle mb-3 me-3">
						<i class="fas fa-bolt text-white"></i>
					</div>
					<h3 class="vcs-service-title">Electrical Contracting</h3>
					<p>Complete electrical infrastructure solutions including LT/HT works, panel design, wiring, and AMC support.</p>
				</div>
			</div>

			<!-- Plumbing & Drainage -->
			<div class="col-md-6 col-lg-4">
				<div class="vcs-service-box text-start">
					<div class="btn-lg-circle-services bg-primary rounded-circle mb-3 me-3">
						<i class="fas fa-water text-white"></i>
					</div>
					<h3 class="vcs-service-title">Plumbing & Drainage</h3>
					<p>Efficient plumbing systems for water supply, sewage, and stormwater with sustainable design approaches.</p>
				</div>
			</div>

			<!-- Cleanroom Projects -->
			<div class="col-md-6 col-lg-4">
				<div class="vcs-service-box text-start">
					<div class="btn-lg-circle-services bg-primary rounded-circle mb-3 me-3">
						<i class="fas fa-industry text-white"></i>
					</div>
					<h3 class="vcs-service-title">Cleanroom Projects</h3>
					<p>Specialized turnkey cleanroom construction for pharmaceuticals, electronics, food industries, and more.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Services -->


	<!-- Start Industries Serve -->
    <div class="container py-5">
        <h1 class="text-start text-lg-center display-5 fw-bold mb-3">Industries We Serve</h1>
        <p class="text-start text-lg-center text-muted mb-5">
            Thermal Alliance serves diverse industries including pharmaceuticals, food processing, automotive, manufacturing, data centers, and commercial infrastructure—offering tailored MEPF solutions to ensure operational efficiency, safety, and compliance across complex industrial environments throughout India.
        </p>

        <div class="row g-4 g-md-5">
            <!-- Pharmaceutical Industry -->
            <div class="col-md-4">
                <div class="card-box-a">
                    <img src="<?php bloginfo('template_directory'); ?>/img/industries-pharmaceuticals.jpg" alt="Pharmaceuticals">
                    <div class="card-overlay-a-content">
                        <div class="card-header-a">
                            <h2 class="card-title-a"><a href="#">Pharmaceuticals</a></h2>
                            <h5 class="text-white">Cleanroom & GMP Experts</h5>
                        </div>
                        <div class="card-body-a">
                            <div class="price-box d-flex">
                                <span class="price-a">GMP Solutions</span>
                            </div>
                            <a href="#" class="link-a">Learn more →</a>
                        </div>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info">
                            <li><h4 class="card-info-title">Expertise</h4><span>GMP</span></li>
                            <li><h4 class="card-info-title">Projects</h4><span>100+</span></li>
                            <li><h4 class="card-info-title">Clients</h4><span>Global</span></li>
                            <li><h4 class="card-info-title">Safety</h4><span>Compliant</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Healthcare Industry -->
            <div class="col-md-4">
                <div class="card-box-a">
                    <img src="<?php bloginfo('template_directory'); ?>/img/industries-healthcare.jpg" alt="Healthcare">
                    <div class="card-overlay-a-content">
                        <div class="card-header-a">
                            <h2 class="card-title-a"><a href="#">Healthcare</a></h2>
                            <h5 class="text-white">Hospitals & Medical Facilities</h5>
                        </div>
                        <div class="card-body-a">
                            <div class="price-box d-flex">
                                <span class="price-a">Medical Infrastructure</span>
                            </div>
                            <a href="#" class="link-a">Learn more →</a>
                        </div>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info">
                            <li><h4 class="card-info-title">Hospitals</h4><span>50+ Served</span></li>
                            <li><h4 class="card-info-title">Systems</h4><span>HVAC</span></li>
                            <li><h4 class="card-info-title">Projects</h4><span>Infra</span></li>
                            <li><h4 class="card-info-title">Standards</h4><span>Healthcare</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Commercial Real Estate -->
            <div class="col-md-4">
                <div class="card-box-a">
                    <img src="<?php bloginfo('template_directory'); ?>/img/industries-real_eastate.jpg" alt="Commercial Real Estate">
                    <div class="card-overlay-a-content">
                        <div class="card-header-a">
                            <h2 class="card-title-a"><a href="#">Commercial Real Estate</a></h2>
                            <h5 class="text-white">Office & Retail Spaces</h5>
                        </div>
                        <div class="card-body-a">
                            <div class="price-box d-flex">
                                <span class="price-a">Real Estate Infra</span>
                            </div>
                            <a href="#" class="link-a">Learn more →</a>
                        </div>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info">
                            <li><h4 class="card-info-title">Solutions</h4><span>HVAC</span></li>
                            <li><h4 class="card-info-title">Builders</h4><span>Pan-India</span></li>
                            <li><h4 class="card-info-title">Efficiency</h4><span>Energy</span></li>
                            <li><h4 class="card-info-title">Support</h4><span>End-to-End</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Food & Beverage -->
            <div class="col-md-4">
                <div class="card-box-a">
                    <img src="<?php bloginfo('template_directory'); ?>/img/industries-food_beverage.jpg" alt="Food & Beverage">
                    <div class="card-overlay-a-content">
                        <div class="card-header-a">
                            <h2 class="card-title-a"><a href="#">Food & Beverage</a></h2>
                            <h5 class="text-white">Cold Chain & Clean Zones</h5>
                        </div>
                        <div class="card-body-a">
                            <div class="price-box d-flex">
                                <span class="price-a">Food Processing</span>
                            </div>
                            <a href="#" class="link-a">Learn more →</a>
                        </div>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info">
                            <li><h4 class="card-info-title">Specialty</h4><span>Cold Storage</span></li>
                            <li><h4 class="card-info-title">Hygiene</h4><span>Design</span></li>
                            <li><h4 class="card-info-title">Clients</h4><span>FMCG</span></li>
                            <li><h4 class="card-info-title">Infra</h4><span>Reliable</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Data Centers -->
            <div class="col-md-4">
                <div class="card-box-a">
                    <img src="<?php bloginfo('template_directory'); ?>/img/industries-data_centers.jpg" alt="Data Centers">
                    <div class="card-overlay-a-content">
                        <div class="card-header-a">
                            <h2 class="card-title-a"><a href="#">Data Centers</a></h2>
                            <h5 class="text-white">High Precision Cooling Systems</h5>
                        </div>
                        <div class="card-body-a">
                            <div class="price-box d-flex">
                                <span class="price-a">Mission-Critical Infra</span>
                            </div>
                            <a href="#" class="link-a">Learn more →</a>
                        </div>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info">
                            <li><h4 class="card-info-title">Precision</h4><span>Cooling</span></li>
                            <li><h4 class="card-info-title">Uptime</h4><span>24/7</span></li>
                            <li><h4 class="card-info-title">Security</h4><span>Critical Infra</span></li>
                            <li><h4 class="card-info-title">Support</h4><span>Tech Team</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Industrial Manufacturing -->
            <div class="col-md-4">
                <div class="card-box-a">
                    <img src="<?php bloginfo('template_directory'); ?>/img/industries-industrial_manufacturing.jpg" alt="Industrial Manufacturing">
                    <div class="card-overlay-a-content">
                        <div class="card-header-a">
                            <h2 class="card-title-a"><a href="#">Industrial Manufacturing</a></h2>
                            <h5 class="text-white">Heavy Duty MEP Solutions</h5>
                        </div>
                        <div class="card-body-a">
                            <div class="price-box d-flex">
                                <span class="price-a">Process Plants</span>
                            </div>
                            <a href="#" class="link-a">Learn more →</a>
                        </div>
                    </div>
                    <div class="card-footer-a">
                        <ul class="card-info">
                            <li><h4 class="card-info-title">Plants</h4><span>HVAC, Fire</span></li>
                            <li><h4 class="card-info-title">Scale</h4><span>Large</span></li>
                            <li><h4 class="card-info-title">Projects</h4><span>Turnkey MEP</span></li>
                            <li><h4 class="card-info-title">Clients</h4><span>Industry</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Industries Serve -->

	  
    <!-- Why Choose US-->
    <div class="container-fluid bg-dark feature pt-5">
        <div class="container pt-0 pt-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.2s">
                    <h1 class="text-white mb-4">Why Choose Us<br>VCS ThermalAlliance</h1>
                    <p class="text-light mb-4">
                        VCS ThermalAlliance is not just a service provider—we are your strategic partner in delivering future-ready, reliable, and sustainable MEPF systems. Our expertise, certifications, and tech-driven execution ensure every project is delivered with excellence, safety, and sustainability.
                    </p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Certified in ICP, NFPA, and GEM Standards</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Turnkey Solutions: Design to Commissioning</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>In-House Tools for Accurate Engineering</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Green Building & Sustainability Focus</span>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-0" data-toggle="counter-up">200</h2>
                                    <p class="text-white mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-check fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-0" data-toggle="counter-up">50</h2>
                                    <p class="text-white mb-0">Project Completed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-user-tie fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-0" data-toggle="counter-up">12</h2>
                                    <p class="text-white mb-0">Employees</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-map-marker-alt fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-primary mb-0" data-toggle="counter-up">2</h2>
                                    <p class="text-white mb-0">Location</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 pb-5">
                   <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4 wow fadeIn"
                        data-wow-delay="0.3s" style="background-color: rgba(256, 256, 256, 0.1);">
                        <div class="d-flex align-items-center">
                            <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                                <i class="fa fa-certificate fa-2x text-white"></i>
                            </div>
                            <div class="px-3">
                                <h4 class="text-white mb-3">Certified Expertise</h4>
                            </div>
                        </div>
                        <p class="text-white mb-4">
                            Our certified professionals in ICP, NFPA, and GEM deliver compliant, safe, and efficient MEPF solutions that meet the highest industry standards and expectations.
                        </p>
                    </div>

                    <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                        data-wow-delay="0.4s" style="background-color: rgba(256, 256, 256, 0.1);">
                        <div class="d-flex align-items-center">
                            <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                                <i class="fa fa-project-diagram fa-2x text-white"></i>
                            </div>
                            <div class="px-3">
                                <h4 class="text-white mb-3">End-to-End Execution</h4>
                            </div>
                        </div>
                        <p class="text-white mb-4">
                            From design to commissioning, we offer complete turnkey solutions—ensuring streamlined communication, reliable delivery, and single-window accountability for every MEPF project we undertake.
                        </p>
                    </div>

                    <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                        data-wow-delay="0.5s" style="background-color: rgba(256, 256, 256, 0.1);">
                        <div class="d-flex align-items-center">
                            <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                                <i class="fa fa-tools fa-2x text-white"></i>
                            </div>
                            <div class="px-3">
                                <h4 class="text-white mb-3">Smart Engineering Tools</h4>
                            </div>
                        </div>
                        <p class="text-white mb-4">
                            We use proprietary software for heat load, cleanroom validation, and tracking—providing enhanced speed, accuracy, and real-time project traceability across every engineering stage.
                        </p>
                    </div>

                    <div class="d-flex flex-column align-items-start justify-content-center px-4 pt-4 mb-4"
                        data-wow-delay="0.6s" style="background-color: rgba(256, 256, 256, 0.1);">
                        <div class="d-flex align-items-center">
                            <div class="me-3 mb-3 d-flex align-items-center justify-content-center rounded-circle icon-circle">
                                <i class="fa fa-leaf fa-2x text-white"></i>
                            </div>
                            <div class="px-3">
                                <h4 class="text-white mb-3">Sustainability & Green Focus</h4>
                            </div>
                        </div>
                        <p class="text-white mb-4">
                            Our eco-centric approach integrates energy-saving technologies and green materials, helping clients achieve IGBC, GRIHA, and GEM certification with responsible and efficient engineering.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Why Choose US-->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="<?php bloginfo('template_directory'); ?>/img/professionals_engineering.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">What Sets Us Apart</p>
                    <h1 class="display-6 mb-4">Delivering Engineering Excellence, Every Time</h1>
                    <p class="mb-4">At VCS ThermalAlliance, our solutions combine technical innovation with certified processes to ensure unmatched project reliability, safety, and sustainability.</p>
                    
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <div class="p-4 rounded shadow-sm services-box h-100 feature-box hover-shadow transition">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 btn-circle-square">
                                        <i class="fa fa-check fa-2x"></i>
                                    </div>
                                    <h5 class="mb-0">Certified Professionals</h5>
                                </div>
                                <p class="mb-0">Engineers certified in ICP, NFPA, and GEM—ensuring top-tier quality and compliance in every MEPF project.</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="p-4 rounded shadow-sm services-box h-100 feature-box hover-shadow transition">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 btn-circle-square">
                                        <i class="fa fa-check fa-2x"></i>
                                    </div>
                                    <h5 class="mb-0">Tech-Driven Delivery</h5>
                                </div>
                                <p class="mb-0">Use of smart tools for heat load, validations, and real-time tracking ensures streamlined project execution.</p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="p-4 rounded shadow-sm services-box h-100 feature-box hover-shadow transition">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="icon bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3 btn-circle-square">
                                        <i class="fa fa-check fa-2x"></i>
                                    </div>
                                    <h5 class="mb-0">Green Engineering Focus</h5>
                                </div>
                                <p class="mb-0">Environmentally responsible designs aligning with IGBC, GRIHA & GEM certifications to promote sustainable growth.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


   <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Services</p>
                <h1 class="display-5 mb-4">We Provide Best Industrial Services</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/HVAC & Cleanroom Solutions.jpg" alt="HVAC & Cleanroom Solutions">
                        <div class="service-img">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/HVAC & Cleanroom Solutions.jpg" alt="HVAC & Cleanroom Solutions">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">HVAC & Cleanroom Solutions</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Turnkey HVAC systems, cleanroom design, and validation—built for industrial precision, safety, and compliance.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/Electrical & Fire Safety.jpg" alt="Electrical & Fire Safety">
                        <div class="service-img">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/Electrical & Fire Safety.jpg" alt="Electrical & Fire Safety">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Electrical & Fire Safety</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Robust electrical layouts and advanced fire safety systems designed as per NFPA standards for high-risk zones.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/Plumbing & Utility Piping.jpg" alt="Plumbing & Utility Piping">
                        <div class="service-img">
                            <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/Plumbing & Utility Piping.jpg" alt="Plumbing & Utility Piping">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Plumbing & Utility Piping</h3>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Industrial plumbing, process piping, and utility water systems tailored to meet critical flow and safety requirements.</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Project Start -->
    <!-- <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Our Projects</p>
            <h1 class="display-5 text-white mb-5">See What We Have Completed Recently</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            <a class="project-item" href="">
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Auto Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Civil Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Gas Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/project-4.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Power Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/project-5.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Energy Engineering</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/project-6.jpg" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Water Engineering</h5>
                </div>
            </a>
        </div>
    </div> -->
    <!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Our Team</p>
                <h1 class="display-5 mb-5">Dedicated Management Team</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/7.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Mr.Subodh Murkewar</h5>
                                <span class="text-primary">Co-Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-linkedin"></i></a>
                                </div>                                                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/5.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Mr.Chetan Thakur</h5>
                                <span class="text-primary">Co-Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/6.jpg" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4" style="height: 90px;">
                                <h5>Mr.Virendra Borhade</h5>
                                <span class="text-primary">Co-Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Testimonial</p>
                <h1 class="display-5 mb-5">What Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="<?php bloginfo('template_directory'); ?>/img/testimonial-1.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>Working with VCS ThermalAlliance was a great experience. Their attention to detail and certified approach made our industrial setup seamless and future-ready.</p>
                        <h5 class="mb-1">Rahul Deshmukh</h5>
                        <span class="fst-italic">Project Engineer</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="<?php bloginfo('template_directory'); ?>/img/testimonial-2.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>The team was professional, on time, and technically sound. Their energy-efficient MEPF design helped us reduce costs without compromising on quality.</p>
                        <h5 class="mb-1">Sneha Iyer</h5>
                        <span class="fst-italic">Facility Manager</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="testimonial-img position-relative">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="<?php bloginfo('template_directory'); ?>/img/testimonial-3.jpg">
                        <div class="btn-square bg-primary rounded-circle">
                            <i class="fa fa-quote-left text-white"></i>
                        </div>
                    </div>
                    <div class="testimonial-text text-center rounded p-4">
                        <p>I highly recommend their services for any industrial project. Their certified staff, transparent communication, and smart tracking tools are a huge plus.</p>
                        <h5 class="mb-1">Vikram Patil</h5>
                        <span class="fst-italic">Operations Head</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


<?php
// get_sidebar();
get_footer();