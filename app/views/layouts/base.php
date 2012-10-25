<?php
$pagetitle = isset($pagename) ? $pagename . ' | ' . $GLOBALS['sitename'] : $GLOBALS['sitename'];
$page = isset($page) ? $page : '';
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <title><?=$pagetitle?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Artisanal Design with the Earth in Mind">
    <meta name="author" content="Dan Phelps Studio">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:title" content="Novak Garden Design & Construction, LLC.">
    <meta property="og:type" content="company">
    <meta name="og:description" content="Artisanal Design with the Earth in Mind">
    <meta property="og:url" content="http://www.novakgardendesign.com/<?=$page?>">
    <meta property="og:image" content="http://www.novakgardendesign.com/images/ngdc_logo.png">
    <meta property="og:site_name" content="Novak Garden Design & Construction, LLC.">
    <meta property="fb:admins" content="825699081,502342487">
    
    <link rel="stylesheet" href="/css/style-compiled.min.css"/>
    <link rel="stylesheet" href="/css/responsive.min.css"/>
    
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-touch-icon-114x114.png">
    <? 
    /*
    <link rel="stylesheet/less" href="/less/bootstrap.less">
    <link rel="stylesheet/less" href="/less/responsive.less">
    <script type="text/javascript" src="/js/libs/less-1.3.0.min.js"></script>
    */?>
    
    <script type="text/javascript" src="http://use.typekit.com/tuu1qmm.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <link itemprop="primaryImageOfPage" href="/images/ngdc_logo_300x146.png" type="image/png"/>
    <div class="wrapper">
        <nav class="navbar navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container">
              <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
              <!-- <a class="brand" href="/">Novak Garden Design &amp; Construction</a> -->
                <div class="nav-collapse">
                    <ul class="nav">
                        <li <?php if (empty($page)) echo 'class="active"'; ?>><a href="/">Home</a></li>                     
                        <li <?php if ($page === 'about') echo 'class="active"'; ?>><a href="/about">About</a></li>
                        <li <?php if ($page === 'work') echo 'class="active"';  ?>><a href="/work">Work</a></li>
                        <li <?php if ($page === 'contact') echo 'class="active"'; ?>><a href="/contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
          </div>
        </nav>  
        
        <section class="content container">
            <div class="row" itemprop="mainContentOfPage">
                <?php
                echo (isset($content) && is_array($content)) ? implode("\n", $content) : '';
                ?>
            </div>
        </section>
        
        <div class="push"></div>
    </div>  
    <footer>
        <div class="container">
                <span>&copy; 2012 Novak Garden Design &amp; Construction, LLC. <br> Licensed and Insured &#8211; License #35329</span> 
                <span class="pull-right">
                <br>
                <div id="fb-root"></div>
                <div class="fb-like" data-send="false" data-layout="button_count" data-font="Helvetica" data-show-faces="true" data-href="http://www.novakgardendesign.com/"></div>
                <script type="IN/Share" data-counter="right" data-url="http://www.novakgardendesign.com/"></script>
                <div class="g-plusone" data-size="medium" annotation="bubble" data-href="http://www.novakgardendesign.com/"></div>
                </span>
        </div>
    </footer>
    <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
    <![endif]-->
    <script type="text/javascript">
        window._gaq = [['_setAccount', 'UA-26352603-1'], ['_trackPageview'], ['_trackPageLoadTime']];
        
        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
        
        (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = '//apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
        
        (function() {
            var pin = document.createElement('script'); pin.type = 'text/javascript'; pin.async = true;
            pin.src = '//assets.pinterest.com/js/pinit.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pin, s);
        })();
        
        (function() {
            var li = document.createElement('script'); li.type = 'text/javascript'; li.async = true;
            li.src = '//platform.linkedin.com/in.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(li, s);
        })();
          
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>    
    <script>window.jQuery || document.write('<script src="/js/libs/jquery-1.7.2.min.js">\x3C/script>')</script>
    <script type="text/javascript" src="/js/libs/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/libs/masonry/jquery.masonry.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
</body>
</html>