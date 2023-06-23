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
    <title>Alleviating A Medical Category Bootstrap responsive Web Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Alleviating Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
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
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- //js -->

    <!-- pop-up(for video popup)-->
<!--    <link href="http://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet"><!-- //online-fonts -->
</head>
<style>
    table, th, td {
        border: 2px solid #ffffff;
        border-collapse: collapse;
        padding: 10px;
    }

    th{
        background-color:rebeccapurple;
    }
</style>
<body>
<script src='../../../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<body>
<!-- header -->
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">
        <h1>
            <a class="navbar-brand text-white" href="index.html">
                HOSPITAL
            </a>
        </h1>
        <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-lg-auto text-center">
                <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="home">HOME
                        <span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item dropdown active mr-3 mt-lg-0 mt-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        INPATIENT
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="inpatient">INPATIENT</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="inpatienttable">INPATIENT DETAILS</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="outpatienttable">OUTPATIENT DETAILS</a>
                    </div>
                </li>
                <li class="nav-item active  mr-3 mt-lg-0 mt-3">
                    <a class="nav-link" href="operation">OPERATION
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown active mr-3 mt-lg-0 mt-3">
                    <a class="nav-link dropdown-toggle" href="nurseatten" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        ATTENDANCE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="nurseatten">ATTENTANCE</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="attendancetable">DETAILS</a>
                    </div>
                </li>

                <li class="nav-item dropdown active mr-3 mt-lg-0 mt-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        BLOODBANK
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="bloodbank">BLOODBANK</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="donertable">DETAILS</a>
                    </div>
                </li>
                <li>
                    <button type="button" class="btn  ml-lg-2 w3ls-btn" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
                        <a href="home">LOGOUT</a>
                    </button>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="about">
    <div class="abt-layer">
        <div class="container">
            <div class="about-main" style="margin-left: 280px">
                <div class="about-right">
                    <h3 class="subheading-w3-agile">IN PATIENTS</h3>
                    <!-- stats -->
                    <div class="stats">
                        <div class="stats_inner">
                            <form action="<?php echo base_url()?>inpatient/inp" method="post">
                                <input class="form-control mb-3" type="text" placeholder="Patient Name" name="pname" required="">
                                <input class="form-control mb-3" type="text" placeholder="Patient Address" name="address" required="">
                                <input class="form-control mb-3" type="text" placeholder="Room Number" name="rno" required="">
                                <?php
                                        foreach ($quans as $quan) {
                                        ?>
                                <select class="form-control mb-3" name="nname">
                                        <option value="<?php echo $quan['name']?>"><?php echo $quan['name']?> </option>
                                </select>
                                            <?php
                                        }
                                        ?>
                                <select class="form-control mb-3" name="testdetails" placeholder="Test Details">
                                    <option>--select--</option>
                                    <option value="urinal">urinal</option>
                                    <option value="blood">blood</option>
                                    <option value="caff"></option>
                                </select>

                                <table style="width: 100%">
                                    <tr>

                                        <th>ProductName</th>
                                        <th>Quantity</th>
                                        <th>Cost</th>
                                        <th>Total</th>


                                    </tr>
                                    <tr>
                                            <td>
                                                <select   style="width: 70px" onchange="medi()" name="quan" id="met">
                                                    <option value="1" >dot</option>
                                                    <option value="2" >paracitamal</option>
                                                    <option value="3" selected>goldact</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select   style="width: 70px" onchange="medi()" name="quan" id="qt">
                                                    <option value="5" >5</option>
                                                    <option value="4" >4</option>
                                                    <option value="3" >3</option>
                                                    <option value="2" >2</option>
                                                    <option value="1" selected>1</option>
                                                </select>
                                            </td>
                                            <td  id="cost"></td>
                                            <td id="amount"></td>
                                        </tr>
                                </table>
                                <br>
                                <input class="form-control date mb-3" name="amount" placeholder="Amount" required="" id="total">
                                <button type="submit" class="btn btn-agile btn-block w-100">SUBMIT</button>
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

<script>
    $(document).ready(function () {
//        $('#cost').innerHTML=20;
//        $('#amount').innerHTML=20;
        document.getElementById('cost').innerHTML=20;
        document.getElementById('amount').innerHTML=20;
        document.getElementById('total').innerHTML=20;


    })
    function medi() {
         p=0;
        var med= document.getElementById('met').value;
        if(med==1)
        {
            p=20;
        }
        else  if(med==2)
        {
            p=30;
        }
        else  if(med==3)
        {
            p=40;
        }

        var qt= document.getElementById('qt').value;
//        alert(p);
        document.getElementById('amount').innerHTML=(p*qt);
        document.getElementById('cost').innerHTML=(p);
        document.getElementById('total').value=(p*qt);
    }


</script>

<footer class="py-sm-5">
    <div class="container">

        <div class="cpy-right text-center  pt-3">

            <div class="copyrightbottom">
                <p class="text-secondary">© 2018 Alleviating. All rights reserved | Design by
                    <a href="http://w3layouts.com/" class="text-white"> W3layouts.</a>
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
<!-- //Calendar -->

<script defer src="js/jquery.flexslider.js"></script>
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