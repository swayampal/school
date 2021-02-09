<?php
include "../db.php";

    
$view_books = "SELECT * from books";
$view_result = mysqli_query($con,$view_books);


?>
<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:43:57 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>AKKHOR | Students Details</title>
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
                    <h3>BOOKS</h3>
                    <ul>
                        <li>
                            <a href="index-2.php">Home</a>
                        </li>
                        <li>ALL BOOKS</li>
                    </ul>
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Details Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Libary</h3>
                            </div>
                           
                        </div>
                       
                        <div class="single-info-details">
                            
                            <div class="item-img">
                                <a href="view_books.php?view_book=<?php echo $row["book_id"];?>"><video autoplay></video></a>
                                
                            </div>
                            <button id="start">start</button>
                        </div>
                       

                    </div>
                </div>
                <!-- Student Details Area End Here -->
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
    <!-- Scroll Up Js -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- Custom Js -->
    <script src="js/main.js"></script>
<script>
    
    $("#start").click(function(){
const constraints = {
  video: true,
  audio:true,
};

const video = document.querySelector("video");

navigator.mediaDevices.getUserMedia(constraints).then((stream) => {
  video.srcObject = stream;
});
    });

// var constraints = {
//   video: {
//     mandatory: {
//       chromeMediaSource: 'screen'
//     }
//   }
// };

// navigator.webkitGetUserMedia(constraints, gotStream);
// pc = new RTCPeerConnection(null);
// pc.onaddstream = gotRemoteStream;
// pc.addStream(localStream);
// pc.createOffer(gotOffer);

// function gotOffer(desc) {
//   pc.setLocalDescription(desc);
//   sendOffer(desc);
// }

// function gotAnswer(desc) {
//   pc.setRemoteDescription(desc);
// }

// function gotRemoteStream(e) {
//   attachMediaStream(remoteVideo, e.stream);
// }
// var pc = new webkitRTCPeerConnection(servers,
//   {optional: [{RtpDataChannels: true}]});

// pc.ondatachannel = function(event) {
//   receiveChannel = event.channel;
//   receiveChannel.onmessage = function(event){
//     document.querySelector("div#receive").innerHTML = event.data;
//   };
// };

// sendChannel = pc.createDataChannel("sendDataChannel", {reliable: false});

// document.querySelector("button#send").onclick = function (){
//   var data = document.querySelector("textarea#send").value;
//   sendChannel.send(data);
// };
</script>
    
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/psdboss/akkhor/akkhor/student-details.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 17:43:58 GMT -->
</html>
<?php
// }
?>