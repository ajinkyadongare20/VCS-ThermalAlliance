<?php
/**
 * The main template file
 * Template Name: Blog
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
            <h1 class="display-3 text-white animated slideInRight">Blog & News</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Blog & News</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Blog Start -->
    <div class="container-fluid blog py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 text-capitalize text-primary mb-3 py-3">Blog & News</h1>
                <p class="mb-0">
                    Explore expert insights from our engineering team on HVAC layouts, cleanroom compliance, MEPF innovations, fire safety, and sustainable building design.
                </p>
            </div>

            <div class="row g-4">
                <!-- Blog Post 1 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/blog/1.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">30 Dec 2025</div>
                            <div class="blog-comment my-3 d-flex justify-content-between">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span>
                                    <span class="ms-2">VCS Editorial</span>
                                </div>
                                <div class="small">
                                    <span class="fa fa-comment-alt text-primary"></span>
                                    <span class="ms-2">3 Comments</span>
                                </div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Top 5 Mistakes in HVAC Layout Planning—and How to Avoid Them</a>
                            <p class="mb-3">
                                Poor HVAC layout can compromise comfort, efficiency, and maintainability. Discover common errors and our expert tips for smart planning.
                            </p>
                            <a href="#" class="btn btn-primary">
                                Read More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 2 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/blog/2.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">25 Dec 2025</div>
                            <div class="blog-comment my-3 d-flex justify-content-between">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span>
                                    <span class="ms-2">VCS Editorial</span>
                                </div>
                                <div class="small">
                                    <span class="fa fa-comment-alt text-primary"></span>
                                    <span class="ms-2">5 Comments</span>
                                </div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">How to Design a WHO-GMP Compliant Cleanroom</a>
                            <p class="mb-3">
                                Cleanroom design for pharmaceutical facilities demands precision. Learn how to meet WHO-GMP standards in layout, airflow, and finishes.
                            </p>
                            <a href="#" class="btn btn-primary">
                                Read More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 3 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/blog/3.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">27 Dec 2025</div>
                            <div class="blog-comment my-3 d-flex justify-content-between">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span>
                                    <span class="ms-2">VCS Editorial</span>
                                </div>
                                <div class="small">
                                    <span class="fa fa-comment-alt text-primary"></span>
                                    <span class="ms-2">4 Comments</span>
                                </div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Smart BMS in MEPF Projects: More Than Just Monitoring</a>
                            <p class="mb-3">
                                Modern Building Management Systems (BMS) optimize energy use, improve uptime, and ensure proactive maintenance across MEPF systems.
                            </p>
                            <a href="#" class="btn btn-primary">
                                Read More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 4 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/blog/4.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">22 Dec 2025</div>
                            <div class="blog-comment my-3 d-flex justify-content-between">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span>
                                    <span class="ms-2">VCS Editorial</span>
                                </div>
                                <div class="small">
                                    <span class="fa fa-comment-alt text-primary"></span>
                                    <span class="ms-2">2 Comments</span>
                                </div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Fire Safety Codes Explained: What Indian Developers Must Know</a>
                            <p class="mb-3">
                                Understanding NBC and NFPA codes is critical for fire system design in commercial and industrial spaces. Here's what developers need to ensure compliance.
                            </p>
                            <a href="#" class="btn btn-primary">
                                Read More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 5 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/blog/5.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">18 Dec 2025</div>
                            <div class="blog-comment my-3 d-flex justify-content-between">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span>
                                    <span class="ms-2">VCS Editorial</span>
                                </div>
                                <div class="small">
                                    <span class="fa fa-comment-alt text-primary"></span>
                                    <span class="ms-2">7 Comments</span>
                                </div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Energy Efficiency vs. Comfort: Striking the Right HVAC Balance</a>
                            <p class="mb-3">
                                Designing HVAC systems that save energy while maintaining thermal comfort is a challenge. Learn strategies for optimal performance and user satisfaction.
                            </p>
                            <a href="#" class="btn btn-primary">
                                Read More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Post 6 -->
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="<?php bloginfo('template_directory'); ?>/img/blog/6.jpg" class="img-fluid rounded-top w-100" alt="Image">
                        </div>
                        <div class="blog-content rounded-bottom p-4">
                            <div class="blog-date">15 Dec 2025</div>
                            <div class="blog-comment my-3 d-flex justify-content-between">
                                <div class="small">
                                    <span class="fa fa-user text-primary"></span>
                                    <span class="ms-2">VCS Editorial</span>
                                </div>
                                <div class="small">
                                    <span class="fa fa-comment-alt text-primary"></span>
                                    <span class="ms-2">4 Comments</span>
                                </div>
                            </div>
                            <a href="#" class="h4 d-block mb-3">Sustainable MEPF Design: Where to Begin?</a>
                            <p class="mb-3">
                                Integrating green building strategies in MEPF design is the future. This blog shares how to align with LEED, IGBC, and energy modeling principles.
                            </p>
                            <a href="#" class="btn btn-primary">
                                Read More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

   
    <!-- FAQ Start -->
    <div class="container-fluid faq-section bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <!-- FAQ Text Column -->
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <h4 class="text-primary">Some Important FAQ's</h4>
                    <h1 class="display-4 mb-4">Common Frequently Asked Questions?</h1>
                    <p class="mb-4">
                        Have questions about our technical blogs, cleanroom standards, MEPF strategies, or energy-efficient design principles? We've answered the most common ones here.
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
                                        Q: What topics do your technical blogs cover?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Our blogs span HVAC design best practices, cleanroom standards, MEPF system integration, green building solutions, fire safety compliance, and smart engineering technologies.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: How often do you publish new blog posts?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: We publish fresh insights monthly, covering recent trends, regulatory updates, engineering innovations, and on-site execution strategies in the HVAC & MEPF domains.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Can I contribute a blog or suggest a topic?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Yes, we welcome contributions from industry professionals and engineers. You can submit a topic idea or draft via the "Write for Us" or "Submit Blog Topic" links provided on this page.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q: Are your insights based on actual projects or case studies?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        A: Absolutely. Most of our blog posts are grounded in real-world applications from VCS projects, giving readers practical takeaways and learnings from our execution experience.
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