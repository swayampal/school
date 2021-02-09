<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/map.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Map</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Modernize js -->
    <script src="js/modernizr-3.6.0.min.js"></script>
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
         <!-- Header Menu Area Start Here -->
        <?php
        include "header.php";
        ?>
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
           <?php
            include "sidebar.php";
            ?>
            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h3>Admin Dashboard</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>Map</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Google Map Area Start Here -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card google-map-area">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Marker Map</h3>
                                    </div>
                                   <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" 
                                        data-toggle="dropdown" aria-expanded="false">...</a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-map">
                                    <div id="markergoogleMap" style="width:100%; height:660px; border-radius: 4px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Google Map Area End Here -->
                <footer class="footer-wrap-layout1">
                    <div class="copyright">© Copyrights <a href="#">akkhor</a> 2019. All rights reserved. Designed by <a href="#">PsdBosS</a></div>
                </footer>
            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
    <!-- Map Init js -->
    <script src="js/google-marker-map.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/map.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:04 GMT -->
</html>