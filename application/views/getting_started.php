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
                <li class="active"><a href="<?php echo base_url('getting_started'); ?>">Getting started</a></li>
                <li><a href="<?php echo base_url('api_documentation'); ?>">API Documentation</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.ekyfauzi.com">Eky Fauzi</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<main class="getbootpad-masthead" style="text-align:left;">
    <div class="container">
        <h1 style="font-size:50px;margin-top:0; margin-bottom:10px;">Getting started</h1>
        <p style="font-size:24px;font-weight:300;line-height:1.4;margin-bottom:0; color:#bce1f9;">An overview of bootpad, how to use, basic templates and examples, and more.</p>
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
                    <h1 id="how_to_download" class="page-header">How to download</h1>

                    <p class="lead">Bootpad (currently v1.0.1) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</p>

                    <div class="row getbootpad-downloads">
                        <div class="col-sm-4">
                            <h3 id="download-bootstrap">Download Bootpad</h3>
                            <p>Just one step to download Bootpad source code.</p>
                            <p>
                                <a href="#" class="btn btn-lg getbootpad-btn-outline" role="button">Download Bootpad Now</a>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="getbootpad-section">
                    <h1 id="installation" class="page-header">Installation</h1>

                    <p class="lead">
                        Build on the application above with Bootpad's many components. 
                        We encourage you to customize and adapt Bootpad to suit your individual project's needs.
                    </p>

                    <h3 id="bootpad_file_structure">Bootpad file structure</h3>
                    <p>
                        The Bootpad source code download includes the Bootstrap CSS, JavaScript, and font assets, 
                        it includes the following and more:
                    </p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
bootpad/
├── application/
│   ├── config/
│   ├── controller/
│   ├── libraries/
│   ├── models/
│   └── view/
├── assets/
│   ├── bootstrap/
│   │   ├── css/
│   │   ├── js/
│   │   └── fonts/
│   └── jquery/
├── system/
│   ├── core/
│   ├── helpers/
├── index.php
└── autoload.php
                            </code>
                        </pre>
                    </div>
                    <p>The <code>application/</code> is the your playground, you can add controller, model, view, library, etc.
                        The <code>assets/</code> folder includes everything listed in the 
                        <a href="http://getbootstrap.com">Bootstrap</a> CSS, JS, fonts, and <a href="http://jquery.com">jQuery</a>, you can add more frameworks, or your custom CSS, JS, image. The <code>system/</code> folder 
                        is the core engine of Bootpad, do not modified file in this folder if you don't know what you doing.</p>

                    <h3 id="place_to_server">Place to server</h3>
                    <p>Just copy and place all <code>bootpad/</code> directories on your server (eg: <code>localhost/</code> or <code>public_html/</code>).</p>

                    <h3 id="create_htaccess">Create .htaccess file</h3>
                    <p>Bootpad need <code>.htaccess</code> file to works, it use to rewrite your URL. By default, <code>.htaccess</code> 
                        is included on bootpad directory. But if you can't find it, you can copy this code and paste on your <code>.htaccess</code> file.</p>

                    <p>Copy the code below and save as <code>.htaccess</code> file.</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
RewriteEngine On

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-l

<span class="pre-code-comment">#By default the rule will re-direct any url that does not include 
#the text "index.php", "images", "robots.txt", "js", "css" to your default controller.</span>
RewriteCond $1 !^(index\.php|images|robots\.txt|css|js)

RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
                            </code>
                        </pre>
                    </div>

                    <h3 id="setup_configuration">Setup configuration</h3>
                    <p>Start with modify <code>index.php</code>.</p>

                    <p>Your application environment:</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
<span class="pre-code-comment">
# 
# ---------------------------------------------------------------
#  APPLICATION ENVIRONMENT
# ---------------------------------------------------------------
# 
#  You can load different configurations depending on your
#  current environment. Setting the environment also influences
#  things like logging and error reporting.
# 
#  This can be set to:
# 
#      development
#      production
# 
#
# By default set to 'development'
</span>
<span class="pre-code-blue">$environment</span> = '' ;
                            </code>
                        </pre>
                    </div>

                    <p>Your application path:</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
<span class="pre-code-comment">
# 
# ---------------------------------------------------------------
#  PATH
# ---------------------------------------------------------------

# Directory where you install bootpad (root)
# eg: 'http://yoursite.com/' or 'http://localhost/bootpad/'
# You can set your basepath or you can leave it blank
# By default basepath will automaticaly set
</span>
<span class="pre-code-blue">$basepath</span> = '' ;
                            </code>
                        </pre>
                    </div>


                    <p>Set default home page:</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
<span class="pre-code-comment">
# First controller that you want to open first
# By default set to 'home'
</span>
<span class="pre-code-blue">$controller</span> = '' ;
<span class="pre-code-comment">
# Method that you want to open firt time
# By default set to 'index'
</span>
<span class="pre-code-blue">$method</span> = '' ;
                            </code>
                        </pre>
                    </div>

                    <h3 id="setup_database">Setup database configuration</h3>
                    <p>If you want to connect the application to database, just open <code>/application/config/database.php</code> and change this:</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
<span class="pre-code-comment">
/* 
 * MySQL hostname 
 * eg. localhost
 */</span>
$db_host = "<span class="pre-code-blue">localhost</span>";
<span class="pre-code-comment">
/* 
 * MySQL database username 
 */</span>
$db_user = "<span class="pre-code-blue">john_doe</span>";
<span class="pre-code-comment">
/* 
 * MySQL database password 
 */</span>
$db_password = "<span class="pre-code-blue">johndoe123</span>";
<span class="pre-code-comment">
/* 
 * MySQL database name 
 */</span>
$db_name = "<span class="pre-code-blue">db_john_doe</span>";
                            </code>
                        </pre>
                    </div>

                </div>

                <div class="getbootpad-section">
                    <h1 id="playground" class="page-header">Playground</h1>

                    <h3 id="create_controller">Controller</h3>
                    <p>When you successfuly install boopad on your server, you only can see one page (home). You can modified
                        that page engine at <code>/application/controllers/home_controller.php</code>.</p>
                    <p>To create a new page, you have to create new controller file and place it into <code>/application/controllers/</code>.</p>
                    <p>Here the example controller file:</p>

                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
&lt;?php  

<span class="pre-code-comment">
# This controller is for example
# This is controller that call by default
# You can set deafault controller at index.php ( location in root of this application directory )
</span>
class <span class="pre-code-blue">HomeController</span> extends Controller {

    public function <span class="pre-code-blue">index</span>(){

    }

}
                            </code>
                        </pre>
                    </div>
                    <p class="alert alert-warning"><b>Warning</b> : If you want to create page named <code>home</code> you have to name your class
                     as <code>HomeController</code> and save controller file as <code>home_controller.php</code>.</p>

                    <h3 id="create_model">Model</h3>
                    <p>You can create more model file and place it into <code>/application/models/</code>.</p>
                    <p>Model call by controller.</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
&lt;?php 

<span class="pre-code-comment">/**
* 
*/</span>

class <span class="pre-code-blue">Users</span> extends Controller{

    public function hello_world(){
        return "Hello World";
    }

}
                            </code>
                        </pre>
                    </div>
                    <p>Call the model file on controller and call model function:</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
<span class="pre-code-comment"># including model if needed</span>
<span class="pre-code-blue">$this->users</span> = $this->model('<span class="pre-code-blue">Users</span>');

<span class="pre-code-comment"># call the model function</span>
<span class="pre-code-blue">$hello_world</span> = $this->users-><span class="pre-code-blue">hello_world()</span>;

<span class="pre-code-comment"># send value from model to view</span>
$data_for_view['hello_world'] = $hello_world;
                            </code>
                        </pre>
                    </div>
                    <h3 id="create_view">View</h3>
                    <p>To create a beautiful interface, you need to create that on view file. 
                        Place you CSS, JS, HTML script here. Save the view files in <code>/application/views/</code>.</p>
                    <p>Call the view file on controller and send file from controller to view:</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
<span class="pre-code-comment"># call view and send data for using in view</span>
$this->view('home', $data_for_view);
                            </code>
                        </pre>
                    </div>
                    <h3 id="create_library">Library</h3>
                    <p>To add additional classes or funtions, you can place that files in <code>/application/libraries/</code> and call it on controller.</p>
                    <p>Call the library file on controller:</p>
                    <div class="getbootpad-highlight">
                        <pre>
                            <code>
$this->library('functions');
                            </code>
                        </pre>
                    </div>
                </div>

                <div class="getbootpad-section">
                    <h1 id="license_faqs" class="page-header">License FAQs</h1>
                    <p class="lead">Bootpad is released under the MIT license and is copyright 2014 Twitter. Boiled down to smaller chunks, it can be described with the following conditions.</p>

                    <h4>It requires you to:</h4>
                    <ul>
                    <li>Include the license and copyright notice in your works</li>
                    </ul>

                    <h4>It permits you to:</h4>
                    <ul>
                    <li>Freely download and use Bootpad, in whole or in part, for personal, private, company internal, or commercial purposes</li>
                    <li>Use Bootpad in packages or distributions that you create</li>
                    <li>Modify the source code</li>
                    </ul>
                </div>

                <div class="getbootpad-section">
                    <h1 class="page-header">Comments:</h1>
                    <div id="disqus_thread"></div>
                    <script type="text/javascript">
                        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                        var disqus_shortname = 'bootpad'; // required: replace example with your forum shortname

                        /* * * DON'T EDIT BELOW THIS LINE * * */
                        (function() {
                            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>
        <div class="col-md-3">
            <div class="getbootpad-sidebar hidden-print hidden-xs hidden-sm" role="complementary">
                <ul class="nav getbootpad-sidenav">
                    <li>
                        <a href="#how_to_download">How to download</a>
                    </li>
                    <li>
                        <a href="#installation">Installation</a>
                        <ul class="nav">
                            <li><a href="#bootpad_file_structure">File structure</a>
                            <li><a href="#place_to_server">Place to server</a></li>
                            <li><a href="#create_htaccess">Create .htaccess file</a></li>
                            <li><a href="#setup_configuration">Setup configuration</a></li>
                            <li><a href="#setup_database">Setup database</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#playground">Playground</a>
                        <ul class="nav">
                            <li><a href="#create_controller">Create controller</a>
                            <li><a href="#create_model">Create model</a></li>
                            <li><a href="#create_view">Create view</a></li>
                            <li><a href="#create_library">Create library</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#examples">Examples</a>
                        <ul class="nav">
                            <li><a href="#examples_framework">Using the framework</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#license_faqs">License FAQs</a>
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