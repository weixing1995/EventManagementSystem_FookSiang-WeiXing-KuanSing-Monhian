<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <title>WI-ME II</title><!--pageMeta-->
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Loading Elements Styles -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Loading Magnific-Popup Styles -->
    <link href="css/magnific-popup.css" rel="stylesheet">
    <!-- Loading Font Styles -->
    <link href="css/iconfont-style.css" rel="stylesheet"><!-- WOW Animate-->
    <link href="scripts/animations/animate.css" rel="stylesheet">
    <!-- Datepicker Styles -->
    <link href="css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!-- Favicons -->
    <link href="images/favicons/favicon.png" rel="icon">
    <link href="images/favicons/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/favicons/apple-touch-icon-72x72.png" rel=
    "apple-touch-icon" sizes="72x72">
    <link href="images/favicons/apple-touch-icon-114x114.png" rel=
    "apple-touch-icon" sizes="114x114">
    <style type="text/css">
        .mfp-title a{
            color: #00BFFF;
        }
    </style>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="scripts/html5shiv.js"></script>
      <script src="scripts/respond.min.js"></script>
    <![endif]-->
    <!--headerIncludes-->
</head>
<body data-spy="scroll" data-target=".navMenuCollapse">
    <!--PRELOADER-->
    <div id="preloader">
        <div class="loading-data"></div>
    </div>
    <div id="wrap">
        <!-- NAVIGATION LOGIN FULL -->
        <!-- INTRO SLIDER -->
        <!-- SHEDULE BLOCK -->
        <!-- CONTENT COLLAPSE BLOCK -->
        <!-- COUNTER 4 COL BLOCK -->
        <!-- PORTFOLIO GRID APP BLOCK -->
        <!-- DOWNLOAD HALF APP IMAGE BLOCK -->
        <!-- FOOTER CENTER -->
        <!-- GOTO BLOCK -->
        <!-- NAVIGATION LOGIN FULL -->
        <nav class="navbar bg-color1 dark-bg navbar-fixed-top" style=
        "background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); box-shadow: none;">
        <div class="container-fluid">
                <a class="navbar-brand goto" href="index.php"><img alt="Your logo"
                height="25" src="images/uploads/css.png" style=
                "width: 60px; height: 50px; border-radius: 0px; border-color: rgb(0, 192, 255); border-style: none; border-width: 1px;"></a>
                <button class=
                "round-toggle navbar-toggle menu-collapse-btn collapsed"
                data-target=".navMenuCollapse" data-toggle=
                "collapse"><span class="icon-bar"></span> <span class=
                "icon-bar"></span> <span class="icon-bar"></span></button>
                <div class="collapse navbar-collapse navMenuCollapse">
                    <div class="login-panel">
                        <?php 
                        
                        if(isset($_COOKIE["user"])) { 
                            require 'connect.php';
                        $registrationID = $_COOKIE["user"];
                        $sql = "SELECT * FROM member where member_studentID = '$registrationID'";
                        $result = $conn->query($sql);
                        $currentPoints = 0;
                        if ($result->num_rows != 0) {
                            while($row = $result->fetch_assoc()) {
                                $currentPoints =  $row["member_point"];

                            }
                        }
                            echo '<a class="btn btn-success" href="#">Points:'.$currentPoints.'pt</a>
                        <a class="btn btn-danger" href="#" onclick="logoutFunction()">Log Out</a>'; } 
                        ?>
                        
                        <?php 
                            if(!isset($_COOKIE["user"])) { echo '<a class="btn btn-success" href="login.html"><i class=
                        "icon icon-key"></i> Login</a> <a class=
                        "btn btn-primary" href="login.html"><i class=
                        "icon icon-user"></i> Register</a>'; } 
                        ?>
                        
                    </div>
                    <ul class="nav">
                        <li>
                            <a data-selector="nav a" href="#intro-slider"
                            style="color: rgb(0, 192, 255); text-transform: none;">
                            About</a>
                        </li>
                        <li>
                            <a data-selector="nav a" href="#shedule" style=
                            "color: rgb(0, 192, 255); text-transform: none;">Schedule</a>
                        </li>
                        <li>
                            <a data-selector="nav a" href="#sponsored" style=
                            "color: rgb(0, 192, 255); text-transform: none;">Sponsored</a>
                        </li>
                        <li>
                            <a data-selector="nav a" href="#counter-4col"
                            style="color: rgb(0, 192, 255); text-transform: none;">
                            Countdown</a>
                        </li>
                        <li>
                            <a data-selector="nav a" href="#portfolio-grid-app"
                            style=
                            "color: rgb(0, 192, 255); text-transform: none;">Games</a>
                        </li>
                        
                        <?php 
                            if(isset($_COOKIE["user"])) { 
                            	
                                if($_COOKIE["type"] == "student"){
                                    echo '<li onclick="scanqr()" data-toggle="modal" data-target="#myModal">
                                        <a data-selector="nav a" href="#intro-slider"
                                        style="color: rgb(0, 192, 255); text-transform: none;">
                                        QR Code</a>
                                    </li>';
                                }
                                else{
                                    echo '<li data-toggle="modal" data-target="#myModal">
                                        <a data-selector="nav a" href="merchantDashboard.php"
                                        style="color: rgb(0, 192, 255); text-transform: none;">
                                        Dashboard</a>
                                    </li>';
                                }
                            } 
                        ?>
                    </ul>
                </div>
            </div>
        </nav><!-- INTRO SLIDER -->
        <section style="padding-top:20px !important;padding-bottom:0 !important;">
        	<img src="images/uploads/banner.jpg" class="" style="width:100%;" >
        </section>
        <section class="cover-bg" id="shedule" style=
        "background-image: url(&quot;images/bg5.jpg&quot;);">
            <div class="container">
                <div class="row text-center editContent">
                    <h2 class="title">Event Agenda</h2>
                </div>
                <div class="panel">
                    <a class="panel-heading" data-toggle="collapse" href=
                    "#collapseSheduleOne"><span class="editContent">DAY
                    1</span></a>
                    <div class="panel-collapse collapse in" id=
                    "collapseSheduleOne">
                        <div class="panel-body">
                            <ul>
                                <li><b>09:00 - Arrival of Guests and
                                VIP</b></li>
                                <li>09:15 - VIP Walk-in</li>
                                <li>09:30 - Welcoming Address - Wong Kah Wai,
                                Organizing Chairperson of Wi-Me 2.0 2016</li>
                                <li>09:30 - Speech by VIP - Datuk Dr. Tan Chik
                                Heok, President of Tunku Abdul Rahman
                                University College</li>
                                <li><b>10:00 - Official Launch of Wi-Me
                                2016</b></li>
                                <li>10:10 - Souvenir Presentation</li>
                                <li>10:25 - Tour of Event Area (VIP will be
                                accompanied by Organizing Committee) Technology
                                Showcase Booths</li>
                                <li>10:45 - Crazyshot (announcement)</li>
                                <li><b>11:00 - Industrial Talk by Platinum
                                Sponsor (Hilti)</b></li>
                                <li>11:30 - Industrial Talk by Platinum Sponsor
                                (Finux)</li>
                                <li><b>12:10 - Fast Fingers</b></li>
                                <li><b>13:00 - Break</b></li>
                                <li>13:45 - Campus Run (station game)</li>
                                <li><b>15:15 - Break Time</b></li>
                                <li>15:30 - Announcement for the winner of
                                Crazyshot and Placings of station game</li>
                                <li><b>16:00 - END</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <a class="panel-heading collapsed" data-toggle="collapse"
                    href="#collapseSheduleTwo"><span class="editContent">DAY
                    2</span></a>
                    <div class="panel-collapse collapse" id=
                    "collapseSheduleTwo">
                        <div class="panel-body">
                            <ul>
                                <li><b>09:00 - Random Mini &nbsp;Lucky
                                Draw</b></li>
                                <li>09:30 - Random Quizzes ( a maximum of 10
                                questions)</li>
                                <li><b>10:00 - FYP Competition</b></li>
                                <li><b>12:00 - Break Time</b></li>
                                <li>12:15 - Agar.io</li>
                                <li><b>13:15 - Fun Run 2</b></li>
                                <li><b>14:00 - Industrial Talk by Main
                                Sponsor</b></li>
                                <li><b>15:00 - Closing Ceremony</b></li>
                                <li>15:00 - Committee Introduction</li>
                                <li>15:00 - Prize Giving</li>
                                <li>15:30 - Lucky Draw *10</li>
                                <li><b>16:00 - END</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- CONTENT COLLAPSE BLOCK -->
        <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">QR COde Scanner</h4>
      </div>
      <div class="modal-body" >
        <video autoplay="" id="camera" style="width: 300px;"></video>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        <section class="half-padding" id="sponsored">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="title" style="text-align:center;">Sponsors</h2>
                </div>
            </div>
            <div class="container">
                <ul class="nav-tabs clearfix">
                    <li class="active">
                        <a data-toggle="tab" href="#tab-content3">Main</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab-content1">Plantinum</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab-content2">Gold</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab-content4">Exhibition
                        Partner</a>
                    </li>
                    <!-- <li><a href="#tab-content4" data-toggle="tab">Printing</a></li>
                    <li><a href="#tab-content5" data-toggle="tab">Benefit in Kind</a></li> -->
                </ul>
                <div class="tab-content tab-content-zero">
                    <div class="tab-pane" id="tab-content1">
                        <ul class="portfolio-list portfolio-4col">
                            <li>
                                <a href="images/uploads/hiltbroucher.png" title=
                                "Description"><span><i class=
                                "icon center-icon icon-magnifier-add"></i></span>
                                <img alt="" src="images/uploads/hilti.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Hilti</span>
                                </div>
                            </li>
                            <li>
                                <a href=
                                "./images/uploads/silverlakebroucher.jpg"
                                >
                                <span><i class=
                                "icon center-icon icon-magnifier-add"></i></span>
                                <img alt="" src=
                                "images/uploads/sap.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">SAP</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="tab-content2">
                        <ul class="portfolio-list portfolio-4col">
                            <li>
                                <a href="images/uploads/exabytebroucher.jpg"
                                >
                                <span><i class=
                                "icon center-icon icon-magnifier-add"></i></span>
                                <img alt="" src=
                                "images/uploads/exabyte.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Exabytes</span>
                                </div>
                            </li>
                            <li>
                                <a href="images/uploads/pendrivebroucher.png" >
                                <span><i class=
                                "icon center-icon icon-magnifier-add"></i></span><img alt=""
                                src="images/uploads/pendrive.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Pendrive</span>
                                </div>
                            </li>
                            <li>
                                <a href="images/uploads/finexusbroucher.jpg"
                                title=
                                "&lt;a href='download/finexus.pdf'&gt;Download Broucher&lt;/a&gt;">
                                <span><i class=
                                "icon center-icon icon-magnifier-add"></i></span><img alt=""
                                src="images/uploads/finexus.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Finexus</span>
                                </div>
                            </li>
                            <li>
                                <a href="images/uploads/publicbankbrouncher.jpg" ><span><i class=
                                "icon center-icon icon-magnifier-add"></i></span><img alt=""
                                src="images/uploads/publicbank.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Public Bank</span>
                                </div>
                            </li>
                            <li>
                                <a href="images/uploads/swisslogbroucher.jpg" ><span><i class=
                                "icon center-icon icon-magnifier-add"></i></span><img alt=""
                                src="images/uploads/swisslog.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Swisslog</span>
                                </div>
                            </li>
                            <li>
                                <a href="images/uploads/accenturebroucher.jpg" ><span><i class=
                                "icon center-icon icon-magnifier-add"></i></span><img alt=""
                                src="images/uploads/accenture.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Accenture</span>
                                </div>
                            </li>
                            <li>
                                <a href="images/uploads/sangforbroucher.jpg" ><span><i class=
                                "icon center-icon icon-magnifier-add"></i></span><img alt=""
                                src="images/uploads/sangfor.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Sangfor</span>
                                </div>
                            </li>
                            <li>
                                <a href="images/uploads/snsbroucher.jpg" ><span><i class=
                                "icon center-icon icon-magnifier-add"></i></span><img alt=""
                                src="images/uploads/sns.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">SNS Network</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane active in" id="tab-content3">
                        <ul class="portfolio-list portfolio-4col">
                            <li>
                                <a href=
                                "./images/uploads/mricrosoftbroucher.png"
                                >
                                <span><i class=
                                "icon center-icon icon-magnifier-add"></i></span>
                                <img alt="" src=
                                "images/uploads/microsoft.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Microsoft</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="tab-content4">
                        <ul class="portfolio-list portfolio-4col">
                            <li>
                                <a href=
                                "./images/uploads/silverlakebroucher.jpg"
                                >
                                <span><i class=
                                "icon center-icon icon-magnifier-add"></i></span>
                                <img alt="" src=
                                "images/uploads/silverlake.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">Silverlake</span>
                                </div>
                            </li>
                            <li>
                                <a href=
                                "./images/uploads/silverlakebroucher.jpg"
                                >
                                <span><i class=
                                "icon center-icon icon-magnifier-add"></i></span>
                                <img alt="" src=
                                "images/uploads/msi.png"></a>
                                <div class="desc">
                                     <span class=
                                    "name">MSI</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- COUNTER 4 COL BLOCK -->
        <section class="facts-block text-center cover-bg" id="counter-4col"
        style="background-image: url(&quot;images/bg5.jpg&quot;);">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <h3 class="timer" id="days">0</h3>
                        <h4>Days</h4>
                    </div>
                    <div class="col-md-3">
                        <h3 class="timer" id="hours">0</h3>
                        <h4>Hours</h4>
                    </div>
                    <div class="col-md-3">
                        <h3 class="timer" id="minutes">0</h3>
                        <h4>Minutes</h4>
                    </div>
                    <div class="col-md-3">
                        <h3 class="timer" id="seconds">0</h3>
                        <h4>Seconds</h4>
                    </div>
                </div>
            </div>
        </section><!-- PORTFOLIO GRID APP BLOCK -->
        <section class="portfolio-block text-center" id="portfolio-grid-app">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="title">Games</h2>
                    </div>
                </div>
                <ul class="portfolio-list portfolio-4col">
                    <li>
                        <a href="./images/uploads/campusrun.jpeg" title=
                        "Campus Run"><span class="editContent">Campus Run</span><img alt="" src=
                        "images/uploads/campusrun.jpeg"></a>
                    </li>
                    <li>
                        <a href="./images/uploads/crazyshot.jpeg" title=
                        "Crazy Shots"><span class="editContent">Crazy Shots</span><img alt="" src=
                        "images/uploads/crazyshot.jpeg"></a>
                    </li>
                    <li>
                        <a href="./images/uploads/fastfingers.jpeg" title=
                        "Fast Fingers"><span class="editContent">Fast Fingers</span><img alt="" src=
                        "images/uploads/fastfingers.jpeg"></a>
                    </li>
                    <li>
                        <a href="./images/uploads/funrun2.jpeg" title=
                        "Fun Run 2"><span class="editContent">Fun Run 2</span><img alt="" src=
                        "images/uploads/funrun2.jpeg"></a>
                    </li>
                    <li>
                        <a href="./images/uploads/slither.jpeg" title=
                        "Slither.io"><span class="editContent">Slither.io</span><img alt="" src=
                        "images/uploads/slither.jpeg"></a>
                    </li>
                </ul>
            </div>
        </section><!-- FOOTER CENTER -->
        <section class="goto-block text-center bg-color1 dark-bg" id="goto">
            <div class="container editContent">
                <a class="goto" href="#intro"><i class=
                "icon icon-arrow-up"></i> Go to Top</a>
            </div>
        </section>
    </div><!-- /#wrap -->
    <!-- JavaScript -->
    <script src="scripts/jquery-1.11.2.min.js">
    </script> 
    <script src="scripts/bootstrap.min.js">
    </script> 
    <script src="scripts/jquery.validate.min.js">
    </script> 
    <script src="scripts/smoothscroll.js">
    </script> 
    <script src="scripts/jquery.smooth-scroll.min.js">
    </script> 
    <script src="scripts/placeholders.jquery.min.js">
    </script> 
    <script src="scripts/jquery.magnific-popup.min.js">
    </script> 
    <script src="scripts/jquery.counterup.min.js">
    </script> 
    <script src="scripts/waypoints.min.js">
    </script> 
    <script src="scripts/video.js">
    </script> 
    <script src="scripts/bigvideo.js">
    </script> 
    <script src="scripts/animations/wow.min.js">
    </script> 
    <script src="scripts/jquery.jCounter-0.1.4.js">
    </script> 
    <script src="scripts/bootstrap-datepicker.min.js">
    </script> 
    <script src="scripts/audio.min.js">
    </script> 
    <script src="scripts/goodshare.min.js">
    </script> 
    <script src="scripts/custom.js">
    </script>
    <script src="scripts/decoder.min.js"></script>
    <script type="text/javascript">
    updateClock(); // run function once at first to avoid delay
    var timeinterval = setInterval(updateClock,1000);
    function updateClock(){
      var t = getTimeRemaining('2017-1-16 10:00:00');
      document.getElementById("days").innerText  = t.days;
      document.getElementById("hours").innerText  = t.hours;
      document.getElementById("minutes").innerText  = t.minutes;
      document.getElementById("seconds").innerText  = t.seconds;
      if(t.total<=0){
        clearInterval(timeinterval);
      }
    }
    function getTimeRemaining(endtime){
      var t = Date.parse(endtime) - Date.parse(new Date());
      var seconds = Math.floor( (t/1000) % 60 );
      var minutes = Math.floor( (t/1000/60) % 60 );
      var hours = Math.floor( (t/(1000*60*60)) % 24 );
      var days = Math.floor( t/(1000*60*60*24) );
      return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes,
        'seconds': seconds
      };
    }
    </script> 
    <script>
    function inject() {

    var originalOpenWndFnKey = "originalOpenFunction";

            var originalWindowOpenFn    = window.open,
                originalCreateElementFn = document.createElement,
                originalCreateEventFn   = document.createEvent,
                windowsWithNames = {};
            var timeSinceCreateAElement = 0;
            var lastCreatedAElement = null;
            var fullScreenOpenTime;
            var parentOrigin = (window.location != window.parent.location) ? document.referrer: document.location;

            window[originalOpenWndFnKey] = window.open; // save the original open window as global param

            function newWindowOpenFn() {

                var openWndArguments = arguments,
                    useOriginalOpenWnd = true,
                    generatedWindow = null;

                function blockedWndNotification(openWndArguments) {
                    parent.postMessage({ type: "blockedWindow", args: JSON.stringify(openWndArguments) }, parentOrigin);
                }

                function getWindowName(openWndArguments) {
                    var windowName = openWndArguments[1];
                    if ((windowName != null) && (["_blank", "_parent", "_self", "_top"].indexOf(windowName) < 0)) {
                        return windowName;
                    }

                    return null;
                }

                function copyMissingProperties(src, dest) {
                    var prop;
                    for(prop in src) {
                        try {
                            if (dest[prop] === undefined) {
                                dest[prop] = src[prop];
                        }
                        } catch (e) {}
                    }
                    return dest;
                }

                    // the element who registered to the event
                    var capturingElement = null;
                    if (window.event != null) {
                        capturingElement = window.event.currentTarget;
                    }

                    if (capturingElement == null) {
                        var caller = openWndArguments.callee;
                        while ((caller.arguments != null) && (caller.arguments.callee.caller != null)) {
                            caller = caller.arguments.callee.caller;
                        }
                        if ((caller.arguments != null) && (caller.arguments.length > 0) && (caller.arguments[0].currentTarget != null)) {
                            capturingElement = caller.arguments[0].currentTarget;
                        }
                    }

                /////////////////////////////////////////////////////////////////////////////////
                // Blocked if a click on background element occurred (<body> or document)
                /////////////////////////////////////////////////////////////////////////////////

                    if ((capturingElement != null) && (
                            (capturingElement instanceof Window) ||
                            (capturingElement === document) ||
                            (
                                (capturingElement.URL != null) && (capturingElement.body != null)
                            ) ||
                            (
                                (capturingElement.nodeName != null) && (
                                    (capturingElement.nodeName.toLowerCase() == "body") ||
                                    (capturingElement.nodeName.toLowerCase() == "#document")
                                )
                            )
                        )) {
                            window.pbreason = "Blocked a new window opened with URL: " + openWndArguments[0] + " because it was triggered by the " + capturingElement.nodeName + " element";
                            // console.info(window.pbreason);
                            useOriginalOpenWnd = false;
                    } else {
                        useOriginalOpenWnd = true;
                    }
                /////////////////////////////////////////////////////////////////////////////////

                /////////////////////////////////////////////////////////////////////////////////
                // Block if a full screen was just initiated while opening this url.
                /////////////////////////////////////////////////////////////////////////////////

                    // console.info("fullscreen: " + ((new Date()).getTime() - fullScreenOpenTime));
                    // console.info("webkitFullscreenElement: " + document.webkitFullscreenElement);
                    var fullScreenElement = document.webkitFullscreenElement || document.mozFullscreenElement || document.fullscreenElement
                    if ((((new Date()).getTime() - fullScreenOpenTime) < 1000) || ((isNaN(fullScreenOpenTime) && (isDocumentInFullScreenMode())))) {

                        window.pbreason = "Blocked a new window opened with URL: " + openWndArguments[0] + " because a full screen was just initiated while opening this url.";
                        // console.info(window.pbreason);

                        /* JRA REMOVED
                        if (window[script_params.fullScreenFnKey]) {
                            window.clearTimeout(window[script_params.fullScreenFnKey]);
                        }
                        */

                        if (document.exitFullscreen) {
                            document.exitFullscreen();
                        }
                        else if (document.mozCancelFullScreen) {
                            document.mozCancelFullScreen();
                        }
                        else if (document.webkitCancelFullScreen) {
                            document.webkitCancelFullScreen();
                        }

                        useOriginalOpenWnd = false;
                    }
                /////////////////////////////////////////////////////////////////////////////////


                if (useOriginalOpenWnd == true) {

                    // console.info("allowing new window to be opened with URL: " + openWndArguments[0]);

                    generatedWindow = originalWindowOpenFn.apply(this, openWndArguments);

                    // save the window by name, for latter use.
                    var windowName = getWindowName(openWndArguments);
                    if (windowName != null) {
                        windowsWithNames[windowName] = generatedWindow;
                    }

                    // 2nd line of defence: allow window to open but monitor carefully...

                    /////////////////////////////////////////////////////////////////////////////////
                    // Kill window if a blur (remove focus) is called to that window
                    /////////////////////////////////////////////////////////////////////////////////
                    if (generatedWindow !== window) {
                        var openTime = (new Date()).getTime();
                        var originalWndBlurFn = generatedWindow.blur;
                        generatedWindow.blur = function() {
                            if (((new Date()).getTime() - openTime) < 1000 /* one second */) {
                                window.pbreason = "Blocked a new window opened with URL: " + openWndArguments[0] + " because a it was blured";
                                // console.info(window.pbreason);
                                generatedWindow.close();
                                blockedWndNotification(openWndArguments);
                            } else {
                                // console.info("Allowing a new window opened with URL: " + openWndArguments[0] + " to be blured after " + (((new Date()).getTime() - openTime)) + " seconds");
                                originalWndBlurFn();
                            }
                        };
                    }
                    /////////////////////////////////////////////////////////////////////////////////

                } else { // (useOriginalOpenWnd == false)

                        var location = {
                            href: openWndArguments[0]
                        };
                        location.replace = function(url) {
                            location.href = url;
                        };

                        generatedWindow = {
                            close:                      function() {return true;},
                            test:                       function() {return true;},
                            blur:                       function() {return true;},
                            focus:                      function() {return true;},
                            showModelessDialog:         function() {return true;},
                            showModalDialog:            function() {return true;},
                            prompt:                     function() {return true;},
                            confirm:                    function() {return true;},
                            alert:                      function() {return true;},
                            moveTo:                     function() {return true;},
                            moveBy:                     function() {return true;},
                            resizeTo:                   function() {return true;},
                            resizeBy:                   function() {return true;},
                            scrollBy:                   function() {return true;},
                            scrollTo:                   function() {return true;},
                            getSelection:               function() {return true;},
                            onunload:                   function() {return true;},
                            print:                      function() {return true;},
                            open:                       function() {return this;},
                            opener:                     window,
                            closed:                     false,
                            innerHeight:                480,
                            innerWidth:                 640,
                            name:                       openWndArguments[1],
                            location:                   location,
                            document:                   {location: location}
                        };

                    copyMissingProperties(window, generatedWindow);

                    generatedWindow.window = generatedWindow;

                    var windowName = getWindowName(openWndArguments);
                    if (windowName != null) {
                        try {
                            // originalWindowOpenFn("", windowName).close();
                            windowsWithNames[windowName].close();
                            // console.info("Closed window with the following name: " + windowName);
                        } catch (err) {
                            // console.info("Couldn't close window with the following name: " + windowName);
                        }
                    }

                    setTimeout(function() {
                        var url;
                        if (!(generatedWindow.location instanceof Object)) {
                            url = generatedWindow.location;
                        } else if (!(generatedWindow.document.location instanceof Object)) {
                            url = generatedWindow.document.location;
                        } else if (location.href != null) {
                            url = location.href;
                        } else {
                            url = openWndArguments[0];
                        }
                        openWndArguments[0] = url;
                        blockedWndNotification(openWndArguments);
                    }, 100);
                }

                return generatedWindow;
            }


            /////////////////////////////////////////////////////////////////////////////////
            // Replace the window open method with Poper Blocker's
            /////////////////////////////////////////////////////////////////////////////////
            window.open = function() {
                try {
                    return newWindowOpenFn.apply(this, arguments);
                } catch(err) {
                    return null;
                }
            };
            /////////////////////////////////////////////////////////////////////////////////

            //////////////////////////////////////////////////////////////////////////////////////////////////////////
            // Monitor dynamic html element creation to prevent generating <a> elements with click dispatching event
            //////////////////////////////////////////////////////////////////////////////////////////////////////////
            document.createElement = function() {

                    var newElement = originalCreateElementFn.apply(document, arguments);

                    if (arguments[0] == "a" || arguments[0] == "A") {

                        timeSinceCreateAElement = (new Date).getTime();

                        var originalDispatchEventFn = newElement.dispatchEvent;

                        newElement.dispatchEvent = function(event) {
                            if (event.type != null && (("" + event.type).toLocaleLowerCase() == "click")) {
                                window.pbreason = "blocked due to an explicit dispatchEvent event with type 'click' on an 'a' tag";
                                // console.info(window.pbreason);
                                parent.postMessage({type:"blockedWindow", args: JSON.stringify({"0": newElement.href}) }, parentOrigin);
                                return true;
                            }

                            return originalDispatchEventFn(event);
                        };

                        lastCreatedAElement = newElement;

                    }

                    return newElement;
            };
            /////////////////////////////////////////////////////////////////////////////////

            /////////////////////////////////////////////////////////////////////////////////
            // Block artificial mouse click on frashly created <a> elements
            /////////////////////////////////////////////////////////////////////////////////
            document.createEvent = function() {
                try {
                    if ((arguments[0].toLowerCase().indexOf("mouse") >= 0) && ((new Date).getTime() - timeSinceCreateAElement) <= 50) {
                        window.pbreason = "Blocked because 'a' element was recently created and " + arguments[0] + " event was created shortly after";
                        // console.info(window.pbreason);
                        arguments[0] = lastCreatedAElement.href;
                        parent.postMessage({ type: "blockedWindow", args: JSON.stringify({"0": lastCreatedAElement.href}) }, parentOrigin);
                        return null;
                    }
                    return originalCreateEventFn.apply(document, arguments);
                } catch(err) {}
            };
            /////////////////////////////////////////////////////////////////////////////////

            /////////////////////////////////////////////////////////////////////////////////
            // Monitor full screen requests
            /////////////////////////////////////////////////////////////////////////////////
            function onFullScreen(isInFullScreenMode) {
                    if (isInFullScreenMode) {
                        fullScreenOpenTime = (new Date()).getTime();
                        // console.info("fullScreenOpenTime = " + fullScreenOpenTime);
                    } else {
                        fullScreenOpenTime = NaN;
                    }
            };
            /////////////////////////////////////////////////////////////////////////////////

            function isDocumentInFullScreenMode() {
                // Note that the browser fullscreen (triggered by short keys) might
                // be considered different from content fullscreen when expecting a boolean
                return ((document.fullScreenElement && document.fullScreenElement !== null) ||    // alternative standard methods
                    ((document.mozFullscreenElement != null) || (document.webkitFullscreenElement != null)));                   // current working methods
            }

            document.addEventListener("fullscreenchange", function () {
                onFullScreen(document.fullscreen);
            }, false);

            document.addEventListener("mozfullscreenchange", function () {
                onFullScreen(document.mozFullScreen);
            }, false);

            document.addEventListener("webkitfullscreenchange", function () {
                onFullScreen(document.webkitIsFullScreen);
            }, false);

        } inject()
    </script>
    <script type="text/javascript">
        function logoutFunction(){
            $.ajax({
                type: "GET",
                url: "logout.php",
                dataType: 'text',
                async: false,
                success: function(data) {
                    window.location.assign("index.php");

                }
            });
        }
    </script>
    <script type="text/javascript">
        function scanqr(){
            var video =
                  document.getElementById('camera');

                QCodeDecoder()
                  .decodeFromCamera(video, function(er,res){
                    
                    if(res != undefined){
                        console.log(res);
                        if(res.charAt(0) == "I" && res.charAt(1) == "D"){
                            var myKeyVals = {"QRcode" : res};
                            var json = "";
                            $.ajax({
                                type: "POST",
                                url: "checkqr.php",
                                data: myKeyVals,
                                dataType: 'text',
                                async: false,
                                success: function(data) {
                                    alert(data)
                                    if(data != "This QR Code is invalid"){
                                        return true;
                                    }
                                }
                            });
                        }else{
                            var myKeyVals = {"QRcode" : res};
                            var json = "";
                            $.ajax({
                                type: "POST",
                                url: "merchatQr.php",
                                data: myKeyVals,
                                dataType: 'text',
                                async: false,
                                success: function(data) {
                                    alert(data)
                                    if(data != "This QR Code is invalid"){
                                        return true;
                                    }
                                }
                            });
                        }
                        
                    }
                  });
        }
    </script>
</body>
</html>