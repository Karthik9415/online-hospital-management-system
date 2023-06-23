<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/10-09-2018/alleviating_demo_Free/1470515739/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2019 10:36:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title> HOSPITAL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />

    <!-- Custom Theme files -->
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="all">
    <!-- font-awesome icons -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet">
    <!-- //Custom Theme files -->
    <link href="css/minimal-slider.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
    <!-- online-fonts -->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
</head>
<body>

<body>
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
        <h1>
            <a class="navbar-brand text-white" href="index.html">
                HOSPITAL MANAGEMENT SYSTEM
            </a>
        </h1>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto text-center">
                <li>
                    <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                        <a href="home1">Home</a>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- main image slider container -->
<div class="slide-window">
    <div class="slide-wrapper" style="width:300%;">
        <div class="slide">
            <div class="slide-caption text-center">
                <h3 class="text-uppercase">A range of programs for women’s <span>healthcare</span></h3>
            </div>
        </div>
        <div class="slide slide2">
            <div class="slide-caption text-center">
                <h3 class="text-uppercase">Individual approach to <span>Each Patient </span></h3>
            </div>
        </div>
        <div class="slide slide3">
            <div class="slide-caption text-center">
                <h3 class="text-uppercase">Committed to excellence <span>Medical Clinic</span></h3>
            </div>
        </div>
    </div>
    <div class="slide-controller">
        <div class="slide-control-left">
            <div class="slide-control-line"></div>
            <div class="slide-control-line"></div>
        </div>
        <div class="slide-control-right">
            <div class="slide-control-line"></div>
            <div class="slide-control-line"></div>
        </div>
    </div>
</div>
<!-- main image slider container -->
<!-- end of main image slider container -->
<!--about-->
<div class="about">
    <div class="abt-layer">
        <!---728x90--->

        <div class="container">
            <div class="about-main" style="margin-left: 280px">
                <div class="about-right">
                    <h3 class="subheading-w3-agile" align="center">USER LOGIN</h3>
                    <!-- stats -->
                    <div class="stats">
                        <div class="stats_inner">
                            <form action="<?php echo base_url()?>userlogin/login" method="post">
                                <input class="form-control mb-3" type="text" placeholder="Username" name="name" required="">
                                <input class="form-control mb-3" type="text" placeholder="Password" name="password" required="">
                                <button type="submit" class="btn btn-agile btn-block w-100">SUBMIT</button>
                              <label> NEW USER REGISTTER</label> <a href="register">Click Here!!</a>
                            </form>
                        </div>
                    </div>
                    <!-- //stats -->

                </div>
            </div>

        </div>
        <!---728x90--->

    </div>
</div>
<!--//about-->

<!---728x90--->


<!-- //testimonials -->

<!-- choose -->

<!-- //choose -->

<!-- case studies -->

<!-- //case studies -->
<!-- footer -->
<footer class="py-sm-5">
    <div class="container">

        <div class="cpy-right text-center  pt-3">

            <div class="copyrightbottom">
                <p class="text-secondary">© 2018 Alleviating. All rights reserved | Design by
                    <a href="#" class="text-white"> FABSYS.</a>
                </p>
            </div>
            <div class="copyrighttop">
                <ul>
                    <li>
                        <h4>Follow us on:</h4>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
                            <i class="fab fa-pinterest-p"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //footer container -->
</footer>
<!-- //footer -->

<!-- login  -->

<!-- //login -->
<!--/Register-->
<!--//Register-->

<!-- //footer -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<script src="js/minimal-slider.js"></script>
<!-- flexSlider (for testimonials) -->
<!-- Calendar -->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<!-- //Calendar -->

<script defer src="js/jquery.flexslider.js"></script>
<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider (for testimonials) -->

<!-- script for password match -->

<!-- script for password match -->
<!-- start-smooth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>

<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->

<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth-scrolling-of-move-up -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
</body>

<!-- Mirrored from demo.w3layouts.com/demos_new/template_demo/10-09-2018/alleviating_demo_Free/1470515739/web/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Mar 2019 10:38:21 GMT -->
</html>