<?php
/**
 * Created by PhpStorm.
 * User: tt2018143
 * Date: 4/1/2019
 * Time: 10:20 AM
 */
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Course</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->

    <?php require_once ('main.php')?>

    <!-- Menu -->
    <div class="menu_container menu_mm">

        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>

        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
            <div class="menu menu_mm">
                <ul class="menu_list menu_mm">
                    <li class="menu_item menu_mm"><a href="#">Home</a></li>
                    <li class="menu_item menu_mm"><a href="#">About us</a></li>
                    <li class="menu_item menu_mm"><a href="courses.html">Courses</a></li>
                    <li class="menu_item menu_mm"><a href="elements.html">Elements</a></li>
                    <li class="menu_item menu_mm"><a href="news.html">News</a></li>
                    <li class="menu_item menu_mm"><a href="contact.html">Contact</a></li>
                </ul>

                <!-- Menu Social -->

                <div class="menu_social_container menu_mm">
                    <ul class="menu_social menu_mm">
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>

                <div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
            </div>

        </div>

    </div>

    <!-- Home -->

    <div class="home">

        <!-- Hero Slider -->
        <div class="hero_slider_container">
            <div class="hero_slider owl-carousel">

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> <span>ABC INSTITUTE</span></h1>
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">get your education today!</h1>

                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> <span>ABC INSTITUTE</span></h1>
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">get your education today!</h1>

                        </div>
                    </div>
                </div>

                <!-- Hero Slide -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(images/slider_background.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"> <span>ABC INSTITUTE</span></h1>
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">get your education today!</h1>

                        </div>
                    </div>
                </div>

            </div>

            <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
            <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>
        </div>

    </div>

    <div class="hero_boxes">
        <div class="hero_boxes_inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/earth-globe.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Courses</h2>
                                <a href="courses.html" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/books.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Our Library</h2>
                                <a href="courses.html" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <img src="images/professor.svg" class="svg" alt="">
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Our Teachers</h2>
                                <a href="teachers.html" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Popular -->

    <div class="services page_section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Our Services</h1>
                    </div>
                </div>
            </div>

            <div class="row services_row">

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/earth-globe.svg" alt="">
                    </div>
                    <h3>Online Courses</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/exam.svg" alt="">
                    </div>
                    <h3>Indoor Courses</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/books.svg" alt="">
                    </div>
                    <h3>Amazing Library</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/professor.svg" alt="">
                    </div>
                    <h3>Exceptional Professors</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/blackboard.svg" alt="">
                    </div>
                    <h3>Top Programs</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

                <div class="col-lg-4 service_item text-left d-flex flex-column align-items-start justify-content-start">
                    <div class="icon_container d-flex flex-column justify-content-end">
                        <img src="images/mortarboard.svg" alt="">
                    </div>
                    <h3>Graduate Diploma</h3>
                    <p>In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum.</p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Footer -->

<footer class="footer">
    <div class="container">

        <!-- Newsletter -->

        <div class="newsletter">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h1>Subscribe to newsletter</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col text-center">
                    <div class="newsletter_form_container mx-auto">
                        <form action="post">
                            <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-center">
                                <input id="newsletter_email" class="newsletter_email" type="email" placeholder="Email Address" required="required" data-error="Valid email is required.">
                                <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- Footer Content -->

        <div class="footer_content">
            <div class="row">

                <!-- Footer Column - About -->
                <div class="col-lg-3 footer_col">

                    <!-- Logo -->
                    <div class="logo_container">
                        <div class="logo">
                            <img src="images/logo.png" alt="">
                            <span>course</span>
                        </div>
                    </div>

                    <p class="footer_about_text">In aliquam, augue a gravida rutrum, ante nisl fermentum nulla, vitae tempor nisl ligula vel nunc. Proin quis mi malesuada, finibus tortor fermentum, tempor lacus.</p>

                </div>

                <!-- Footer Column - Menu -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Menu</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="#">Home</a></li>
                            <li class="footer_list_item"><a href="#">About Us</a></li>
                            <li class="footer_list_item"><a href="courses.html">Courses</a></li>
                            <li class="footer_list_item"><a href="news.html">News</a></li>
                            <li class="footer_list_item"><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Usefull Links -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Usefull Links</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_list_item"><a href="#">Testimonials</a></li>
                            <li class="footer_list_item"><a href="#">FAQ</a></li>
                            <li class="footer_list_item"><a href="#">Community</a></li>
                            <li class="footer_list_item"><a href="#">Campus Pictures</a></li>
                            <li class="footer_list_item"><a href="#">Tuitions</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column - Contact -->

                <div class="col-lg-3 footer_col">
                    <div class="footer_column_title">Contact</div>
                    <div class="footer_column_content">
                        <ul>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                Blvd Libertad, 34 m05200 Arévalo
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>
                                0034 37483 2445 322
                            </li>
                            <li class="footer_contact_item">
                                <div class="footer_contact_icon">
                                    <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                </div>hello@company.com
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Copyright -->

        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
            <div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | ABC Institute
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
            </div>
            <div class="footer_social ml-sm-auto">
                <ul class="menu_social">
                    <li class="menu_social_item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>
</html>