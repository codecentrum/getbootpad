<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#">

    <title>Bootpad | Simple MVC Framework Build With PHP And Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('vendors/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/stylesheets/getbootpad.css'); ?>" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url('vendors/google/google_analytics.js'); ?>"></script>
    
</head>

<body>

<?php render('layout', 'layouts/navbar'); ?>

<main class="getbootpad-masthead" style="text-align:left;">
    <div class="container">
        <h1 style="font-size:50px;margin-top:0; margin-bottom:10px;">API Documentation</h1>
        <p style="font-size:24px;font-weight:300;line-height:1.4;margin-bottom:0; color:#bce1f9;">Basic usage, basic funtion, and more.</p>
    </div>
</main>

<div class="social-container">
    <div class="container">
        <span class="btn-social">
            <a href="https://twitter.com/ekyfauzi" class="twitter-follow-button" data-show-count="true">Follow @ekyfauzi</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </span>
        <span class="btn-social">
            <a href="https://twitter.com/share" class="twitter-share-button" data-via="ekyfauzi" data-hashtags="GetBootpad">Tweet</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
        </span>
        <span class="btn-social">
            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=ekyfauzi&repo=bootpad&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
        </span>
        <span class="btn-social">
            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=ekyfauzi&repo=bootpad&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="102px" height="20px"></iframe>
        </span>
        <span class="btn-social">
            <iframe src="http://ghbtns.com/github-btn.html?user=ekyfauzi&type=follow" allowtransparency="true" frameborder="0" scrolling="0" width="132" height="20"></iframe>
        </span>
    </div>
</div>

<div class="documentation">
    <div class="container getbootpad-container">
        <div class="row">
            <div class="col-md-9" role="main">
                <div class="getbootpad-section">
                    <h1 id="basic_functions" class="page-header">Basic Functions</h1>
                    <p>Sorry, this page under construction.</p>
                </div>
            </div>
        <div class="col-md-3">
            <div class="getbootpad-sidebar hidden-print hidden-xs hidden-sm" role="complementary">
                <ul class="nav getbootpad-sidenav">
                    <li>
                        <a href="#basic_functions">Basic functions</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php render('layout', 'layouts/footer'); ?>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- JQUERY CORE -->
<script type="text/javascript" src="<?php echo base_url('vendors/jquery/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('vendors/bootstrap/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/javascripts/getbootpad.js'); ?>"></script>

</body>
</html>