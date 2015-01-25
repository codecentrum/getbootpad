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

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-44445792-1', 'auto');
      ga('send', 'pageview');

    </script>

    <style type="text/css">
        /* Featurettes
        ------------------------- */

        /*.featurette-divider {
          margin: 80px 0;
        }*/
        .featurette {
          padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
          padding-bottom: 120px;
          overflow: hidden; /* Vertically center images part 2: clear their floats. */
        }
        .featurette-image {
          margin-top: -60px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
        }

        /* Give some space on the sides of the floated elements so text doesn't run right into it. */
        .featurette-image.pull-left {
          margin-right: 40px;
        }
        .featurette-image.pull-right {
          margin-left: 40px;
        }

        /* Thin out the marketing headings */
        .featurette-heading {
          font-size: 50px;
          font-weight: 300;
          line-height: 1;
          letter-spacing: -1px;
        }

        .container-gray {
          background-color: #F5F5F5;
        }

        .container-white {
          background-color: #FFF;
        }
    </style>
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
                <li><a href="<?php echo base_url('api_documentation'); ?>">API Documentation</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.ekyfauzi.com">Eky Fauzi</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="getbootpad-masthead">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="<?php echo base_url('assets/getbootpad/getbootpad_logo_white.png'); ?>" height="70px">
                <p class="lead">Simple MVC PHP Framework <br>styling with <a href="http://getbootstrap.com" target="_blank" style="color:#1c80c1;">Bootstrap</a></p>
                <p class="lead">
                    <a href="https://github.com/ekyfauzi/bootpad/archive/master.zip" class="btn btn-outline-inverse btn-lg">Download bootpad</a>
                </p>
                <p class="version">Currently v1.4.0 including Bootstrap v.3.2.0</p>
            </div>
            <!-- <div class="col-md-5">
                <div class="adsense pull-right">
                    
                </div>
            </div> -->
        </div>
    </div>
</div>

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
            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=ekyfauzi&repo=bootpad&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
        </span>
        <span class="btn-social">
            <iframe src="http://ghbtns.com/github-btn.html?user=ekyfauzi&type=follow" allowtransparency="true" frameborder="0" scrolling="0" width="132" height="20"></iframe>
        </span>
    </div>
</div>

<div class="features-container">
    <div class="container">
        <div class="row features">
            <div class="col-md-4">
                <div>
                    <!-- <img src="http://placehold.it/200x100" alt="Texto Alternativo" class="img-thumbnail"> -->
                    <h3>Simple</h3>
                    <p>Siple structure, simple code.<br>So you can learn bootpad faster than other MVC frameworks.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <!-- <img src="http://placehold.it/200x100" alt="Texto Alternativo" class="img-thumbnail"> -->
                    <h3>Free</h3>
                    <p>You do not need to spend money to use bootpad.<br>Bootpad is free and always be free!</p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <!-- <img src="http://placehold.it/200x100" alt="Texto Alternativo" class="img-thumbnail"> -->
                    <h3>Open Source</h3>
                    <p>You can change or modified script as you needed.</p>
                    <a href="http://github.com/ekyfauzi/bootpad" target="_blank" class="btn btn-primary">View project on GitHub</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-gray">
  <div class="container">
    <div class="featurette">
      <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
      <h2 class="featurette-heading">Fun. <span class="text-muted">It'll blow your mind.</span></h2>
      <p class="lead">Fun is everything when you're working.</p>
    </div>
  </div>
</div>

<div class="container-white">
  <div class="container">

  <div class="featurette">
    <img class="featurette-image img-circle pull-left" src="http://placehold.it/512">
    <h2 class="featurette-heading">Focus. <span class="text-muted">Goal.</span></h2>
    <p class="lead">Alway focus on the target.</p>
  </div>

  </div>
</div>

<div class="container-gray">
  <div class="container">

    <div class="featurette">
      <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
      <h2 class="featurette-heading">Work smart, <span class="text-muted">Not hard.</span></h2>
      <p class="lead">I'm not hard worker, I'm smart worker.</p>
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

</body>
</html>