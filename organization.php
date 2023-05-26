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
      add_listitem("Junzhou Luo", "Southeast University, China","");
      add_listitem("Albert Zomaya", "The University of Sydney, Australia","");
      ?>

      <li data-role="list-divider">TPC Chairs</li>
      <?php
      add_listitem("Xinwen Fu", "University of Massachusetts Lowell, USA", "");
      add_listitem("Zhen Ling", "Southeast University, China", "");
      ?>

      <li data-role="list-divider">Panel Chairs</li>
      <?php
      add_listitem("Lei Xie", "Nanjing University, China","");

      ?>


      <li data-role="list-divider">Workshop co-Chair</li>
      <?php
      add_listitem("Haipeng Dai", "Nanjing University, China", "");
     add_listitem("Tian Wang", " Beijing Normal University, China", "");
      ?>


      
      <li data-role="list-divider">Publicity Co-chairs</li>
      <?php
      add_listitem("Ruidong Li", "Kanazawa University, Japan", "");
      add_listitem("Wei Xi", "Xi'an Jiaotong University, China", "");
      add_listitem("Feng Li", "Shangdong University, China","");
      ?>
      <li data-role="list-divider">Publication Chairs</li>
      <?php
      add_listitem("Dan Wang", "The Hong Kong Polytechnic University, HK","");
      add_listitem("Debashri Roy", "University of Texas Arlington","");
      ?>


      <li data-role="list-divider">Web Co-Chair</li>
      <?php
      add_listitem("Feng Shan", "Southeast University, China","");
      add_listitem("Zhenjiang Li", "City University of Hong Kong, HK","");
      ?>





      



      <li data-role="list-divider">Local Organization Chairs</li>
      <?php
      add_listitem("Weiwei Wu", "Southeast University, China","");
      
      ?>

      <li data-role="list-divider">Financial Chairs</li>
      <?php
      add_listitem("Carmen Au", "The Hong Kong Polytechnic University, HK","");
      
      ?>

     <li data-role="list-divider">Steering Committee Co-Chairs</li>
      <?php
      add_listitem("Jiannong Cao", "The Hong Kong Polytechnic University, HK","");
      add_listitem("Xiaohua Jia", "City University of Hong Kong , HK","");
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
