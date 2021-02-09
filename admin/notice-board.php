<?php
include "../db.php";
if (isset($_POST["save"])) {
    $title = $_POST["title"];
    $details = $_POST["details"];
    // $date = $_POST["date"];
    $status = $_POST["status"];
    $save_note = "insert into notice(notice_title,notice_detail,status)values('$title','$details','$status')";
    $result_save = mysqli_query($con,$save_note);
    if ($result_save) {
        ?>
         
        <?php
    }
}
?>

<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/notice-board.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:03 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Notice Board</title>
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
    <!-- Date Picker CSS -->
    <link rel="stylesheet" href="css/datepicker.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="css/select2.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css">
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
                    <h3>Notice Board</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>Notice</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <div class="row">
                    <!-- Add Notice Area Start Here -->
                    <div class="col-4-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Create A Notice</h3>
                                    </div>
                                   
                                </div>
                                <form class="new-added-form" method="POST">
                                    <div class="row">
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Title</label>
                                            <input type="text" placeholder="" class="form-control" name="title">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Details</label>
                                            <input type="text" placeholder="" class="form-control" name="details">
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <label>Posted By </label>
                                            <select class="select2" name="status" style="background-color: #1c1c3a;" >
                                        <option value="">Select Status</option>
                                        <option value="publish">Publish</option>
                                        <option value="draft">Draft</option>
                                         
                                    </select>
                                        </div>
                                        <div class="col-12-xxxl col-lg-6 col-12 form-group">
                                            <?php
                                            date_default_timezone_set('Asia/Kolkata');
                                                $date = date('d-m-y h:i');
                                            ?>
                                            <label>Date</label>
                                            <input type="text" placeholder="" class="form-control air-datepicker" name="date" value="<?php echo $date;?>" disabled>
                                            <i class="far fa-calendar-alt"></i>
                                        </div>
                                       
                                        <div class="col-12 form-group mg-t-8">
                                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" name="save">Save</button>
                                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Add Notice Area End Here -->
                    <!-- All Notice Area Start Here -->
                    <div class="col-8-xxxl col-12">
                        <div class="card height-auto">
                            <div class="card-body">
                                <div class="heading-layout1">
                                    <div class="item-title">
                                        <h3>Notice Board</h3>
                                    </div>
                                   
                                </div>
                                <form class="mg-b-20">
                                    <div class="row gutters-8">
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Date ..." class="form-control">
                                        </div>
                                        <div class="col-lg-5 col-12 form-group">
                                            <input type="text" placeholder="Search by Title ..." class="form-control">
                                        </div>
                                        <div class="col-lg-2 col-12 form-group">
                                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="notice-board-wrap">
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-skyblue">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-yellow">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                    <div class="notice-list">
                                        <div class="post-date bg-pink">16 June, 2019</div>
                                        <h6 class="notice-title"><a href="#">Great School Great School manag mene esom  
                                            text of the printing Great School manag mene esom  text of the printing manag 
                                            mene esom  text of the printing.</a></h6>
                                        <div class="entry-meta">  Jennyfar Lopez / <span>5 min ago</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- All Notice Area End Here -->
                </div>
                 <div class="modal fade" id="success-modal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog success-modal-content" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="success-message">
                                                    <div class="item-icon">
                                                        <i class="fas fa-check"></i>
                                                    </div>
                                                    <h3 class="item-title">Successfully Message Sent</h3>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="footer-btn bg-linkedin"
                                                    data-dismiss="modal">Okay</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <?php
               include "footer.php";
               ?>
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
    <!-- Select 2 Js -->
    <script src="js/select2.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Date Picker Js -->
    <script src="js/datepicker.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>

</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/notice-board.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:44:03 GMT -->
</html>