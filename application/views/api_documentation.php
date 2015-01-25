<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="#">

    <title>Bootpad | Simple PHP Framework Including Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/getbootpad/getbootpad.css'); ?>" rel="stylesheet">

    <style type="text/css">
    .pre-code-comment {
        color:#999999;
    }
    .pre-code-blue {
      color:#4F9FCF;
    }
    </style>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-44445792-1', 'auto');
      ga('send', 'pageview');

    </script>
</head>

<body>

<nav class="navbar navbar-default navbar-white navbar-static-top" role="navigation" style="margin-bottom:0px;">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/getbootpad/getbootpad_logo_color_small.png'); ?>"></a>
        </div>

        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url('getting_started'); ?>">Getting started</a></li>
                <li class="active"><a href="<?php echo base_url('api_documentation'); ?>">API Documentation</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.ekyfauzi.com">Eky Fauzi</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!-- /.container-fluid -->
</nav>

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


<div class="footer">
    <div class="container">
        <p class="text-muted">2014 Bootpad Created by <a href="http://twitter.com/ekyfauzi" target="_blank">@ekyfauzi</a> Licensed Under The MIT License.</p>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- JQUERY CORE -->
<script type="text/javascript" src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>

<script type="text/javascript">

!function(getbootpad){"use strict";
    getbootpad(function(){
        var b=getbootpad(window),c=getbootpad(document.body);
        c.scrollspy({target:".getbootpad-sidebar"}),
        b.on("load",function(){c.scrollspy("refresh")}),
        getbootpad(".getbootpad-container [href=#]").click(function(getbootpad){getbootpad.preventDefault()}),
        setTimeout(function(){
            var b=getbootpad(".getbootpad-sidebar");
            b.affix({
                offset:{
                    top:function(){
                        var c=b.offset().top,
                        d=parseInt(b.children(0).css("margin-top"),10),
                        e=getbootpad().height();
                        return this.top=c-e-d
                    },
                    bottom:function(){
                        return this.bottom=getbootpad(".footer").outerHeight(!0)
                    }
                }
            })
        },100)
    })
}(jQuery);

</script>

</body>
</html>