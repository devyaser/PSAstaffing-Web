<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSAstaffing</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/Team_PSA_logo_general_primary_fc_whitetext%201.svg">
<?php wp_head(); ?>
</head>

<body>
    <!-- Header Start Here -->
    <header>
        <div class="container">
            <!-- Navigation Bar -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo get_home_url();?>"><img
    src="<?php echo get_template_directory_uri(); ?>/assets/images/PSA_Team_Final.svg" alt="Brand Logo">
</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Navigation Links -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_home_url();?>/employers">Employers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://hrcenter.ontempworks.com/en/psa?inactivity=False">Applicants</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo get_home_url();?>/about">About</a>
                        </li>
                        <li class="nav-item no_border">
                            <a class="nav-link" href="<?php echo get_home_url();?>/locations">Locations</a>
                        </li>
                        <li class="nav-item no_border">
                            <a class="nav-link login_btn same_style" href="<?php echo get_home_url();?>/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link apply_btn same_style" href="<?php echo get_home_url();?>/apply_now">Apply</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>