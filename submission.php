<?php
    $page_title="Paper Submission and Publication";
    include("include/header.php");
?>
<div data-role="content" style="text-align:left;padding-top: 0em;background-color:#e4e5e6">
  <div  class="ui-block-a" style="width:70%;height:100%;background-color:#ffffff;padding-left: 50px;padding-right:80px;padding-top: 15px;">
    <h1 style="color: black">Paper Submission and Publication</h1>
    <p>Submitted manuscripts must be prepared according to IEEE Computer Society Proceedings Format (double column, 10pt font, letter paper) and submitted in the PDF format. The manuscript submitted for review should be no longer than 8 pages. After the manuscript is accepted, the camera-ready paper may have up to 10 pages, subject to an additional fee per extra page. Manuscripts should be submitted to one of the research tracks. Submitted manuscripts must not contain previously published material or be under consideration for publication in another conference or journal at the time of submission.</p>

    <p>All submissions to MSN 2021 must be uploaded to <a href="https://easychair.org/my/conference?conf=msn2021">EasyChair</a>.</p>

    <p>Accepted papers will be included in the conference proceedings and published in the IEEE Xplore digital library (indexed by EI). At least one author of any accepted paper must register and present the paper at the conference. Selected papers of particular merit will be recommended for consideration of fast track publication in special issues of SCI-indexed journals. The best submission will receive the MSN 2021 best paper award.</p>
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
