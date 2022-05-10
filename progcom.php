<?php
    $page_title="Technical Program Committee";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
  <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 35px;padding-right:35px;padding-top: 15px;">
    <h1 style="color: black">Technical Program Committee</h1>
    <ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">

      <li data-role="list-divider">Track 1: Mobile & Wireless Sensing and Networking</li>
      <?php
            add_listitem("<b>Track Chairs:</b>","","");
            add_listitem("Armir Bujari", "University of Bologna, Italy", "");
            add_listitem("Enrico Natalizio", "Technology Innovation Institute, UAE (Université de Lorraine, France)", "");
      ?>

      <li data-role="list-divider">Track 2: Edge Computing, IoT and Digital Twins</li>
      <?php
            add_listitem("<b>Track Chairs:</b>","","");
            add_listitem("Eirini Eleni Tsiropoulou", "University of New Mexico Albuquerque, USA", "");
            add_listitem("Suzan Bayhan", "University of Twente, Netherlands", "");
      ?>

      <li data-role="list-divider">Track 3: Security, Privacy, Trust, and Blockchain</li>
      <?php
            add_listitem("<b>Track Chair:</b>","","");
            add_listitem("Weizhi Meng", "Technical University of Denmark, Denmark","");
      ?>

      <li data-role="list-divider">Track 4: Big Data and AI</li>
      <?php
            add_listitem("<b>Track Chair:</b>","","");
            add_listitem("Lorenzo Valerio", "IIT-CNR, Italy","");
          
      ?>

      <li data-role="list-divider">Track 5: Systems, Tools, Testbed</li>
      <?php
            add_listitem("<b>Track Chair:</b>","","");
            add_listitem("James Zheng", "Macquarie University, Australia","");

      ?>

      <li data-role="list-divider">Track 6: Applications in Smart Cities, Healthcare and Other Areas</li>
      <?php
            add_listitem("<b>Track Chairs:</b>","","");
            add_listitem("Deze Zeng", "China University of Geosciences, China","");
            add_listitem("Zakirul Alam Bhuiyan", "Fordham University, USA","");

      ?>

    </ul>
    <br>
    <br>
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
