<?php

    # Transparently convert normal ASCII quotes into typographic punctuation HTML entities.
    # http://michelf.com/projects/php-smartypants/
    # Anna: do we need this ?
    # include_once "include/smartypants.php";
    # ob_start();

    include_once "functions.php";
    $mypage = current_pagename();

    /* prepare page title */
    
    if(isset($page_title)) {
        if (!empty($page_title))
            $page_title .= " - MSN 2022";
        else
            $page_title .= "MSN 2022";
    } else {
        $filename = $_SERVER['SCRIPT_FILENAME'];
        $filename = preg_replace("/^.*\//","",$filename);
        $filename = preg_replace("/.php$/","",$filename);
        
        $page_title = $filename . " - MSN 2022";
    }
    
    /* prepare page url */
    
    $page_link = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
?>

<!DOCTYPE HTML>
<html>
<head>
  <meta charset="iso-8859-1">
<?php /* include page metadata information, for facebook sharing */
  
    $og_tags_support = array ("og:title", "og:image", "og:description", "og:url");
    
    $og_tags_default = array ("og:title"         => "<meta property=\"og:title\" content=\"" . $page_title . "\" />",
                              "og:image"         => "<meta property=\"og:image\" content=\"https://conference.cs.cityu.edu.hk/msn2020/images/logo.png\" />",
                              "og:url"           => "<meta property=\"og:url\" content=\"". $page_link ."\" />");
    
    foreach ($og_tags_support as $og_tag) {
        if (isset ($og_tags_page) && isset ($og_tags_page[$og_tag]))
          echo "  $og_tags_page[$og_tag]\n";
        else if (isset ($og_tags_default[$og_tag]))
          echo "  $og_tags_default[$og_tag]\n";
    }
  
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  
  <title><?php echo $page_title ?></title>
  
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <script src="https://use.fontawesome.com/a681bc22fa.js"></script>

  <!-- Favicon alternatives: https://css-tricks.com/favicon-quiz/ -->
<!--   <link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="images/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon-180x180.png">        
  <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="images/android-chrome-192x192.png" sizes="192x192">
  <link rel="icon" type="image/png" href="images/favicon-96x96.png" sizes="96x96">
  <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16"> -->

  <!-- <link rel="shortcut icon" type='image/ico' href="images/favicon.ico"> -->

  <link rel="manifest" href="images/manifest.json">
  <meta name="msapplication-TileColor" content="#00a300">
  <meta name="msapplication-TileImage" content="images/mstile-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
  <!-- send file timestamp to prevent caching issues -->
  <link rel="stylesheet" href="css/style.css?cache_ts=<?php echo last_modified (file_dir () . "/css/style.css"); ?>" />

  <!-- make the CSS work with older IE -->
  <script src="js/css3-mediaqueries.js"></script>

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>

  <!-- Grab CDN jquerymobile, with a protocol relative URL; fall back to local if offline -->
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

  <script>$.mobile || document.write('<script src="js/jquery.mobile-1.4.5.min.js"><\/script>')</script>

  <script src="js/jqm-docs.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
  <!-- send file timestamp to prevent caching issues -->
  <script src="js/script.js?cache_ts=<?php echo last_modified (file_dir () . "/js/script.js"); ?>" type='text/javascript'></script>

</head>

<body>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
	 chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

<div data-role="page" data-theme="a" class="landing-page">
    <div data-role="cotent" class="content-primary">
      <?php 
  include("include/navbar.php");
  ?>