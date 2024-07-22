<?php /* Template Name: Apply Now */ ?>

<?php get_header(); ?>
 <!-- Content Start Here  -->
    <div class="main_content">
        <!-- Section One Start here  -->
        <section class="banner_sec applynow-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col hero-banner-col">
                        <div class="banner-heading mt-4 mb-5">
                            <h1 class="dark-primary text-center">
                                Apply <span class="orange after_line">Now</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section One End here -->



        <section class="section_seven pt-10 pb-10 apply-form-section"
            style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/Green_Shape.png) no-repeat;" id="contact-form">
            <div class="container">
                <div class="row ">
                    <div class="col-md-5 px-4">
                        <div class="tabs-wrapper">
                            <ul class="nav nav-tabs" id="languageTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="english-tab" data-bs-toggle="tab"
                                        data-bs-target="#english" type="button" role="tab" aria-controls="english"
                                        aria-selected="true">English</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="spanish-tab" data-bs-toggle="tab"
                                        data-bs-target="#spanish" type="button" role="tab" aria-controls="spanish"
                                        aria-selected="false">Spanish</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="languageTabContent">
                                <div class="tab-pane fade show active" id="english" role="tabpanel"
                                    aria-labelledby="english-tab">
                                    <div class="tabs-content-wrapper">
                                        <h3 class="dark-primary">
                                            Apply with the Best!
                                        </h3>
                                        <p class="dark-primary">
                                            Get placed by an agency that truly cares. As a Placesmart applicant, tell us
                                            your education and skills and we will work to find you a job that makes you
                                            happy and best fits your needs.
                                            <br>
                                            <br>
                                            In other words, we work for you! We have jobs in the light
                                            industrial/warehouse and clerical/administrative fields to suit you. Above
                                            all you will see and feel the difference between PlaceSmart and other
                                            staffing services.
                                            <br>
                                            <br>
                                            We make it easy! Apply online, give us a call, or come on in to our office
                                            for personal assistance from one of our professionals. Once we have received
                                            your application, we will contact you to set up an interview.
                                            <br>
                                            <br>
                                            During your interview, you will be able to discuss your skills, job history,
                                            salary requirements, availability, etc. Your information will be entered
                                            into our system, and you can let the matchmaking begin!
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="spanish" role="tabpanel" aria-labelledby="spanish-tab">
                                    <div class="tabs-content-wrapper">
                                        <h3 class="dark-primary">
                                            ¡Aplica con los Mejores!
                                        </h3>
                                        <p class="dark-primary">
                                            Consiga que lo coloque una agencia que realmente se preocupa. Como
                                            solicitante de Placesmart, cuéntenos su educación y habilidades y
                                            trabajaremos para encontrarle el trabajo que lo haga feliz y que mejor se
                                            adapte a sus necesidades.
                                            <br>
                                            <br>
                                            En otras palabras, ¡trabajamos para usted! Tenemos trabajos en los campos
                                            industrial ligero/almacén y administrativo/administrativo que se adaptan a
                                            sus necesidades. Sobre todo, verá y sentirá la diferencia entre PlaceSmart y
                                            otros servicios de dotación de personal.
                                            <br>
                                            <br>
                                            ¡Te lo ponemos fácil! Presente su solicitud en línea, llámenos o visite
                                            nuestra oficina para recibir asistencia personal de uno de nuestros
                                            profesionales. Una vez que hayamos recibido su solicitud, nos comunicaremos
                                            con usted para programar una entrevista.
                                            <br>
                                            <br>
                                            Durante su entrevista, podrá discutir sus habilidades, historial laboral,
                                            requisitos salariales, disponibilidad, etc. Su información se ingresará en
                                            nuestro sistema y podrá comenzar el emparejamiento.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form_main">
                            <h3>Register</h3>
                            <p class="fw-normal">Already have an account? <a href="" class="orange">Sign in now</a></p>
                            <form id="applyform" class="">
                                <div class="row mb-3">
                                    <div class="col">
                                        <div class="px-2 border-start border-2 border-warning">
                                            <h3>
                                                Find an office near you
                                            </h3>
                                            <p class="mb-0 fw-normal">
                                                Help us figure out how to get your information to the right office.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="zipCode" class="form-label">Zip Code <span
                                                class="required-field">*</span></label>
                                        <input type="number" class="form-control" id="zipCode" required="">
                                    </div>
                                    <div class="col">
                                        <label for="branch" class="form-label">Branch <span
                                                class="required-field">*</span></label>
                                        <select class="form-select full-width" id="branch" required="">
                                            <option value="" selected="">Select</option>
                                            <!-- Add options for industries here -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="firstName" class="form-label">First Name <span
                                                class="required-field">*</span></label>
                                        <input type="text" class="form-control" id="firstName" placeholder=""
                                            required="">
                                    </div>
                                    <div class="col">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="email" class="form-label">Email <span
                                                    class="required-field">*</span></label>
                                            <input type="email" class="form-control full-width" id="email"
                                                placeholder="">
                                            <p class="dark-secondary fw-normal fields-bottom-txt mb-0 pt-2">
                                                If you do not have an email. Please call our office at: <a
                                                    href="tel:+18885639562"
                                                    class="dark-primary text-decoration-none">888-5-NEW-JOB
                                                    (888-563-9562)</a>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="phone" class="form-label">Primary Phone Number</label>
                                            <input type="tel" class="form-control full-width" id="phone" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="security" class="form-label">Social Security # <span
                                            class="required-field">*</span></label>
                                    <input type="text" class="form-control full-width" id="security" required="">
                                </div>
                                <div class="mb-3">
                                    <label for="workflow" class="form-label">Please select a workflow <span
                                            class="required-field">*</span></label>
                                    <select class="form-select full-width" id="workflow" required="">
                                        <option value="" selected="">Select</option>
                                        <!-- Add options for programs here -->
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="hearAboutUs" class="form-label">How did you hear about us? <span
                                            class="required-field">*</span></label>
                                    <select class="form-select full-width" id="hearAboutUs" required="">
                                        <option value="" selected="">Select</option>
                                        <!-- Add options for referral sources here -->
                                    </select>
                                </div>
                                <div class="row mb-3 mt-4">
                                    <div class="col">
                                        <div class="px-2 border-start border-2 border-warning">
                                            <h3>
                                                Upload a resume
                                            </h3>
                                            <p class="mb-0 fw-normal">
                                                If you already have a resume, uploading it now can save you time.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Upload Resume</label>
                                    <div class="file-drop-area">
                                        <span class="choose-file-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/upload.svg"></span>
                                        <span class="choose-file-button dark-secondary">Drop here or click to <b
                                                class="dark-primary">browse</b></span>
                                        <span class="file-message dark-secondary">DOC or PDF files only, up to 1
                                            MB</span>
                                        <input class="file-input" type="file" multiple>
                                    </div>
                                </div>

                                <div class="row mb-3 mt-4">
                                    <div class="col">
                                        <div class="px-2 border-start border-2 border-warning">
                                            <h3>
                                                Create an account
                                            </h3>
                                            <p class="mb-0 fw-normal">
                                                Creating an account allows you to come back and update your information
                                                later.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">username <span
                                            class="required-field">*</span></label>
                                    <input type="text" class="form-control full-width" id="username" required="">
                                </div>
                                <div class="row mb-3">
                                    <div class="col">
                                        <label for="password" class="form-label">Password <span
                                                class="required-field">*</span></label>
                                        <input type="text" class="form-control" id="password" placeholder=""
                                            required="">
                                    </div>
                                    <div class="col">
                                        <label for="cPassword" class="form-label">confirm password <span
                                                class="required-field">*</span></label>
                                        <input type="text" class="form-control" id="cPassword" placeholder="" required>
                                    </div>
                                </div>
                                <hr class="mt-5">
                                <button type="submit" class="btn btn-primary styleee">Join the PSA Team</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Content End Here -->

    <?php get_footer(); ?>