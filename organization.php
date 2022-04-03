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
      add_listitem("Mohammad Shojafar", "University of Surrey, UK","");
      add_listitem("Ruidong Li", "Kanazawa University, Japan","");
      ?>
      <li data-role="list-divider">TPC Chairs</li>
      <?php
      add_listitem("Geyong Min", "University of Exeter, U. K.", "");
      add_listitem("Baochun Li", "University of Toronto, Canada", "");
      ?>
      <li data-role="list-divider">TPC Vice Chairs</li>
      <?php
      add_listitem("Jia Hu", "University of Exeter, U. K.", "");
      add_listitem("Pablo Casaseca", "University of Valladolid, Spain","");
      ?>
      <li data-role="list-divider">Panel Chair</li>
      <?php
      add_listitem("Wei Zhao", "American University of Sharjah, UAE", "");
      ?>
      <li data-role="list-divider">Tutorial Chair</li>
      <?php
      add_listitem("Shiwen Mao", "Auburn University, USA", "");
      ?>
      <li data-role="list-divider">Workshop Chairs</li>
      <?php
      add_listitem("Tian Wang", "Beijing Normal University & UIC, China", "");
      add_listitem("Prosanta Gope", "University of Sheffield, UK", "");
      ?>

      <li data-role="list-divider">Publicity Chairs</li>
      <?php
      add_listitem("Jun Li", "City University of New York, USA", "");
      add_listitem("Zhengxin Yu", "Lancaster University, UK", "");
      add_listitem("Wei Wang", "Hong Kong University of Science and Technology, HK","");
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
      <li data-role="list-divider">Poster Chairs</li>
      <?php
      add_listitem("Wei Wang", "University of California, San Diego, USA", "");
      add_listitem("Constandinos Mavromoustakis", "University of Nicosia, Cyprus", "");
      ?>
      <li data-role="list-divider">Local Organization Chairs</li>
      <?php
      add_listitem("Wang Miao", "University of Exeter, UK", "");
      add_listitem("Is-Haka Mkwawa", "University of Plymouth, UK", "");
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
