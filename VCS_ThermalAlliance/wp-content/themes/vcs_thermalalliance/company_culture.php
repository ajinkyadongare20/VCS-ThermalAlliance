<?php
/**
 * The main template file
 * Template Name: Company Culture
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
    <div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Company Culture</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Company Culture</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Culture – The VCS Way of Working</li>
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
                    <h2 class="text-primary mb-3">Company Culture</h2>
                    <p class="lead">
                        At VCS ThermalAlliance, we foster a culture driven by integrity, innovation, teamwork, and a passion for engineering excellence that empowers people and builds a sustainable future.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Introduction End -->


    <!-- Company Culture Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute company-culture-img" src="<?php bloginfo('template_directory'); ?>/img/about-1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="company-culture-text bg-white p-4 p-lg-1 my-lg-1">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">What Defines Us</h6>
                        <h1 class="mb-3">Our Culture – The VCS Way of Working</h1>
                        <p>At VCS ThermalAlliance, we foster a culture built on integrity, innovation, teamwork, and ownership. Our people-first approach empowers every team member to grow, contribute, and lead across high-impact MEPF projects. From field engineers to design leads, we collaborate across disciplines, prioritize safety and sustainability, and challenge ourselves to innovate at every step.</p>
                        <div class="row mb-4">
                            <div class="col-6 py-3">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="">
                            </div>
                            <div class="col-6 py-3">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="">
                            </div>
                            <div class="col-6 py-3">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="">
                            </div>
                            <div class="col-6 py-3">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="">
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary mt-1">Explore Careers</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Company Culture End -->


    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4 bg-white p-4 rounded shadow">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-users text-white"></i>
                        </div>
                        <div class="d-flex flex-column ps-2">
                            <h5 class="">Collaborative Work Culture</h5>
                            <p class="m-0">We promote open communication, cross-functional teamwork, and a flat structure that values every voice and idea.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bg-white p-4 rounded shadow">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="d-flex flex-column ps-2">
                            <h5 class="">Learning & Growth</h5>
                            <p class="m-0">From field exposure to sponsored certifications, we support continuous technical and personal development.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 bg-white p-4 rounded shadow">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-shield-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column ps-2">
                            <h5 class="">Safety & Integrity</h5>
                            <p class="m-0">We uphold the highest standards of safety, ethics, and compliance across all our projects and workplaces.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Culture Us Section -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary text-uppercase">Our Culture</h6>
                    <h1 class="mb-4">Employee <span class="text-primary">Highlights</span></h1>
                    
                    <div class="employee-highlights mb-4">
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0 bg-primary rounded-circle p-2 me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-lightbulb text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Innovation-Driven Environment</h5>
                                <p class="mb-0">We embrace new ideas, smart technologies, and continuous improvement across every project and function.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0 bg-primary rounded-circle p-2 me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-user-graduate text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Growth-Focused Culture</h5>
                                <p class="mb-0">Team members gain on-ground learning, certifications, and cross-domain exposure.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0 bg-primary rounded-circle p-2 me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-people-arrows text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Inclusive & Collaborative</h5>
                                <p class="mb-0">We promote teamwork, transparency, and respect—across all roles and locations.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-3">
                            <div class="flex-shrink-0 bg-primary rounded-circle p-2 me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-shield-alt text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Safety First</h5>
                                <p class="mb-0">Strict safety protocols, training sessions, and compliance ensure secure environments.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="flex-shrink-0 bg-primary rounded-circle p-2 me-3" style="width: 40px; height: 40px;">
                                <i class="fas fa-handshake text-white"></i>
                            </div>
                            <div>
                                <h5 class="mb-1">Trust & Ownership</h5>
                                <p class="mb-0">We empower individuals with responsibilities and reward initiative at all levels.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hard-hat fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">150+</h2>
                                    <p class="mb-0">Projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">85+</h2>
                                    <p class="mb-0">Engineers</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-award fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">25+</h2>
                                    <p class="mb-0">Awards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="#">Explore Careers</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" style="margin-top: 25%;" alt="Innovation">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" alt="Team Collaboration">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg" alt="Learning Session">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="<?php bloginfo('template_directory'); ?>/img/project-4.jpg" alt="Awards Celebration">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- Culture Us End -->


    <!-- Life at VCS Section Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Culture</h6>
                <h1 class="mb-5">Life at VCS</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center p-4 rounded shadow">
                        <div class="bg-primary rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-brain fa-2x text-white"></i>
                        </div>
                        <h5 class="mb-2">Innovation Culture</h5>
                        <p>We encourage ideas, creative problem-solving, and smart technology in every function.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center p-4 rounded shadow">
                        <div class="bg-primary rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-users-cog fa-2x text-white"></i>
                        </div>
                        <h5 class="mb-2">Collaborative Teams</h5>
                        <p>Flat hierarchy and inclusive participation across departments build strong outcomes.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center p-4 rounded shadow">
                        <div class="bg-primary rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-user-shield fa-2x text-white"></i>
                        </div>
                        <h5 class="mb-2">Safety & Ethics</h5>
                        <p>We prioritize safety protocols, site audits, and transparent practices across all levels.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="bg-white text-center p-4 rounded shadow">
                        <div class="bg-primary rounded-circle mx-auto mb-3" style="width: 80px; height: 80px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-hands-helping fa-2x text-white"></i>
                        </div>
                        <h5 class="mb-2">Respect & Inclusion</h5>
                        <p>Diverse voices and equal opportunities define our culture of trust and shared purpose.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Life at VCS Section End -->


    <!-- Life at VCM Start -->
    <div class="container-xxl py-5 vcm-life">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Culture</h6>
                <h1 class="mb-5">Life at VCM</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="Team Celebration">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Monthly</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Knowledge Sessions</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="Team Building">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Annual</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Company Retreat</div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/carousel-2.jpg" alt="Award Ceremony">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Quarterly</div>
                                <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Milestone Awards</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/carousel-1.jpg" alt="Health Camp" style="object-fit: cover;">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">Bi-annual</div>
                        <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">Health & Wellness</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Life at VCM End -->


    <!-- FAQ Start -->
    <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- FAQ Text Column -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <h4 class="text-primary">Some Important FAQ's</h4>
                    <h1 class="display-4 mb-4">Working at VCS – Frequently Asked Questions</h1>
                    <p class="mb-4">
                        Learn more about our work environment, growth opportunities, and expectations at VCS ThermalAlliance. We’re committed to transparency and career fulfillment.
                    </p>
                    <a class="btn btn-primary py-3 px-5" href="#">Ask a Question</a>
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
                                        Q: What types of projects will I work on at VCS?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: You'll contribute to MEPF projects across high-compliance sectors like pharmaceuticals, healthcare, commercial, and industrial facilities.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: How does VCS support my career growth?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We offer mentorship, on-site learning, certification sponsorships, and cross-department exposure to help you grow technically and professionally.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Will I need to relocate or travel for my role?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Depending on your role, you may be assigned to project sites across India. We provide travel support and accommodation where needed.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: What kind of work culture does VCS maintain?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We promote a flat and collaborative work structure, with an emphasis on safety, innovation, inclusivity, and transparent communication.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q: How are exceptional contributions recognized?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We regularly acknowledge achievements through awards, bonuses, public recognition, and promotion opportunities.
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