<?php
    $page_title="Paper Submission and Publication";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
  <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 50px;padding-right:80px;padding-top: 15px;">
    <h1 style="color: black">Paper Submission and Publication</h1>
    <p>TBD</p>

   
    <br><br><br><br><br><br><br><br><br><br><br><br>

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
