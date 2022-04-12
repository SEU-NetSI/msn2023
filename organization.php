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

      <li data-role="list-divider">Publication Chair</li>
      <?php
      add_listitem("Dan Wang", "The Hong Kong Polytechnic University, HK","");
      ?>
      <li data-role="list-divider">Web Chair</li>
      <?php
      add_listitem("Zhenjiang Li", "City University of Hong Kong, HK","");
      ?>
      <li data-role="list-divider">Financial Chair</li>
      <?php
      add_listitem("Carmen Au", "The Hong Kong Polytechnic University, HK","");
      ?>

      <li data-role="list-divider">Local Organization Chair</li>
      <?php
      add_listitem("Wang Miao", "University of Exeter, UK", "");
      add_listitem("Is-Haka Mkwawa", "University of Plymouth, UK", "");
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
