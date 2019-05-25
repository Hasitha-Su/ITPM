<!DOCTYPE html>
<html>
<head>
    <title>jQuery autocomplete</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
        #search_container {text-align: center;}

    </style>
    <link rel="stylesheet" type="text/css" href="styles/searchgrid.css">
    <link rel="stylesheet" type="text/css" href="styles/stylesearch.css">

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

    <header class="header d-flex flex-row">
        <div class="header_content d-flex flex-row align-items-center">
            <!-- Logo -->
            <div class="logo_container">
                <div class="logo">
                    <img src="images/logo.png" alt="">
                    <span>ABC</span>
                </div>
            </div>

            <!-- Main Navigation -->
            <nav class="main_nav_container">
                <div class="main_nav">
                    <ul class="main_nav_list">
                        <li class="main_nav_item"><a href="#">home</a></li>
                        <li class="main_nav_item"><a href="#">about us</a></li>
                        <li class="main_nav_item"><a href="courses.html">courses</a></li>
                        <li class="main_nav_item"><a href="elements.html">elements</a></li>
                        <li class="main_nav_item"><a href="news.html">news</a></li>
                        <li class="main_nav_item"><a href="contact.html">contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="images/phone-call.svg" alt="">
            <span>+43 4566 7788 2457</span>
        </div>

        <!-- Hamburger -->
        <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
        </div>

    </header>

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
                <div class="menu_copyright menu_mm"> All rights reserved</div>
            </div>
        </div>
    </div>












<div id="search_container" class="search-box">
    <h2 class="head-search">Search for Course</h2>
    <input  style="width: 200px; margin: auto" type="text" class="form-control" id="course" placeholder="Type a course name" autocomplete="off">
<!--    <div id="results" style="width: 300px"></div>-->

    <div style="margin: auto; text-align: center; margin-bottom: 10px">
        <select class="form-control" style="width: 250px; margin: auto; margin-top: 10px;" name="selectedCourse" id="selectedCourse">
        </select>
    </div>

</div>

<table id="courseModules" class="table" style="width: 500px; margin: auto; display: none">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Module No</th>
        <th scope="col">Module Name</th>
    </tr>
    </thead>
    <tbody id="modulesTbody">
    </tbody>
</table>

<!--Footer -->
<footer class="footer">
    <div class="container">
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
                                </div>hello@ABCinstitute.com
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Copyright -->

        <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
            <div class="footer_copyright">

                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  ABC Institute</a>

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


<script type="text/javascript">
    $(document).ready(function(){


        $("#course").keyup(function(){
            var query = $(this).val();
            if (query != "") {
                $.ajax({
                    url: 'query.php',
                    method: 'POST',
                    data: {query:query},
                    success: function(data)
                    {
                        if(data === 'false') {
                            $('#selectedCourse').html("<option>Course not found...</option>");
                            $('#courseModules').hide();
                            $('#modulesTbody').html("");
                        } else {
                            $('#selectedCourse').html(data);
                        }
                    }
                });
            } else {
                //do nothing
            }
        });

        $("#selectedCourse").change(function () {
            var selectedCourse = $(this).val();
            $.ajax({
                url: 'getModules.php',
                method: 'POST',
                data: {courseId:selectedCourse},
                success: function(data)
                {
                    $('#courseModules').show();
                    $('#modulesTbody').html(data);
                }
            });
        });
    });
</script>

</body>
</html>