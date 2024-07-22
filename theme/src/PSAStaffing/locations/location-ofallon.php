<?php /* Template Name: O Fallon */ ?>

<?php get_header(); ?>

    <!-- Content Start Here  -->
    <div class="main_content">
        <section class="location_inner_banner pt-5">
            <div class="container">
                <a href="<?php echo home_url(); ?>/locations" class="custom_styled has_arrow before_arrow">Back to Locations</a>
                <h1 class="mt-4"><span style="color: var(--brand-blue-primary);">O’Fallon </span>MO (OFA)</h1>
            </div>
        </section>
        <!-- Section One End Here -->


        <!-- Section Two Start Here -->

        <section class="pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/OFA.png" alt="O’Fallon MO (OFA)" width="100%">
                    </div>
                    <div class="col-md-7 stylingg" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/Visit\ us.svg);">
                        <div>
                            <h2>Visit us</h2>
                            <p class="dark-primary">Open: <span class="dark-secondary">Fall 2023</span></p>
                            <p class="dark-primary">Address: <span class="dark-secondary">3500 Lemay Ferry, St. LouisMehlville MO 63129</span></p>
                        </div>
                        <div class="card-btn-wrapper d-flex gap-3 flex-wrap">
                            <a href="tel:+18885639562" class="custom_styled btn-contact"><img class=""
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/Phone Calling.svg"> Call Now</a>
                            <a href="#mapSec" class="custom_styled"><img class="" src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg"> Get
                                Direction</a>
                        </div>
                    </div>
                </div>
             </div>
        </section>
        <!-- Section Two End Here -->

        <!-- Section Three Start Here -->
        <section class="pb-5 location-detail-section">
            <div class="container">
                <div class="row">
                    <h2 style="font-weight: 600;">Get Started!</h2>
                    <div class="col-md-5 pt-4">
                        <div class="location-inner-map" id="mapSec">
                            <img width="100%" src="<?php echo get_template_directory_uri(); ?>/assets/images/inner_map.png" alt="inner map">
                        </div>
                        <div class="contact-profile mt-5 d-flex align-items-center gap-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile_avatar.png" alt="" class="profile-avatar">
                            <div>
                                <h4 class="title dark-primary">Jane Cooper</h4>
                                <p class="designation dark-secondary">{ Position (e.g Administrator) }</p>
                            </div>
                        </div>
                        <div class="contact-detail mt-3">
                            <ul class="pb-2">
                                <li class="dark-primary">Email: <a class="dark-secondary" href="mailto:email@example.com">email@example.com</a></li>
                                <li class="dark-primary">Phone: <a class="dark-secondary" href="tel:+248 000 000">+248 000 000</a></li>
                            </ul>
                            <a href="tel:+248 000 000" class="custom_styled btn-contact"><img class=""
                                src="<?php echo get_template_directory_uri(); ?>/assets/images/Phone Calling.svg"> Book a call</a>
                        </div>
                    </div>
                    <div class="col-md-7 p-4">
                        <div class="form-conatiner">
                            <h3>Send us a message</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <form id="inenrform" class="pt-4">
                                <div class="row mb-3">
                                  <div class="col">
                                    <label for="firstName" class="form-label">First Name <span class="required-field">*</span></label>
                                    <input type="text" class="form-control" id="firstName" placeholder="Enter your first name" required="">
                                  </div>
                                  <div class="col">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" >
                                  </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row mb-3">
                                    <div class="col"> 
                                  <label for="email" class="form-label">Email <span class="required-field">*</span></label>
                                  <input type="email" class="form-control full-width" id="email" placeholder="Enter email address" required="">
                                  </div>
                                  <div class="col">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="phone" class="form-control full-width" id="phone" placeholder="Enter phone number">
                                  </div>
                                </div>
                                </div>
                                <div class="mb-3">
                                  <label for="industry" class="form-label">Industry you are interested in? <span class="required-field">*</span></label>
                                  <select class="form-select full-width" id="industry" required="">
                                    <option value="" selected="">Select</option>
                                    <option value="INDUSTRIAL">INDUSTRIAL</option>
                                    <option value="RETAIL">RETAIL</option>
                                    <option value="PROFFESSIONAL/ADMIN">PROFFESSIONAL/ADMIN</option>
                                    <option value="FOOD & BEVERAGE">FOOD & BEVERAGE</option>
                                    <option value="MULTIPLE">MULTIPLE</option>
                                    <!-- Add options for industries here -->
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="hearAboutUs" class="form-label">How did you hear about us? <span class="required-field">*</span></label>
                                  <select class="form-select full-width" id="hearAboutUs" required="">
                                    <option value="" selected="">Select</option>
                                    <option value="WEB SEARCH">WEB SEARCH</option>
                                    <option value="MARKETING MATERIAL">MARKETING MATERIAL</option>
                                    <option value="FOLLOW UP CALL FROM TEAM MEMBER">FOLLOW UP CALL FROM TEAM MEMBER</option>
                                    <option value="PROMOTIONAL ITEM">PROMOTIONAL ITEM</option>
                                    <option value="REFERRAL">REFERRAL</option>
                                    <option value="MULTIPLE">MULTIPLE</option>
                                    <!-- Add options for referral sources here -->
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="programOfInterest" class="form-label">Program of interest? <span class="required-field">*</span></label>
                                  <select class="form-select full-width" id="programOfInterest" required="">
                                    <option value="" selected="">Select</option>
                                    <option value="TRADITIONAL STAFFING (flexibility in rates and terms, we carry the payroll)">TRADITIONAL STAFFING (flexibility in rates and terms, we carry the payroll)</option>
                                    <option value="HYBRID STAFFING (simple pick from a menu program, we carry the payroll)">HYBRID STAFFING (simple pick from a menu program, we carry the payroll)</option>
                                    <option value="DIRECT HIRE (simple pick from a menu program, you carry the payroll)">DIRECT HIRE (simple pick from a menu program, you carry the payroll)</option>
                                    <option value="DIRECT HIRE + (for more complex positions, you carry the payroll)">DIRECT HIRE + (for more complex positions, you carry the payroll)</option>
                                    <option value="Possibly Multiple Programs">Possibly Multiple Programs</option>
                                    <option value="UNSURE">UNSURE</option>
                                    <!-- Add options for programs here -->
                                  </select>
                                 <a class="blue text-decoration-none" href="<?php echo get_template_directory_uri(); ?>/about.html" target="_blank"> Learn more about our hiring programs</a>
                                </div>
                                <div class="mb-3">
                                  <label for="employeesNeeded" class="form-label">Numbers of employees needed <span class="required-field">*</span></label>
                                  <select class="form-select full-width" id="employeesNeeded" required="">
                                    <option value="" selected="">Select</option>
                                    <option value="1-6">1-6</option>
                                    <option value="7-12">7-12</option>
                                    <option value="13+">13+</option>
                                    
                                    <!-- Add options for number of employees needed here -->
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="message" class="form-label">Message <span class="required-field">*</span></label>
                                  <textarea class="form-control full-width" id="message" rows="5" placeholder="Enter message" required=""></textarea>
                                </div>
                                <hr class="mt-5">
                                <button type="submit" class="btn btn-primary styleee" >Send Message</button>
                              </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Three End Here -->
        <section class="pt-10 pb-10 footer-shape-section">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>



    </div>


<?php get_footer(); ?>