<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vcs_thermalalliance
 */

?>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Office Info -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>402, Chandrarang Silver, Near Kalptaru Estate Phase II, Pimple Gurav, Pune - 411061</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7709237117 </p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 7410016111</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+91 9922954842</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>sales@thermalalliance.in</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="#">About Us</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <a class="btn btn-link" href="#">Our Services</a>
                    <a class="btn btn-link" href="#">Terms & Condition</a>
                    <a class="btn btn-link" href="#">Support</a>
                </div>

                <!-- Our Solutions (Replaced Business Hours) -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Solutions</h5>
                    <p class="mb-2"><i class="fa fa-angle-right me-2"></i>HVAC & Cleanroom Solutions</p>
                    <p class="mb-2"><i class="fa fa-angle-right me-2"></i>Electrical & Fire Safety</p>
                    <p class="mb-2"><i class="fa fa-angle-right me-2"></i>Plumbing & Drainage Systems</p>
                    <p class="mb-2"><i class="fa fa-angle-right me-2"></i>Turnkey MEPF Projects</p>
                </div>

                <!-- Newsletter -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Stay updated with the latest insights, technologies, and projects from VCS ThermalAlliance.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <p class="mb-2">
                Copyright &copy; <a class="fw-semi-bold" href="#">VCS-ThermalAlliance</a>, All Rights Reserved.
            </p>
            <p class="mb-0">
                Designed By <a class="fw-semi-bold" href="https://www.lealsolution.com/" target="_blank">Leal Software
                    Solution Pvt Ltd</a>
            </p>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/wow/wow.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/easing/easing.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>


    <?php wp_footer(); ?>

    </body>

    </html>