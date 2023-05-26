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

      <li data-role="list-divider">Mobile & Wireless Sensing and NetworkingTrack Chairs</li>
      <?php
      add_listitem("Jiliang Wang", "Tsinghua University, China","");
      add_listitem("Debashri Roy", "University of Texas Arlington","");
      ?>

      <li data-role="list-divider">Web Chair</li>
      <?php
      add_listitem("Feng Shan", "Southeast University, China","");
      ?>

      <li data-role="list-divider">Edge Computing, IoT and Digital Twins Track Chair</li>
      <?php
      add_listitem("Xu Chen", "Sun Yat-sen University, China","");
      add_listitem("Posco Tso", "Loughborough University, UK","");
      ?>

      <li data-role="list-divider">Security, Privacy, Trust, and Blockchain Track Chair</li>
      <?php
      add_listitem("Cliff C. Zou", "University of Central Florida, USA", "");
      add_listitem("Xiaoyu Ji", "Zhejiang University, China", "");
      ?>
      
      <li data-role="list-divider">Big Data and AI Track Chairs</li>
      <?php
      add_listitem("Tingjian Ge", "University of Massachusetts Lowell, USA","");
      add_listitem("Tao Xiang", "Chongqing University, China","");
      ?>

      <li data-role="list-divider">Systems, Tools and Testbed Track Chairs</li>
      <?php
      add_listitem("Kui Wu", "University of Victoria, Canada", "");
      add_listitem("Xiaolong Zheng", "Beijing University of Posts and Telecommunications, China", "");
      ?>

      <li data-role="list-divider">Smart Cities, Metaverse and Applications Track Chairs</li>
      <?php
      add_listitem("Sriram Chellappan", "University of South Florida, USA", "");
      add_listitem("Zichuan Xu", "Dalian University of Technology, China", "");
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
