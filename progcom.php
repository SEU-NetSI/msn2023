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
            add_listitem("Armir Bujari", "University of Bologna, Italy", "armir.bujari@unibo.it");
            add_listitem("Enrico Natalizio", "Technology Innovation Institute, UAE (Université de Lorraine, France)", "enrico.natalizio@tii.ae");
      ?>

      <li data-role="list-divider">Track 2: Edge Computing, IoT and Digital Twins</li>
      <?php
            add_listitem("<b>Track Chairs:</b>","","");
            add_listitem("Eirini Eleni Tsiropoulou", "University of New Mexico Albuquerque, USA", "eirini@unm.edu");
            add_listitem("Suzan Bayhan", "University of Twente, Netherlands", "s.bayhan@utwente.nl");
      ?>

      <li data-role="list-divider">Track 3: Security, Privacy, Trust, and Blockchain</li>
      <?php
            add_listitem("<b>Track Chair:</b>","","");
            add_listitem("Weizhi Meng", "Technical University of Denmark, Denmark","weme@dtu.dk");
      ?>

      <li data-role="list-divider">Track 4: Big Data and AI</li>
      <?php
            add_listitem("<b>Track Chair:</b>","","");
            add_listitem("Lorenzo Valerio", "IIT-CNR, Italy","lorenzo.valerio@iit.cnr.it");
          
      ?>

      <li data-role="list-divider">Track 5: Systems, Tools, Testbed</li>
      <?php
            add_listitem("<b>Track Chair:</b>","","");
            add_listitem("James Zheng", "Macquarie University, Australia","james.zheng@mq.edu.au");

      ?>

      <li data-role="list-divider">Track 6: Applications in Smart Cities, Healthcare and Other Areas</li>
      <?php
            add_listitem("<b>Track Chairs:</b>","","");
            add_listitem("Deze Zeng", "China University of Geosciences, China","deze@cug.edu.cn");
            add_listitem("Zakirul Alam Bhuiyan", "Fordham University, USA","mbhuiyan3@fordham.edu");

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
