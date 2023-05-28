<?php
    $page_title="Technical Program Committee";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
  <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
    <h1 style="color: black">Technical Program Committee</h1>

    <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
      
      <li data-role="list-divider">Track 1: Mobile & Wireless Sensing and Networking </li>
      <?php
       add_listitem("<b>Track Chairs:</b>","","");
      add_listitem("Jiliang Wang", "Tsinghua University, China", "");
      add_listitem("Debashri Roy", "University of Texas Arlington", "");
      ?>

      <li data-role="list-divider">Track 2: Edge Computing, IoT and Digital Twins </li>
      <?php
       add_listitem("<b>Track Chairs:</b>","","");
      add_listitem("Xu Chen", "Sun Yat-sen University, China", "");
      add_listitem("Posco Tso", "Loughborough University, UK", "");
      ?>

      
      <li data-role="list-divider">Track 3: Security, Privacy, Trust, and Blockchain </li>
      <?php
       add_listitem("<b>Track Chairs:</b>","","");
      add_listitem("Cliff C. Zou", "University of Central Florida, USA", "");
      add_listitem("Xiaoyu Ji", "Zhejiang University, China", "");
      ?>

      
      <li data-role="list-divider">Track 4: Big Data and AI</li>
      <?php
       add_listitem("<b>Track Chairs:</b>","","");
      add_listitem("Tingjian Ge", "University of Massachusetts Lowell, USA", "");
      add_listitem("Tao Xiang", "Chongqing University, China", "");
      ?>
     
      <li data-role="list-divider">Track 5: Systems, Tools and Testbed </li>
      <?php
       add_listitem("<b>Track Chairs:</b>","","");
      add_listitem("Kui Wu", "University of Victoria, Canada", "");
      add_listitem("Xiaolong Zheng", "Beijing University of Posts and Telecommunications, China", "");
      ?>

      <li data-role="list-divider">Track 6: Smart Cities, Metaverse and Applications </li>
      <?php
       add_listitem("<b>Track Chairs:</b>","","");
      add_listitem("Zichuan Xu", "Dalian University of Technology, China", "");
      add_listitem("Yue Zhang", "Drexel University, USA", "");
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

