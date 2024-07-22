<Footer>
            <div class="container">
                <div class="row">
                    <div class="col ft-logo ">
                        <img class="pb-4" src="<?php echo get_template_directory_uri(); ?>/assets/images/footlogo.png" alt="">
                        <h4 class="pb-4">Ready to
                            <span class="orange">Get Started?</span>
                        </h4>
                        <button type="button"
                            onclick='location.href="<?php echo get_home_url();?>/apply_now"'
                            class="btn btn-dark">Apply Now</button>
                    </div>
                    <div class="col ft-shape-one pt-5 mt-5 ">
                        <h4 class="text-dark">Overview</h4>
                        <ul>
                            <li><a href="<?php echo get_home_url();?>">Home</a></li>
                            <li><a href="<?php echo get_home_url();?>/about">About</a></li>
                            <li><a href="<?php echo get_home_url();?>/locations">Locations</a></li>
                        </ul>
                    </div>
                    <div class="col ft-shape-one pt-5 mt-5 ">
                        <h4 class="text-dark">Services</h4>
                        <ul>
                            <li><a href="<?php echo get_home_url();?>/employers">Employers</a></li>
                            <li><a href="https://hrcenter.ontempworks.com/en/psa?inactivity=False">Applicants</a></li>
                        </ul>
                    </div>
                    <div class="col ft-shape-one pt-5 mt-5 ">
                        <h4 class="text-dark">Resources</h4>
                        <ul class="text-dark">
                            <li><a href="<?php echo get_home_url();?>/login">Login</a></li>
                            <li><a href="<?php echo get_home_url();?>/training">Training</a></li>
                            <li><a href="<?php echo get_home_url();?>/handbook">Handbook</a></li>
                            <li><a href="<?php echo get_home_url();?>/team-psa-handbook">Team PSA Handbook</a></li>
                        </ul>
                    </div>
                    <div class="col ft-shape-one last_col">
                        <a href="tel:+18885639562" style="text-decoration: none;">
                            <h3 class="text-dark pb-5 phone">(888) 5<span class="orange">-New-Job</span></h3>
                        </a>
                        <h5 class="pb-4 same">Find. Place. Discover.</h5>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/search.svg" alt="">

                    </div>
                </div>
            </div>
            <hr>
            <div class="copyright_main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p> Copyright © 2023 PlaceSmart Staffing Agency. All rights reserved</p>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="https://www.facebook.com/placesmartagencymidwest/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/btn.svg" alt=""></a>
                            <a href="https://g.co/kgs/cw4xzN"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/google.svg" alt=""></a>
                            <a href="https://www.linkedin.com/company/placesmart/"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </Footer>
        <!-- Footer End here -->

 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.location-search').select2(); // Initialize Select2 on your select element
        });
    </script>



<script>
jQuery(document).ready(function($) {
    // Toggle the visibility of the navbar-collapse when the navbar-toggler is clicked
    $('.navbar-toggler').on('click', function() {
        $('.navbar-collapse').toggleClass('show');
        
        // Close the navbar-collapse when the navbar-toggler is clicked again
        if (!$('.navbar-collapse').hasClass('show')) {
            $('.navbar-collapse').removeClass('show');
        }
    });

    // Close the navbar-collapse when a navigation link is clicked
    $('.navbar-nav .nav-link').on('click', function() {
        $('.navbar-collapse').removeClass('show');
    });
});
</script>
</body>


</html>