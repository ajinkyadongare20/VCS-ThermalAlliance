<?php
/**
 * The main template file
 * Template Name: Careers
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
            <h1 class="display-3 text-white animated slideInRight">Careers</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Careers</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Careers</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Introduction Start -->
    <!-- <div class="container-fluid bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="text-primary mb-3">Careers</h2>
                    <p class="lead text-muted">
                        In healthcare, performance is critical—and compliance is non-negotiable. At VCS ThermalAlliance, we design and deliver precision-engineered HVAC, cleanroom, electrical, and fire safety systems tailored for hospitals, ICUs, diagnostic labs, operating theatres, and sterile zones. Our solutions combine medical-grade engineering with smart automation to ensure optimal indoor air quality, infection control, and patient safety.<br><br>                        
                    </p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Introduction End -->


    <!-- Careers Start -->
    <div class="container-fluid careers py-5">
        <div class="container py-5">
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Join Our Team</h4>
                <h1 class="display-6 mb-4">Current Career Opportunities</h1>
                <p class="mb-0">We're looking for talented individuals to join our growing team. Explore our current openings and find the perfect position to grow your career with us.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" class="career-img-fluid w-100" alt="HVAC Project Engineer">
                        </div>
                        <div class="career-heading ms-2 my-3">
                            <a href="#" class="h4 mb-0 p-1">HVAC Project Engineer</a>
                        </div>
                        <div class="career-content bg-light p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune / Project Sites, India</p>
                                <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                            </div>
                            <p class="mb-4">
                                We're seeking an HVAC Project Engineer with 2-5 years experience in project execution. Skills needed: AutoCAD, Ducting, Chiller Systems, AHU Installations.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="HVAC Project Engineer">Apply Now</button>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-4.jpg" class="career-img-fluid w-100" alt="Electrical Supervisor">
                        </div>
                        <div class="career-heading ms-2 my-3">
                            <a href="#" class="h4 mb-0 p-1">Electrical Supervisor</a>
                        </div>
                        <div class="career-content bg-light p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Project Sites (PAN India)</p>
                                <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                            </div>
                            <p class="mb-4">
                                Seeking Electrical Supervisor with 5+ years experience in LT Panels, DB Wiring, Earthing, and AMC Coordination.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Electrical Supervisor">Apply Now</button>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-1.jpg" class="career-img-fluid w-100" alt="HVAC Project Engineer">
                        </div>
                        <div class="career-heading ms-2 my-3">
                            <a href="#" class="h4 mb-0 p-1">HVAC Junior Engineer</a>
                        </div>
                        <div class="career-content bg-light p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune / Project Sites, India</p>
                                <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                            </div>
                            <p class="mb-4">
                                We're seeking an HVAC Project Engineer with 0-2 years experience in project execution. Skills needed: AutoCAD, Ducting, Chiller Systems, AHU Installations.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="HVAC Project Engineer">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-2.jpg" class="career-img-fluid w-100" alt="Firefighting Design Engineer">
                        </div>
                        <div class="career-heading ms-2 my-3">
                            <a href="#" class="h4 mb-0 p-1">Firefighting Design Engineer</a>
                        </div>
                        <div class="career-content bg-light p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune, India</p>
                                <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                            </div>
                            <p class="mb-4">
                                Looking for a Firefighting Design Engineer with 3-6 years experience. Must know NFPA/IS Codes, Pipe Sizing, and Hydraulic Calculations.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Firefighting Design Engineer">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-3.jpg" class="career-img-fluid w-100" alt="Cleanroom Project Coordinator">
                        </div>
                        <div class="career-heading ms-2 my-3">
                            <a href="#" class="h4 mb-0 p-1">Cleanroom Project Coordinator</a>
                        </div>
                        <div class="career-content bg-light p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> On-site (West India)</p>
                                <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                            </div>
                            <p class="mb-4">
                                Need a Cleanroom Project Coordinator with 3-7 years experience in Modular Partition Systems, HEPA, and Validation Protocols.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Cleanroom Project Coordinator">Apply Now</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="career-item">
                        <div class="career-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/project-5.jpg" class="career-img-fluid w-100" alt="Sales Engineer">
                        </div>
                        <div class="career-heading ms-2 my-3">
                            <a href="#" class="h4 mb-0 p-1">Sales Engineer – MEP Solutions</a>
                        </div>
                        <div class="career-content bg-light p-4">
                            <div class="d-flex justify-content-between mb-4">
                                <p class="mb-0 small"><i class="fa fa-map-marker me-2"></i> Pune / Hybrid</p>
                                <p class="mb-0 small"><i class="fa fa-briefcase me-2"></i> Full-time</p>
                            </div>
                            <p class="mb-4">
                                Looking for Sales Engineer with 2-4 years B2B experience (HVAC/Fire/Cleanroom preferred) for our MEP Solutions division.
                            </p>
                            <button class="btn btn-primary py-2 px-4 apply-btn" data-position="Sales Engineer – MEP Solutions">Apply Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Careers End -->


    <!-- Application Modal -->
    <div class="modal fade" id="applicationModal" tabindex="-1" aria-labelledby="applicationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="applicationModalLabel">Job Application</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="applicationForm" action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="c9db945c-32e3-414e-8f98-ea2ac4166cf7">
                        <input type="hidden" name="subject" value="New Job Application">
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="applicantName" name="name" placeholder="Your Name" required>
                                    <label for="applicantName">Full Name*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="applicantEmail" name="email" placeholder="Your Email" required>
                                    <label for="applicantEmail">Email Address*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="applicantPhone" name="phone" placeholder="Phone Number" required>
                                    <label for="applicantPhone">Phone Number*</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="positionApplied" name="position" required>
                                        <option value="">Select Position</option>
                                        <option value="Senior Electrical Engineer">Senior Electrical Engineer</option>
                                        <option value="HVAC Technician">HVAC Technician</option>
                                        <option value="Sales Executive">Sales Executive</option>
                                    </select>
                                    <label for="positionApplied">Position Applied For*</label>
                                </div>
                            </div>
                           <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Your message" id="message" name="message" style="height: 100px"></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label for="resumeUpload" class="form-label">Upload Resume (PDF, DOC/DOCX)*</label>
                                    <input class="form-control" type="file" id="resumeUpload" name="resume" accept=".pdf,.doc,.docx" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Application Modal -->


    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+012 345 6789</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <form>
                            <div class="row g-3">
                                <div class="col-xl-12">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control bg-light border-0" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
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