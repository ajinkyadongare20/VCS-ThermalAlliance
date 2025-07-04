<?php
/**
 * The main template file
 * Template Name: Contact
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
            <h1 class="display-3 text-white animated slideInRight">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Contact</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid bg-light py-5">
        <div class="container py-3 py-sm-4 py-md-5 px-2 px-sm-3 px-md-4 px-lg-5">
            <div class="mx-auto text-center">
                <h1 class="mb-4 mb-md-5">Get in Touch with Our Team</h1>
            </div>
            <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="bg-white shadow p-3 p-sm-4 p-md-5">
                            <div class="py-2">
                                <div class="text-uppercase text-primary text-start fw-bold fs-6 mb-3">VCS ThermalAlliance Pvt Ltd</div>

                                <h5 class="mt-4">Email:</h5>
                                <p>info@aria-climate.com</p>
                                <h5 class="mt-4">Phone:</h5>
                                <p>+91 7709237117 / 7410016111 / 9922954842 </p>
                                <h5 class="mt-4">Office Address:</h5>
                                <p>
                                   402, Chandrarang Silver,<br> 
                                   Near Kalptaru Estate Phase II,<br> 
                                   Pimple Gurav, Pune - 411061
                                <h5 class="mt-4">Social Media:</h5>
                                <p>Stay connected with us through our social media handles:</p>
                                <div class="d-flex gap-3">
                                    <a class="btn btn-outline-primary rounded-pill"
                                        href="https://www.linkedin.com/company/ishrae-pune-chapter/?originalSubdomain=in"
                                        target="_blank" style="border-width: 1px;">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                    <a class="btn btn-outline-primary rounded-pill"
                                        href="https://www.facebook.com/p/Ishrae-Pune-Chapter-100064681809939/"
                                        target="_blank" style="border-width: 1px;">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-outline-primary rounded-pill"
                                        href="https://www.youtube.com/channel/UCJ1Z08ryTel6YD5IXb3WSAA" target="_blank"
                                        style="border-width: 1px;">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                    <a class="btn btn-outline-primary rounded-pill"
                                        href="https://www.instagram.com/ishraepunechapter/" target="_blank"
                                        style="border-width: 1px;">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a class="btn btn-outline-primary rounded-pill" href="https://wa.me/9922954841"
                                        target="_blank" style="border-width: 1px;">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <?php echo do_shortcode('[contact-form-7 id="71a5d4a" title="Contact form 1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


<?php
// get_sidebar();
get_footer();