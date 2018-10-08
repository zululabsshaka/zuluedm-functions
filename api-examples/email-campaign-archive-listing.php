<?php

//this template was purhchsed from creative-tim.com
//material-kit-pro-html-v2.0.3
//the assets are not uploaded to GitHub
//nategood's httpful is available via composer 
// Point to where you downloaded the phar
include '1.0/vendor/httpful.phar';
//require_once 'vendor/nategood/httpful/bootstrap.php'
//require_once __DIR__ . '../vendor/autoload.php';
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
    } elseif ($tagType == 'fname') {
        $strTreturn = str_replace('##_people_fname# -', $strConR, $strToR);
        return $strTreturn;
    } else {
        return  "";

    }

}
$accounturl = 'https://ACCOUNT.CLUSTER.zuluedm.com';
// Get event details of the campaigns
$uriCat = $accounturl . "/api/rest/campaigns";
$responseCat = \Httpful\Request::get($uriCat)
    ->addHeader('Accept', '*/*')
    ->addHeader('X-API-KEY', 'xxxxxxxxxxxxxxxxxx')
    ->addHeader('X-API-Username', 'xxxx')
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
//3.) We will figure out how to circumvent that when enough people are using
//the feature.
// This works perfectly with G..UID and our App:
/**
 * Script by David Barnes tothebeat.ceo@gmail.com
 * Simple Check for DMARC on a domain - use this for content marketing funnel type stuff
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 */


/**
 * Script by David Barnes tothebeat.ceo@gmail.com
 * Simple Check for DMARC on a domain - use this for content marketing funnel type stuff
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 */


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-39698674-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('set', {'content_group1': 'FranchiseContent'});
        gtag('set', {'content_group2': 'PriceGroup'});
        gtag('set', {'content_group3': 'Channel Analytics'});
        gtag('set', {'content_group4': 'Trusted Sender'});
        gtag('config', 'UA-39698674-4');
    </script>
    <!-- Google Tag Manager -->
    <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NFDZ85"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NFDZ85');</script>
    <!-- End Google Tag Manager -->
   <!-- <meta charset="utf-8" /> -->
    <link rel="" sizes="76x76" href="assets/img/favicon76trustedshaka.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon200trustedshaka.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Listing Campaigns on your Web Site</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/trusted-material.css" rel="stylesheet" />
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5af69c71c3d29a001129f045&product=inline-share-buttons' async='async'></script>
    <style media="screen">
        .page-header {
            height: 110vh;
        }

        .page-header .description {
            color: #ffffff;
        }

        .header-filter .container {
            padding-top: 5vh;
        }
    </style>
</head>

<body class="bg-purple components-page">
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">

</nav>
<div class="page-header header-filter">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <a  href="https://signup.au.zuluedm.com" class="btn btn-success btn-fill" target="_blank">Get your Free Account</a>
                <a href="https://zuluedm.com/trusted-sender/1.0/partners.php" class="btn btn-success btn-fill" target="_blank">Partner Login</a>
                <h3 class="title ">Zulu eDM Campaign Listing Example</h3>
                <div class="small">Developers can get the <a href="https://github.com/zululabsshaka/zuluedm-functions/tree/master/api-examples" style="color: #ffffff;">code here <i class="fa fa-github"></i> </a></div>
                <div>Use our DragNDrop Template Builder to create beautiful email content and share it anywhere with ease. Useful for your sales team to keep on message, franchisees to stick to the script or simply keep your web sites and blogs looking fresh and great. Edit once and everywhere is up to date.</div>

//hardcoded can come form a selector or the API
<h4 class="title">2018 Campaigns</h4>

<!-- Modal list of campaigns -->
    <?php
                $j = sizeof($responseCat->body);
                //print_r ($responseCat->body);
                $j = $j -1;
                $i = 0;
                while ($i <= $j) {
                    if (($responseCat->body[$i]->campaign_categoryid == '24') && (strpos($responseCat->body[$i]->campaign_name, '(resent)') ==  0))  {
                        $timestamp = (date("F j, Y, g:i a", $responseCat->body[$i]->campaign_time));
                        $tid = $responseCat->body[$i]->ctemplate_tid;
                        $strSub = $responseCat->body[$i]->campaign_subject;

//this was hardcoded for the sake of removing wildcards - needs a better solution but as we are inbetween technologies PHP56 is so easy and yest to decide on a few paths forward
                        $strSub = replacesTag('fname', $strSub, '');
                        echo '<div class="col-lg-8 col-md-6 col-lg-offset-2">';
                        echo '<div class="card card-blog">';
                        echo '<div class="card-header card-header-success card-header-image">';
                        echo '<a href="' . $accounturl . '/home.php?mode=view_in_browser&ctemplate_id=' .  $tid . '"><h3 class="card-category" style="padding: 5px;">' . $strSub . '</h3></a>';
                        echo '<h4 class="card-category" style="padding: 5px;">' . $timestamp . '</h4>';
                        echo '<button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#exampleModalLong">
  View the Campaign
</button>                              
   </div>
   </div>
   </div>                             
    
      <!-- Modal -->
<div class="modal modal-open" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="false">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe src="' . $accounturl . '/home.php?mode=view_in_browser&ctemplate_id=' .  $tid . '" width="700" height="900" sandbox="allow-scripts allow-popups" ALLOWFULLSCREEN scrolling="yes"></iframe>
      </div>
    </div>
  </div>
</div>';
                    }
                    $i++;
                }
                // $resuableblock = replacesTag('font-family', $resuableblock, 'font-family: sans-serif;');
                //        echo '  <p class="card-description" style="padding: 5px;">' . $resuableblock . '</p> </div></div></div>';
                //              echo $response->body[$i]->template_htmltext;

                flush();

                ?>

                <!-- End modal list -->



                <a  href="https://signup.au.zuluedm.com" class="btn btn-success btn-fill" target="_blank">Get your Free Account</a>
                <a href="https://zuluedm.com/trusted-sender/1.0/partners.php" class="btn btn-success btn-fill" target="_blank">Partner Login</a>
            </div>
        </div>
    </div>
</div>
<footer class="footer footer-transparent">
    <div class="container">
        <nav class="pull-left">
            <a style="color: #ffffff;" class="description" href="http://support.zuluedm/api/warrior/1.0/#gettingstarted">
                API & Developers |
            </a>
            <a style="color: #ffffff;" class="description" href="https://zuluedm.com/anti-spoof-phishing-policy/?utm_source=Zulu%20eDM&amp;utm_medium=Landing%20Page&amp;utm_campaign=Trusted%20Sender">
                Anti-SPOOF and Phising Policy |
            </a>
            <a style="color: #ffffff;" href="https://zuluedm.com/why-eblastingsux/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Trusted%20Sender">
                Responsible Marketng
            </a>
        </nav>
        <div class="social-area pull-right">
            <a style="color: #ffffff;" href="https://zuluedm.com/legal-notices/?utm_source=Zulu%20eDM&utm_medium=Landing%20Page&utm_campaign=Developers">
                Legal Notics
            </a>

            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>   Zulu Labs Pty Ltd
            </div>
        </div>
    </div>
</footer>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>
<script src="assets/js/demo.js"></script>
<script>
    var header_height;
    var fixed_section;
    var floating = false;

    $().ready(function() {
        suggestions_distance = $("#suggestions").offset();
        pay_height = $('.fixed-section').outerHeight();

        $(window).on('scroll', md.checkScrollForTransparentNavbar);
        demo.initDocumentationCharts();
    });
</script>

</html>
