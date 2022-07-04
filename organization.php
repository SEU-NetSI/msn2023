<?php
    $page_title="Organization Committee";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
  <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
    <h1 style="color: black">Organization Committee</h1>

    <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
      <li data-role="list-divider">General Chairs</li>
      <?php
      add_listitem("Michel Raynal", "University of Rennes, France","");
      add_listitem("Jie Wu", "Temple University, USA","");
      ?>

      <li data-role="list-divider">TPC Chairs</li>
      <?php
      add_listitem("Giuseppe Anastasi", "University of Pisa, Italy", "");
      add_listitem("Weigang Wu", "Sun Yat-sen University, China", "");
      ?>

      <li data-role="list-divider">Panel Chair</li>
      <?php
      add_listitem("Huadong Ma", "Beijing University of Posts and Telecommunications, China","");
      ?>

      <li data-role="list-divider">Workshop Chair</li>
      <?php
      add_listitem("Tian Wang", "Beijing Normal University, China", "");
      ?>

      <li data-role="list-divider">Tutorial Chair</li>
      <?php
      add_listitem("En Wang", "Jilin University, China", "");
      ?>
      
      <li data-role="list-divider">Publicity Co-chairs</li>
      <?php
      add_listitem("Ruidong Li", "Kanazawa University, Japan", "");
      add_listitem("Lei Yang", "South China University of Technology, China", "");
      add_listitem("Maurizio Palmieri", "University of Pisa, Italy","");
      ?>

      <li data-role="list-divider">Publication Chair</li>
      <?php
      add_listitem("Dan Wang", "Hong Kong Polytechnic University, HK","");
      ?>

      <li data-role="list-divider">Web Chair</li>
      <?php
      add_listitem("Zhenjiang Li", "City University of Hong Kong, HK","");
      ?>

      <li data-role="list-divider">Financial Chair</li>
      <?php
      add_listitem("Carmen Au", "Hong Kong Polytechnic University, HK","");
      ?>

      <li data-role="list-divider">Local Organization Chair</li>
      <?php
      add_listitem("Yingying Chen", "Sun Yat-sen University, China", "");
      ?>
      
      <li data-role="list-divider">Steering Committee Co-Chairs</li>
      <?php
      add_listitem("Jiannong Cao", "The Hong Kong Polytechnic University, HK","");
      add_listitem("Xiaohua Jia", "City University of Hong Kong, HK","");
      ?>
    </ul>
  </div>
  <div  class="ui-block-b" style="width:30%;height:100%;background-color:#e4e5e6;padding:20px 15px 15px 15px">
    <h1>News</h1>
      <?php
      include("include/news.php")
      ?>
    <h1>Important Days</h1>
      <?php
      include("include/dates.php")
      ?>
  </div>
</div>


<?php include ("include/footer.php"); ?>
