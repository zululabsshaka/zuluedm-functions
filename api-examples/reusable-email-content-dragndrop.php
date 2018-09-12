<?php
// Point to where you downloaded the phar
include '1.0/vendor/httpful.phar';
use \Httpful\Request;
/**
 * @param $tagType = What CSS or HTM tag to replace
 * @param $strToR = the string to search
 * @param $strConR = string to replace it with '' is fine
 */
function replacesTag($tagType, $strToR, $strConR) {

    if ($tagType == 'style') {
       $strTreturn = preg_replace('/style="\/?(.*)(.|\\s)*?;/mi', $strConR, $strToR);
       return $strTreturn;
    } elseif ($tagType == 'font-family') {
        $strTreturn = preg_replace('/font-family:\/?(.|\\s)*?;/mi', $strConR, $strToR);
        return $strTreturn;
    } else {
        return  "";

    }

}

// Set the connection header 
$uri = "https://sandbox.au.zuluedm.com/api/rest/reusable";
$response = \Httpful\Request::get($uri)
    ->addHeader('Accept', '*/*')
    ->addHeader('X-API-KEY', 'xxxxxxxxxx')
    ->addHeader('X-API-Username', 'xxxxx')
    ->addHeader('X-API-Password', 'xxxxx')
    ->send();
//end of the authentication
// now we want to access all Resuable Content Pieces in the Category
// called News & Updates with id=3
//Using the Template name as the content title and displayiung the date
//from a UNIXTIME Stam into a readable date for our site /app
//Important to note when creating inline styles for your email try and
//minimise the customisation for a few reasons
//1.)email fonts differ from web fonts
//2.) you don't want to have to restyle each time
//3.) We will figure out how to circumvent that when enough people arr using
//the feature.
// This works perfectly with G..UID and our App:
    /**
     * Script by David Barnes tothebeat.ceo@gmail.com
     * Simple Check for DMARC on a domain - use this for content marketing funnel type stuff
     * @license http://www.opensource.org/licenses/mit-license.html MIT License
     */
    ?>

    <html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-39698674-4"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-39698674-4');
        </script>
        <meta charset="utf-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Developer Examples</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans+Pro:300,400,500,700" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- CSS Files -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/css/material-zulu.css" rel="stylesheet"/>

<!-- We purchased a license from https://www.creative-tim.com/ -->

        <link href="assets/css/material-kit.css" rel="stylesheet"/>
        <link href="assets/css/demo.css" rel="stylesheet" />

    </head>

<body class="landing-page">



<nav class="navbar navbar-warning navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation" style="padding: 0px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" style="padding: 2px;">

            <a href="https://zuluedm.com/contact-us">
                <div class="logo-container">
                    <div class="logo">
                        <img src="https://zuluedm.com/wp-content/uploads/2016/07/forFAVICON-e1506482447917.png" alt="Zulu eDM - Shaka">
                    </div>
            </a>
            <ul  class="nav navbar-nav navbar-left">
                <li>
                    <h3>Zulu eDM </h3>
                </li>
            </ul>
        </div>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
        <ul  class="nav navbar-nav navbar-right">
            <li class="navbar-btn nav-pills-warning">
                <a href="support.zuluedm/api/warrior/1.0/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Reusable%20Content">Warrior API</a>
            </li>
            <li class="navbar-btn nav-pills-warning">
                <a href="https://signup.au.zuluedm.com/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Reusable%20Content">Sign-up</a>
            </li>
            <li class="navbar-btn nav-pills-warning">
                <a href="https://zuluedm.com/contact-us/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Reusable%20Content">Contact Us</a>
            </li>

        </ul>

    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('assets/img/costa_Punta.JPG');">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="title">Reusable Content Example</h2>
                    <div class="alert alert-success">
                        <div class="container-fluid">
                            <h4>Use our DragNDrop Template Builder to create beautiful email content and share it anywhere with ease.  Useful for your sales team to keep on message, franchisees to stick to the script or simply keep your web sites and blogs looking fresh and great. Edit once and everywhere is up to date.</h4>
                            <br>
                            <a href="https://www.youtube.com/watch?v=isYyjdbQLwo" target="_blank" class="btn btn-danger btn-raised btn-lg">
                                <i class="fa fa-youtube"> </i> Watch How Easy It Is
                                <div class="ripple-container"></div></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main main-raised">
    <div class="container">
        <div class="section text-center section-landing">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="row">
                        <div class="col-md-10" align="center">
                            <div class="profile-tabs">
                                <div class="nav-align-center">
<div class="row">
                                            
<?php
$j = sizeof($response->body);
$j = $j -1;
$i = 0;
    while ($i <= $j) {
      //  if ($response->body[$i]->template_categoryid == 4) {
            $resuableblock = ((string)($response->body[$i]->template_htmltext));
            $name = $response->body[$i]->template_name;
            $timestamp = (date("F j, Y, g:i a", $response->body[$i]->template_lastupdated));
            echo '<div class="col-lg-8 col-md-6 col-lg-offset-2">
                                    <div class="card card-blog">
                                        <div class="card-header card-header-success card-header-image">
            <h3 class="card-category" style="padding: 5px;">' . $response->body[$i]->template_name . '</h3>';
            echo '<h4 class="card-category" style="padding: 5px;">' . $timestamp . '</h4>';
      $resuableblock = replacesTag('font-family', $resuableblock, 'font-family: sans-serif;');
              echo '  <p class="card-description" style="padding: 5px;">' . $resuableblock . '</p> </div></div></div>';
 //              echo $response->body[$i]->template_htmltext;
               $i++;
                 }
   flush();


?>
                            </div>

                        <div class="section text-center section-landing" style="padding-top: 30px;">
                            <div class="row">
                                <br><br><br>
                                <div class="col-md-6 col-md-offset-3">
                                    <h5 class="description">
                                        <div class="icon icon-success">
                                            <i class="material-icons">email</i>
                                        </div>
                                        <a href="http://zuluedm.com/developers/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Reusable%20Content" class="btn btn-warning">Developers - Join Our Tribe</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


                        <footer class="footer">
                            <div class="container">
                                <nav class="pull-left">
                                    <ul>
                                        <li>
                                            <a href="https://zuluedm.com/anti-spoof-phishing-policy/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Trusted%20Sender">
                                                Anti-SPOOF and Phising Policy
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://zuluedm.com/category/edm/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Trusted%20Sender">
                                                Responsible Marketng
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://zuluedm.com/category/edm/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Trusted%20Sender">
                                                Blog
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="copyright pull-right">
                                    &copy; 2018 Zulu Labs Pty Ltd
                                </div>
                            </div>
                        </footer>
<br>
                    </div>
</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/material.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="assets/js/material-kit.js" type="text/javascript"></script>

    </html>
