<?php
/**
 * The main template file
 * Template Name: Download
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
            <h1 class="display-3 text-white animated slideInRight">Download</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Download</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Download Brochures, Profiles & Technical Resources</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
     
    
     <!-- Hero Banner -->
    <div class="hero-banner d-flex align-items-center justify-content-center text-white mb-5">
        <div class="text-center">
            <a href="#" class="btn btn-light btn-lg px-4 py-2">
                <i class="fas fa-download me-2"></i> Download Full Profile
            </a>
        </div>
    </div>

    <div class="container py-5 mb-5">
        <div class="row">
            <!-- Filters Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="filter-section">
                    <div class="mb-4">
                        <h5 class="fw-bold mb-3">Filters</h5>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-primary" placeholder="Search documents...">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    
                    <div class="accordion" id="filterAccordion">
                        <div class="accordion-item mb-2 border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-white btn btn-primary shadow-download" type="button" data-bs-toggle="collapse" data-bs-target="#filterIndustry">
                                    <i class="fas fa-industry me-2 text-white"></i> Industry
                                </button>
                            </h2>
                            <div id="filterIndustry" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                                <div class="accordion-body pt-3">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="healthcare">
                                        <label class="form-check-label" for="healthcare">Healthcare</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="pharma">
                                        <label class="form-check-label" for="pharma">Pharmaceutical</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="commercial">
                                        <label class="form-check-label" for="commercial">Commercial</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="industrial">
                                        <label class="form-check-label" for="industrial">Industrial</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item mb-2 border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-white btn btn-primary shadow-download" type="button" data-bs-toggle="collapse" data-bs-target="#filterService">
                                    <i class="fas fa-cogs me-2 text-white"></i> Service
                                </button>
                            </h2>
                            <div id="filterService" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                                <div class="accordion-body pt-3">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="hvac">
                                        <label class="form-check-label" for="hvac">HVAC</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="firefighting">
                                        <label class="form-check-label" for="firefighting">Firefighting</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="cleanroom">
                                        <label class="form-check-label" for="cleanroom">Cleanroom</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="electrical">
                                        <label class="form-check-label" for="electrical">Electrical</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item border-0">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-white btn btn-primary shadow-download" type="button" data-bs-toggle="collapse" data-bs-target="#filterType">
                                    <i class="fas fa-file-alt me-2 text-white"></i> Document Type
                                </button>
                            </h2>
                            <div id="filterType" class="accordion-collapse collapse" data-bs-parent="#filterAccordion">
                                <div class="accordion-body pt-3">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="pdf">
                                        <label class="form-check-label" for="pdf">PDF</label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" id="ppt">
                                        <label class="form-check-label" for="ppt">PPT</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="video">
                                        <label class="form-check-label" for="video">Video</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9">
                <!-- Corporate Profile -->
                <div class="mb-5">
                    <h3 class="fw-bold mb-4">Corporate Profile</h3>
                    <div class="download-card p-4 bg-white">
                        <div class="row align-items-center">
                            <div class="col-md-2 text-center">
                                <i class="fas fa-file-pdf text-primary fs-1"></i>
                            </div>
                            <div class="col-md-8">
                                <h5 class="fw-bold">VCS ThermalAlliance Company Profile</h5>
                                <p class="text-muted mb-2">Comprehensive overview of our services, capabilities, and industry expertise</p>
                                <small class="text-muted">Last updated: June 2023 | File size: 4.2 MB</small>
                            </div>
                            <div class="col-md-2 text-center text-md-end">
                                <a href="#" class="btn btn-primary px-3">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-divider"></div>
                
                <!-- Sector Brochures -->
                <div class="mb-5">
                    <h3 class="fw-bold mb-4">Sector Brochures</h3>
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="download-card p-4 h-100 bg-white">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-hospital me-3 text-primary" style="font-size: 1.5rem;"></i>
                                    <h5 class="fw-bold mb-0">Healthcare MEPF Solutions</h5>
                                </div>
                                <p class="text-muted small mb-3">Specialized solutions for hospitals and medical facilities</p>
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-download me-1"></i> Download PDF
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="download-card p-4 h-100 bg-white">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-pills me-3 text-primary" style="font-size: 1.5rem;"></i>
                                    <h5 class="fw-bold mb-0">Pharma Cleanroom Engineering</h5>
                                </div>
                                <p class="text-muted small mb-3">GMP-compliant cleanroom design and implementation</p>
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-download me-1"></i> Download PDF
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="download-card p-4 h-100 bg-white">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-building me-3 text-primary" style="font-size: 1.5rem;"></i>
                                    <h5 class="fw-bold mb-0">Commercial Real Estate</h5>
                                </div>
                                <p class="text-muted small mb-3">MEPF packages for offices and retail Lorem, ipsum. spaces</p>
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-download me-1"></i> Download PDF
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="download-card p-4 h-100 bg-white">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-industry me-3 text-primary" style="font-size: 1.5rem;"></i>
                                    <h5 class="fw-bold mb-0">Industrial Plant Systems</h5>
                                </div>
                                <p class="text-muted small mb-3">Utility systems for manufacturing facilities</p>
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-download me-1"></i> Download PDF
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-lg-4">
                            <div class="download-card p-4 h-100 bg-white">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-utensils me-3 text-primary" style="font-size: 1.5rem;"></i>
                                    <h5 class="fw-bold mb-0">Hospitality Engineering</h5>
                                </div>
                                <p class="text-muted small mb-3">Solutions for hotels and resorts</p>
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-download me-1"></i> Download PDF
                                </a>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="download-card p-4 h-100 bg-white">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-utensils me-3 text-primary" style="font-size: 1.5rem;"></i>
                                    <h5 class="fw-bold mb-0">Services Engineering</h5>
                                </div>
                                <p class="text-muted small mb-3">Solutions for hotels and resorts</p>
                                <a href="#" class="btn btn-primary w-100">
                                    <i class="fas fa-download me-1"></i> Download PDF
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-divider"></div>
                
                <!-- Services Catalogues -->
                <div class="mb-5">
                    <h3 class="fw-bold mb-4">Services Catalogues</h3>
                    
                    <ul class="nav nav-pills mb-4" id="servicesTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="hvac-tab" data-bs-toggle="pill" data-bs-target="#hvac-pane" type="button" role="tab">
                                HVAC
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="firefighting-tab" data-bs-toggle="pill" data-bs-target="#firefighting-pane" type="button" role="tab">
                                Firefighting
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="cleanroom-tab" data-bs-toggle="pill" data-bs-target="#cleanroom-pane" type="button" role="tab">
                                Cleanroom
                            </button>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="servicesTabContent">
                        <div class="tab-pane fade show active" id="hvac-pane" role="tabpanel">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="download-card p-4 h-100 bg-white">
                                        <h5 class="fw-bold mb-3">HVAC Turnkey Solutions</h5>
                                        <p class="text-muted small mb-3">Complete design, installation and maintenance</p>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-download me-1"></i> Download PDF
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="download-card p-4 h-100 bg-white">
                                        <h5 class="fw-bold mb-3">VRF Systems Catalogue</h5>
                                        <p class="text-muted small mb-3">Energy-efficient variable refrigerant flow solutions</p>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-download me-1"></i> Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="firefighting-pane" role="tabpanel">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="download-card p-4 h-100 bg-white">
                                        <h5 class="fw-bold mb-3">Firefighting Systems</h5>
                                        <p class="text-muted small mb-3">Comprehensive fire protection solutions</p>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-download me-1"></i> Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cleanroom-pane" role="tabpanel">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="download-card p-4 h-100 bg-white">
                                        <h5 class="fw-bold mb-3">Cleanroom Design & Build</h5>
                                        <p class="text-muted small mb-3">ISO-classified clean environment solutions</p>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-download me-1"></i> Download PDF
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="download-card p-4 h-100 bg-white">
                                        <h5 class="fw-bold mb-3">Pharma Cleanroom Standards</h5>
                                        <p class="text-muted small mb-3">GMP compliance guidelines</p>
                                        <a href="#" class="btn btn-primary">
                                            <i class="fas fa-download me-1"></i> Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="section-divider"></div>
                
                <!-- Technical Resources -->
                <div class="mb-5">
                    <h3 class="fw-bold mb-4">Technical Resources</h3>
                    
                    <div class="download-card p-4 bg-white mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-1 text-center">
                                <i class="fas fa-file-alt text-primary"></i>
                            </div>
                            <div class="col-md-8">
                                <h5 class="fw-bold mb-1">NABH HVAC Guidelines for OTs</h5>
                                <small class="text-muted">Healthcare facility standards | 1.2 MB</small>
                            </div>
                            <div class="col-md-3 text-end">
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="download-card p-4 bg-white mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-1 text-center">
                                <i class="fas fa-file-alt text-primary"></i>
                            </div>
                            <div class="col-md-8">
                                <h5 class="fw-bold mb-1">ISO 14644 Cleanroom Standards</h5>
                                <small class="text-muted">Particle classification | 2.4 MB</small>
                            </div>
                            <div class="col-md-3 text-end">
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="download-card p-4 bg-white mb-3">
                        <div class="row align-items-center">
                            <div class="col-md-1 text-center">
                                <i class="fas fa-file-alt text-primary"></i>
                            </div>
                            <div class="col-md-8">
                                <h5 class="fw-bold mb-1">NBC 2016 Fire Safety Excerpt</h5>
                                <small class="text-muted">Building code requirements | 3.1 MB</small>
                            </div>
                            <div class="col-md-3 text-end">
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="download-card p-4 bg-white">
                        <div class="row align-items-center">
                            <div class="col-md-1 text-center">
                                <i class="fas fa-file-alt text-primary"></i>
                            </div>
                            <div class="col-md-8">
                                <h5 class="fw-bold mb-1">BMS Integration Overview</h5>
                                <small class="text-muted">Building management systems | 1.8 MB</small>
                            </div>
                            <div class="col-md-3 text-end">
                                <a href="#" class="btn btn-primary">
                                    <i class="fas fa-download me-1"></i> Download
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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