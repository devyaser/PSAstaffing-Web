<?php /* Template Name: Location */ ?>

<?php get_header(); ?>
    <section class="section_five p-bottom pt-10 location">
        <div class="container">
            <h2 class="text-center mx-auto">Our <span class="blue after_line after_line_blue">Locations</span>
            </h2>
            <?php echo do_shortcode('[elfsight_google_maps id="1"]'); ?>
            
        </div>
    </section>

    <section class="section_four p-top pb-10">
        <div class="container">
            <h2 class="text-center mx-auto location-headings">Team PSA <span class="orange after_line">States</span>
            </h2>
            <div class="row spacing">
                <div class="col-md-6 bg_style color_green"
                    style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/upload.wikimedia.org_wikipedia_commons_b_b1_State_of_Georgia.svg-0\ 1.svg);">
                    <h4>Team Georgia</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vector.svg" alt="">
                    <a href="#georgia_location" class="custom_styled has_arrow">See Locations</a>
                </div>
                <div class="col-md-6 bg_style color_orange" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/outline-mo\ 1.svg);">
                    <h4>Team Missouri</h4>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Vector 02.svg" alt="">
                    <a href="#missouri_location" class="custom_styled has_arrow">See Locations</a>
                </div>
            </div>
        </div>
    </section>

    <section class="location-card-section  pb-5" id="missouri_location">
        <div class="container">
            <h2 class="text-center mx-auto">Team PSA <span class="orange">Missouri</span>
            </h2>
            <div class="select-location my-5">
                <div class="mb-3 text-center">
                    <select class="form-select full-width mx-auto location-search" id="locations" required>
                        <option value="">All locations</option>
                        <option value="" selected>STL-ALL District</option>
                    </select>
                </div>

            </div>
            <div class="check_main justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Oranage Map Point.svg" alt="Check">
                <p class="m-0 text-center fw-bold">STL-ALL District</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 cards-row location-card-row my-4">
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/fairview'>
                        <div class="card h-100 location-cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/FAH.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title dark-primary">Fairview Heights IL (NAS)</h5>
                                <ul>
                                    <li>
                                        <p class="dark-primary">Open: <span class="dark-secondary">M-F 8:30 AM – 5:00
                                                PM</span></p>
                                    </li>
                                    <li>
                                        <p class="dark-primary">Address: <span class="dark-secondary">5007 N. IL Street,
                                                Suite 4Fairview Heights, IL 62208</span></p>
                                    </li>
                                </ul>
                                <div class="card-btn-wrapper d-flex">
                                    <a href="#" class="custom_styled btn-contact">contact</a>
                                    <a href="<?php echo get_home_url();?>/locations/fairview" class="custom_styled"><img class=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                        get Direction</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/nashville'>
                        <div class="card h-100 location-cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NAS.png" class="card-img-top" alt="Nashville IL (NAS)">
                            <div class="card-body">
                                <h5 class="card-title dark-primary">Nashville IL (NAS)</h5>
                                <ul>
                                    <li>
                                        <p class="dark-primary">Open: <span class="dark-secondary">M-F 8:30 AM – 5:00
                                                PM</span></p>
                                    </li>
                                    <li>
                                        <p class="dark-primary">Address: <span class="dark-secondary">12578 State Rt. 127,
                                                P.O. Box 128Nashville IL 62263</span></p>
                                    </li>
                                </ul>
                                <div class="card-btn-wrapper d-flex">
                                    <a href="#" class="custom_styled btn-contact">contact</a>
                                    <a href="<?php echo get_home_url();?>/locations/nashville" class="custom_styled"><img class=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                        get Direction</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/bridgeton'>
                        <div class="card h-100 location-cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/BRL.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title dark-primary">Bridgeton IL (NAS)</h5>
                                <ul>
                                    <li>
                                        <p class="dark-primary">Open: <span class="dark-secondary">M-F 8:30 AM – 5:00
                                                PM</span></p>
                                    </li>
                                    <li>
                                        <p class="dark-primary">Address: <span class="dark-secondary">11726 St. Charles
                                                Rock Road, Suite LBridgeton MO 63044</span></p>
                                    </li>
                                </ul>
                                <div class="card-btn-wrapper d-flex">
                                    <a href="#" class="custom_styled btn-contact">contact</a>
                                    <a href="<?php echo get_home_url();?>/locations/bridgeton" class="custom_styled"><img class=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                        get Direction</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/mehlville'>
                        <div class="card h-100 location-cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MEH.png" class="card-img-top" alt="Mehlville MO (MEH)">
                            <div class="card-body">
                                <h5 class="card-title dark-primary">Mehlville MO (MEH)</h5>
                                <ul>
                                    <li>
                                        <p class="dark-primary">Open Fall 2023<span class="dark-secondary"></span></p>
                                    </li>
                                    <li>
                                        <p class="dark-primary">Address: <span class="dark-secondary">3500 Lemay Ferry, St.
                                                LouisMehlville MO 63129</span></p>
                                    </li>
                                </ul>
                                <div class="card-btn-wrapper d-flex">
                                    <a href="#" class="custom_styled btn-contact">contact</a>
                                    <a href="<?php echo get_home_url();?>/locations/mehlville" class="custom_styled"><img class=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                        get Direction</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/ofallon'>
                        <div class="card h-100 location-cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/OFA.png" class="card-img-top" alt="O’Fallon MO (OFA)">
                            <div class="card-body">
                                <h5 class="card-title dark-primary">O’Fallon MO (OFA)</h5>
                                <ul>
                                    <li>
                                        <p class="dark-primary">Open Fall 2023<span class="dark-secondary"></span></p>
                                    </li>
                                    <li>
                                        <p class="dark-primary">Address: <span class="dark-secondary">3500 Lemay Ferry, St.
                                                LouisMehlville MO 63129</span></p>
                                    </li>
                                </ul>
                                <div class="card-btn-wrapper d-flex">
                                    <a href="#" class="custom_styled btn-contact">contact</a>
                                    <a href="<?php echo get_home_url();?>/locations/ofallon" class="custom_styled"><img class=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                        get Direction</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/stcharles'>
                        <div class="card h-100 location-cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/STC.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title dark-primary">St. Charles MO (STC)</h5>
                                <ul>
                                    <li>
                                        <p class="dark-primary">Open Fall 2023<span class="dark-secondary"></span></p>
                                    </li>
                                    <li>
                                        <p class="dark-primary">Address: <span class="dark-secondary">136 S Main StSt.
                                                Charles MO 63301</span></p>
                                    </li>
                                </ul>
                                <div class="card-btn-wrapper d-flex">
                                    <a href="#" class="custom_styled btn-contact">contact</a>
                                    <a href="<?php echo get_home_url();?>/locations/stcharles" class="custom_styled"><img class=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                        get Direction</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/towergrove'>
                        <div class="card h-100 location-cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/TOG.png" class="card-img-top" alt="Tower Grove Ave MO (TOG)">
                            <div class="card-body">
                                <h5 class="card-title dark-primary">Tower Grove Ave MO (TOG)</h5>
                                <ul>
                                    <li>
                                        <p class="dark-primary">Open Fall 2023<span class="dark-secondary"></span></p>
                                    </li>
                                    <li>
                                        <p class="dark-primary">Address: <span class="dark-secondary">1536 Tower Grove
                                                AveSt Louis MO 63110</span></p>
                                    </li>
                                </ul>
                                <div class="card-btn-wrapper d-flex">
                                    <a href="#" class="custom_styled btn-contact">contact</a>
                                    <a href="<?php echo get_home_url();?>/locations/towergrove" class="custom_styled"><img class=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                        get Direction</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="location-card-section pb-5 my-5" id="georgia_location">
        <div class="container">
            <h2 class="text-center mx-auto">Team PSA <span class="green-color">Georgia</span>
            </h2>
            <div class="select-location my-5">
                <div class="mb-3 text-center">
                    <select class="form-select full-width mx-auto location-search" id="locations-2" required>
                        <option value="" selected>All locations</option>
                        <option value="">STL-ALL District</option>
                        <!-- Add options for industries here -->
                    </select>
                </div>

            </div>
            <div class="check_main justify-content-center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Green Map Point.svg" alt="Check">
                <p class="m-0 text-center fw-bold">ATL-NW District</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 cards-row location-card-row my-4">
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/adairsville'>
                        <div class="card h-100 location-cards">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ADA.png" class="card-img-top" alt="Adairsville GA (ADA)">
                            <div class="card-body">
                                <h5 class="card-title dark-primary">Adairsville GA (ADA)</h5>
                                <ul>
                                    <li>
                                        <p class="dark-primary">Opening Fall 2023<span class="dark-secondary"></span></p>
                                    </li>
                                </ul>
                                <div class="card-btn-wrapper d-flex">
                                    <a href="#" class="custom_styled btn-contact">contact</a>
                                    <a href="<?php echo get_home_url();?>/locations/adairsville" class="custom_styled"><img class=""
                                            src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                        get Direction</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/cartersville'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/CAR.png" class="card-img-top" alt="Cartersville GA (CAR)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Cartersville GA (CAR)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open: <span class="dark-secondary">M-F 8:30 AM – 5:00
                                            PM</span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/cartersville" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/kennesaw'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/KEN.png" class="card-img-top" alt="Kennesaw GA (KEN)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Kennesaw GA (KEN)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open: <span class="dark-secondary">M-F 8:30 AM – 5:00
                                            PM</span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/kennesaw" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/rome'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ROM.png" class="card-img-top" alt="Rome GA (ROM)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Rome GA (ROM)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open: <span class="dark-secondary">M-F 8:30 AM – 5:00
                                            PM</span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/rome" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="check_main justify-content-center py-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Green Map Point.svg" alt="Check">
                <p class="m-0 text-center fw-bold">ATL-NW District</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 cards-row location-card-row my-4">
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/austell'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/AUS.png" class="card-img-top" alt="Austell GA (AUS)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Austell GA (AUS)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open: <span class="dark-secondary">M-F 8:30 AM – 5:00
                                            PM</span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/austell" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/collegepark'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/COP.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">College Park GA (COP)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Opening 2023<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/collegepark" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/kennesaw'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/KENG.png" class="card-img-top" alt="Kennesaw GA (KEN)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Kennesaw GA (KEN)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Opening 2024<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/kennesaw" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="check_main justify-content-center py-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Green Map Point.svg" alt="Check">
                <p class="m-0 text-center fw-bold">ATL-NE District</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 cards-row location-card-row my-4">
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/covington'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/COV.png" class="card-img-top" alt="Covington GA (COV)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Covington GA (COV)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Opening 2024<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/covington" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/griffin'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/FAH.png" class="card-img-top" alt="Griffin GA (GRI)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Griffin GA (GRI)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open 2024<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/griffin" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/lithonia'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LIT.png" class="card-img-top" alt="Lithonia GA (LIT)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Lithonia GA (LIT)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open 2024<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/lithonia" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/mcdonough'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/MCD.png" class="card-img-top" alt="McDonough (MCD)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">McDonough (MCD)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open 2024<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/mcdonough" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="check_main justify-content-center py-4">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Green Map Point.svg" alt="Check">
                <p class="m-0 text-center fw-bold">ATL-NE District</p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4 cards-row location-card-row my-4">
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/alpharetta'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ALP.png" class="card-img-top" alt="Alpharetta GA (ALP)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Alpharetta GA (ALP)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open 2024<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/alpharetta" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/doraville'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/DOR.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Doraville GA (DOR)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open 2024<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/doraville" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/gainesville'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/GAI.png" class="card-img-top" alt="Gainesville GA (GAI)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Gainesville GA (GAI)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open 2024 <span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/gainesville" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col">
                    <a href='<?php echo get_home_url();?>/locations/lawrenceville'>
                    <div class="card h-100 location-cards">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LAW.png" class="card-img-top" alt="Lawrenceville (LAW)">
                        <div class="card-body">
                            <h5 class="card-title dark-primary">Lawrenceville (LAW)</h5>
                            <ul>
                                <li>
                                    <p class="dark-primary">Open 2024<span class="dark-secondary"></span></p>
                                </li>
                            </ul>
                            <div class="card-btn-wrapper d-flex">
                                <a href="#" class="custom_styled btn-contact">contact</a>
                                <a href="<?php echo get_home_url();?>/locations/lawrenceville" class="custom_styled"><img class=""
                                        src="<?php echo get_template_directory_uri(); ?>/assets/images/Map Arrow Up.svg">
                                    get Direction</a>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

        </div>
    </section>


    <?php get_footer(); ?>