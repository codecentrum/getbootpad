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

<div class="getbootpad-masthead">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <img src="<?php echo base_url('assets/images/getbootpad_logo_white.png'); ?>" height="70px">
                <p class="lead">
                  Simple MVC Framework </br>
                  <small>Build with PHP and 
                    <a href="http://getbootstrap.com" target="_blank" style="color:#1c80c1;">Bootstrap</a>
                  </small>
                </p>
                <p class="lead">
                    <a href="https://github.com/ekyfauzi/bootpad/archive/master.zip" class="btn btn-outline-inverse btn-lg">Download Bootpad</a>
                </p>
                <p class="version">Currently v1.4.0 build with Bootstrap v.3.2.0</p>
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
                    <h3>Beautifull</h3>
                    <p>You do not need to spend time for styling.
                      <br>Bootpad have beautifull UI 
                      <br>providing by 
                      <a href="http://getbootstrap.com" target="_blank" style="color:#1c80c1;">Bootstrap</a>!
                    </p>
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
      <h2 class="featurette-heading">Simple. <span class="text-muted">It's easy to use.</span></h2>
      <p class="lead">
        Jus download it and place to your application directory.
        <br>Its simple and beautifull.
      </p>
    </div>
  </div>
</div>


<div class="container-white">
  <div class="container">

    <div class="featurette">
      <img class="featurette-image img-circle pull-left" src="http://placehold.it/512">
      <h2 class="featurette-heading">Beautifull <span class="text-muted">Interface.</span></h2>
      <p class="lead">
        MVC meet Bootstrap? That is Bootpad!
      </p>
    </div>
  </div>
</div>

<div class="container-gray">
  <div class="container">

  <div class="featurette">
    <img class="featurette-image img-circle pull-right" src="http://placehold.it/512">
    <h2 class="featurette-heading"><span class="text-muted">It's</span> Free!</h2>
    <p class="lead">You do not need to spend money to use Bootpad.<br>Bootpad is free and always be free!</p>
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