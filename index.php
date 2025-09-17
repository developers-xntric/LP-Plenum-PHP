<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Plenum LP">
    <meta name="keywords" content="Plenum">
    <meta name="author" content="Plenum">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileImage" content="images/favicon.ico" />
	  <link rel="icon" href="images/favicon.ico" sizes="32x32" />
	  <link rel="icon" href="images/favicon.ico" sizes="192x192" />
	  <link rel="apple-touch-icon" href="images/favicon.ico" />
    <title>Plenum Landing Page</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script>    
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5XGLRHJC');
    </script>

</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XGLRHJC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- modal -->
    <div class="modal fade" id="getStartedModal" tabindex="-1" aria-labelledby="getStartedModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <!-- Centered vertically -->
            <div class="modal-content">
                <div class="modal-header">
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-box" id="modal_form">
                        <h5>Get Started with Plenum</h5>
                        <form name="mod_frm" id="mod_frm" action="process_form.php" method="POST">
                            <div class="d-flex">
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="nme_mod" name="nme" placeholder="Name" onkeyup="txtValidatemod();" required>
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="eml_mod" name="eml" placeholder="Business Email address"
                                        required>
                                </div>
                            </div>
                            <div class="d-flex">
                            <div class="mb-3">
                                <input type="tel" class="form-control" id="phn_mod" name="phn" placeholder="Phone Number" onkeyup="numValidatemod();" required>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="comp_mod" name="comp" placeholder="Company" required>
                            </div>
                            </div>
                            <div class="mb-3">
                              	<textarea class="form-control" id="goal_mod" name="goal" placeholder="Your Main Goal With us" required></textarea>
                            </div>
                                      	
                            <?php ?>
                            <?php

                            $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $rfer_dmn = parse_url($_SERVER['HTTP_REFERER']);
                            ?>

                            <input type="hidden" id="gclid_mod" name="gclid" maxlength='255' value="<?php echo $_GET['gclid']; ?>">
                            <input type="hidden" id="utm_source_mod" name="utm_source" maxlength='255' value="<?php echo $_GET['utm_source']; ?>">
                            <input type="hidden" id="utm_medium_mod" name="utm_medium" maxlength='255' value="<?php echo $_GET['utm_medium']; ?>">
                            <input type="hidden" id="utm_campaign_mod" name="utm_campaign" maxlength='255' value="<?php echo $_GET['utm_campaign']; ?>">
                            <input type="hidden" id="utm_term_mod" name="utm_term" maxlength='255' value="<?php echo $_GET['utm_term']; ?>">
                            <input type="hidden" id="utm_content_mod" name="utm_content" maxlength='255' value="<?php echo $_GET['utm_content']; ?>">

                            <input type="hidden" name='utm_ref' id='utm_ref_mod' maxlength='255' value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                            <input type="hidden" name='utm_ref_dom' id='utm_ref_dom_mod' maxlength='255' value="<?php echo $rfer_dmn['host'] ?>">

                            <?php  
                              if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                // This may contain a list of IPs; take the first one, which is the real client IP
                                $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
                              } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
                                $ip = $_SERVER['HTTP_CLIENT_IP'];
                              } else {
                                $ip = $_SERVER['REMOTE_ADDR'];
                              }
                              
                            ?>

                            <input type="hidden" name='ip_add' id='ip_add_mod' maxlength='255' value="<?php echo $ip; ?>">
                          
                            <div class="text-center">
                                <button type="button" class="btn_custom" id="mod_frm_btn" onclick="checkValidationmod();">
                                    Book a Free Demo <img src="images/btn-white-arrow.svg" alt=""
                                        style="width:16px; height:16px; margin-left:5px;">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

    <header class="lp-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo_contact">
                        <img src="images/logo.svg" alt="Logo">
                        <a id="contact_header" href="javascript:void(0);" class="btn_custom" data-bs-toggle="modal"
                            data-bs-target="#getStartedModal">Contact Us <span><img src="images/btn-white-arrow.svg"
                                    alt=""></span></a>
                        <a id="free_demo_header" href="javascript:void(0);" class="btn_custom" data-bs-toggle="modal"
                            data-bs-target="#getStartedModal">Book a Free Demo <span><img
                                    src="images/btn-white-arrow.svg" alt=""></span></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- banner-section -->
    <section class="banner_lp position-relative">
        <picture>
            <source media="(max-width: 767px)" srcset="images/mobile-banner.jpg">
            <img src="images/banner-desktop.jpg" alt="Banner" class="img-fluid w-100">
        </picture>
        <div class="banner_lp_content">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="banner_inr">
                            <div class="banner_left">
                                <h1>Up to 40% Faster <br> Processes, <span>100%</span> <br> Compliant.</h1>
                                <p>The all-in-one platform for global HR, payroll and compliance <br> for both global
                                    workforce and EOR employees.</p>
                            </div>
                            <div class="banner_right">
                                <div class="form-box" id="banner_form">
                                    <h3>Get Started with Plenum</h3>
                                    <form name="ban_frm" id="ban_frm" action="process_form.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="nme" id="nme" placeholder="Name" class="form-control" onkeyup="txtValidate();">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="eml" id="eml" placeholder="Business Email address"
                                                class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="phn" id="phn" placeholder="Phone Number"
                                                class="form-control" onkeyup="numValidate();">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="comp" id="comp" placeholder="Company" class="form-control">
                                        </div>
                                        <div class="form-group">
                              				<textarea class="form-control" id="goal" name="goal" placeholder="Your Main Goal With us" required></textarea>
                                        </div>
                                      	
                                      	<?php ?>
                                        <?php
                                            $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                          
                                            $rfer_dmn = parse_url($_SERVER['HTTP_REFERER']);
                                        ?>

                                        <input type="hidden" id="gclid" name="gclid" maxlength='255' value="<?php echo $_GET['gclid']; ?>">
                                        <input type="hidden" id="utm_source" name="utm_source" maxlength='255' value="<?php echo $_GET['utm_source']; ?>">
                                        <input type="hidden" id="utm_medium" name="utm_medium" maxlength='255' value="<?php echo $_GET['utm_medium']; ?>">
                                        <input type="hidden" id="utm_campaign" name="utm_campaign" maxlength='255' value="<?php echo $_GET['utm_campaign']; ?>">
                                        <input type="hidden" id="utm_term" name="utm_term" maxlength='255' value="<?php echo $_GET['utm_term']; ?>">
                                        <input type="hidden" id="utm_content" name="utm_content" maxlength='255' value="<?php echo $_GET['utm_content']; ?>">

                                        <input type="hidden" name='utm_ref' id='utm_ref' maxlength='255' value="<?php echo $_SERVER['HTTP_REFERER']; ?>">
                                        <input type="hidden" name='utm_ref_dom' id='utm_ref_dom' maxlength='255' value="<?php echo $rfer_dmn['host'] ?>">

                                        <?php  
                                            if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                                                // This may contain a list of IPs; take the first one, which is the real client IP
                                                $ip = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0];
                                            } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
                                                $ip = $_SERVER['HTTP_CLIENT_IP'];
                                            } else {
                                                $ip = $_SERVER['REMOTE_ADDR'];
                                            }
                                        ?>

                                        <input type="hidden" name='ip_add' id='ip_add' maxlength='255' value="<?php echo $ip; ?>">
                                      
                                        <div class="form-btn">
                                            <button class="btn_custom" id="ban_frm_btn" type="button" onclick="checkValidationban();">Book a Free Demo <span><img
                                                        src="images/btn-white-arrow.svg" alt=""></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_point">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="baner_point_mobile">
                            <div class="swiper baner_point_slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="pointers"><span><img src="images/tick_icon.svg"
                                                    alt="Tick Icon"></span>15 Years Of
                                            Expertise</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pointers"><span><img src="images/tick_icon.svg"
                                                    alt="Tick Icon"></span>30+ Successful
                                            MS Dynamics Implementation</div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="pointers"><span><img src="images/tick_icon.svg"
                                                    alt="Tick Icon"></span>Up to 160% ROI
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="banner-list">
                            <li><span><img src="images/tick_icon.svg" alt=""></span>15 Years Of Expertise</li>
                            <li><span><img src="images/tick_icon.svg" alt=""></span>30+ Successful MS Dynamics
                                Implementation</li>
                            <li><span><img src="images/tick_icon.svg" alt=""></span>Up to 160% ROI</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section -->

    <!-- Trusted by Leading Enterprises Across UAE & GCC -->
    <section class="enterprises_sec pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title_small mb-5 text-center">Trusted by Leading Enterprises Across UAE & GCC</h2>
                </div>
                <div class="col-md-12">
                    <div class="swiper leading_enterprise_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="trusted_logo"><img src="images/trustes-1.svg" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trusted_logo"><img src="images/trustes-2.svg" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trusted_logo"><img src="images/trustes-3.svg" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trusted_logo"><img src="images/trustes-4.svg" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trusted_logo"><img src="images/trustes-5.svg" alt=""></div>
                            </div>
                            <div class="swiper-slide">
                                <div class="trusted_logo"><img src="images/trustes-6.svg" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trusted by Leading Enterprises Across UAE & GCC -->

    <!-- Key Features -->
    <section class="enterprises_sec keyfeat_sec pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title_big mb-5 text-center">Key Features</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order_2">

                    <div class="key_feature_box">
                        <div class="key_feature_box_item">
                            <span><img src="images/key_icon_a.svg" alt=""></span>
                            <h3>Payroll Accuracy & Compliance</h3>
                            <p>With built-in WPS, this automates deductions, allowances, multi-currency payroll and
                                gratuity successfully across 3 countries.</p>
                        </div>
                        <div class="key_feature_box_item">
                            <span><img src="images/key_icon_b.svg" alt=""></span>
                            <h3>Leave & Attendance</h3>
                            <p>It provides the complete UAE-compliant calendar and leave types in one platform and helps
                                in biometric/remote tracking and smart approval workflows. </p>
                        </div>
                        <div class="key_feature_box_item">
                            <span><img src="images/key_icon_c.svg" alt=""></span>
                            <h3>Employee Self-Service</h3>
                            <p>With a secure mobile and web access, this provides a comprehensive view of payslips,
                                leave requests, visa/passport documents in one portal and reduces HR workload through
                                self-service adoption. </p>
                        </div>
                        <div class="key_feature_box_item">
                            <span><img src="images/key_icon_d.svg" alt=""></span>
                            <h3>Loans & Advances</h3>
                            <p>It configures approval hierarchies, automates EMI calculations and provides a real-time
                                balance visibility.</p>
                        </div>
                    </div>
                    <a href="javascript:void(0);" id="book-a-free-demo" class="btn_custom">Book a Free Demo <span><img src="images/btn-white-arrow.svg"
                                alt=""></span></a>
                </div>
                <div class="col-md-6 order_1">
                    <div class="key_feature_mobile">
                        <div class="swiper key_feature_slider_mobile">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="key_feature_box_item">
                                        <span><img src="images/key_icon_a.svg" alt=""></span>
                                        <h3>Payroll Accuracy & Compliance</h3>
                                        <p>With built-in WPS, this automates deductions, allowances, multi-currency
                                            payroll and
                                            gratuity successfully across 3 countries.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="key_feature_box_item">
                                        <span><img src="images/key_icon_b.svg" alt=""></span>
                                        <h3>Leave & Attendance</h3>
                                        <p>It provides the complete UAE-compliant calendar and leave types in one
                                            platform and helps
                                            in biometric/remote tracking and smart approval workflows. </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="key_feature_box_item">
                                        <span><img src="images/key_icon_c.svg" alt=""></span>
                                        <h3>Employee Self-Service</h3>
                                        <p>With a secure mobile and web access, this provides a comprehensive view of
                                            payslips,
                                            leave requests, visa/passport documents in one portal and reduces HR
                                            workload through
                                            self-service adoption. </p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="key_feature_box_item">
                                        <span><img src="images/key_icon_d.svg" alt=""></span>
                                        <h3>Loans & Advances</h3>
                                        <p>It configures approval hierarchies, automates EMI calculations and provides a
                                            real-time
                                            balance visibility.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="pagination_one">
                                <div class="swiper-pagination swiper-pagination-key"></div>
                            </div>
                        </div>
                    </div>
                    <div class="key_single"><img src="images/key_feture_bg.jpg" alt="" class="w-100"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Key Features -->

    <!-- Eliminating Manual HR Module's Roadblocks With Our Solutions -->
    <section class="eleminting_solution_sec pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title_big mb-5 text-center text-white">Eliminating Manual HR Module's Roadblocks <br>
                        With Our Solutions</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="elemin_mobile">
                        <div class="swiper elemina_slider_mobile">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="ele_box">
                                        <span><img src="images/ele_icon_a.svg" alt=""></span>
                                        <h3>Struggling with endless paperwork during hiring?</h3>
                                        <p>Switch to automated onboarding with digitised documentation to speed up
                                            processes and reduce errors.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ele_box">
                                        <span><img src="images/ele_icon_b.svg" alt=""></span>
                                        <h3>Wasting hours managing disconnected HR, Finance and Audit data?</h3>
                                        <p>Use an all-in-one automated platform with centralised, role-based access and
                                            audit trails for seamless control.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ele_box">
                                        <span><img src="images/ele_icon_c.svg" alt=""></span>
                                        <h3>Finding payroll compliance complicated and error-prone?</h3>
                                        <p>Rely on MOHRE compliant, automated payroll system with built-in WPS for
                                            gratuity and leave salary.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ele_box mt-4">
                                        <span><img src="images/ele_icon_d.svg" alt=""></span>
                                        <h3>Facing employee frustration with delayed access to payslips, leaves and
                                            claims?</h3>
                                        <p>Empower your people with Employee Self-Service for instant access to
                                            everything they need.</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="ele_box mt-4">
                                        <span><img src="images/ele_icon_e.svg" alt=""></span>
                                        <h3>Dealing with inefficient attendance and shift tracking?</h3>
                                        <p>Enable smart leave, attendance and shift tracking with automated approval
                                            workflows.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Pagination bullets -->
                            <div class="pagination_one">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center ele_row_mobile">

                <div class="col-md-4">
                    <div class="ele_box">
                        <span><img src="images/ele_icon_a.svg" alt=""></span>
                        <h3>Struggling with endless paperwork during hiring? </h3>
                        <p>Switch to automated onboarding with digitised documentation to speed up processes and reduce
                            errors. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ele_box">
                        <span><img src="images/ele_icon_b.svg" alt=""></span>
                        <h3>Wasting hours managing disconnedted HR, Finance and Audit data? </h3>
                        <p>Use an all-in-one automated platform with centralised, role-based access and audit trails for
                            seamless control. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ele_box">
                        <span><img src="images/ele_icon_c.svg" alt=""></span>
                        <h3>Finding payroll compliance complicated and error-prone?</h3>
                        <p>Rely on MOHRE compliant, automated payroll system with built-in WPS for gratuity and leave
                            salary.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ele_box mt-4">
                        <span><img src="images/ele_icon_d.svg" alt=""></span>
                        <h3>Facing employee frustration with delayed access to payslips, leaves and claims? </h3>
                        <p>Empower your people with Employee Self-Service for instant access to everything they need.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ele_box mt-4">
                        <span><img src="images/ele_icon_e.svg" alt=""></span>
                        <h3>Dealing with inefficient attendance and shift tracking? </h3>
                        <p>Enable smart leave, attendance and shift tracking with automated approval workflows. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Eliminating Manual HR Module's Roadblocks With Our Solutions -->

    <!-- Benfits of using HR Module & Payroll ERP -->
    <section class="benfits_pay_sec pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="title_big mb-5">Benfits of using HR Module & Payroll ERP</h2>
                        <div id="mobile_benfits" class="next_befits">
                            <div class="btn-slider swiper-button-prev benfits-pay-prev"><img
                                    src="images/slider_prev.svg" alt=""></div>
                            <div class="btn-slider swiper-button-next benfits-pay-next"><img
                                    src="images/slider_next.svg" alt=""></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="swiper benfits-pay-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="befits_box">
                                        <img src="images/benfits_icon_a.svg" alt="">
                                        <p>Saves Time</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="befits_box">
                                        <img src="images/benfits_icon_b.svg" alt="">
                                        <p>Increases Accuracy</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="befits_box">
                                        <img src="images/benfits_icon_c.svg" alt="">
                                        <p>Empowers Staff</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="befits_box">
                                        <img src="images/benfits_icon_d.svg" alt="">
                                        <p>Streamlines Processes</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="befits_box">
                                        <img src="images/benfits_icon_e.svg" alt="">
                                        <p>Helps In Better Decision-Making</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="befits_box">
                                        <img src="images/benfits_icon_f.svg" alt="">
                                        <p>Stays Compliant With UAE Regulations</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Navigation buttons -->
                <div id="desktop_benfits" class="next_befits">
                    <div class="btn-slider swiper-button-prev benfits-pay-prev"><img src="images/slider_prev.svg"
                            alt=""></div>
                    <div class="btn-slider swiper-button-next benfits-pay-next"><img src="images/slider_next.svg"
                            alt=""></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Benfits of using HR Module & Payroll ERP -->

    <!-- Why we stand out ? -->
    <div class="why_stand pt-5 pb-5">
        <div class="container">
            <div class="col-md-12">
                <div class="why_stand_inr">
                    <div class="why_stand_contant">
                        <h2 class="title_big mb-5">Why we stand out ?</h2>
                        <div class="accordion" id="whyWeStandOutAccordion">
                            <!-- Item 1 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Comprehensive Solution
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#whyWeStandOutAccordion">
                                    <div class="accordion-body">
                                        <p>AI-powered Dynamics 365 ERP for innovation, smarter decision-making,
                                            predictive insights and automation.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Seamless Integration
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#whyWeStandOutAccordion">
                                    <div class="accordion-body">
                                        We implement cutting-edge technology to create solutions that are both
                                        efficient and scalable.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Certified Microsoft Partner
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#whyWeStandOutAccordion">
                                    <div class="accordion-body">
                                        Our support team is available 24/7 to assist you with any questions or
                                        issues you may encounter.
                                    </div>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Deep Domain Expertise
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#whyWeStandOutAccordion">
                                    <div class="accordion-body">
                                        We have a track record of delivering measurable results that drive business
                                        growth and success.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" id="Schedule-a-free-demo" class="btn_custom">Schedule a Free Demo <span><img src="images/btn-white-arrow.svg"
                                    alt=""></span></a>
                    </div>
                    <div class="why_stand_image">
                        <figure>
                            <img src="images/whystandimg.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why we stand out ? -->

    <!-- Customer Testimonials -->
    <div class="testimonials_sec pt-5 pb-5">
        <div class="container">
            <div class="col-md-12">
                <div class="testimonials_sec_box">
                    <h2 class="title_big mb-5 text-center ">Customer Testimonials</h2>
                    <div class="swiper testimonials_slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tst_box">
                                    <p>Plenum showcases deep knowledge and a thorough understanding of every project
                                        they undertake. Their expertise allows them to anticipate challenges and provide
                                        effective solutions, ensuring smooth progress. This strong foundation, combined
                                        with clear communication, enables them to deliver high-quality results well
                                        ahead of schedule.</p>
                                    <h6>Khalid Abi Kahlil</h6>
                                    <span>CTOO SCB Bahrain</span>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tst_box">
                                    <p>Plenum is one of the most professional and reliable companies. They are fully
                                        transparent throughout every project and consistently deliver well ahead of
                                        schedule. Their commitment to clear communication and timely completion truly
                                        sets them apart</p>
                                    <h6>Shehrazade Hasan</h6>
                                    <span>CTOO SCB Qatar </span>
                                </div>
                            </div>

                        </div>
                        <div class="next_befits">
                            <div class="btn-slider swiper-button-prev testimonial-prev"><img
                                    src="images/slider_prev.svg" alt=""></div>
                            <div class="btn-slider swiper-button-next testimonial-next"><img
                                    src="images/slider_next.svg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Customer Testimonials -->

    <!-- About Plenum Tech -->
    <section class="about_plenum_tech pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_plenum_tech_content_box">
                        <div class="about_content_box_content">
                            <img src="images/illus_img.svg" alt="">
                            <h2 class="title_big text-white">About Plenum Tech</h2>
                            <p>Plenum is an UAE based intelligent technology service provider focused on delivering
                                enterprise-grade technology solutions that increase efficiency, scalability and informed
                                decision-making. </p>
                        </div>
                        <div class="about_content_box_video">
                            <figure>
                                <video autoplay loop muted playsinline>
                                    <source src="images/book-demo-guide.webm" type="video/webm">
                                </video>
                                <!-- <video src=""></video> -->
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Plenum Tech -->

    <!-- faqs -->
    <section class="faqs_sec pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="title_big text-center mb-5">FAQs</h2>
                    <div class="accordion" id="faqsAccordion">

                        <!-- FAQ Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseOne" aria-expanded="true"
                                    aria-controls="faqCollapseOne">
                                    Can my employees easily access and manage their HR data themselves ?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show"
                                aria-labelledby="faqHeadingOne" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    <p>Yes. The Employee Self-Service (ESS) portal allows staff to view payslips, submit leave requests, manage claims and upload documents securely. This reduces HR queries and empowers employees to handle routine HR tasks independently.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseTwo" aria-expanded="false"
                                    aria-controls="faqCollapseTwo">
                                    How does Plenum’s HR solution save time and reduce administrative burdens for my HR team?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo"
                                data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    From automated onboarding to attendance, leave management, payroll and reporting, Plenum centralises all HR tasks. Smart workflows, approvals and dashboards cut down repetitive admin work, allowing HR teams to focus on strategic initiatives instead of routine tasks.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseThree" aria-expanded="false"
                                    aria-controls="faqCollapseThree">
                                    Can this HR & Payroll solution grow with my business as we expand across multiple regions?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingThree" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    Absolutely. Plenum’s add-on is scalable, handling multi-location, multi-currency and multi-country setups. As your business grows, the system adapts seamlessly, ensuring consistent compliance and streamlined HR operations across regions.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseFour" aria-expanded="false"
                                    aria-controls="faqCollapseFour">
                                    How can Plenum’s HR & Payroll Add-On help me stay compliant with UAE labor laws and MOHRE regulations without the headache?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFour" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    Plenum’s HR & Payroll Add-On is purpose-built for the UAE, automatically handling WPS compliance, gratuity, leave salaries and all labor law requirements. With built-in audit trails and error-free calculations, you can rest assured your HR processes remain 100% compliant, without manual tracking or stress.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqCollapseFive" aria-expanded="false"
                                    aria-controls="faqCollapseFive">
                                    What makes Plenum’s payroll processing faster, more accurate, and hassle-free?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse"
                                aria-labelledby="faqHeadingFive" data-bs-parent="#faqsAccordion">
                                <div class="accordion-body">
                                    Payroll is fully automated within Business Central, including WPS, gratuity, allowances and deductions. Smart workflows and pre-configured UAE-compliant rules ensure error-free processing, significantly reducing manual effort while improving speed and accuracy.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faqs -->

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Bootstrap 5 Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="js/script.js"></script>
  
  	<script>
        function txtValidate() {
            var element = document.getElementById('nme');
            element.value = element.value.replace(/[^a-zA-Z_ ]+/, '');
        };
        function numValidate() {
            var element = document.getElementById('phn');
            element.value = element.value.replace(/[^0-9_]+/, '');
        };
        function txtValidatemod() {
            var element = document.getElementById('nme_mod');
            element.value = element.value.replace(/[^a-zA-Z_ ]+/, '');
        };
        function numValidatemod() {
            var element = document.getElementById('phn_mod');
            element.value = element.value.replace(/[^0-9_]+/, '');
        };
    </script>

    <script>
        function checkValidationban() {
            //alert("a");
            var name = jQuery("#nme").val();
            var email = jQuery("#eml").val();
            var phone = jQuery("#phn").val();
            var goal = jQuery("#goal").val();
            var company = jQuery("#comp").val();           

            var email_pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var phone_pattern = /^[\d\s+-]+$/;

            if (name == '') {
                alert("Enter your name");
                jQuery("#nme").focus();
                return false;
            }
            else if (email == '') {
                //alert("aa");
                alert("Enter your email id");
                jQuery("#eml").focus();
                return false;
            }
            else if (!email_pattern.test(email)) {
                alert("Invalid email id");
                jQuery("#eml").focus();
                return false;
            }
            //else if (domain && forbiddenDomains.includes(domain.toLowerCase())) {
            //  alert("Gmail and Yahoo email addresses are not allowed.");
            //  jQuery("#eml").focus();
            //  return false;
            //}
            else if (phone == '') {
                //alert("aa");
                alert("Enter your 10 digit phone number");
                jQuery("#phn").focus();
                return false;
            }
            else if (!phone_pattern.test(phone)) {
                alert("Invalid phone number");
                jQuery("#phn").focus();
                return false;
            }
            else if (phone.length < 10 || phone.length > 11) {
                alert("Invalid phone number");
                jQuery("#phn").focus();
                return false;
            }
            else if (company == '') {
                alert("Please Enter Your Company Name");
                jQuery("#comp").focus();
                return false;
            }
            else if (goal == '') {
                alert("Please Enter Your Message");
                jQuery("#goal").focus();
                return false;
            }            
            // else if (grecaptcha.getResponse(html_element_ban_id) == '') {
            //     //alert("aa");
            //     alert("Captcha can not be blank! Kindly verify the captcha.");
            //     jQuery("#ban_cap").focus();
            //     return false;
            // }
            else {
                jQuery("#ban_frm_btn").attr("disabled", true);
                document.ban_frm.submit();
            }
        }
      
      	
        function checkValidationmod() {
            var name = jQuery("#nme_mod").val();
            var email = jQuery("#eml_mod").val();
            var phone = jQuery("#phn_mod").val();
            var goal = jQuery("#goal_mod").val();
            var company = jQuery("#comp_mod").val();           

            var email_pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
            var phone_pattern = /^[\d\s+-]+$/;

            if (name == '') {
                alert("Enter your name");
                jQuery("#nme_mod").focus();
                return false;
            }
            else if (email == '') {
                alert("Enter your email id");
                jQuery("#eml_mod").focus();
                return false;
            }
            else if (!email_pattern.test(email)) {
                alert("Invalid email id");
                jQuery("#eml_mod").focus();
                return false;
            }
            else if (phone == '') {
                alert("Enter your 10 digit phone number");
                jQuery("#phn_mod").focus();
                return false;
            }
            else if (!phone_pattern.test(phone)) {
                alert("Invalid phone number");
                jQuery("#phn_mod").focus();
                return false;
            }
            else if (phone.length < 10 || phone.length > 11) {
                alert("Invalid phone number");
                jQuery("#phn_mod").focus();
                return false;
            }
            else if (company == '') {
                alert("Please Enter Your Company Name");
                jQuery("#comp_mod").focus();
                return false;
            }
            else if (goal == '') {
                alert("Please Enter Your Message");
                jQuery("#goal_mod").focus();
                return false;
            }            
            else {
                jQuery("#mod_frm_btn").attr("disabled", true);
                document.mod_frm.submit();
            }
        }
    </script>
    <script type="text/javascript">
	    $("#book-a-free-demo").click(function () {
	      $('html, body').animate({
	        scrollTop: $(".form-box").offset().top
	      }, 500);
	    });
	    $("#Schedule-a-free-demo").click(function () {
	      $('html, body').animate({
	        scrollTop: $(".form-box").offset().top
	      }, 500);
	    });
  
  </script>
</body>

</html>