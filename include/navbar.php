<div class="headbar" data-position="center" data-display="fixed" data-theme="a" style="background-color: white">
  <?php
     $mypage = current_pagename();
     # echo "<script>console.log( 'test' );</script>";
     # var_dump("test");
     if ($mypage == "")
        $mypage = "index.php";
     // reorganizing menu items
     $tutorialItems = array("test-tutorial.php");
     $localItems = array("conference-venue.php", "hotel-info.php");
     $cfpItems = array("cf-papers.php", "submissions.php", "cf-postersdemos.php", "cf-tutorials.php", "travelgrants.php", "camera-ready.php", "cf-supporters.php", "cf-sites.php");
     $policyItems = array("anti-harassment.php");
     
?>
  
      <div data-role="navbar" data-grid="d" style="width:100%;max-width: 1200px;background-color: gray">
        <ul class="mymenu">
<!--           <li class="mymenu-item firstleaf"><a href="http://www.ieee.org" >IEEE.org</a></li>
          <li class="mymenu-item"><a href="http://ieeexplore.ieee.org/" >IEEE <em>Xplore</em> Digital Library</a></li>
          <li class="mymenu-item"><a href="http://standards.ieee.org/" >IEEE Standars</a></li>
          <li class="mymenu-item"><a href="http://spectrum.ieee.org/" >IEEE Spectrum Online</a></li>
          <li class="mymenu-item"><a href="http://www.ieee.org/sitemap.html?WT.mc_id=mn_smap" >More IEEE sites</a></li> -->
      </ul>
      </div>
<div data-role="content" class="topbar" style="background-color: white">
  <div class="ui-block-a" style="width:20%;height:100%;">
    <a href="index.php" style="margin-left: 1em;"><img style="width:80%;margin-top: 1em;"src="images/resources/logo.png"  alt="MSN 2021" /></a>
  </div>
  <div class="ui-block-b" style="width:55%;height:100%; font-weight: bold;font-size:1.5em;margin-top: 13px">
    The 18th International Conference on Mobility, Sensing and Networking (MSN 2022)<br><span style="font-weight: normal;font-size:0.8em">December 14-16, 2022 · Guangzhou, China</span>
  </div>
  <div class="ui-block-b" style="width:25%;height:100%; text-align: center">
    <span style="font-weight: bold">Technically Co-sponsored by IEEE</span>
    <a href="https://www.ieee.org/" style="margin-right: 1em"><img style="width:50%;margin-top: 2px" src="images/resources/ieee_mb_blue.png" alt="IEEE" /></a><br>
    <a href="https://www.computer.org/" style="margin-right: 1em"><img style="width:50%;margin-top: 2px" src="images/resources/IEEE-CS_LogoTM-orange.png" alt="IEEE CS" /></a>
  </div>
</div>


<div data-role="navbar" style="width:100%;max-width: 1200px;">
  <ul class="mybar">
    <li><a href="index.php" class="mybar-item <?php if($mypage == "index.php"){echo 'btn-selected-ui';}?>" >Home</a></li>
    <li>
      <div class="dropdown">
        <a class = "mybar-item dropbtn <?php if($mypage == "cf-papers.php" || $mypage == "cf-workshops.php" || $mypage == "cf-wkpaper.php" || $mypage == "cf-posters.php"){echo 'btn-selected-ui';}?>"href="#" >Calls</a>
        <div class="dropdown-content">
          <a href="cf-papers.php">Call for Papers</a>
<!--           <a href="cf-workshops.php">Call for Workshops</a>
          <a href="cf-wkpaper.php">Call for Workshop Papers</a>
          <a href="cf-posters.php">Call for Posters</a>
          <a href="camera_ready.php">Camera Ready</a> -->
        </div>
      </div>
    </li>
    <li>
      <div class="dropdown">
        <a class = "mybar-item <?php if ($mypage == "organization.php" || $mypage == "progcom.php") echo('btn-selected-ui') ?>" href="#">Committees</a>
          <div class="dropdown-content">
            <a href="organization.php">Organization Committee</a>
<!--             <a href="progcom.php">Technical Program Committee</a> -->
          </div>
    </li>
    <li>
      <div class="dropdown">
          <a class = "mybar-item dropbtn <?php if($mypage == "keynote_1.php" ||$mypage == "keynote_2.php"|| $mypage == "workshop.php" || $mypage == "panel.php" || $mypage == "accepted-papers.php" || $mypage == "guide.php" || $mypage == "glance.php" || $mypage == "tech.php" || $mypage == "guide_chair.php" || $mypage == "tutorials.php"){echo 'btn-selected-ui';}?>"href="#" >Program</a>
          <div class="dropdown-content">
<!--             <a href="tutorials.php">Tutorials</a>
            <a href="accepted-papers.php">List of Accepted Papers&nbsp;&nbsp;</a>
            <a href="panel.php">Panel&nbsp;&nbsp;</a>
            <a href="keynote_1.php">Keynote I&nbsp;&nbsp;</a>
            <a href="keynote_2.php">Keynote II&nbsp;&nbsp;</a>
            <a href="guide.php">Virtual Presentation Guidelines&nbsp;&nbsp;</a>
            <a href="glance.php">Program at a Glance&nbsp;&nbsp;</a> -->
<!--             <a href="tech.php">Technical Program&nbsp;&nbsp;</a>
            
            <a href="guide_chair.php">Guidelines for Session Chairs&nbsp;&nbsp;</a> -->
          </div>
      </div>
    </li>
    <li>
      <div class="dropdown">
        <a class = "mybar-item dropbtn <?php if($mypage == "plat.php" || $mypage == "acco.php"){echo 'btn-selected-ui';}?>"href=# >Conference Virtual Platform</a>
        <div class="dropdown-content">
<!--           <a href="venue.php">Conference Venue</a>
          <a href="acco.php">Accommodation</a> -->
        </div>
      </div>
    </li>
  </ul>
</div>

<?php if ($mypage == "index.php") { ?>
        <div class="swiper-container" style="height:auto;width: auto">
          <div class="swiper-wrapper">
            <div class="swiper-slide" style="width: 100%">
              <img style="width: 100%"src="images/guangzhou/gz.jpg">
            </div> 
<!--             <div class="swiper-slide">
              <img style="width: 100%"src="images/japan/tower.jpg">
            </div>
            <div class="swiper-slide">
              <img style="width: 100%"src="images/japan/wasedaU.jpg">
            </div> -->
        </div>
          <!-- Add Arrows -->
<!--           <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div> -->
      </div>
      </div>
      <div style="width:100%;height:100px">
      <div  class="ui-block-a" style="width:22%;height:100%;background-color: #00aeef;padding-top:40px;">
        <a href="cf-papers.php" style="color: white;font-size: 1.2em">Call for Papers >></a>
      </div>
      <div  class="ui-block-b" style="width:26%;height:100%;background-color:rgb(95,148,235);padding-top:40px;">
        <a href="cam-submission.php" style="color: white;font-size: 1.2em"><!-- Camera Ready Submission >> --></a>
      </div>
            <div  class="ui-block-b" style="width:22%;height:100%;background-color:#58595b;padding-top:40px;">
        <a href="submission.php" style="color: white;font-size: 1.2em"><!-- Submission >> --></a>
      </div>
      <div  class="ui-block-b" style="width:30%;height:100%;background-color:#6d6e70;padding-top:40px;">
        <a href="registration.php" style="color: white;font-size: 1.2em"><!-- Registration >> --></a>
      </div>
      </div>
<?php } ?>
