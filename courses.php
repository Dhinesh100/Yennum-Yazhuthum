<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Yennum Yazhuthum-Articles</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +91 98941 04549</a>
                <a href="#"><span>Email:</span> rajend.tn@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="https://www.facebook.com/profile.php?id=100004554255022"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/dhinesh.carlsen/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://twitter.com/gv_dhinesh"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><span>Yennum Yazhuthum</span></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="courses.html">Articles</a>
                                <li><a href="blog.html">Upload</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="index.html#register" class="btn active">Register</a>
                            </div>

                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="courses.html">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Mathematics &amp; Literature</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg2.jpg);">
        <h3>Mathematics &amp; Literature</h3>
    </div>

    <!-- ##### Popular Course Area Start ##### -->
    <section class="popular-courses-area section-padding-100">
        <div class="text-center">
			<?php
			$dbh = new PDO("mysql:host=localhost;dbname=yennum_yazhuthum", "root", "");
			$stat = $dbh->prepare("SELECT * FROM FILES");
			$stat->execute();
			$count=0;
			while ($row=$stat->fetch()) {
				echo "<a href='/clever".$row['file']."'><h4>".$row['title']."</h4></a>";
				echo "<span>Date".$row['date']."</span></br>";
				echo "<p>".$row['description']."</p>";
				$count=$count+1;
			}
			if($count==0) {
				echo "<h4>NOTHING TO SHOW</h4>";
			}
			?>
		</div>
    </section>
    <!-- ##### Popular Course Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Footer Logo -->
                        <div class="footer-logo">
                            <a href="index.html"><span style="color: white">Yennum Yazhuthum</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="tel:9894104549"><span>Phone:</span> +91 98941 04549</a>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=rajend.tn@gmail.com"><span>Email:</span> rajend.tn@gmail.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="https://www.facebook.com/profile.php?id=100004554255022"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/dhinesh.carlsen/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="https://twitter.com/gv_dhinesh"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>
</html>